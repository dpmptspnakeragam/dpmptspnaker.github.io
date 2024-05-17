<?php

class Model_grafik_izin_tahun extends CI_model
{
    public function tampil_data()
    {
        $query = $this->db->get('grafik_izin_tahun');
        return $query->result();
    }

    public function tampil_data_tahun()
    {
        $query = $this->db->query("SHOW COLUMNS FROM `grafik_izin_tahun` LIKE 'thn%'");
        return $query->result();
    }

    public function idmax()
    {
        $this->db->select_max('id_grafik', 'idmax');
        $this->db->from('grafik_izin_tahun');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('grafik_izin_tahun', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_grafik', $id);
        $this->db->update('grafik_izin_tahun', $data);
    }

    public function delete($id_grafik)
    {
        $this->db->where('id_grafik', $id_grafik);
        $this->db->delete('grafik_izin_tahun');
    }

    // tambah field tahun otomatis
    public function add_tahun($field_name)
    {
        $this->load->dbforge();
        $fields = array(
            $field_name => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0
            )
        );
        $this->dbforge->add_column('grafik_izin_tahun', $fields);
    }

    public function delete_tahun($field_name)
    {
        $this->load->dbforge();
        $this->dbforge->drop_column('grafik_izin_tahun', $field_name);
    }
}
