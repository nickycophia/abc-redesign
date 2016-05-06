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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */