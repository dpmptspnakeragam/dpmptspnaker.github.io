<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{
    public function tampilkan_data()
    {
        $this->db->select('*');
        $this->db->from('arsip_user');
        $this->db->order_by('id_user', 'DESC');
        return $this->db->get()->result_array();
    }
}

/* End of file ModelAdmin.php */
