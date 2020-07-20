<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Non_perizinan extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('view_non_perizinan');
        $this->load->view('templates/footer');
    }
}
