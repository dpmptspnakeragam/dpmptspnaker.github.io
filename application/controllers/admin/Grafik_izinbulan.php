<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Grafik_izinbulan extends CI_controller
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
        $this->load->model('Model_grafik_izinbulan');
        $data['grafik'] = $this->Model_grafik_izinbulan->tampil_data();
        $data['periode_grafik_izinbulan'] = $this->Model_grafik_izinbulan->tampil_data_periode();
        $data['idmax'] = $this->Model_grafik_izinbulan->idmax();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/grafik_izinbulan', $data);
        $this->load->view('modal/modal_tambah_grafik_izinbulan');
        $this->load->view('edit/edit_grafik_izinbulan', $data);
        $this->load->view('edit/edit_periode_grafik_izinbulan', $data);
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
        $this->load->model('Model_grafik_izinbulan');
        $this->Model_grafik_izinbulan->input($data);
        $this->session->set_flashdata("berhasil", "Tambah data <b>$izin</b> berhasil !");
        redirect('admin/grafik_izinbulan');
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
        $this->load->model('Model_grafik_izinbulan');
        $this->Model_grafik_izinbulan->update($data, $id);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$izin</b> berhasil !");
        redirect('admin/grafik_izinbulan');
    }

    public function ubah_periode()
    {
        $id = $this->input->post('id', true);
        $tgl_awal = $this->input->post('tgl_awal', true);
        $tgl_akhir = $this->input->post('tgl_akhir', true);

        $data = array(
            'id_periode' => $id,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir
        );
        $this->load->model('Model_grafik_izinbulan');
        $this->Model_grafik_izinbulan->update_periode($data, $id);
        $this->session->set_flashdata("berhasil", "Ubah data Periode berhasil !");
        redirect('admin/grafik_izinbulan');
    }

    public function hapus($id)
    {
        $this->db->where('id_grafik', $id);
        $query = $this->db->get('grafik_izinbulan');
        $row = $query->row();

        $this->load->model('Model_grafik_izinbulan');
        $this->Model_grafik_izinbulan->delete($id);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->izin</b> berhasil !");
        redirect('admin/grafik_izinbulan');
    }
}
