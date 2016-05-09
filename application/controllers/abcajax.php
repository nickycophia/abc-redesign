<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abcajax extends CI_Controller {

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

	public function booking()
	{
		if (empty($_POST['scheduleno'])) {
			echo 'fail';
			return;
		}
		$dataArr = $this->session_info();

		// 預約資料
		$book_data_check = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', $dataArr[0]['no'])
							->where('scheduleno', $_POST['scheduleno'])
							->get();
		$book_data_check = $book_sql->result_array();
		if (count($book_data_check) > 0) {
			echo 'fail';
			return;
		}

		$schedule_data = array();
		$schedule_sql = $this->db->select('*')
							->from('schedule')
							->where('no', $_POST['scheduleno'])
							->get();
		$schedule_data = $schedule_sql->result_array();
		if (count($schedule_data) == 0) {
			echo 'fail';
			return;
		}

		$insertdata = array('classno' => $schedule_data[0]['classno'] ,
						   'date' => date("Ymd") ,
						   'attender' => $schedule_data[0]['attender'] ,
						   'scheduleno' => $schedule_data[0]['no'] ,
						   'memberno' => $dataArr[0]['no']
						   );
		$this->db->insert('booking', $insertdata);

		echo 'success';
	}

	public function cancelbooking()
	{
		if (empty($_POST['bookingno'])) {
			echo 'fail';
			return;
		}
		$dataArr = $this->session_info();
		$this->db->delete('booking', array('no' => $_POST['bookingno'], 'memberno' => $dataArr[0]['no'])); 

		echo 'success';
	}

	// 收藏新聞
	public function newscollect()
	{
		$dataArr = $this->session_info();
		if (count($dataArr) == 0) {
			echo "notlogin";
			exit;
		}

		if (empty($_POST['newsno'])) {
			echo "fail";
		}

		$return_msg = "";

		// 收藏資料
		$collect_check = array();
		$collect_sql = $this->db->select('*')
							->from('collectnews')
							->where('memberno', $dataArr[0]['no'])
							->where('newsno', $_POST['newsno'])
							->get();
		$collect_check = $collect_sql->result_array();
		if (count($collect_check) == 0) {
			$insertdata = array('memberno' => $dataArr[0]['no'],
								'newsno' => $_POST['newsno'],
								'updatetime' => date("YmdHis")
								);
			$this->db->insert('collectnews', $insertdata);
			$return_msg = "add";
		} else {
			$this->db->delete('collectnews', array('newsno' => $_POST['newsno'], 'memberno' => $dataArr[0]['no']));
			$return_msg = "delete";
		}

		echo $return_msg;
	}

	// 登入
	public function login(){
		$password_coded = md5($_POST['password']);
		$whereArr = array(	'cardno' => $_POST['account'],
							'password' => $password_coded
							);
		$query = $this->db->get_where('member',$whereArr);
		$dataArr = $query->result_array();
		if( count($dataArr) > 0 ) {
			$memberaccount = $dataArr[0]['cardno'];
			$this->nativesession->set('LOGIN_ID',$dataArr[0]['no']);
			echo json_encode(array("status"=>"success","memberaccount"=>$memberaccount));
		}
		else {
			echo json_encode(array("status"=>"fail"));
		}
	}

	// 新註冊會員儲存
	public function register()
	{
		$whereArr['cardno'] = $_POST['cardno'];
		$query = $this->db->get_where('member', $whereArr);
		$query_arr = $query->result_array();
		if (count($query_arr)) {
			echo json_encode(array("status" => "cardnofail"));
		}

		$mailwhereArr['email'] = $_POST['email'];
		$mailquery = $this->db->get_where('member', $mailwhereArr);
		$mail_arr = $mailquery->result_array();
		if (count($mail_arr)) {
			echo json_encode(array("status" => "mailfail"));
		}

		$cardno = $_POST['cardno'];
		$password = $_POST['password'];
		$nickname = ($_POST['nickname']) ? $_POST['nickname'] : "";
		$email = $_POST['email'];

		// 存入新帳號
		$password_coded = md5($password);
		$dataInsert = array(
			'cardno' => $cardno,
			'password' => $password_coded,
			'email' => $email,
			'nickname' => $nickname
		);
		$this->db->insert('member',$dataInsert); 
		$id = $this->db->insert_id();
		if ($id) {
			$this->nativesession->set('LOGIN_ID',$id);
			echo json_encode(array("status" => "success"));
		}
	}

	public function addreminder()
	{
		$data = array('reminder' => $_POST['reminder']);
		$this->db->where('no', $_POST['bookingno']);
		$this->db->update('booking', $data);
		echo 'success';
	}

	public function deletereminder()
	{
		$data = array('reminder' => "");
		$this->db->where('no', $_POST['bookingno']);
		$this->db->update('booking', $data);
		echo 'success';
	}

	public function resetmail()
	{
		$mailsql = $this->db->select('*')
							->from('member')
							->where('email', $_POST['mail'])
							->get();
		$mail = $mailsql->result_array();
		if (count($mail) > 0) {
			echo 'success';
		} else {
			echo 'nomail';
		}
	}

	public function reselectclass()
	{
		$dataArr = $this->session_info();
		if (count($dataArr) == 0) {
			echo json_encode(array("status" => "fail"));
			exit;
		}

		if (empty($_POST['selected_day']) || 
			empty($_POST['selected_month']) || 
			empty($_POST['selected_class']) || 
			empty($_POST['selected_classroom'])) {
			echo json_encode(array("status" => "fail"));
			return;
		}

		// 課程資料
		$class_data = array();
		$class_sql = $this->db->select('*')
								->from('class')
								->where('no',$_POST['selected_class'])
								->get();
		$class_data = $class_sql->result_array();
		$class_sql->free_result();

		// 老師資料
		$teacher_data = array();
		$teacher_data_tmp = array();
		$teacher_sql = $this->db->select('*')
							->from('teacher')
							->where('classroomno', $_POST['selected_classroom'])
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
			if ($value['classno'] == $_POST['selected_class']) {
				$class_booked = true;
			}
		}

		$selected_date = array();
		$selected_day_tmp = explode(",", $_POST['selected_day']);
		foreach ($selected_day_tmp as $key => $value) {
			$item = "20160".$_POST['selected_month'].sprintf("%02d", $value);
			$selected_date[$item] = intval($item);
		}
		$schedule_data = array();

		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->where('classno', $_POST['selected_class']);
		$this->db->where('classroomno', $_POST['selected_classroom']);
		$this->db->where_in('date', $selected_date);

		// 老師
		if ($_POST['selected_teacher'] != '') {
			$selected_teacher = explode(",", $_POST['selected_teacher']);
			$this->db->where_in('teacherno', $selected_teacher);
		}
		// 時間
		if ($_POST['selected_time']  != '') {
			$selected_teacher = explode(",", $_POST['selected_time']);
			$this->db->where_in('classtime', $selected_teacher);
		}
		// 座位
		if ($_POST['selected_seat']  != '') {
			$this->db->where_in('attender', $_POST['selected_seat']);
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
		
		$HTML = "";
		foreach ($result as $key => $value){
			$HTML .= '<div class="list_row">';
			$HTML .= '<div class="list_pic">';
			$HTML .= '<img src="assets/img/'.$value['pic'].'" alt="">';
			$HTML .= '</div>';
			$HTML .= '<div class="list_topic">';
			$HTML .= '<h4 class="list_title">'.$value['classname'].'</h4>';
			$HTML .= '<div class="list_date">';
			$HTML .= '<span class="year">'.$value['date'].'</span>';
			$HTML .= '<span class="time">'.$value['classtime'].'</span>';
			$HTML .= '</div>';
			$HTML .= '<div class="list_teacher">'.$value['teacher'].'</div>';
			$HTML .= '<div class="list_student">'.$value['attender'].'</div>';
			$HTML .= '</div>';
			$HTML .= '<div class="btn_block">';
			
			if ($value['bookstatus'] == 'booked') {
				$HTML .= '<a class="btn_orange booking active" href="javascript:;">預約</a>';
			} else {
				$HTML .= '<a class="btn_orange booking" href="javascript:;" data-scheduleno="'.$value['scheduleno'].'">預約</a>';
			}
			$HTML .= '</div></div>';
		}

		$data['status'] = 'success';
		$data['htmllist'] = $HTML;
		echo json_encode($data);
	}

	/**
	 * discuz 加密解密函數
	 *
	 * @param String $string 需要加密解密的字符串
	 * @param String $operation 類型 DECODE(解密)
	 * @param String $key 密鈅
	 * @return unknown
	 */
	private function authcode($string, $operation, $key = '') {

		$key = md5($key ? $key : 'cn_7c91');
		$key_length = strlen($key);

		$string = $operation == 'DECODE' ? base64_decode($string) : substr(md5($string.$key), 0, 8).$string;
		$string_length = strlen($string);

		$rndkey = $box = array();
		$result = '';

		for($i = 0; $i <= 255; $i++) {
			$rndkey[$i] = ord($key[$i % $key_length]);
			$box[$i] = $i;
		}

		for($j = $i = 0; $i < 256; $i++) {
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}

		for($a = $j = $i = 0; $i < $string_length; $i++) {
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp;
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}

		if($operation == 'DECODE') {
			if(substr($result, 0, 8) == substr(md5(substr($result, 8).$key), 0, 8)) {
				return substr($result, 8);
			} else {
				return '';
			}
		} else {
			return str_replace('=', '', base64_encode($result));
		}
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
}