<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Grafik_izin extends CI_controller
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
        $this->load->model('Model_grafik');
        $data['grafik'] = $this->Model_grafik->tampil_data();
        $data['idmax'] = $this->Model_grafik->idmax();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/grafik', $data);
        $this->load->view('modal/modal_tambah_grafik');
        $this->load->view('edit/edit_grafik', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $id = $this->input->post('id', true);
        $izin = $this->input->post('izin', true);
        $jumlah = $this->input->post('jumlah', true);

        $data = array(
            'id_grafik' => $id,
            'izin' => $izin,
            'jumlah' => $jumlah
        );
        $this->load->model('Model_grafik');
        $this->Model_grafik->input($data);
        $this->session->set_flashdata("berhasil", "Tambah data <b>$izin</b> berhasil !");
        redirect('admin/grafik_izin');
    }

    public function ubah()
    {
        $id = $this->input->post('id', true);
        $izin = $this->input->post('izin', true);
        $jumlah = $this->input->post('jumlah', true);

        $data = array(
            'id_grafik' => $id,
            'izin' => $izin,
            'jumlah' => $jumlah
        );
        $this->load->model('Model_grafik');
        $this->Model_grafik->update($data, $id);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$izin</b> berhasil !");
        redirect('admin/grafik_izin');
    }

    public function hapus($id)
    {
        $this->db->where('id_grafik', $id);
        $query = $this->db->get('grafik');
        $row = $query->row();

        $this->load->model('Model_grafik');
        $this->Model_grafik->delete($id);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->izin</b> berhasil !");
        redirect('admin/grafik_izin');
    }
}
