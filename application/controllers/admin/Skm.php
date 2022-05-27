<?php
class Skm extends CI_controller
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
        $this->load->model('Model_skm');
        $data['skm'] = $this->Model_skm->get_data();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/skm', $data);
        $this->load->view('templates/footer_admin');
    }
}
