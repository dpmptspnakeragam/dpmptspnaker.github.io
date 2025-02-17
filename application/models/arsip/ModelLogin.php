<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLogin extends CI_Model
{

    public function update_online_status($user_id, $status)
    {
        if (!in_array($status, [0, 1])) {
            return false; // Cegah nilai selain 0 atau 1
        }

        $this->db->set('online', $status);
        $this->db->where('id_user', $user_id);
        return $this->db->update('arsip_user');
    }
}

/* End of file ModelLogin.php */
