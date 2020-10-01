<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Non_perizinan extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model_nonperizinan');
        $data['nonperizinan'] = $this->Model_nonperizinan->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('view_non_perizinan', $data);
        $this->load->view('templates/footer');
    }
}
