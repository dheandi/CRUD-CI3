<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
    }
    

    public function index(){
        $data = [
            'title' => 'Data Siswa',
            'Tpage' => 'Welcome To Data Siswa'
        ];

        $data['siswa'] = $this->Siswa_model->Getdata('siswa')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('siswa', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){

        $data['title'] = 'Tambah Data Siswa';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('add/tambah_siswa');
        $this->load->view('template/footer');
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array(
            'required' => '%s Harus diisi!!'
        ));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array(
            'required' => '%s Harus diisi!!'
        ));
        $this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required', array(
            'required' => '%s Harus diisi!!'
        ));
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required', array(
            'required' => '%s Harus diisi!!'
        ));
        
    }

    public function tambah_aksi(){
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_siswa' => $this->input->post('nama_siswa'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'no_hp' => $this->input->post('no_hp'),
            );
            $this->Siswa_model->insert_data($data, 'siswa');

            
        }
        
    }

    public function edit($id_siswa){
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_siswa' => $id_siswa,    
                'nama_siswa' => $this->input->post('nama_siswa'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'no_hp' => $this->input->post('no_hp'),
            );
            $this->Siswa_model->update_data($data, 'siswa');
           
        }
        
    }

    public function delete($id){
        $where = array('id_siswa' => $id);
        $this->Siswa_model->delete($where, 'siswa');
    }

}

/* End of file Controllername.php */


?>