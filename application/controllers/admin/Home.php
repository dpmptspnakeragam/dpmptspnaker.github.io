<?php
class Home extends CI_controller
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
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/home');
        $this->load->view('templates/footer_admin');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('hak_akses');
        session_destroy();
        redirect('login');
    }
}
