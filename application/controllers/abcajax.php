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

		// 預約資料
		$book_data_check = array();
		$book_sql = $this->db->select('*')
							->from('booking')
							->where('memberno', 1)
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
						   'date' => date("YmdHis") ,
						   'attender' => $schedule_data[0]['attender'] ,
						   'scheduleno' => $schedule_data[0]['no'] ,
						   'memberno' => 1
						   );
		$this->db->insert('booking', $insertdata);

		echo 'success';
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */