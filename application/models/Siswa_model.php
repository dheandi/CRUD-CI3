<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function Getdata($table){

        return $this->db->get($table);
    }

    public function insert_data($data, $table){
        $this->db->insert($table, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show fade">
                                                    Kamu berhasil nambahin data cuyy.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
        redirect('siswa');
    }

    public function update_data($data, $table){
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update($table, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible show fade">
                                                    Kamu berhasil ubah data cuyy.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
        redirect('siswa');

    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
                                                    Kamu berhasil hapus data cuyy.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
        redirect('siswa');
    }

}

/* End of file Siswa_model.php */


?>