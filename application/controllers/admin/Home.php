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
        $data['home'] = 'Home';
        $data['title'] = 'DPMPTSP Kab. Agam';

        $this->load->view('layout/admin/header', $data, FALSE);
        $this->load->view('layout/admin/navbar_sidebar', $data, FALSE);
        $this->load->view('admin/home', $data, FALSE);
        $this->load->view('layout/admin/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        session_destroy();
        redirect('login');
    }
}
