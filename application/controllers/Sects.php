<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SectsModel');
        date_default_timezone_set("Asia/Bangkok");
    }

    public function getSects()
    {
		$SectsModel = new SectsModel();
		$data = $SectsModel->getSects();
		echo json_encode($data);
    }
}
