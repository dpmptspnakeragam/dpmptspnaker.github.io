<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('arsip/ModelRegister');
    }

    public function index()
    {
        $data['title'] = 'Register Arsip DPMPTSP Kab. Agam';

        $this->load->view('arsip/layout/log_reg_header', $data, FALSE);
        $this->load->view('arsip/register', $data, FALSE);
        $this->load->view('arsip/layout/log_reg_footer', $data, FALSE);
    }

    public function reg_now()
    {
        // Set rules untuk validasi form
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[arsip_user.username]', [
            'is_unique' => 'Username telah digunakan. Pilih username lain.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'min_length' => 'Password harus memiliki setidaknya 6 karakter.'
        ]);
        $this->form_validation->set_rules('r_password', 'Konfirmasi Password', 'required|matches[password]', [
            'matches' => 'Konfirmasi password tidak sesuai.'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required', [
            'required' => 'Silakan pilih role.'
        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());

            $data['title'] = 'Register Arsip DPMPTSP Kab. Agam';
            $this->load->view('arsip/layout/log_reg_header', $data, FALSE);
            $this->load->view('arsip/register', $data, FALSE);
            $this->load->view('arsip/layout/log_reg_footer', $data, FALSE);
        } else {
            $data = [
                'nama' => $this->input->post('nama', TRUE),
                'username' => $this->input->post('username', TRUE),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role', TRUE),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            if ($this->ModelRegister->insert_user($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran berhasil! Silakan login.');
                redirect('arsip');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan. Silakan coba lagi.');
                redirect('arsip_register');
            }
        }
    }
}

/* End of file Register.php */
