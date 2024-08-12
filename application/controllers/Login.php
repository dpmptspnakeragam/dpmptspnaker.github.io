<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$this->load->model('Model_alumni_lpks');
        //$data ['alumnilpk'] = $this->Model_alumni_lpks->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('login');
    }
}
