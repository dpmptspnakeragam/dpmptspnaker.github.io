<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('view_perizinan');
        $this->load->view('templates/footer');
    }
}
