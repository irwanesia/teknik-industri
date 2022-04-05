<?php

class Profil_model extends CI_model
{
    public function getAllProfil()
    {
        return $this->db->get('profil')->result_array();
    }

    public function getProfilById($id_profil)
    {
        return $this->db->get_where('profil', ['id_profil' => $id_profil])->row_array();
    }

    public function editDataProfil()
    {
        $this->db->where('id_profil', $id_profil);
        $data = [
            "visi" => $this->input->post('visi', true), // true digunkan sprti htmlspecialcharacter
            "misi" => $this->input->post('misi', true),
            "sejarah" => $this->input->post('sejarah', true),
            "struktur_org" => $this->input->post('struktur_org')
        ];

        $this->db->where('id_profil', $this->input->post('id_profil'));
        $this->db->update('profil', $data);
    }
}
