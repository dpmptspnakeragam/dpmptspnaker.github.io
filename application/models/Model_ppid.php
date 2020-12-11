<?php

class Model_ppid extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('ppid');
        $query = $this->db->get();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_ppid', 'idmax');
        $this->db->from('ppid');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('ppid', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_ppid', $id);
        $this->db->update('ppid', $data);
    }

    public function delete($id_ppid)
    {
        $this->db->where('id_ppid', $id_ppid);
        $this->db->delete('ppid');
    }
}
