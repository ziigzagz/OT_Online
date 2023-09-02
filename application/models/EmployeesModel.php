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

    public function insert_data()
    {
        // $this->db->trans_begin();

        // $sql = "INSERT INTO table_name_test (name, email, url) VALUES ('Rick', 'rick@example.com', 'example.com')";
        // $query = $this->db->query($sql);
 
        // if ($this->db->trans_status() === FALSE) {
        //     $this->db->trans_rollback();
        //     $res = array(
        //         'response_code' => -1
        //     );
        // } else {
        //     $this->db->trans_commit();
        //     $res = array(
        //         'response_code' => 200,
        //     );
        // }
        // return $res;
    }
}
