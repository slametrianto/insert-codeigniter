<?php
class Maha extends CI_Model
{
    public function tampil_data()
    {
        return  $this->db->get('tb_mahasiswa');
    }
    public function input_data($data, $hero)
    {
        $this->db->insert($hero, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
