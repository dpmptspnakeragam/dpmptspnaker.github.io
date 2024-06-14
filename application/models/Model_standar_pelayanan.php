<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_standar_pelayanan extends CI_Model
{
    public function get_single_pdf()
    {
        $query = $this->db->get('standar_pelayanan');
        return $query->row(); // Return single row
    }

    public function get_pdf_by_id($id)
    {
        $this->db->where('id_sp', $id);
        $query = $this->db->get('standar_pelayanan');
        return $query->row();
    }

    public function tambah_pdf($data)
    {
        $this->db->insert('standar_pelayanan', $data);
        return $this->db->insert_id();
    }

    public function update_pdf($id, $data)
    {
        $this->db->where('id_sp', $id);
        return $this->db->update('standar_pelayanan', $data);
    }

    public function delete_pdf($id)
    {
        $this->db->where('id_sp', $id);
        return $this->db->delete('standar_pelayanan');
    }
}

/* End of file Model_standar_pelayanan.php */
