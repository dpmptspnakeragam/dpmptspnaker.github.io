<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perizinan extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('Model_perizinan');
        $data['perizinan'] = $this->Model_perizinan->tampil_data();
        $data['idmax'] = $this->Model_perizinan->idmax();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/perizinan', $data);
        $this->load->view('modal/modal_tambah_perizinan');
        $this->load->view('edit/edit_perizinan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $id = $this->input->post('id', true);
        $form = $_FILES['form']['name'];
        $syarat = $_FILES['syarat']['name'];
        $nama_izin = $this->input->post('nama_izin', true);

        if ($form = '') {
            $form = "";
        } else {
            $nmfile = $form;
            $config['upload_path'] = './assets/fileupload/';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['file_name'] = $nmfile;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('form')) {
                $form = $this->upload->data('file_name');
            }
        }

        if ($syarat = '') {
            $syarat = "";
        } else {
            $nmfile = $syarat;
            $config['upload_path'] = './assets/fileupload/';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['file_name'] = $nmfile;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('syarat')) {
                $syarat = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_izin' => $id,
            'nama_izin' => $nama_izin,
            'form' => $form,
            'syarat' => $syarat
        );
        $this->load->model('Model_perizinan');
        $this->Model_perizinan->input($data);
        $this->session->set_flashdata("berhasil", "Tambah data <b>$nama_izin</b> berhasil !");
        redirect('admin/perizinan');
    }

    public function ubah()
    {
        $id = $this->input->post('id', true);
        $nama_izin = $this->input->post('nama_izin', true);
        $form = $_FILES['form']['name'];
        $syarat = $_FILES['syarat']['name'];

        if (empty($_FILES['form']['name'])) {
            $form = $this->input->post('old', true);
        } else {
            $nmfile = $form;
            $config['upload_path'] = './assets/fileupload/';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['file_name'] = $nmfile;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('form')) {
                $form = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata("gagal", "Maaf, file <b>$nama_izin</b> gagal diunggah. Format file tidak sesuai !");
                redirect('admin/perizinan');
            }
        }

        if (empty($_FILES['syarat']['name'])) {
            $syarat = $this->input->post('old2', true);
        } else {
            $nmfile = $syarat;
            $config['upload_path'] = './assets/fileupload/';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['file_name'] = $nmfile;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('syarat')) {
                $syarat = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata("gagal", "Maaf, file <b>$nama_izin</b> gagal diunggah. Format file tidak sesuai !");
                redirect('admin/perizinan');
            }
        }

        $data = array(
            'id_izin' => $id,
            'nama_izin' => $nama_izin,
            'form' => $form,
            'syarat' => $syarat
        );
        $this->load->model('Model_perizinan');
        $this->Model_perizinan->update($data, $id);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$nama_izin</b> berhasil !");
        redirect('admin/perizinan');
    }

    public function hapus($id)
    {
        $this->db->where('id_izin', $id);
        $query = $this->db->get('perizinan');
        $row = $query->row();

        unlink("./assets/fileupload/$row->form");
        unlink("./assets/fileupload/$row->syarat");

        $this->load->model('Model_perizinan');
        $this->Model_perizinan->delete($id);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_izin</b> berhasil !");
        redirect('admin/perizinan');
    }
}
