<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('Guru_model');
    }
    

    public function index(){
        $data = [
            'title' => 'Data guru',
            'Tpage' => 'Welcome To Data guru'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('guru', $data);
        $this->load->view('template/footer');
    }


    function tampilGuru()
    {
        $data['hasil']=$this->guru_model->TampilGuru();
        $this->load->view('datagutu/data-guru',$data);
    }

    function tambah()
    {
        $aksi=$this->input->post('aksi');
        $this->load->view('tambah',$aksi);
    }

    function edit()
    {
        $id=$this->input->post('id_guru');
        $data['hasil']=$this->guru_model->Getid($id);
        $this->load->view('edit',$data);
    }
    function hapus()
    {
        $id=$this->input->post('id_guru');
        $data['hasil']=$this->guru_model->Getid($id);
        $this->load->view('hapus',$data);
    }

    function simpanGuru()
    {
        $data = array(
            'nama_guru'=>$this->input->post('nama_guru'),
            'nip'=>$this->input->post('nip'),
            'kelas'=>$this->input->post('kelas')
            );
            $this->db->insert('guru',$data);
    }

    function editGuru()
    {
        $data = array(
            'nama_guru'=>$this->input->post('nama_guru'),
            'nip'=>$this->input->post('nip'),
            'kelas'=>$this->input->post('kelas')
		);
        $id = $this->input->post('id_guru_lama');
        $this->db->where('id_guru', $id);
        $this->db->update('guru',$data);
    }
    function hapusGuru()
    {
        $id=$this->input->post('id_guru');
        $this->db->delete('guru',array('id_guru' => $id));
    }

    

}

/* End of file Controllername.php */


?>