<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasar_hukum extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('view_dasar_hukum');
        $this->load->view('templates/footer');
    }
}
