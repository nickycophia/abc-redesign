<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

		// 引入連結
		$this->load->helper('url');
		
		// 引入SESSION
		$this->load->library('nativesession');
		
		// 引入COOKIE
		$this->load->helper('cookie');
	}

	public function index()
	{
		$this->load->view('news');
	}

	public function newsdetail()
	{
		$this->load->view('newsdetail');
	}

	public function course()
	{
		// 教室
		$classroom_data = array();
		$classroom_sql = $this->db->select('*')
								->from('classroom')
								->order_by('no','asc')
								->get();
		$classroom_data = $classroom_sql->result_array();
		$classroom_sql->free_result();

		// 課程
		$class_data = array();
		$class_sql = $this->db->select('*')
								->from('class')
								->order_by('no','asc')
								->get();
		$class_data = $class_sql->result_array();
		$class_sql->free_result();

		$class_info = array();
		foreach ($class_data as $key => $value) {
			$info_array = explode("\n", $value['info']);
			$info_html = '<ul>';
			foreach ($info_array as $infokey => $infoitem) {
				$info_html .= '<li>'.$infoitem.'</li>';
			}
			$info_html .= '</ul>';
			$class_info[$value['name']] = $info_html;
		}

		$data['classroom'] = $classroom_data;
		$data['classdata'] = $class_data;
		$data['classinfo'] = $class_info;

		$this->load->view('course', $data);
	}

	public function selectday()
	{
		// selected_class
		// selected_classroom
		if (empty($_GET['selected_class']) || 
			empty($_GET['selected_classroom'])) {
			header('Location: '.base_url());
			return;
		}

		// 課程
		$class_data = array();
		$class_sql = $this->db->select('*')
								->from('class')
								->where('no',$_GET['selected_class'])
								->get();
		$class_data = $class_sql->result_array();
		$class_sql->free_result();

		$data['classmonth'] = $class_data[0]['classmonth'];

		$this->load->view('selectday',$data);
	}

	public function selectclass()
	{
		if (empty($_GET['selected_day']) || 
			empty($_GET['selected_month']) || 
			empty($_GET['selected_class']) || 
			empty($_GET['selected_classroom'])) {
			header('Location: '.base_url());
			return;
		}

		// 課程資料
		$class_data = array();
		$class_sql = $this->db->select('*')
								->from('class')
								->where('no',$_GET['selected_class'])
								->get();
		$class_data = $class_sql->result_array();
		$class_sql->free_result();

		// 老師資料
		$teacher_data = array();
		$teacher_data_tmp = array();
		$teacher_sql = $this->db->select('*')
							->from('teacher')
							->where('classroomno', $_GET['selected_classroom'])
							->order_by('no','asc')
							->get();
		$teacher_data_tmp = $teacher_sql->result_array();
		foreach ($teacher_data_tmp as $key => $value) {
			$teacher_data[$value['no']] = $value['name'];
		}

		// 預約資料
		$book_data = array();
		$book_data_tmp = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', 1)
							->order_by('no','asc')
							->get();
		$book_data_tmp = $book_sql->result_array();
		foreach ($book_data_tmp as $key => $value) {
			$book_data[] = $value['scheduleno'];
		}

		$selected_date = array();
		$selected_day_tmp = explode(",", $_GET['selected_day']);
		foreach ($selected_day_tmp as $key => $value) {
			$item = "20160".$_GET['selected_month'].sprintf("%02d", $value);
			$selected_date[$item] = intval($item);
		}
		$schedule_data = array();
		$schedule_sql = $this->db->select('*')
							->from('schedule')
							->where('classno', $_GET['selected_class'])
							->where('classroomno', $_GET['selected_classroom'])
							->where_in('date', $selected_date)
							->order_by('date', 'asc')
							->get();
		$schedule_data = $schedule_sql->result_array();

		$result = array();
		if (count($schedule_data) != 0) {
			foreach ($schedule_data as $key => $value) {
				$date = date("Y/m/d", strtotime($value['date']));
				$classtime = substr_replace($value['classtime'], ":", 2, 0);
				$bookstatus = (in_array($value['no'], $book_data)) ? 'booked' : 'available';
				$result[$value['no']] = array(	'pic' => $class_data[0]['pic'],
												'classname'	=> $class_data[0]['name'],
												'date' => $date,
												'classtime' => $classtime,
												'teacher' => $teacher_data[$value['teacherno']],
												'attender' => $value['attender'],
												'scheduleno' => $value['no'],
												'bookstatus' => $bookstatus);
			}
		}

		$data['result'] = $result;
		$this->load->view('selectclass', $data);
	}

	public function mybooking()
	{
		// 課程內容
		$class_data = array();
		$class_sqldata = array();
		$class_sql = $this->db->select('*')
							->from('class')
							->order_by('no','asc')
							->get();
		$class_sqldata = $class_sql->result_array();
		$class_sql->free_result();

		foreach ($class_sqldata as $key => $value) {
			$class_data[$value['no']] = $value;
		}

		// 預約資料
		$book_data = array();
		$scheduleno_check = array();
		$scheduleno_ref = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', 1)
							->get();
		$book_data = $book_sql->result_array();
		foreach ($book_data as $key => $value) {
			$scheduleno_check[] = $value['scheduleno'];
			$scheduleno_ref[$value['scheduleno']] = $value['no'];
		}

		$booking_list = array();
		$schedule_data = array();
		if (count($book_data) > 0) {
			$schedule_sql = $this->db->select('*')
								->from('schedule')
								->where_in('no', $scheduleno_check)
								->order_by('no','asc')
								->get();
			$schedule_data = $schedule_sql->result_array();

			foreach ($schedule_data as $key => $value) {
				$bookingno = $scheduleno_ref[$value['no']];
				$date = date("Y/m/d", strtotime($value['date']));
				$classtime = substr_replace($value['classtime'], ":", 2, 0);
				$booking_list[$bookingno] = array(	'pic' => $class_data[$value['classno']]['pic'],
													'classname'	=> $class_data[$value['classno']]['name'],
													'date' => $date,
													'classtime' => $classtime);
			}
		}

		$data['booking_list'] = $booking_list;

		$this->load->view('mybooking', $data);
	}

	public function bookingdetail()
	{
		if (empty($_GET['bookingno'])) {
			header('Location: '.base_url());
			return;
		}

		// 預約資料
		$book_data = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('no',$_GET['bookingno'])
							->where('memberno', 1)
							->get();
		$book_data = $book_sql->result_array();

		$schedule_data = array();
		$schedule_sql = $this->db->select('*')
								->from('schedule')
								->where('no', $book_data[0]['scheduleno'])
								->get();
		$schedule_data = $schedule_sql->result_array();

		// 教室內容
		$classroom_data = array();
		$classroom_sql = $this->db->select('*')
							->from('classroom')
							->where('no',$schedule_data[0]['classroomno'])
							->get();
		$classroom_data = $classroom_sql->result_array();

		// 教室內容
		$teacher_data = array();
		$teacher_sql = $this->db->select('*')
							->from('teacher')
							->where('no',$schedule_data[0]['teacherno'])
							->get();
		$teacher_data = $teacher_sql->result_array();

		// 課程內容
		$class_data = array();
		$class_sql = $this->db->select('*')
							->from('class')
							->where('no',$schedule_data[0]['classno'])
							->get();
		$class_data = $class_sql->result_array();

		$date = date("Y/m/d", strtotime($schedule_data[0]['date']));
		$classtime = substr_replace($schedule_data[0]['classtime'], ":", 2, 0);

		$info_array = explode("\n", $class_data[0]['info']);
		$info_html = '<ul>';
		foreach ($info_array as $infokey => $infoitem) {
			$info_html .= '<li>'.$infoitem.'</li>';
		}
		$info_html .= '</ul>';
		
		$detail = array('pic' => $class_data[0]['pic'],
						'date' => $date,
						'classname' => $class_data[0]['name'],
						'classtime' => $classtime,
						'classroom' => $classroom_data[0]['name'],
						'attender' => $schedule_data[0]['attender'],
						'teacher' => $teacher_data[0]['name'],
						'info' => $info_html);
		$data['detail'] = $detail;
		$this->load->view('bookingdetail', $data);
	}

	public function generate_schedule()
	{
		// 課程內容
		$class_data = array();
		$class_sqldata = array();
		$class_sql = $this->db->select('*')
							->from('class')
							->order_by('no','asc')
							->get();
		$class_sqldata = $class_sql->result_array();
		$class_sql->free_result();

		foreach ($class_sqldata as $key => $value) {
			$class_data[$value['no']] = $value;
		}

		// 課程教室
		$classroom_data = array();
		$classroom_sqldata = array();
		$classroom_sql = $this->db->select('*')
							->from('classroom')
							->order_by('no','asc')
							->get();
		$classroom_sqldata = $classroom_sql->result_array();
		$classroom_sql->free_result();

		foreach ($classroom_sqldata as $key => $value) {
			$classroom_data[$value['no']] = $value;
		}

		// 三間教室
		for ($classroomno = 1; $classroomno < 4; $classroomno++) { 
			// 老師
			$teacher_data = array();
			$teacher_sql = $this->db->select('*')
								->from('teacher')
								->where("classroomno = '".$classroomno."'")
								->order_by('no','asc')
								->get();
			$teacher_data = $teacher_sql->result_array();

			$teacher_data_max_key = count($teacher_data) - 1;

			// 四個時段
			$class_time_ref = array('1000','1300','1600','1900');

			// 4/1開始跑資料
			$start_time = strtotime("April 1 2016");
			$oneday = 86400;
			for ($i=0; $i < 61; $i++) {
				$thisday_time = $start_time + ($oneday * $i);
				$date = date("Ymd",$thisday_time);
				
				// 四個時段
				foreach ($class_time_ref as $key => $time) {
					$classno_array = $this->gen_classno(date("m",$thisday_time));
					$teacher_randflag = rand(1,4);
					$teacher_ref = $this->gen_teacher($teacher_randflag);
					
					// 該時段有幾堂課
					foreach ($classno_array as $key => $value) {
						echo '<br>';
						echo "=================";
						echo '<br>';
						echo "日期：". date("Ymd",$thisday_time)." 星期".date("w",$thisday_time)." ".substr_replace($time, ":", 2, 0);
						echo '<br>';
						echo "教室：". $classroom_data[$classroomno]['name'];
						echo '<br>';
						echo "上課老師：".$teacher_data[$teacher_ref[$value]]['name'];
						echo '<br>';
						echo "課程名稱：".$class_data[$value]['name'];
						echo '<br>';
						echo "參加人數：".rand(0,3);
						echo '<br>';
						echo "=================";
						echo '<br>';

						$insertdata = array(
						   'classno' => $value ,
						   'date' => date("Ymd",$thisday_time) ,
						   'attender' => rand(0,3) ,
						   'classtime' => $time ,
						   'classweekday' => date("w",$thisday_time) ,
						   'teacherno' => $teacher_data[$teacher_ref[$value]]['no'] ,
						   'classroomno' => $classroomno 
						);

						$this->db->insert('schedule', $insertdata);
						echo 'inserted!!!!!<br>'; 
					}
				}
				
			}
		}
	}

	private function gen_classno($month)
	{
		
		$classno_array = array();

		if ($month == '04') {
			$randflag = rand(1,4);
			switch ($randflag) {
				case 1:
					$classno_array[] = '1';
					$classno_array[] = '2';
					$classno_array[] = '3';
					break;
				case 2:
					$classno_array[] = '1';
					$classno_array[] = '2';
					break;
				case 3:
					$classno_array[] = '1';
					$classno_array[] = '3';
					break;
				case 4:
					$classno_array[] = '2';
					$classno_array[] = '3';
					break;
				default:
					# code...
					break;
			}
		}
		else {
			$randflag = rand(1,4);
			switch ($randflag) {
				case 1:
					$classno_array[] = '4';
					$classno_array[] = '5';
					$classno_array[] = '6';
					break;
				case 2:
					$classno_array[] = '4';
					$classno_array[] = '5';
					break;
				case 3:
					$classno_array[] = '4';
					$classno_array[] = '6';
					break;
				case 4:
					$classno_array[] = '5';
					$classno_array[] = '6';
					break;
				default:
					# code...
					break;
			}
			
		}
		
		return $classno_array;
	}

	private function gen_teacher($randflag)
	{
		$teacher_ref = array();
		switch ($randflag) {
			case 1:
				$teacher_ref['1'] = 0;
				$teacher_ref['2'] = 1;
				$teacher_ref['3'] = 2;

				$teacher_ref['4'] = 1;
				$teacher_ref['5'] = 2;
				$teacher_ref['6'] = 3;
				break;
			case 2:
				$teacher_ref['1'] = 1;
				$teacher_ref['2'] = 2;
				$teacher_ref['3'] = 3;

				$teacher_ref['4'] = 3;
				$teacher_ref['5'] = 1;
				$teacher_ref['6'] = 0;
				break;
			case 3:
				$teacher_ref['1'] = 3;
				$teacher_ref['2'] = 2;
				$teacher_ref['3'] = 0;

				$teacher_ref['4'] = 1;
				$teacher_ref['5'] = 0;
				$teacher_ref['6'] = 2;
				break;
			case 4:
				$teacher_ref['1'] = 3;
				$teacher_ref['2'] = 1;
				$teacher_ref['3'] = 2;

				$teacher_ref['4'] = 0;
				$teacher_ref['5'] = 2;
				$teacher_ref['6'] = 1;
				break;
			
			default:
				# code...
				break;
		}
		return $teacher_ref;
	}

	public function more()
	{
		$this->load->view('more');
	}

	public function collect()
	{
		$this->load->view('collect');
	}
	public function history()
	{
		$this->load->view('history');
	}
	public function historydetail()
	{
		$this->load->view('historydetail');
	}
	public function filter()
	{
		$this->load->view('filter');
	}
	public function filterteacher()
	{
		$this->load->view('filterteacher');
	}
	public function filtertime()
	{
		$this->load->view('filtertime');
	}
	public function filterseat()
	{
		$this->load->view('filterseat');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */