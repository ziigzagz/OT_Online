<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeesModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getEmployees()
    {
        $sql = "SELECT tb_emp.id, tb_emp.employees_id, tb_emp.employees_name, tb_sect.sects, tb_cars.id as cars_id, tb_cars.cars FROM `tb_employees` as tb_emp inner join tb_sect on tb_emp.employees_sect = tb_sect.id inner join tb_cars on tb_emp.cars_id = tb_cars.id;";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function getEmployeesDetail()
    {
		$sql = "SELECT tb_emp.id, tb_emp.employees_id, tb_emp.employees_name, tb_sect.sects, tb_cars.id as cars_id, tb_cars.cars FROM `tb_employees` as tb_emp inner join tb_sect on tb_emp.employees_sect = tb_sect.id inner join tb_cars on tb_emp.cars_id = tb_cars.id;";
		$query = $this->db->query($sql);
		$res = $query->result();
		$data['data'] = $res;
		$data["result"] = "success";
		return $data;
    }

    public function update_employee()
    {
        $this->db->trans_begin();
        // let data = {
        //     employees_id: employees_id,
        //     employees_name: employees_name,
        //     employees_sect: employees_sect,
        //     cars_id: cars_id,
        //     id: id,
        // };
        $employees_id = $_REQUEST['employees_id'];
        $employees_name = $_REQUEST['employees_name'];
        $employees_sect = $_REQUEST['employees_sect'];
        $cars_id = $_REQUEST['cars_id'];
        $id = $_REQUEST['id'];

        // update employees where id = $id
        try {
            //code...
            $sql = "UPDATE `tb_employees` SET `employees_id` = '$employees_id', `employees_name` = '$employees_name', `employees_sect` = '$employees_sect', `cars_id` = '$cars_id' WHERE `tb_employees`.`id` = $id;";
            $query = $this->db->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $res = array(
                'response_code' => -1
                
            );
        } else {
            $this->db->trans_commit();
            $res = array(
                'response_code' => 200,
                'response_msg' => 'อัพเดตข้อมูลสำเร็จ'
            );
        }
        return $res;
    }

    public function insert_employee()
    {
        $this->db->trans_begin();
       
        $employees_id = $_REQUEST['employees_id'];
        $employees_name = $_REQUEST['employees_name'];
        $employees_sect = $_REQUEST['employees_sect'];
        $cars_id = $_REQUEST['cars_id'];
        // check duplicate employees_id
        $sql = "SELECT * FROM `tb_employees` WHERE `employees_id` = '$employees_id'";
        $query = $this->db->query($sql);
        $res = $query->result();
        if (count($res) > 0) {
            $res = array(
                'response_code' => -1,
                'response_msg' => 'รหัสพนักงานซ้ำ'
            );
            return $res;
        }


        try {
            //code...
            $sql = "INSERT INTO `tb_employees` (`id`, `employees_id`, `employees_name`, `employees_sect`, `cars_id`, `createdate`) VALUES (NULL, '$employees_id', '$employees_name', '$employees_sect', '$cars_id', current_timestamp());";
            $query = $this->db->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }

 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $res = array(
                'response_code' => -1
                
            );
        } else {
            $this->db->trans_commit();
            $res = array(
                'response_code' => 200,
                'response_msg' => 'เพิ่มข้อมูลสำเร็จ'
            );
        }
        return $res;
    }

    public function delete_employee()
    {
        $this->db->trans_begin();
       
        $id = $_REQUEST['id'];

        try {
            //code...
            $sql = "DELETE FROM `tb_employees` WHERE `tb_employees`.`id` = $id";
            $query = $this->db->query($sql);
        } catch (\Throwable $th) {
            $this->db->trans_rollback();
        }

 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $res = array(
                'response_code' => -1

            );
        } else {
            $this->db->trans_commit();
            $res = array(
                'response_code' => 200,
                'response_msg' => 'ลบข้อมูลสำเร็จ',
            );
        }
        return $res;
    }
}
