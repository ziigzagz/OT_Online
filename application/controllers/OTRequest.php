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
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	
	public function GetOTRequestWait()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestWait();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	
	public function GetOTRequestAllGroup()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestAllGroup();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function GetOTRequestWaitGroup()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestWaitGroup();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function GetOTRequestApprovedGroup()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestApprovedGroup();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function GetOTRequestRejectedGroup()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestRejectedGroup();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function GetOTRequestWaitGroupByKey()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestWaitGroupByKey();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function GetOTRequestApprovedGroupByKey()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestApprovedGroupByKey();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function GetOTRequestRejectedGroupByKey()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->GetOTRequestRejectedGroupByKey();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function ApprovedByID()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->ApprovedByID();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function RejectByID()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->RejectByID();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function ApprovedAllKey()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->ApprovedAllKey();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
	public function RejectdAllKey()
	{
		$OTRequestModel = new OTRequestModel();
		$data = $OTRequestModel->RejectdAllKey();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
}
