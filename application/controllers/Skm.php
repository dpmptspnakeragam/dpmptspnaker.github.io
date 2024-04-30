<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_skm');
        $this->load->model('Model_spkp_antikorupsi');
    }


    public function index()
    {

        $data['jumlah'] = $this->Model_skm->jmlh_data();
        $data['jmlh_lk'] = $this->Model_skm->jmlh_lk();
        $data['jmlh_pr'] = $this->Model_skm->jmlh_pr();
        $data['jmlh_sd'] = $this->Model_skm->jmlh_sd();
        $data['jmlh_smp'] = $this->Model_skm->jmlh_smp();
        $data['jmlh_sma'] = $this->Model_skm->jmlh_sma();
        $data['jmlh_d1'] = $this->Model_skm->jmlh_d1();
        $data['jmlh_s1'] = $this->Model_skm->jmlh_s1();
        $data['jmlh_s2'] = $this->Model_skm->jmlh_s2();
        $data['jmlh_pns'] = $this->Model_skm->jmlh_pns();
        $data['jmlh_tni'] = $this->Model_skm->jmlh_tni();
        $data['jmlh_polri'] = $this->Model_skm->jmlh_polri();
        $data['jmlh_swasta'] = $this->Model_skm->jmlh_swasta();
        $data['jmlh_wirausaha'] = $this->Model_skm->jmlh_wirausaha();
        $data['jmlh_lainnya'] = $this->Model_skm->jmlh_lainnya();

        $avg_u1 = $this->Model_skm->avg_u1();
        $avg_u2 = $this->Model_skm->avg_u2();
        $avg_u3 = $this->Model_skm->avg_u3();
        $avg_u4 = $this->Model_skm->avg_u4();
        $avg_u5 = $this->Model_skm->avg_u5();
        $avg_u6 = $this->Model_skm->avg_u6();
        $avg_u7 = $this->Model_skm->avg_u7();
        $avg_u8 = $this->Model_skm->avg_u8();
        $avg_u9 = $this->Model_skm->avg_u9();

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

        $data['rating_spkp'] = $this->Model_spkp_antikorupsi->get_rating_spkp();

        $this->load->view('templates/header');
        $this->load->view('view_skm',  $data);
        $this->load->view('templates/footer');
    }

    public function form()
    {
        // $this->load->model('Model_skm');
        // $data['ppid'] = $this->Model_ppid->tampil_data();
        $data['idmax_skm'] = $this->Model_skm->idmax_skm();
        $data['idmax_rating'] = $this->Model_skm->idmax_rating();
        $this->load->view('templates/header');
        $this->load->view('form_skm', $data);
        $this->load->view('templates/footer');
    }

    public function _rules_skm()
    {
        $this->form_validation->set_rules('jk', 'jenis kelamin', 'required', [
            'required' => 'Pilih %s!',
        ]);
        $this->form_validation->set_rules('umur', 'usia', 'required', [
            'required' => 'Masukan %s!',
        ]);
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required', [
            'required' => 'Pilih %s!',
        ]);
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required', [
            'required' => 'Pilih %s!',
        ]);
        $this->form_validation->set_rules('layanan', 'jenis layanan yang diterima', 'required', [
            'required' => 'Masukan %s!',
        ]);

        $validation_rules = [
            ['field' => 'u1', 'label' => 'pendapat nomor 1 diatas', 'rules' => 'required'],
            ['field' => 'u2', 'label' => 'pendapat nomor 2 diatas', 'rules' => 'required'],
            ['field' => 'u3', 'label' => 'pendapat nomor 3 diatas', 'rules' => 'required'],
            ['field' => 'u4', 'label' => 'pendapat nomor 4 diatas', 'rules' => 'required'],
            ['field' => 'u5', 'label' => 'pendapat nomor 5 diatas', 'rules' => 'required'],
            ['field' => 'u6', 'label' => 'pendapat nomor 6 diatas', 'rules' => 'required'],
            ['field' => 'u7', 'label' => 'pendapat nomor 7 diatas', 'rules' => 'required'],
            ['field' => 'u8', 'label' => 'pendapat nomor 8 diatas', 'rules' => 'required'],
            ['field' => 'u9', 'label' => 'pendapat nomor 9 diatas', 'rules' => 'required'],
        ];
        foreach ($validation_rules as $rule) {
            $this->form_validation->set_rules($rule['field'], $rule['label'], $rule['rules'], [
                'required' => 'Pilih %s!'
            ]);
        }
    }

    private function _rules_rating()
    {
        $validation_rules = [
            ['field' => 'rating_r1', 'label' => 'bintang dari pernyataan nomor 1 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_r2', 'label' => 'bintang dari pernyataan nomor 2 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_r3', 'label' => 'bintang dari pernyataan nomor 3 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_r4', 'label' => 'bintang dari pernyataan nomor 4 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_r5', 'label' => 'bintang dari pernyataan nomor 5 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z1', 'label' => 'bintang dari pernyataan nomor 1 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z2', 'label' => 'bintang dari pernyataan nomor 2 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z3', 'label' => 'bintang dari pernyataan nomor 3 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z4', 'label' => 'bintang dari pernyataan nomor 4 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z5', 'label' => 'bintang dari pernyataan nomor 5 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z6', 'label' => 'bintang dari pernyataan nomor 6 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z7', 'label' => 'bintang dari pernyataan nomor 7 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
            ['field' => 'rating_z8', 'label' => 'bintang dari pernyataan nomor 8 diatas', 'rules' => 'required|greater_than[0]|less_than[7]'],
        ];
        foreach ($validation_rules as $rule) {
            $this->form_validation->set_rules($rule['field'], $rule['label'], $rule['rules'], [
                'required' => 'Pilih %s!'
            ]);
        }
    }

    // ------------------ User
    public function tambah_skm()
    {
        $this->_rules_skm();

        if ($this->form_validation->run() == TRUE) {

            date_default_timezone_set('Asia/Jakarta');
            $date = date("Y-m-d H:i:s");

            $input_skm = array(
                'id_skm'        => $this->input->post('id_skm'),
                'jk'            => $this->input->post('jk', true),
                'umur'          => $this->input->post('umur', true),
                'pendidikan'    => $this->input->post('pendidikan', true),
                'pekerjaan'     => $this->input->post('pekerjaan', true),
                'layanan'       => $this->input->post('layanan', true),
                'u1'            => $this->input->post('u1', true),
                'u2'            => $this->input->post('u2', true),
                'u3'            => $this->input->post('u3', true),
                'u4'            => $this->input->post('u4', true),
                'u5'            => $this->input->post('u5', true),
                'u6'            => $this->input->post('u6', true),
                'u7'            => $this->input->post('u7', true),
                'u8'            => $this->input->post('u8', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'u9'            => $this->input->post('u9', true),
                'date'          => $date
            );

            $data_skm = $this->security->xss_clean($input_skm);
            $this->Model_skm->simpan_skm($data_skm);


            $this->session->set_flashdata("berhasil", "Pengisian kuesioner berhasil. Terima kasih");
            redirect('skm');
        } else {
            $data['idmax_skm'] = $this->Model_skm->idmax_skm();
            $data['idmax_rating'] = $this->Model_skm->idmax_rating();
            $this->load->view('templates/header');
            $this->load->view('form_skm', $data);
            $this->load->view('templates/footer');
        }
    }
    public function tambah_rating()
    {
        $this->_rules_rating();

        if ($this->form_validation->run() == TRUE) {

            $input_spak = array(
                'id_spkp'        => $this->input->post('id_spkp'),
                'r1' => $this->input->post('rating_r1', true),
                'r2' => $this->input->post('rating_r2', true),
                'r3' => $this->input->post('rating_r3', true),
                'r4' => $this->input->post('rating_r4', true),
                'r5' => $this->input->post('rating_r5', true),
            );
            $data_spak = $this->security->xss_clean($input_spak);
            $this->Model_skm->simpan_spak($data_spak);

            date_default_timezone_set('Asia/Jakarta');
            $date = date("Y-m-d H:i:s");

            $inputspkp = array(
                'z1' => $this->input->post('rating_z1', true),
                'z2' => $this->input->post('rating_z2', true),
                'z3' => $this->input->post('rating_z3', true),
                'z4' => $this->input->post('rating_z4', true),
                'z5' => $this->input->post('rating_z5', true),
                'z6' => $this->input->post('rating_z6', true),
                'z7' => $this->input->post('rating_z7', true),
                'z8' => $this->input->post('rating_z8', true),
                'date' => $date
            );
            $data_spkp = $this->security->xss_clean($inputspkp);
            $this->Model_skm->simpan_spkp($data_spkp);

            $this->session->set_flashdata("berhasil", "Pengisian kuesioner berhasil. Terima kasih");
            redirect('skm');
        } else {
            $data['idmax_skm'] = $this->Model_skm->idmax_skm();
            $data['idmax_rating'] = $this->Model_skm->idmax_rating();
            $this->load->view('templates/header');
            $this->load->view('form_skm', $data);
            $this->load->view('templates/footer');
        }
    }
}
