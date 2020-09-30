<?php

class Model_nonperizinan extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('nonperizinan');
        $query = $this->db->get();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_izin', 'idmax');
        $this->db->from('nonperizinan');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('nonperizinan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_izin', $id);
        $this->db->update('nonperizinan', $data);
    }

    public function delete($id_izin)
    {
        $this->db->where('id_izin', $id_izin);
        $this->db->delete('nonperizinan');
    }
}
