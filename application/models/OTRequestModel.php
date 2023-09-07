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

	public function GetOTRequestAllGroup()
	{
		$sql = "SELECT tb_req.`id`,
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
		tb_req.approved_by,
		tb_req.approved_datetime,
		tb_sect.sects,
		tb_approver.username
		FROM `tb_ot_request` as tb_req 
		INNER JOIN `tb_employees` as tb_emp ON tb_req.employee_id = tb_emp.employees_id 
		INNER JOIN `tb_roles` as tb_roles ON tb_req.roles_id = tb_roles.id 
		INNER JOIN `tb_sect` as tb_sect ON tb_emp.employees_sect = tb_sect.id
		LEFT JOIN `tb_approver` as tb_approver ON tb_req.approved_by = tb_approver.id";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
	}

	public function GetOTRequestWaitGroup()
	{
		$sect = $_SESSION['sect'];
		$sql = "SELECT tb_req.`request_key`, tb_roles.roles, tb_req.ot_starttime, tb_req.ot_endtime, tb_req.ot_date, tb_req.work_detail, tb_req.machine_name, tb_req.createdate, tb_sect.sects 
		FROM `tb_ot_request` as tb_req 
		INNER JOIN `tb_employees` as tb_emp ON tb_req.employee_id = tb_emp.employees_id 
		INNER JOIN `tb_roles` as tb_roles ON tb_req.roles_id = tb_roles.id 
		INNER JOIN `tb_sect` as tb_sect ON tb_emp.employees_sect = tb_sect.id 
		WHERE tb_req.approved_status = 0 AND tb_emp.employees_sect in ($sect) 
		GROUP BY tb_req.`request_key`, tb_roles.roles, tb_req.ot_starttime, tb_req.ot_endtime, tb_req.ot_date, tb_req.work_detail, tb_req.machine_name, tb_req.createdate, tb_sect.sects ;  -- Include tb_roles.roles in GROUP BY";
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
        where tb_req.approved_status = 1 and tb_emp.employees_sect in ($sect)
        group by tb_req.`request_key`,
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects;";
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
        where tb_req.approved_status = 2 and tb_emp.employees_sect in ($sect)
        group by tb_req.`request_key`,
		tb_roles.roles,
		tb_req.ot_starttime,
		tb_req.ot_endtime,
		tb_req.ot_date,
		tb_req.cars_text,
		tb_req.work_detail,
		tb_req.machine_name,
		tb_req.createdate,
		tb_sect.sects;";
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
		$approved_by = $_SESSION['id'];
		$sql = "update tb_ot_request set approved_status = '1', approved_by = $approved_by, approved_datetime = current_timestamp() where id = '$ID'";
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
		$approved_by = $_SESSION['id'];
		$sql = "update tb_ot_request set approved_status = '2', approved_by = $approved_by, approved_datetime = current_timestamp() where id = '$ID'";
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
		$approved_by = $_SESSION['id'];
		$sql = "update tb_ot_request set approved_status = '1', approved_by = $approved_by, approved_datetime = current_timestamp() where request_key = '$request_key'";
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
		$approved_by = $_SESSION['id'];
		$sql = "update tb_ot_request set approved_status = '2', approved_by = $approved_by, approved_datetime = current_timestamp() where request_key = '$request_key'";
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
		$Sect = $data['Sect'];

		// loop insert
		foreach ($DataList as $key => $value) {
			$employees_id = $value['employees_id'];
			$employees_name = $value['employees_name'];
			$cars_id = $value['cars_id'];
			$cars = $value['cars'];
			$sql = "INSERT INTO `tb_ot_request` (`id`, `request_key`, `employee_id`, `roles_id`, `ot_starttime`, `ot_endtime`, `ot_date`, `cars_text`, `approved_status`, `work_detail`, `machine_name`, `createdate`) VALUES (NULL, '$GenID', '$employees_id', '$Roles', '$StartOT', '$EndOT', '$DateOT', '$cars', '0', '$WorkDetail', '$MachineName', current_timestamp());";
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
				'sect' => $Sect,
			);

			// select roles
			$sql = "SELECT roles FROM `tb_roles` WHERE id = '$Roles'";
			$query = $this->db->query($sql);
			$Roles = $query->row()->roles;
			$host = base_url() . "Approver";
			$html = "
			<h3>รายการขออนุมัติ OT</h3>
			<br>
			อนุมัติรายการ ที่ลิงค์ $host
			<br>
			<table border='1' style='border-collapse: collapse;'>"
				. "<thead>"
				. "<tr>"
				. "<th>รหัสพนักงาน</th>"
				. "<th>ชื่อ-นามสกุล</th>"
				. "<th>ตำแหน่ง</th>"
				. "<th>วันที่</th>"
				. "<th>เวลา</th>"
				. "<th>รายละเอียด</th>"
				. "<th>เครื่องจักร</th>"
				. "<th>สายรถ</th>"
				. "</tr>"
				. "</thead>"
				. "<tbody>";
			// loop body
			foreach ($DataList as $key => $value) {
				$employees_id = $value['employees_id'];
				$employees_name = $value['employees_name'];
				$cars = $value['cars'];
				$html .= "<tr>"
					. "<td>$employees_id</td>"
					. "<td>$employees_name</td>"
					. "<td>$Roles</td>"
					. "<td>$DateOT</td>"
					. "<td>$StartOT - $EndOT</td>"
					. "<td>$WorkDetail</td>"
					. "<td>$MachineName</td>"
					. "<td>$cars</td>"
					. "</tr>";
			}
			$html .= "</tbody>"
				. "</table>";

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
			$this->email->from('iffan.hym@gmail.com', 'รายการขออนุมัติ OT');

			if ($_SERVER['HTTP_HOST'] == "localhost") {
				if ($Sect == "EL") {
					$this->email->to('iffan.hym@gmail.com');
				} else  if ($Sect == "MC" || $Sect == "US") {
					$this->email->to('somsak@aoyama.co.th');
				} else {
					$this->email->to('iffan.hym@gmail.com');
				}
			} else {
				if ($Sect == "EL") {
					$this->email->to('supoj_s@aoyama.co.th');
				} else  if ($Sect == "MC" || $Sect == "US") {
					// $this->email->to('santi@aoyama.co.th');
					$this->email->to('somsak@aoyama.co.th');
				} else {
					$this->email->to('iffan.hym@gmail.com');
				}
			}
			$res = array(
				'response_code' => 200,
				'status' => "success",
				'sect' => $Sect,
				'HTTP_HOST' => $_SERVER['HTTP_HOST'],
			);
			
			$this->email->subject('รายการขออนุมัติ OT');
			$this->email->message($html);
			$this->email->send();
		}

		return $res;
	}
}
