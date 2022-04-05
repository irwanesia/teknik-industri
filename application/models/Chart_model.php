<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart_model extends CI_Model
{
    function get_data()
    {
        $this->db->select('thn_ajaran, ipk');
        $result = $this->db->get('mahasiswa');

        return $result;
    }
}
