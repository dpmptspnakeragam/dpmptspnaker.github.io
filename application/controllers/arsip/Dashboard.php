<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip/ModelLogin');

        if ($this->session->userdata('logged_in') !== TRUE) {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
            redirect('arsip');
        }
    }

    public function index()
    {
        $data['title1'] = 'Arsip';
        $data['title2'] = 'Dashboard';
        $data['home'] = 'Home';


        $this->load->view('arsip/layout/header', $data, FALSE);
        $this->load->view('arsip/layout/navbar_sidebar', $data, FALSE);
        $this->load->view('arsip/dashboard', $data, FALSE);
        $this->load->view('arsip/layout/footer');
    }
}

/* End of file Dashboard.php */
