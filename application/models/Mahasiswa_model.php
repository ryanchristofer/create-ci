<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
       return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "npm" => $this->input->post('npm', true),
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa ($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete('mahasiswa');
    }

    public function getMahasiswaByNpm($npm)
    {
        return $this->db->get_where('mahasiswa', ['npm' => $npm])->row_array();
    }

    public function updateDataMahasiswa()
    {
        $data = [
            "npm" => $this->input->post('npm', true),
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
        ];
        
        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update('mahasiswa', $data);
    }
}