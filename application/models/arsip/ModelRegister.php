<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelRegister extends CI_Model
{
    public function insert_user($data)
    {
        return $this->db->insert('arsip_user', $data);
    }
}

/* End of file ModelRegister.php */
