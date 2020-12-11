<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model_regulasi');
        $data['regulasi'] = $this->Model_regulasi->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('view_regulasi', $data);
        $this->load->view('templates/footer');
    }
}
