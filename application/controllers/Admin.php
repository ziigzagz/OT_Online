<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $output;
	public $session;
	public $ExpireTime = 300000;
	public function __construct()
	{
		parent::__construct();
		$this->session = $this->session->userdata('');
		if (!isset($_SESSION["OT_Online_Admin"])) {
			header("Refresh:0; url=" . base_url() . "Login/Admin");
			exit(0);
		}
		date_default_timezone_set("Asia/Bangkok");
	}
	public function index()
	{
		$this->load->view('css');
		$this->load->view('Admin/Index.php');
	}
	public function OTRequest()
	{
		$this->load->view('css');
		// $this->load->view('js');
		$this->load->view('Admin/OTRequest.php');
	}
	public function OTRequestHRM()
	{
		$this->load->view('css');
		// $this->load->view('js');
		$this->load->view('Admin/OTRequestHRM.php');
	}

}
