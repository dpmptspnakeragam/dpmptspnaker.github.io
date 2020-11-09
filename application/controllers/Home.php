<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	var $API = "";
	public function __construct()
	{
		parent::__construct();
		$this->load->library('curl');
		$this->API = "https://sicantikws.layanan.go.id/api/TemplateData/keluaran/24218.json";
	}

	public function index()
	{
		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		$ss = isset($s) ? ($s) : 0;
		// Kalau belum ada, simpan data user tersebut ke database
		if ($ss == 0) {
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		}
		// Jika sudah ada, update
		else {
			$this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		}
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
		$totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung
		$bataswaktu = time() - 300;
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online

		$data['pengunjunghariini'] = $pengunjunghariini;
		$data['totalpengunjung'] = $totalpengunjung;
		$data['pengunjungonline'] = $pengunjungonline;

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
		$this->load->view('modal/modal_tracking');
		$this->load->view('modal/modal_detail_investasi', $data);
		$this->load->view('modal/modal_informasi', $data);
		$this->load->view('templates/footer');
	}

	public function tracking_sicantik()
	{
		$no_permohonan = $_GET['no_permohonan'];
		echo json_encode(file_get_contents("https://sicantikws.layanan.go.id/api/TemplateData/keluaran/24218.json?no_permohonan=$no_permohonan"), TRUE);
	}
}
