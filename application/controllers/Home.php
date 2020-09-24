<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('Model_informasi');
		$this->load->model('Model_investasi');
		$data['berita'] = $this->Model_informasi->informasi();
		$data['investasi'] = $this->Model_investasi->tampil_data();
		$data['idmax'] = $this->Model_informasi->idmax();
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('modal/modal_pelayanan');
		$this->load->view('modal/modal_visi');
		$this->load->view('modal/modal_misi');
		$this->load->view('modal/modal_fungsi');
		$this->load->view('modal/modal_tugas');
		$this->load->view('modal/modal_investasi');
		$this->load->view('modal/modal_detail_investasi', $data);
		$this->load->view('modal/modal_informasi', $data);
		$this->load->view('templates/footer');
	}
}
