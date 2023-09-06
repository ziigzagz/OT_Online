<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }

    public function getEmployees()
    {
			$EmployeesModel = new EmployeesModel();
			$data = $EmployeesModel->getEmployees();
			echo json_encode($data);
    }
}