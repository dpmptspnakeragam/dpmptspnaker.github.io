<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Rekap_survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_skm');
        $this->load->model('Model_spkp_antikorupsi');

        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        // tentukan bulan saat ini
        $currentMonth = date('n'); // -> mengambil bulan dalam format angka (1-12)

        // tentukan semester berdasarkan bulan
        $semester = ($currentMonth >= 1 && $currentMonth <= 6) ? 1 : 2;

        // tentukan range bulan berdasarkan semester
        $startMonth = ($semester == 1) ? 1 : 6;
        $endMonth = ($semester == 1) ? 7 : 12;

        // SKM
        $data['jumlah'] = $this->Model_skm->jmlh_data($startMonth, $endMonth);
        $data['jmlh_lk'] = $this->Model_skm->jmlh_lk($startMonth, $endMonth);
        $data['jmlh_pr'] = $this->Model_skm->jmlh_pr($startMonth, $endMonth);
        $data['jmlh_sd'] = $this->Model_skm->jmlh_sd($startMonth, $endMonth);
        $data['jmlh_smp'] = $this->Model_skm->jmlh_smp($startMonth, $endMonth);
        $data['jmlh_sma'] = $this->Model_skm->jmlh_sma($startMonth, $endMonth);
        $data['jmlh_d1'] = $this->Model_skm->jmlh_d1($startMonth, $endMonth);
        $data['jmlh_s1'] = $this->Model_skm->jmlh_s1($startMonth, $endMonth);
        $data['jmlh_s2'] = $this->Model_skm->jmlh_s2($startMonth, $endMonth);
        $data['jmlh_pns'] = $this->Model_skm->jmlh_pns($startMonth, $endMonth);
        $data['jmlh_tni'] = $this->Model_skm->jmlh_tni($startMonth, $endMonth);
        $data['jmlh_polri'] = $this->Model_skm->jmlh_polri($startMonth, $endMonth);
        $data['jmlh_swasta'] = $this->Model_skm->jmlh_swasta($startMonth, $endMonth);
        $data['jmlh_wirausaha'] = $this->Model_skm->jmlh_wirausaha($startMonth, $endMonth);
        $data['jmlh_lainnya'] = $this->Model_skm->jmlh_lainnya($startMonth, $endMonth);

        $avg_u1 = $this->Model_skm->avg_u1($startMonth, $endMonth);
        $avg_u2 = $this->Model_skm->avg_u2($startMonth, $endMonth);
        $avg_u3 = $this->Model_skm->avg_u3($startMonth, $endMonth);
        $avg_u4 = $this->Model_skm->avg_u4($startMonth, $endMonth);
        $avg_u5 = $this->Model_skm->avg_u5($startMonth, $endMonth);
        $avg_u6 = $this->Model_skm->avg_u6($startMonth, $endMonth);
        $avg_u7 = $this->Model_skm->avg_u7($startMonth, $endMonth);
        $avg_u8 = $this->Model_skm->avg_u8($startMonth, $endMonth);
        $avg_u9 = $this->Model_skm->avg_u9($startMonth, $endMonth);

        $data['u1'] = $avg_u1;
        $data['u2'] = $avg_u2;
        $data['u3'] = $avg_u3;
        $data['u4'] = $avg_u4;
        $data['u5'] = $avg_u5;
        $data['u6'] = $avg_u6;
        $data['u7'] = $avg_u7;
        $data['u8'] = $avg_u8;
        $data['u9'] = $avg_u9;

        $nrr_u1 = $avg_u1 * 0.1111;
        $nrr_u2 = $avg_u2 * 0.1111;
        $nrr_u3 = $avg_u3 * 0.1111;
        $nrr_u4 = $avg_u4 * 0.1111;
        $nrr_u5 = $avg_u5 * 0.1111;
        $nrr_u6 = $avg_u6 * 0.1111;
        $nrr_u7 = $avg_u7 * 0.1111;
        $nrr_u8 = $avg_u8 * 0.1111;
        $nrr_u9 = $avg_u9 * 0.1111;

        $sum_nrr = $nrr_u1 + $nrr_u2 + $nrr_u3 + $nrr_u4 + $nrr_u5 + $nrr_u6 + $nrr_u7 + $nrr_u8 + $nrr_u9;
        $data['ikm'] = $sum_nrr * 25;
        // end of SKM

        // ----------------------------------------- SPKP and SPAK -----------------------------------------
        $data['rating_spkp'] = $this->Model_spkp_antikorupsi->get_rating_spkp($startMonth, $endMonth);
        $data['rating_antikorupsi'] = $this->Model_spkp_antikorupsi->get_rating_antikorupsi($startMonth, $endMonth);
        $data['total_responden'] = $this->Model_spkp_antikorupsi->total_responden($startMonth, $endMonth);

        // Get average z and r values
        $avg_z = $this->Model_spkp_antikorupsi->get_avg_z($startMonth, $endMonth);
        $avg_r = $this->Model_spkp_antikorupsi->get_avg_r($startMonth, $endMonth);

        $data['z1'] = $avg_z->avg_z1;
        $data['z2'] = $avg_z->avg_z2;
        $data['z3'] = $avg_z->avg_z3;
        $data['z4'] = $avg_z->avg_z4;
        $data['z5'] = $avg_z->avg_z5;
        $data['z6'] = $avg_z->avg_z6;
        $data['z7'] = $avg_z->avg_z7;
        $data['z8'] = $avg_z->avg_z8;

        $data['r1'] = $avg_r->avg_r1;
        $data['r2'] = $avg_r->avg_r2;
        $data['r3'] = $avg_r->avg_r3;
        $data['r4'] = $avg_r->avg_r4;
        $data['r5'] = $avg_r->avg_r5;

        // Calculate NRR
        $nrr_z = ($avg_z->avg_z1 + $avg_z->avg_z2 + $avg_z->avg_z3 + $avg_z->avg_z4 + $avg_z->avg_z5 + $avg_z->avg_z6 + $avg_z->avg_z7 + $avg_z->avg_z8) * 0.1111;
        $nrr_r = ($avg_r->avg_r1 + $avg_r->avg_r2 + $avg_r->avg_r3 + $avg_r->avg_r4 + $avg_r->avg_r5) * 0.1111;

        $sum_nrr = $nrr_z - $nrr_r;
        $result = $sum_nrr * 50;
        $result = min(max($result, 0), 100);

        // Load view with result
        $data['spkp_spak'] = $result;
        $data['semester'] = $semester;
        $data['home'] = 'Home';
        $data['title'] = 'Rekap IKM';

        $this->load->view('layout/admin/header', $data, FALSE);
        $this->load->view('layout/admin/navbar_sidebar', $data, FALSE);
        $this->load->view('admin/rekap_skm', $data, FALSE);
        $this->load->view('layout/admin/footer');
    }

    public function skm()
    {
        require_once 'vendor/autoload.php';

        $dompdf = new Dompdf();

        // tentukan bulan saat ini
        $currentMonth = date('n'); // -> mengambil bulan dalam format angka (1-12)

        // tentukan semester berdasarkan bulan
        $semester = ($currentMonth >= 1 && $currentMonth <= 6) ? 1 : 2;

        // tentukan range bulan berdasarkan semester
        $startMonth = ($semester == 1) ? 1 : 6;
        $endMonth = ($semester == 1) ? 7 : 12;

        // SKM
        $data['jumlah'] = $this->Model_skm->jmlh_data($startMonth, $endMonth);
        $data['jmlh_lk'] = $this->Model_skm->jmlh_lk($startMonth, $endMonth);
        $data['jmlh_pr'] = $this->Model_skm->jmlh_pr($startMonth, $endMonth);
        $data['jmlh_sd'] = $this->Model_skm->jmlh_sd($startMonth, $endMonth);
        $data['jmlh_smp'] = $this->Model_skm->jmlh_smp($startMonth, $endMonth);
        $data['jmlh_sma'] = $this->Model_skm->jmlh_sma($startMonth, $endMonth);
        $data['jmlh_d1'] = $this->Model_skm->jmlh_d1($startMonth, $endMonth);
        $data['jmlh_s1'] = $this->Model_skm->jmlh_s1($startMonth, $endMonth);
        $data['jmlh_s2'] = $this->Model_skm->jmlh_s2($startMonth, $endMonth);
        $data['jmlh_pns'] = $this->Model_skm->jmlh_pns($startMonth, $endMonth);
        $data['jmlh_tni'] = $this->Model_skm->jmlh_tni($startMonth, $endMonth);
        $data['jmlh_polri'] = $this->Model_skm->jmlh_polri($startMonth, $endMonth);
        $data['jmlh_swasta'] = $this->Model_skm->jmlh_swasta($startMonth, $endMonth);
        $data['jmlh_wirausaha'] = $this->Model_skm->jmlh_wirausaha($startMonth, $endMonth);
        $data['jmlh_lainnya'] = $this->Model_skm->jmlh_lainnya($startMonth, $endMonth);

        $avg_u1 = $this->Model_skm->avg_u1($startMonth, $endMonth);
        $avg_u2 = $this->Model_skm->avg_u2($startMonth, $endMonth);
        $avg_u3 = $this->Model_skm->avg_u3($startMonth, $endMonth);
        $avg_u4 = $this->Model_skm->avg_u4($startMonth, $endMonth);
        $avg_u5 = $this->Model_skm->avg_u5($startMonth, $endMonth);
        $avg_u6 = $this->Model_skm->avg_u6($startMonth, $endMonth);
        $avg_u7 = $this->Model_skm->avg_u7($startMonth, $endMonth);
        $avg_u8 = $this->Model_skm->avg_u8($startMonth, $endMonth);
        $avg_u9 = $this->Model_skm->avg_u9($startMonth, $endMonth);

        $data['u1'] = $avg_u1;
        $data['u2'] = $avg_u2;
        $data['u3'] = $avg_u3;
        $data['u4'] = $avg_u4;
        $data['u5'] = $avg_u5;
        $data['u6'] = $avg_u6;
        $data['u7'] = $avg_u7;
        $data['u8'] = $avg_u8;
        $data['u9'] = $avg_u9;

        $nrr_u1 = $avg_u1 * 0.1111;
        $nrr_u2 = $avg_u2 * 0.1111;
        $nrr_u3 = $avg_u3 * 0.1111;
        $nrr_u4 = $avg_u4 * 0.1111;
        $nrr_u5 = $avg_u5 * 0.1111;
        $nrr_u6 = $avg_u6 * 0.1111;
        $nrr_u7 = $avg_u7 * 0.1111;
        $nrr_u8 = $avg_u8 * 0.1111;
        $nrr_u9 = $avg_u9 * 0.1111;

        $sum_nrr = $nrr_u1 + $nrr_u2 + $nrr_u3 + $nrr_u4 + $nrr_u5 + $nrr_u6 + $nrr_u7 + $nrr_u8 + $nrr_u9;
        $data['ikm'] = $sum_nrr * 25;
        // end of SKM

        // ----------------------------------------- SPKP and SPAK -----------------------------------------
        $data['rating_spkp'] = $this->Model_spkp_antikorupsi->get_rating_spkp($startMonth, $endMonth);
        $data['rating_antikorupsi'] = $this->Model_spkp_antikorupsi->get_rating_antikorupsi($startMonth, $endMonth);
        $data['total_responden'] = $this->Model_spkp_antikorupsi->total_responden($startMonth, $endMonth);

        // Get average z and r values
        $avg_z = $this->Model_spkp_antikorupsi->get_avg_z($startMonth, $endMonth);
        $avg_r = $this->Model_spkp_antikorupsi->get_avg_r($startMonth, $endMonth);

        $data['z1'] = $avg_z->avg_z1;
        $data['z2'] = $avg_z->avg_z2;
        $data['z3'] = $avg_z->avg_z3;
        $data['z4'] = $avg_z->avg_z4;
        $data['z5'] = $avg_z->avg_z5;
        $data['z6'] = $avg_z->avg_z6;
        $data['z7'] = $avg_z->avg_z7;
        $data['z8'] = $avg_z->avg_z8;

        $data['r1'] = $avg_r->avg_r1;
        $data['r2'] = $avg_r->avg_r2;
        $data['r3'] = $avg_r->avg_r3;
        $data['r4'] = $avg_r->avg_r4;
        $data['r5'] = $avg_r->avg_r5;

        // Calculate NRR
        $nrr_z = ($avg_z->avg_z1 + $avg_z->avg_z2 + $avg_z->avg_z3 + $avg_z->avg_z4 + $avg_z->avg_z5 + $avg_z->avg_z6 + $avg_z->avg_z7 + $avg_z->avg_z8) * 0.1111;
        $nrr_r = ($avg_r->avg_r1 + $avg_r->avg_r2 + $avg_r->avg_r3 + $avg_r->avg_r4 + $avg_r->avg_r5) * 0.1111;

        $sum_nrr = $nrr_z - $nrr_r;
        $result = $sum_nrr * 50;
        $result = min(max($result, 0), 100);

        // Load view with result
        $data['spkp_spak'] = $result;
        $data['semester'] = $semester;
        $data['home'] = 'Rekap SKM';
        $data['title'] = 'Cetak Rekap SKM';

        $html = $this->load->view('admin/print/rekap_skm', $data, true);

        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $options->set('isRemoteEnabled', true);

        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Survey Kepuasan Masyarakat (SKM) Semester ' . $semester . ' Tahun ' . date('Y') . '.pdf', array('Attachment' => false));
    }

    public function spkp()
    {
        require_once 'vendor/autoload.php';

        $dompdf = new Dompdf();

        // tentukan bulan saat ini
        $currentMonth = date('n'); // -> mengambil bulan dalam format angka (1-12)

        // tentukan semester berdasarkan bulan
        $semester = ($currentMonth >= 1 && $currentMonth <= 6) ? 1 : 2;

        // tentukan range bulan berdasarkan semester
        $startMonth = ($semester == 1) ? 1 : 6;
        $endMonth = ($semester == 1) ? 7 : 12;

        // SKM
        $data['jumlah'] = $this->Model_skm->jmlh_data($startMonth, $endMonth);
        $data['jmlh_lk'] = $this->Model_skm->jmlh_lk($startMonth, $endMonth);
        $data['jmlh_pr'] = $this->Model_skm->jmlh_pr($startMonth, $endMonth);
        $data['jmlh_sd'] = $this->Model_skm->jmlh_sd($startMonth, $endMonth);
        $data['jmlh_smp'] = $this->Model_skm->jmlh_smp($startMonth, $endMonth);
        $data['jmlh_sma'] = $this->Model_skm->jmlh_sma($startMonth, $endMonth);
        $data['jmlh_d1'] = $this->Model_skm->jmlh_d1($startMonth, $endMonth);
        $data['jmlh_s1'] = $this->Model_skm->jmlh_s1($startMonth, $endMonth);
        $data['jmlh_s2'] = $this->Model_skm->jmlh_s2($startMonth, $endMonth);
        $data['jmlh_pns'] = $this->Model_skm->jmlh_pns($startMonth, $endMonth);
        $data['jmlh_tni'] = $this->Model_skm->jmlh_tni($startMonth, $endMonth);
        $data['jmlh_polri'] = $this->Model_skm->jmlh_polri($startMonth, $endMonth);
        $data['jmlh_swasta'] = $this->Model_skm->jmlh_swasta($startMonth, $endMonth);
        $data['jmlh_wirausaha'] = $this->Model_skm->jmlh_wirausaha($startMonth, $endMonth);
        $data['jmlh_lainnya'] = $this->Model_skm->jmlh_lainnya($startMonth, $endMonth);

        $avg_u1 = $this->Model_skm->avg_u1($startMonth, $endMonth);
        $avg_u2 = $this->Model_skm->avg_u2($startMonth, $endMonth);
        $avg_u3 = $this->Model_skm->avg_u3($startMonth, $endMonth);
        $avg_u4 = $this->Model_skm->avg_u4($startMonth, $endMonth);
        $avg_u5 = $this->Model_skm->avg_u5($startMonth, $endMonth);
        $avg_u6 = $this->Model_skm->avg_u6($startMonth, $endMonth);
        $avg_u7 = $this->Model_skm->avg_u7($startMonth, $endMonth);
        $avg_u8 = $this->Model_skm->avg_u8($startMonth, $endMonth);
        $avg_u9 = $this->Model_skm->avg_u9($startMonth, $endMonth);

        $data['u1'] = $avg_u1;
        $data['u2'] = $avg_u2;
        $data['u3'] = $avg_u3;
        $data['u4'] = $avg_u4;
        $data['u5'] = $avg_u5;
        $data['u6'] = $avg_u6;
        $data['u7'] = $avg_u7;
        $data['u8'] = $avg_u8;
        $data['u9'] = $avg_u9;

        $nrr_u1 = $avg_u1 * 0.1111;
        $nrr_u2 = $avg_u2 * 0.1111;
        $nrr_u3 = $avg_u3 * 0.1111;
        $nrr_u4 = $avg_u4 * 0.1111;
        $nrr_u5 = $avg_u5 * 0.1111;
        $nrr_u6 = $avg_u6 * 0.1111;
        $nrr_u7 = $avg_u7 * 0.1111;
        $nrr_u8 = $avg_u8 * 0.1111;
        $nrr_u9 = $avg_u9 * 0.1111;

        $sum_nrr = $nrr_u1 + $nrr_u2 + $nrr_u3 + $nrr_u4 + $nrr_u5 + $nrr_u6 + $nrr_u7 + $nrr_u8 + $nrr_u9;
        $data['ikm'] = $sum_nrr * 25;
        // end of SKM

        // ----------------------------------------- SPKP and SPAK -----------------------------------------
        $data['rating_spkp'] = $this->Model_spkp_antikorupsi->get_rating_spkp($startMonth, $endMonth);
        $data['rating_antikorupsi'] = $this->Model_spkp_antikorupsi->get_rating_antikorupsi($startMonth, $endMonth);
        $data['total_responden'] = $this->Model_spkp_antikorupsi->total_responden($startMonth, $endMonth);

        // Get average z and r values
        $avg_z = $this->Model_spkp_antikorupsi->get_avg_z($startMonth, $endMonth);
        $avg_r = $this->Model_spkp_antikorupsi->get_avg_r($startMonth, $endMonth);

        $data['z1'] = $avg_z->avg_z1;
        $data['z2'] = $avg_z->avg_z2;
        $data['z3'] = $avg_z->avg_z3;
        $data['z4'] = $avg_z->avg_z4;
        $data['z5'] = $avg_z->avg_z5;
        $data['z6'] = $avg_z->avg_z6;
        $data['z7'] = $avg_z->avg_z7;
        $data['z8'] = $avg_z->avg_z8;

        $data['r1'] = $avg_r->avg_r1;
        $data['r2'] = $avg_r->avg_r2;
        $data['r3'] = $avg_r->avg_r3;
        $data['r4'] = $avg_r->avg_r4;
        $data['r5'] = $avg_r->avg_r5;

        // Calculate NRR
        $nrr_z = ($avg_z->avg_z1 + $avg_z->avg_z2 + $avg_z->avg_z3 + $avg_z->avg_z4 + $avg_z->avg_z5 + $avg_z->avg_z6 + $avg_z->avg_z7 + $avg_z->avg_z8) * 0.1111;
        $nrr_r = ($avg_r->avg_r1 + $avg_r->avg_r2 + $avg_r->avg_r3 + $avg_r->avg_r4 + $avg_r->avg_r5) * 0.1111;

        $sum_nrr = $nrr_z - $nrr_r;
        $result = $sum_nrr * 50;
        $result = min(max($result, 0), 100);

        // Load view with result
        $data['spkp_spak'] = $result;
        $data['semester'] = $semester;
        $data['home'] = 'Rekap SPKP';
        $data['title'] = 'Cetak Rekap SPKP';

        $html = $this->load->view('admin/print/rekap_spkp', $data, true);

        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $options->set('isRemoteEnabled', true);

        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Survey Persepsi Kualitas Pelayanan (SPKP) Semester ' . $semester . ' Tahun ' . date('Y') . '.pdf', array('Attachment' => false));
    }

    public function spak()
    {
        require_once 'vendor/autoload.php';

        $dompdf = new Dompdf();

        // tentukan bulan saat ini
        $currentMonth = date('n'); // -> mengambil bulan dalam format angka (1-12)

        // tentukan semester berdasarkan bulan
        $semester = ($currentMonth >= 1 && $currentMonth <= 6) ? 1 : 2;

        // tentukan range bulan berdasarkan semester
        $startMonth = ($semester == 1) ? 1 : 6;
        $endMonth = ($semester == 1) ? 7 : 12;

        // SKM
        $data['jumlah'] = $this->Model_skm->jmlh_data($startMonth, $endMonth);
        $data['jmlh_lk'] = $this->Model_skm->jmlh_lk($startMonth, $endMonth);
        $data['jmlh_pr'] = $this->Model_skm->jmlh_pr($startMonth, $endMonth);
        $data['jmlh_sd'] = $this->Model_skm->jmlh_sd($startMonth, $endMonth);
        $data['jmlh_smp'] = $this->Model_skm->jmlh_smp($startMonth, $endMonth);
        $data['jmlh_sma'] = $this->Model_skm->jmlh_sma($startMonth, $endMonth);
        $data['jmlh_d1'] = $this->Model_skm->jmlh_d1($startMonth, $endMonth);
        $data['jmlh_s1'] = $this->Model_skm->jmlh_s1($startMonth, $endMonth);
        $data['jmlh_s2'] = $this->Model_skm->jmlh_s2($startMonth, $endMonth);
        $data['jmlh_pns'] = $this->Model_skm->jmlh_pns($startMonth, $endMonth);
        $data['jmlh_tni'] = $this->Model_skm->jmlh_tni($startMonth, $endMonth);
        $data['jmlh_polri'] = $this->Model_skm->jmlh_polri($startMonth, $endMonth);
        $data['jmlh_swasta'] = $this->Model_skm->jmlh_swasta($startMonth, $endMonth);
        $data['jmlh_wirausaha'] = $this->Model_skm->jmlh_wirausaha($startMonth, $endMonth);
        $data['jmlh_lainnya'] = $this->Model_skm->jmlh_lainnya($startMonth, $endMonth);

        $avg_u1 = $this->Model_skm->avg_u1($startMonth, $endMonth);
        $avg_u2 = $this->Model_skm->avg_u2($startMonth, $endMonth);
        $avg_u3 = $this->Model_skm->avg_u3($startMonth, $endMonth);
        $avg_u4 = $this->Model_skm->avg_u4($startMonth, $endMonth);
        $avg_u5 = $this->Model_skm->avg_u5($startMonth, $endMonth);
        $avg_u6 = $this->Model_skm->avg_u6($startMonth, $endMonth);
        $avg_u7 = $this->Model_skm->avg_u7($startMonth, $endMonth);
        $avg_u8 = $this->Model_skm->avg_u8($startMonth, $endMonth);
        $avg_u9 = $this->Model_skm->avg_u9($startMonth, $endMonth);

        $data['u1'] = $avg_u1;
        $data['u2'] = $avg_u2;
        $data['u3'] = $avg_u3;
        $data['u4'] = $avg_u4;
        $data['u5'] = $avg_u5;
        $data['u6'] = $avg_u6;
        $data['u7'] = $avg_u7;
        $data['u8'] = $avg_u8;
        $data['u9'] = $avg_u9;

        $nrr_u1 = $avg_u1 * 0.1111;
        $nrr_u2 = $avg_u2 * 0.1111;
        $nrr_u3 = $avg_u3 * 0.1111;
        $nrr_u4 = $avg_u4 * 0.1111;
        $nrr_u5 = $avg_u5 * 0.1111;
        $nrr_u6 = $avg_u6 * 0.1111;
        $nrr_u7 = $avg_u7 * 0.1111;
        $nrr_u8 = $avg_u8 * 0.1111;
        $nrr_u9 = $avg_u9 * 0.1111;

        $sum_nrr = $nrr_u1 + $nrr_u2 + $nrr_u3 + $nrr_u4 + $nrr_u5 + $nrr_u6 + $nrr_u7 + $nrr_u8 + $nrr_u9;
        $data['ikm'] = $sum_nrr * 25;
        // end of SKM

        // ----------------------------------------- SPKP and SPAK -----------------------------------------
        $data['rating_spkp'] = $this->Model_spkp_antikorupsi->get_rating_spkp($startMonth, $endMonth);
        $data['rating_antikorupsi'] = $this->Model_spkp_antikorupsi->get_rating_antikorupsi($startMonth, $endMonth);
        $data['total_responden'] = $this->Model_spkp_antikorupsi->total_responden($startMonth, $endMonth);

        // Get average z and r values
        $avg_z = $this->Model_spkp_antikorupsi->get_avg_z($startMonth, $endMonth);
        $avg_r = $this->Model_spkp_antikorupsi->get_avg_r($startMonth, $endMonth);

        $data['z1'] = $avg_z->avg_z1;
        $data['z2'] = $avg_z->avg_z2;
        $data['z3'] = $avg_z->avg_z3;
        $data['z4'] = $avg_z->avg_z4;
        $data['z5'] = $avg_z->avg_z5;
        $data['z6'] = $avg_z->avg_z6;
        $data['z7'] = $avg_z->avg_z7;
        $data['z8'] = $avg_z->avg_z8;

        $data['r1'] = $avg_r->avg_r1;
        $data['r2'] = $avg_r->avg_r2;
        $data['r3'] = $avg_r->avg_r3;
        $data['r4'] = $avg_r->avg_r4;
        $data['r5'] = $avg_r->avg_r5;

        // Calculate NRR
        $nrr_z = ($avg_z->avg_z1 + $avg_z->avg_z2 + $avg_z->avg_z3 + $avg_z->avg_z4 + $avg_z->avg_z5 + $avg_z->avg_z6 + $avg_z->avg_z7 + $avg_z->avg_z8) * 0.1111;
        $nrr_r = ($avg_r->avg_r1 + $avg_r->avg_r2 + $avg_r->avg_r3 + $avg_r->avg_r4 + $avg_r->avg_r5) * 0.1111;

        $sum_nrr = $nrr_z - $nrr_r;
        $result = $sum_nrr * 50;
        $result = min(max($result, 0), 100);

        // Load view with result
        $data['spkp_spak'] = $result;
        $data['semester'] = $semester;
        $data['home'] = 'Rekap SPAK';
        $data['title'] = 'Cetak Rekap SPAK';

        $html = $this->load->view('admin/print/rekap_spak', $data, true);

        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $options->set('isRemoteEnabled', true);

        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Survey Persepsi Anti Korupsi (SPAK) Semester ' . $semester . ' Tahun ' . date('Y') . '.pdf', array('Attachment' => false));
    }
}

/* End of file Rekap_ikm.php */
