<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanah_ulayat extends CI_Controller
{

    public function rincian($id_kecamatan)
    {
        $this->load->model('Model_tanah_ulayat');
        $get_kecamatan = $this->Model_tanah_ulayat->get_kecamatan($id_kecamatan);
        $tanah_ulayat = $this->Model_tanah_ulayat->tampil_data($id_kecamatan);
        $this->load->view('templates/header');
        $this->load->view('view_tanahulayat', array('tanah_ulayat' => $tanah_ulayat, 'get_kecamatan' => $get_kecamatan));
        $this->load->view('templates/footer');
    }
}
