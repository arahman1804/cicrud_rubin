<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    

    public function getAll()
    {
        return $this->db->get('siswa')->result();
    }

    public function save($data)
    {
        return $this->db->insert('siswa', $data);
    }

    public function update($data,$id)
    {
        return $this->db->update('siswa', $data, array('kd_siswa' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete('siswa', array("kd_siswa" => $id));
    }
}