<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$this->load->model('Model_alumni_lpks');
        //$data ['alumnilpk'] = $this->Model_alumni_lpks->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

    public function cek_login()
    {
        $this->form_validation->set_rules('usrname', 'Username', 'required');
        $this->form_validation->set_rules('pssword', 'Password', 'required');
        if ($this->form_validation->run()  == FALSE) {
            $this->load->view('templates/header_admin');
            $this->load->view('login');
            $this->load->view('templates/footer_admin');
        } else {
            $data = array(
                'username' => $this->input->post('usrname', TRUE),

                'pass' => $this->input->post('pssword', TRUE)
            );

            $this->load->model('Model_user'); // load model_user
            $hasil = $this->Model_user->cek_user($data);

            if ($hasil->num_rows() == 1) {
                foreach ($hasil->result() as $sess) {
                    $sess_data['logged_in'] = TRUE;
                    $sess_data['hak_akses'] = $sess->hak_akses;
                    $sess_data['nama'] = $sess->nama;
                    $sess_data['username'] = $sess->username;
                    $sess_data['id_nagari2'] = $sess->id_nagari;
                    $sess_data['id_nagari'] = $sess->id_kecamatan;
                    $sess_data['id_sekolah'] = $sess->id_sekolah;



                    $this->session->set_userdata($sess_data);
                }
                if ($this->session->userdata('hak_akses') == 'superadmin') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'upt') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'hi') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'p2k2') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'nagari') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'kecamatan') {
                    redirect('admin/home');
                } elseif ($this->session->userdata('hak_akses') == 'sekolah') {
                    redirect('admin/home');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Maaf, Username atau Password anda <b>Salah</b>');

                redirect('login');
            }
        }
    }
}
