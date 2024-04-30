<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spkp_antikorupsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_spkp_antikorupsi');
    }

    public function index()
    {
        $data['rating'] = $this->Model_spkp_antikorupsi->get_data_rating();

        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/spkp_antikorupsi', $data);
        $this->load->view('templates/footer_admin');
    }

    public function delete($id_spkp)
    {
        $this->Model_spkp_antikorupsi->hapus_spkp($id_spkp);
        $this->Model_spkp_antikorupsi->hapus_spak($id_spkp);
        $this->session->set_flashdata('berhasil', 'Data SPKP dan Anti Korupsi berhasil dihapus.');
        redirect('admin/spkp_antikorupsi', 'refresh');
    }
}

/* End of file  Spkp_antikorupsi.php */
