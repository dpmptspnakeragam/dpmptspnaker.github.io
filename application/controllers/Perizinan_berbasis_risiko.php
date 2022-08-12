<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan_berbasis_risiko extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model_perizinan');
        $data['perizinan'] = $this->Model_perizinan->tampil_data_risiko();
        $this->load->view('templates/header');
        $this->load->view('view_perizinan_risiko', $data);
        $this->load->view('templates/footer');
    }
}
