<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model_perizinan');
        $data['perizinan'] = $this->Model_perizinan->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('view_perizinan', $data);
        $this->load->view('templates/footer');
    }
}
