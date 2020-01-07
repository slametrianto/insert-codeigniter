<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] = $this->maha->tampil_data()->result();

        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
        $this->load->view('mahasiswa', $data);
    }


    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,

        );

        $this->maha->input_data($data, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }

    public function hapus($id)
    {

        $where = array('id' => $id);
        $this->maha->hapus_data($where, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }
}
