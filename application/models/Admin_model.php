<?php

class Admin_model extends CI_model{
    public function getAllAdmin()
    {
        // $query = $this->db->get('visi');
        // $query->result_array();
        return $this->db->get('visi')->result_array();
    }
}