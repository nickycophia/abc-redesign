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
		$dataArr = $this->session_info();

		// 會員
		$cardno = "";
		if (count($dataArr) > 0) {
			$cardno = $dataArr[0]['cardno'];
		}
		$data['cardno'] = $cardno;
		$this->load->view('news',$data);
	}

	public function theme()
	{
		$dataArr = $this->session_info();
		
		// 會員
		$cardno = "";
		if (count($dataArr) > 0) {
			$cardno = $dataArr[0]['cardno'];
		}
		$data['cardno'] = $cardno;

		$news_data = array();
		$news_sqldata = array();
		$my_collect_news = array();
		$my_collect_sqldata = array();
		
		$this->db->select('*');
		$this->db->from('collectnews');
		if (count($dataArr) > 0) {
			$this->db->where('memberno', $dataArr[0]['no']);
		}
		$this->db->order_by('updatetime','desc');
		$my_collect_sql = $this->db->get();
		$my_collect_sqldata = $my_collect_sql->result_array();
		$my_collect_sql->free_result();

		if (count($my_collect_sqldata) > 0 && count($dataArr) > 0) {
			foreach ($my_collect_sqldata as $key => $value) {
				$my_collect_news[] = $value['newsno'];
			}
		}

		$news_sql = $this->db->select('*')
							->from('news')
							->order_by('updatetime','desc')
							->get();
		$news_sqldata = $news_sql->result_array();
		$news_sql->free_result();

		foreach ($news_sqldata as $key => $value) {
			if (in_array($value['no'], $my_collect_news) == true) {
				$value['is_collect'] = "active";
			} else {
				$value['is_collect'] = "";
			}
			$news_data[$value['no']] = $value;
		}

		$data['newsdata'] = $news_data;
		$this->load->view('theme',$data);
	}

	public function theme1()
	{
		$dataArr = $this->session_info();
		
		$is_collect = "";
		
		if (count($dataArr) > 0) {
			$this->db->select('*');
			$this->db->from('collectnews');
			$this->db->where('memberno', $dataArr[0]['no']);
			$this->db->where('newsno', 1);
			$this->db->order_by('updatetime','desc');
			$my_collect_sql = $this->db->get();
			$my_collect_sqldata = $my_collect_sql->result_array();

			if (count($my_collect_sqldata) > 0 ) {
				$is_collect = "active";
			}
		}

		$data['is_collect'] = $is_collect;
		$this->load->view('theme1',$data);
	}

	public function theme2()
	{
		$dataArr = $this->session_info();
		$is_collect = "";
		
		if (count($dataArr) > 0) {
			$this->db->select('*');
			$this->db->from('collectnews');
			$this->db->where('memberno', $dataArr[0]['no']);
			$this->db->where('newsno', 2);
			$this->db->order_by('updatetime','desc');
			$my_collect_sql = $this->db->get();
			$my_collect_sqldata = $my_collect_sql->result_array();

			if (count($my_collect_sqldata) > 0 ) {
				$is_collect = "active";
			}
		}

		$data['is_collect'] = $is_collect;
		$this->load->view('theme2',$data);
	}

	public function news1()
	{
		$dataArr = $this->session_info();
		$this->load->view('news1');
	}

	public function news2()
	{
		$dataArr = $this->session_info();
		$this->load->view('news2');
	}

	public function news3()
	{
		$dataArr = $this->session_info();
		$this->load->view('news3');
	}

	public function oneday()
	{
		$dataArr = $this->session_info();
		$this->load->view('oneday');
	}

	public function oneday1()
	{
		$dataArr = $this->session_info();
		$this->load->view('oneday1');
	}

	public function oneday2()
	{
		$dataArr = $this->session_info();
		$this->load->view('oneday2');
	}

	public function oneday3()
	{
		$dataArr = $this->session_info();
		$this->load->view('oneday3');
	}

	public function oneday4()
	{
		$dataArr = $this->session_info();
		$this->load->view('oneday4');
	}

	public function studio()
	{
		$dataArr = $this->session_info();
		$this->load->view('studio');
	}

	public function studio1()
	{
		$dataArr = $this->session_info();
		$this->load->view('studio1');
	}

		public function studio2()
	{
		$dataArr = $this->session_info();
		$this->load->view('studio2');
	}

		public function studio3()
	{
		$dataArr = $this->session_info();
		$this->load->view('studio3');
	}	

	public function abcclass()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcclass');
	}

	public function abcclass1()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcclass1');
	}

	public function abcclass2()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcclass2');
	}

	public function abcclass_dessert()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcclass_dessert');
	}

	public function abcclass_bread()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcclass_bread');
	}

	public function abcabout()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcabout');
	}

	public function abcprice()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcprice');
	}

	public function abcprice_bread()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcprice_bread');
	}

	public function abcprice_dessert()
	{
		$dataArr = $this->session_info();
		$this->load->view('abcprice_dessert');
	}

	public function newsdetail()
	{
		$dataArr = $this->session_info();
		$this->load->view('newsdetail');
	}

	public function course()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'course');

		// 教室
		$classroom_data = array();
		$classroom_sql = $this->db->select('*')
								->from('classroom')
								->order_by('no','asc')
								->get();
		$classroom_data = $classroom_sql->result_array();
		$classroom_sql->free_result();

		// 預約資料
		$booked_classno_data = array();
		$book_data_tmp = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', $dataArr[0]['no'])
							->order_by('no','asc')
							->get();
		$book_data_tmp = $book_sql->result_array();
		foreach ($book_data_tmp as $key => $value) {
			$booked_classno_data[] = $value['classno'];
		}

		// 課程
		$class_data = array();
		$this->db->select('*');
		$this->db->from('class');
		if (count($booked_classno_data) > 0) {
			$this->db->where_not_in('no', $booked_classno_data);
		}
		$this->db->order_by('no','asc');
		$class_sql = $this->db->get();
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
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'selectday');

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

		$data['classmonth'] = $class_data[0]['classmonth'];
		$data['classteacher'] = $teacher_data;

		$this->load->view('selectday',$data);
	}

	public function selectclass()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'selectclass');

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
		$class_booked = false;
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', $dataArr[0]['no'])
							->order_by('no','asc')
							->get();
		$book_data_tmp = $book_sql->result_array();
		foreach ($book_data_tmp as $key => $value) {
			$book_data[] = $value['scheduleno'];
			if ($value['classno'] == $_GET['selected_class']) {
				$class_booked = true;
			}
		}

		$selected_date = array();
		$selected_day_tmp = explode(",", $_GET['selected_day']);
		foreach ($selected_day_tmp as $key => $value) {
			$item = "20160".$_GET['selected_month'].sprintf("%02d", $value);
			$selected_date[$item] = intval($item);
		}
		$schedule_data = array();

		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->where('classno', $_GET['selected_class']);
		$this->db->where('classroomno', $_GET['selected_classroom']);
		$this->db->where_in('date', $selected_date);

		// 老師
		if ($_GET['selected_teacher'] != '') {
			$selected_teacher = explode(",", $_GET['selected_teacher']);
			$this->db->where_in('teacherno', $selected_teacher);
		}
		// 時間
		if ($_GET['selected_time']  != '') {
			$selected_teacher = explode(",", $_GET['selected_time']);
			$this->db->where_in('classtime', $selected_teacher);
		}
		// 座位
		if ($_GET['selected_seat']  != '') {
			$this->db->where_in('attender', $_GET['selected_seat']);
		}

		$this->db->order_by('date', 'asc');
		$schedule_sql = $this->db->get();				
		$schedule_data = $schedule_sql->result_array();

		$result = array();
		$result_classname = '';
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

				$result_classname = $class_data[0]['name'];
			}
		}

		$data['result'] = $result;
		$data['result_classname'] = $result_classname;
		$data['class_booked'] = ($class_booked) ? 'booked' : '';
		$this->load->view('selectclass', $data);
	}

	public function mybooking()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'mybooking');

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
							->where('memberno', $dataArr[0]['no'])
							->get();
		$book_data = $book_sql->result_array();
		foreach ($book_data as $key => $value) {
			$scheduleno_check[] = $value['scheduleno'];
			$scheduleno_ref[$value['scheduleno']] = $value['no'];

			$reminder[$value['no']] = ($value['reminder'] == "") ? "" : "reminder";
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
													'classtime' => $classtime,
													'reminder' => $reminder[$bookingno]);
			}
		}

		$data['booking_list'] = $booking_list;

		$this->load->view('mybooking', $data);
	}

	public function bookingdetail()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'bookingdetail');

		if (empty($_GET['bookingno'])) {
			header('Location: '.base_url());
			return;
		}

		// 預約資料
		$book_data = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('no',$_GET['bookingno'])
							->where('memberno', $dataArr[0]['no'])
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

	public function reminder()
	{
		$reminder_dic = array( "1" => "1小時前",
				               "2" => "3小時前",
				               "3" => "6小時前",
				               "4" => "9小時前",
				               "5" => "1天前",
				               "6" => "3天前",
				               "7" => "5天前",
				               "8" => "7天前");

		$dataArr = $this->session_info();
		$this->check_login($dataArr,'bookingdetail');

		if (empty($_GET['bookingno'])) {
			header('Location: '.base_url());
			return;
		}

		$reminder = '';

		// 預約資料
		$book_data = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('no',$_GET['bookingno'])
							->where('memberno', $dataArr[0]['no'])
							->get();
		$book_data = $book_sql->result_array();
		if ($book_data[0]['reminder'] != '') {
			$reminder = $reminder_dic[$book_data[0]['reminder']];
		}

		$data['reminder'] = $reminder;
		$data['reminder_dic'] = $reminder_dic;
		$this->load->view('reminder',$data);
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

	public function more()
	{
		$dataArr = $this->session_info();
		$nickname = "";
		$cardno = "";

		if (count($dataArr) > 0) {
			$nickname = $dataArr[0]['nickname'];
			$cardno = $dataArr[0]['cardno'];
		}

		$data['nickname'] = $nickname;
		$data['cardno'] = $cardno;
		$this->load->view('more',$data);
	}

	public function collect()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'collect');

		$news_data = array();
		$news_sqldata = array();
		$my_collect_news = array();
		$my_collect_sqldata = array();
		
		$this->db->select('*');
		$this->db->from('collectnews');
		$this->db->where('memberno', $dataArr[0]['no']);
		$this->db->order_by('updatetime','desc');
		$my_collect_sql = $this->db->get();
		$my_collect_sqldata = $my_collect_sql->result_array();
		$my_collect_sql->free_result();

		if (count($my_collect_sqldata) > 0 ) {
			foreach ($my_collect_sqldata as $key => $value) {
				$my_collect_news[] = $value['newsno'];
			}
		}
		if (count($my_collect_news) > 0) {
			$this->db->select('*');
			$this->db->from('news');
			$this->db->where_in('no', $my_collect_news);
			$this->db->order_by('updatetime','desc');
			$news_sql = $this->db->get();
			$news_sqldata = $news_sql->result_array();
			$news_sql->free_result();

			foreach ($news_sqldata as $key => $value) {
				$news_data[$value['no']] = $value;
			}
		}

		$data['newsdata'] = $news_data;

		$this->load->view('collect',$data);
	}
	public function history()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'history');

		$this->load->view('history');
	}
	public function historydetail()
	{
		$dataArr = $this->session_info();
		$this->check_login($dataArr,'historydetail');

		$this->load->view('historydetail');
	}

	public function login()
	{
		$dataArr = $this->session_info();
		if (count($dataArr) > 0) {
			header("Location: ".base_url());
		}
		$this->load->view('login');
	}
	public function forgetpsw()
	{
		$dataArr = $this->session_info();
		if (count($dataArr) > 0) {
			header("Location: ".base_url());
		}
		$this->load->view('forgetpsw');
	}
	public function register()
	{
		$dataArr = $this->session_info();
		if (count($dataArr) > 0) {
			header("Location: ".base_url());
		}
		$this->load->view('register');
	}

	public function logout()
	{
		$this->nativesession->delete('LOGIN_ID');
		header('location:'.base_url());
	}

	public function policy()
	{
		$this->load->view('policy');
	}

	// 登入資訊
	private function session_info()
	{
		$LOGIN_ID = $this->nativesession->get('LOGIN_ID');
		if( empty($LOGIN_ID) ) {
			$dataArr = array();
			return $dataArr;
		}
		else {
			$whereArr = array( 'no' => $LOGIN_ID );
			$query = $this->db->get_where('member',$whereArr);
			$dataArr = $query->result_array();
			return $dataArr;
		}
	}

	private function check_login($dataArr, $redirect)
	{
		if (count($dataArr) == 0) {
			header("Location: ".base_url()."login?redirect=".$redirect);
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
}