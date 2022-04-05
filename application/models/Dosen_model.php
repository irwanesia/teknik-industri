<?php

class Dosen_model extends CI_model{
    public function getAllDosen()
    {
        // $query = $this->db->get('visi');
        // $query->result_array();
        return $this->db->get('stafDosen')->result_array();
    }


    
    // public function tambahDosen() {
    //     $data = [
    //         "nidn" => $this->input->post('nidn', true), // true digunkan sprti htmlspecialcharacter
    //         "foto" => $this->_uploadImage(),
    //         "nama" => $this->input->post('nama', true),
    //         "status" => $this->input->post('status'),
    //         "konsentrasi" => $this->input->post('konsentrasi')
    //     ];

    //     $this->db->insert('stafDosen', $data);
    // }

        // upload gambar/foto
        public function view(){
            return $this->db->get('stafDosen')->result();
          }
          
          // Fungsi untuk melakukan proses upload file
          public function upload(){
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
          
            $this->load->library('upload', $config); // Load konfigurasi uploadnya
            if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
              // Jika berhasil :
              $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
              return $return;
            }else{
              // Jika gagal :
              $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
              return $return;
            }
          }
          
          // Fungsi untuk menyimpan data ke database
          public function save($upload){
            $data = [
              'nidn'=>$this->input->post('nidn'),
              'foto' => $upload['file']['foto'],
              'status'=>$this->input->post('status'),
              'konsentrasi'=>$this->input->post('konsentrasi'),
            ];
            
            $this->db->insert('stafDosen', $data);
          }
    




    public function hapusDataDosen($id){
        $this->db->delete('stafDosen');
    }

    public function getDosenById($id){
        return $this->db->get_where('stafDosen', ['id' => $id])->row_array();
    }

    public function editDataDosen() {
    $this->db->where('id', $id);
        $data = [
            "nidn" => $this->input->post('nidn', true), // true digunkan sprti htmlspecialcharacter
            "nama" => $this->input->post('nama', true),
            "nidn" => $this->input->post('foto', true),
            "status" => $this->input->post('status'),
            "konsentrasi" => $this->input->post('konsentrasi')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('stafDosen', $data);
    }



}   


