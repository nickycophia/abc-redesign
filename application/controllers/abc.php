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
		
		$this->load->view('selectday');
	}

	public function selectclass()
	{
		$this->load->view('selectclass');
	}

	public function mybooking()
	{
		$this->load->view('mybooking');
	}

	public function bookingdetail()
	{
		$this->load->view('bookingdetail');
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
	public function login()
	{
		$this->load->view('login');
	}
	public function forgetpsw()
	{
		$this->load->view('forgetpsw');
	}
	public function register()
	{
		$this->load->view('register');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */