<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RolesModel');
        date_default_timezone_set("Asia/Bangkok");
    }

    public function getRoles()
    {
		$RolesModel = new RolesModel();
		$data = $RolesModel->getRoles();
		echo json_encode($data);
    }
}
