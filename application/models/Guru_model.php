<?php
Class Guru_model extends CI_Model
{
  function TampilMahasiswa() 
    {
        $this->db->order_by('id_guru', 'ASC');
        return $this->db->from('guru')
          ->get()
          ->result();
    }

    function Getid($id = '')
    {
      return $this->db->get_where('guru', array('id_guru' => $id))->row();
    }
    function HapusGuru($id)
    {
        $this->db->delete('guru',array('id_guru' => $id));
    }
}
?>