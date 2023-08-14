<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengaduan extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('Model_pengaduan');
        $data['pengaduan'] = $this->Model_pengaduan->tampil_data();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('modal/modal_tambah_pengaduan');
        $this->load->view('edit/edit_pengaduan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $no_pengaduan = $this->input->post('no_pengaduan', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $hp = $this->input->post('hp', true);
        $email = $this->input->post('email', true);
        $jenis_pengaduan = $this->input->post('jenis_pengaduan', true);
        $lokasi_kejadian = $this->input->post('lokasi_kejadian', true);
        $waktu_kejadian = $this->input->post('waktu_kejadian', true);
        $materi_pengaduan = $this->input->post('materi_pengaduan', true);
        $status = $this->input->post('status', true);

        $data = array(
            'no_pengaduan' => $no_pengaduan,
            'nama' => $nama,
            'alamat' => $alamat,
            'hp' => $hp,
            'email' => $email,
            'jenis_pengaduan' => $jenis_pengaduan,
            'lokasi_kejadian' => $lokasi_kejadian,
            'waktu_kejadian' => $waktu_kejadian,
            'materi_pengaduan' => $materi_pengaduan,
            'status' => $status
        );
        $this->load->model('Model_pengaduan');
        $this->Model_pengaduan->input($data);
        $this->session->set_flashdata("berhasil", "Tambah data <b>$nama</b> berhasil !");
        redirect('admin/pengaduan');
    }

    public function ubah()
    {
        $id = $this->input->post('id', true);
        $no_pengaduan = $this->input->post('no_pengaduan', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $hp = $this->input->post('hp', true);
        $email = $this->input->post('email', true);
        $jenis_pengaduan = $this->input->post('jenis_pengaduan', true);
        $lokasi_kejadian = $this->input->post('lokasi_kejadian', true);
        $waktu_kejadian = $this->input->post('waktu_kejadian', true);
        $materi_pengaduan = $this->input->post('materi_pengaduan', true);
        $status = $this->input->post('status', true);

        $data = array(
            'id_pengaduan' => $id,
            'no_pengaduan' => $no_pengaduan,
            'nama' => $nama,
            'alamat' => $alamat,
            'hp' => $hp,
            'email' => $email,
            'jenis_pengaduan' => $jenis_pengaduan,
            'lokasi_kejadian' => $lokasi_kejadian,
            'waktu_kejadian' => $waktu_kejadian,
            'materi_pengaduan' => $materi_pengaduan,
            'status' => $status
        );
        $this->load->model('Model_pengaduan');
        $this->Model_pengaduan->update($data, $id);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$nama</b> berhasil !");
        redirect('admin/pengaduan');
    }

    public function hapus($id)
    {
        $this->db->where('id_pengaduan', $id);
        $query = $this->db->get('pengaduan');
        $row = $query->row();

        $this->load->model('Model_pengaduan');
        $this->Model_pengaduan->delete($id);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama</b> berhasil !");
        redirect('admin/pengaduan');
    }
}
