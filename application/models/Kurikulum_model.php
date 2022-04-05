<?php

class Kurikulum_model extends CI_model{
    public function getAllKurikulum()
    {
        // $query = $this->db->get('visi');
        // $query->result_array();
        return $this->db->get('kurikulum')->result_array();
    }
}