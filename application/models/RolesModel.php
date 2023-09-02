<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RolesModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRoles()
    {
        $sql = "SELECT * FROM `tb_roles`";
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
