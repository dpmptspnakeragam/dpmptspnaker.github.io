<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class PdfController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load library Dompdf
        require 'vendor/autoload.php';
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_skm');
        $this->load->model('Model_spkp_antikorupsi');
    }

    public function cetak($id_skm)
    {
        // Load Dompdf library
        $dompdf = new Dompdf();

        $data['skm'] = $this->Model_skm->get_data_by_id($id_skm);

        // Get base64-encoded image data
        $imageData = base64_encode(file_get_contents(base_url('assets/img/agam.png')));
        $imageSrc = 'data:image/png;base64,' . $imageData;

        // Pass image source to view
        $data['imageSrc'] = $imageSrc;

        // Load view file into Dompdf
        $html = $this->load->view('admin/print/skm', $data, true);
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (generate PDF)
        $dompdf->render();

        // Output generated PDF to browser
        $dompdf->stream('Survey Kepuasan Masyarakat (' . $id_skm . ').pdf', array('Attachment' => false));
    }

    public function cetak_spkp($id_spkp)
    {
        $dompdf = new Dompdf();

        $data['spkp'] = $this->Model_spkp_antikorupsi->get_data_by_id($id_spkp);

        $imageData = base64_encode(file_get_contents(base_url('assets/img/agam.png')));
        $imageSrc = 'data:image/png;base64,' . $imageData;

        $imageStar = base64_encode(file_get_contents(base_url('assets/img/star.png')));
        $starSrc = 'data:image/png;base64,' . $imageStar;

        $data['imageSrc'] = $imageSrc;
        $data['starSrc'] = $starSrc;

        $html = $this->load->view('admin/print/spkp', $data, true);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('SPKP dan SPAK (' . $id_spkp . ').pdf', array('Attachment' => false));
    }
}
