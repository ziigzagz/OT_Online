<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		// ถ้าใช้มากกว่า 1 DB ให้ 
		// 1.ตั้งค่า DB ใน application\config\database.php
		// 2.Load มาก่อนใช้ด้วย
		// $this->PN = $this->load->database('db2', TRUE);
	}
	public function get_ipaddress()
	{
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	public function checklogin()
	{
		$res = array();

		try {
			$res['login'] = false;
			$res['status'] = 200;
			$res['msg'] = "";
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `tb_approver` WHERE `username` = '$username'";
			$query = $this->db->query($sql);
			$row = $query->result();
			if (sizeof($row) == 0) {
				return $res;
			} 
			// check verify password phph hash
			$hash_password = $row[0]->password;
			if (password_verify($password, $hash_password)) {
				$res['login'] = true;
				$res['data'] = $row[0];
				$res['msg'] = "เข้าสู่ระบบสำเร็จ";
			} else {
				$res['msg'] = "รหัสผ่านไม่ถูกต้อง";
			}
			unset($res['data']->password);
			return $res;
		} catch (\Throwable $th) {
			$res['status'] = 400;
		}


	}
}
