<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_model
{
    public function cek_user($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($data);
        $query = $this->db->get();
        return $query;
    }
}
