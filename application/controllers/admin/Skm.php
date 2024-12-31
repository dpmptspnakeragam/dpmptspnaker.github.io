<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

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
        $data['home'] = 'Home';
        $data['title'] = 'SKM';

        $this->load->view('layout/admin/header', $data, FALSE);
        $this->load->view('layout/admin/navbar_sidebar', $data, FALSE);
        $this->load->view('admin/skm', $data, FALSE);
        $this->load->view('layout/admin/footer');
    }

    public function delete($id_skm)
    {
        $result = $this->Model_skm->hapus_data_terkait($id_skm);

        if ($result) {
            $this->session->set_flashdata('success', 'Data SKM, SPKP, dan SPAK berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Penghapusan data gagal. Silahkan coba lagi.');
        }

        redirect('admin/skm', 'refresh');
    }

    public function cetak($id_skm)
    {
        require_once 'vendor/autoload.php';

        $dompdf = new Dompdf();

        $data['skm'] = $this->Model_skm->get_data_by_id($id_skm);

        $html = $this->load->view('admin/print/skm', $data, true);

        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $options->set('isRemoteEnabled', true);

        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('Legal', 'portrait');
        $dompdf->render();
        $dompdf->stream('Survey Kepuasan Masyarakat (' . $id_skm . ').pdf', array('Attachment' => false));
    }
}
