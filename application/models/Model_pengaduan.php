<?php

class Model_pengaduan extends CI_model
{
    //----pengaduan---//
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $query = $this->db->get();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_izin', 'idmax');
        $this->db->from('pengaduan');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('pengaduan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan', $data);
    }

    public function delete($id_izin)
    {
        $this->db->where('id_pengaduan', $id_izin);
        $this->db->delete('pengaduan');
    }

    public function getPengaduan($no_pengaduan)
    {
        $pengaduan = $this->db->get_where('pengaduan', ['no_pengaduan' => $no_pengaduan])->result();
        return $pengaduan;
    }
    //-----pengaduan-----//

    // Insert Data di Home atau Section Pengaduan
    public function insert_pengaduan($data)
    {
        // Insert data into the 'pengaduan' table
        return $this->db->insert('pengaduan', $data);
    }
}
