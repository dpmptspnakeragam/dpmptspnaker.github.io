<?php
class Skm extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_skm');
    }

    public function index()
    {
        $data['skm'] = $this->Model_skm->get_data_skm();

        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/skm', $data);
        $this->load->view('templates/footer_admin');
    }

    public function delete($id_skm)
    {
        $this->Model_skm->hapus_skm($id_skm);
        $this->session->set_flashdata('berhasil', 'Data SKM berhasil dihapus.');
        redirect('admin/skm', 'refresh');
    }
}
