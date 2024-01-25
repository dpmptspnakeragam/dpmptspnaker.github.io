<?php

class Model_kadis extends CI_model
{
    public function tampil_kadis()
    {
        $this->db->select('*');
        $this->db->from('kadis');
        $this->db->order_by('id_kadis', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('kadis', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_kadis', $id);
        $this->db->update('kadis', $data);
    }

    public function delete($id_kadis)
    {
        $this->db->where('id_kadis', $id_kadis);
        $this->db->delete('kadis');
    }
}
