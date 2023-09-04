<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OTRequestModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getOTRequest()
	{
		$sql = "";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function GetOTRequestWait()
	{
		$sql = "SELECT 
		tb_req.`id`,
		tb_req.`request_key`,
		tb_req.`employee_id`, 
		tb_emp.employees_name, 
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect =tb_sect.id
		where tb_req.approved_status = 0";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;

	}
	public function GetOTRequestWaitGroup()
	{
		// return $_SESSION;
		$sect = $_SESSION['sect'];
		$sql = "SELECT 
		tb_req.`request_key`,
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect = tb_sect.id
        where tb_req.approved_status = 0 and tb_emp.employees_sect = '$sect'
        group by tb_req.`request_key`;";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}
	public function GetOTRequestApprovedGroup()
	{
		$sect = $_SESSION['sect'];
		$sql = "SELECT 
		tb_req.`request_key`,
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect = tb_sect.id
        where tb_req.approved_status = 1 and tb_emp.employees_sect = '$sect'
        group by tb_req.`request_key`;";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}
	public function GetOTRequestRejectedGroup()
	{
		$sect = $_SESSION['sect'];
		$sql = "SELECT 
		tb_req.`request_key`,
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect = tb_sect.id
        where tb_req.approved_status = 2 and tb_emp.employees_sect = '$sect'
        group by tb_req.`request_key`;";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}

	public function GetOTRequestWaitGroupByKey()
	{
		$request_key = $_REQUEST['request_key'];
		$sql = "SELECT 
		tb_req.`id`,
		tb_req.`request_key`,
		tb_req.`employee_id`, 
		tb_emp.employees_name, 
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_req.approved_status,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect =tb_sect.id
		where tb_req.approved_status = 0 and tb_req.`request_key` = '$request_key'";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}
	public function GetOTRequestApprovedGroupByKey()
	{
		$request_key = $_REQUEST['request_key'];
		$sql = "SELECT 
		tb_req.`id`,
		tb_req.`request_key`,
		tb_req.`employee_id`, 
		tb_emp.employees_name, 
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_req.approved_status,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect =tb_sect.id
		where tb_req.approved_status = 1 and tb_req.`request_key` = '$request_key' ";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}
	public function GetOTRequestRejectedGroupByKey()
	{
		$request_key = $_REQUEST['request_key'];
		$sql = "SELECT 
		tb_req.`id`,
		tb_req.`request_key`,
		tb_req.`employee_id`, 
		tb_emp.employees_name, 
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_req.approved_status,
		tb_sect.sects
		FROM `tb_ot_request` as tb_req
		inner join `tb_employees` as tb_emp
		on tb_req.employee_id = tb_emp.employees_id
		inner join `tb_roles` as tb_roles
		on tb_req.roles_id = tb_roles.id
		inner join `tb_sect` as tb_sect
		on tb_emp.employees_sect =tb_sect.id
		where tb_req.approved_status = 2 and tb_req.`request_key` = '$request_key'";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}

	public function ApprovedByID()
	{
		$this->db->trans_begin();
		$ID = $_REQUEST['id'];
		$sql = "update tb_ot_request set approved_status = '1' where id = '$ID'";
		$query = $this->db->query($sql);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$data["result"] = "fail";
		} else {
			$this->db->trans_commit();
			$data["result"] = "success";
		}
		return $data;

	}
	public function RejectByID()
	{
		$this->db->trans_begin();
		$ID = $_REQUEST['id'];
		$sql = "update tb_ot_request set approved_status = '2' where id = '$ID'";
		$query = $this->db->query($sql);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$data["result"] = "fail";
		} else {
			$this->db->trans_commit();
			$data["result"] = "success";
		}
		return $data;
	}

	public function ApprovedAllKey()
	{
		$this->db->trans_begin();
		$request_key = $_REQUEST['request_key'];
		$sql = "update tb_ot_request set approved_status = '1' where request_key = '$request_key'";
		$query = $this->db->query($sql);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$data["result"] = "fail";
		} else {
			$this->db->trans_commit();
			$data["result"] = "success";
		}
		return $data;
	}
	public function RejectdAllKey()
	{
		$this->db->trans_begin();
		$request_key = $_REQUEST['request_key'];
		$sql = "update tb_ot_request set approved_status = '2' where request_key = '$request_key'";
		$query = $this->db->query($sql);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$data["result"] = "fail";
		} else {
			$this->db->trans_commit();
			$data["result"] = "success";
		}
		return $data;
	}

	public function CreateOTRequest()
	{
		$this->db->trans_begin();
		$data = $this->input->post();
		// {
		// 	"Roles": "2",
		// 	"StartOT": "03:20",
		// 	"EndOT": "06:22",
		// 	"DateOT": "19/09/2023",
		// 	"WorkDetail": "dqww",
		// 	"MachineName": "dewdewd",
		// 	"DataList": {
		// 		"500046": {
		// 			"employees_id": "500046",
		// 			"employees_name": "นายสุขสวัสดิ์ ชัยศรี",
		// 			"cars_id": "3",
		// 			"cars": "สะพานสี่ 1"
		// 		}
		// 	}
		// }

		$GenID = $this->db->query("SELECT UUID() as id")->row()->id;
		$Roles = $data['Roles'];
		$StartOT = $data['StartOT'];
		$EndOT = $data['EndOT'];
		$DateOT = $data['DateOT'];
		$WorkDetail = $data['WorkDetail'];
		$MachineName = $data['MachineName'];
		$DataList = $data['DataList'];

		// loop insert
		foreach ($DataList as $key => $value) {
			$employees_id = $value['employees_id'];
			$employees_name = $value['employees_name'];
			$cars_id = $value['cars_id'];
			$cars = $value['cars'];
			$sql = "INSERT INTO `tb_ot_request` (`id`, `request_key`, `employee_id`, `roles_id`, `ot_starttime`, `ot_endtime`, `ot_date`, `cars_text`, `approved_status`, `work_detail`, `machine_name`, `createdate`, `approved_by`) VALUES (NULL, '$GenID', '$employees_id', '$Roles', '$StartOT', '$EndOT', '$DateOT', '$cars', '0', '$WorkDetail', '$MachineName', current_timestamp(), '');";
			$query = $this->db->query($sql);
		}

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$res = array(
				'response_code' => -1,
				'status' => "fail",
			);
		} else {
			$this->db->trans_commit();
			$res = array(
				'response_code' => 200,
				'status' => "success",
			);
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_port' => 587,
				'smtp_user' => 'iffan.h@ku.th',
				'smtp_pass' => 'Puifai278*',
				'smtp_crypto' => 'tls',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n",
			);

			$this->load->library('email');
			$this->email->initialize($config);
			$this->email->from('iffan.k@ku.th', 'รายการขออนุมัติ OT');
			$this->email->to('iffan.hym@gmail.com');
			$this->email->subject('Subject of the Email');
			$this->email->message('Email content goes here.');
			$this->email->send();
		}

		return $res;
	}
}
