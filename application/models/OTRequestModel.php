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

	public function update_data()
	{
		// $this->db->trans_begin();

		// $ID = '1';
		// $sql = "update test_db set name = '123' where id = '$ID'";
		// $query = $this->db->query($sql);

		// if ($this->db->trans_status() === FALSE) {
		//     $this->db->trans_rollback();
		// } else {
		//     $this->db->trans_commit();
		// }
		// return $query->result();
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

		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('iffan.hym@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

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
		}
		return $res;
	}
}
