<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppid extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model_ppid');
        $data['ppid'] = $this->Model_ppid->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('view_ppid', $data);
        $this->load->view('templates/footer');
    }
}
