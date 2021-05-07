<?php

class Model_sarpras extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('sarpras');
        $query = $this->db->get();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_sarpras', 'idmax');
        $this->db->from('sarpras');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('sarpras', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_sarpras', $id);
        $this->db->update('sarpras', $data);
    }

    public function delete($id_sarpras)
    {
        $this->db->where('id_sarpras', $id_sarpras);
        $this->db->delete('sarpras');
    }
}
