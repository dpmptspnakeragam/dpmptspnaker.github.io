<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip/ModelLogin');

        if ($this->session->userdata('logged_in') !== TRUE) {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
            redirect('arsip');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('arsip/dashboard', $data, FALSE);
    }

    public function logout()
    {
        $user_id = $this->session->userdata('id_user');
        if ($user_id) {
            $this->ModelLogin->update_online_status($user_id, 0);
        }

        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('logged_in');

        $this->session->sess_destroy();

        redirect('arsip');
    }
}

/* End of file Dashboard.php */
