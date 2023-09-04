<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public $output;
	public $session;
	public $ExpireTime = 10000;
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
	}
	public function index()
	{
		$this->load->view('css');
		$this->load->view('js');
		$this->load->view('Login/Login_page.php');
	}
	public function checklogin()
	{
		$UserModel = new UserModel();
		$data = $UserModel->checklogin();

		if (isset($data['data'])) {
	
			$session_data = array(
				"OT_Online" => true,
				'id' => $data['data']->id,
				'username' => $data['data']->username,
				'sect' => $data['data']->sect,
			);
			$this->session->set_tempdata($session_data, NULL, $this->ExpireTime);
			header("Refresh:0; url=" . base_url());
		} else {
			$this->session->set_tempdata('status_login', 'fail', 3);
			header("Refresh:0; url=" . base_url() . "login");
		}
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
		
	}
	public function isLogin()
	{
		if (isset($_SESSION['ID'])) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
