<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cars extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CarsModel');
        date_default_timezone_set("Asia/Bangkok");
    }

    public function getCars()
    {
		$CarsModel = new CarsModel();
		$data = $CarsModel->getCars();
		echo json_encode($data);
    }
}
