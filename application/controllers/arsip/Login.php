<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip/ModelLogin');
    }

    public function index()
    {
        $data['title'] = 'Arisp DPMPTSP Kab. Agam';

        $this->load->view('arsip/layout/log_reg_header', $data, FALSE);
        $this->load->view('arsip/login', $data, FALSE);
        $this->load->view('arsip/layout/log_reg_footer', $data, FALSE);
    }

    public function log_now()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username dan Password tidak boleh kosong.');
            redirect('arsip');
            return;
        }

        if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            $this->session->set_flashdata('error', 'Username mengandung karakter yang tidak valid.');
            redirect('arsip');
            return;
        }

        $user = $this->db->get_where('arsip_user', ['username' => $username])->row();

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'id_user' => $user->id_user,
                'username' => $user->username,
                'role' => $user->role,
                'logged_in' => TRUE,
            ]);

            $this->ModelLogin->update_online_status($user->id_user, 1);

            $this->session->set_flashdata('success', 'Login berhasil.');
            redirect('arsip/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('arsip');
        }
    }
}

/* End of file Login.php */
