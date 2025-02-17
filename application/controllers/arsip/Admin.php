<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip/ModelAdmin');

        if ($this->session->userdata('logged_in') !== TRUE) {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
            redirect('arsip');
        }
    }

    public function index()
    {
        $data['title1'] = 'Management Users';
        $data['title2'] = 'Admin';
        $data['home'] = 'Home';
        $data['admin'] = $this->ModelAdmin->tampilkan_data();

        $this->load->view('arsip/layout/header', $data, FALSE);
        $this->load->view('arsip/layout/navbar_sidebar', $data, FALSE);
        $this->load->view('arsip/admin', $data, FALSE);
        $this->load->view('arsip/layout/footer');
    }
}

/* End of file Admin.php */
