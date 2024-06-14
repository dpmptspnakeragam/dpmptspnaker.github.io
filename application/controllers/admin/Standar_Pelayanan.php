<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Standar_pelayanan extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_standar_pelayanan');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['pdf'] = $this->Model_standar_pelayanan->get_single_pdf();

        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/standar_pelayanan', $data);
        $this->load->view('templates/footer_admin');

        // load modal tambah dan edit
        $this->load->view('modal/modal_tambah_standar_pelayanan');
        $this->load->view('edit/edit_standar_pelayanan', $data, FALSE);
    }

    public function tambah()
    {
        $title = $this->input->post('title');

        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $title;
        $config['overwrite'] = false; // Jangan mengizinkan overwrite file yang sudah ada

        $this->upload->initialize($config);

        if ($this->upload->do_upload('pdf_file')) {
            $upload_data = $this->upload->data();
            $data = [
                'title' => $upload_data['file_name']
            ];
            $this->Model_standar_pelayanan->tambah_pdf($data);
            $this->session->set_flashdata('berhasil', 'PDF berhasil ditambahkan');
        } else {
            if (strpos($this->upload->display_errors(), 'The filetype you are attempting to upload is not allowed') !== false) {
                $this->session->set_flashdata('gagal', 'Format harus PDF');
            } else {
                $this->session->set_flashdata('gagal', $this->upload->display_errors());
            }
        }
        redirect('admin/standar_pelayanan');
    }


    public function update()
    {
        $id = $this->input->post('id_sp');
        $title = $this->input->post('title');

        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $title;
        $config['overwrite'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('pdf_file')) {
            $upload_data = $this->upload->data();
            $data = [
                'title' => $upload_data['file_name']
            ];
            // Mengambil data PDF lama untuk mendapatkan nama file
            $old_pdf = $this->Model_standar_pelayanan->get_pdf_by_id($id);
            if ($old_pdf && $old_pdf->title !== $title) {
                // Hapus file PDF lama jika nama file berbeda
                unlink('./assets/fileupload/' . $old_pdf->title);
            }
            $this->Model_standar_pelayanan->update_pdf($id, $data);
            $this->session->set_flashdata('berhasil', 'PDF berhasil diupdate');
        } else {
            if (strpos($this->upload->display_errors(), 'The filetype you are attempting to upload is not allowed') !== false) {
                $this->session->set_flashdata('gagal', 'Format harus PDF');
            } else {
                $this->session->set_flashdata('gagal', $this->upload->display_errors());
            }
        }
        redirect('admin/standar_pelayanan');
    }


    public function delete($id)
    {
        $pdf = $this->Model_standar_pelayanan->get_pdf_by_id($id);
        if ($pdf) {
            $file_path = './assets/fileupload/' . $pdf->title;
            if (file_exists($file_path)) {
                if (unlink($file_path)) { // Hapus file jika berhasil
                    $this->Model_standar_pelayanan->delete_pdf($id); // Hapus data dari database
                    $this->session->set_flashdata('berhasil', 'PDF berhasil dihapus');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal menghapus file');
                }
            } else {
                $this->session->set_flashdata('gagal', 'File tidak ditemukan');
            }
        } else {
            $this->session->set_flashdata('gagal', 'PDF tidak ditemukan');
        }
        redirect('admin/standar_pelayanan');
    }
}

/* End of file standar_pelayanan.php */
