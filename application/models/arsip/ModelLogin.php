<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLogin extends CI_Model
{

    public function update_online_status($user_id, $status)
    {
        $this->db->set('online', $status);
        $this->db->where('id_user', $user_id);
        return $this->db->update('arsip_user');
    }
}

/* End of file ModelLogin.php */
