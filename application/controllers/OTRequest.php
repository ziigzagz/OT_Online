<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OTRequest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
	}

	public function CreateOTRequest()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->CreateOTRequest();
		echo json_encode($data);
	}
}
