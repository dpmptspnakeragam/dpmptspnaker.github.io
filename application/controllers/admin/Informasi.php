<?php
class Informasi extends CI_controller
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
        $this->load->model('Model_informasi');
        $data['berita'] = $this->Model_informasi->tampil_data();
        $data['idmax'] = $this->Model_informasi->idmax();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/informasi', $data);
        $this->load->view('modal/modal_tambah_berita');
        $this->load->view('templates/footer_admin');
    }
}
