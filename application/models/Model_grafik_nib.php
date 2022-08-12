<?php

class Model_grafik_nib extends CI_model
{

    //--------Grafik PMDN/PMA & UMK/Non UMK------//
    public function tampil_data_nib()
    {
        $this->db->select('*');
        $this->db->from('grafik_nib_pmdn');
        $query = $this->db->get();
        return $query;
    }

    public function input_nib($data)
    {
        $this->db->insert('grafik_nib_pmdn', $data);
    }

    public function update_nib($data, $id)
    {
        $this->db->where('id_grafik', $id);
        $this->db->update('grafik_nib_pmdn', $data);
    }

    public function delete_nib($id_grafik)
    {
        $this->db->where('id_grafik', $id_grafik);
        $this->db->delete('grafik_nib_pmdn');
    }
    //--------Grafik PMDN/PMA & UMK/Non UMK------//

    //--------Grafik Risiko------//
    public function tampil_data_risiko()
    {
        $this->db->select('*');
        $this->db->from('grafik_risiko');
        $query = $this->db->get();
        return $query;
    }

    public function input_risiko($data)
    {
        $this->db->insert('grafik_risiko', $data);
    }

    public function update_risiko($data, $id)
    {
        $this->db->where('id_grafik', $id);
        $this->db->update('grafik_risiko', $data);
    }

    public function delete_risiko($id_grafik)
    {
        $this->db->where('id_grafik', $id_grafik);
        $this->db->delete('grafik_risiko');
    }
    //--------Grafik Risiko------//

    //--------Grafik kecamatan------//
    public function tampil_data_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('grafik_proyekkec');
        $query = $this->db->get();
        return $query;
    }

    public function input_kecamatan($data)
    {
        $this->db->insert('grafik_proyekkec', $data);
    }

    public function update_kecamatan($data, $id)
    {
        $this->db->where('id_grafik', $id);
        $this->db->update('grafik_proyekkec', $data);
    }

    public function delete_kecamatan($id_grafik)
    {
        $this->db->where('id_grafik', $id_grafik);
        $this->db->delete('grafik_proyekkec');
    }
    //--------Grafik Risiko------//

    //--------Grafik kbli------//
    public function tampil_data_kbli()
    {
        $this->db->select('*');
        $this->db->from('grafik_kbli');
        $query = $this->db->get();
        return $query;
    }

    public function input_kbli($data)
    {
        $this->db->insert('grafik_kbli', $data);
    }

    public function update_kbli($data, $id)
    {
        $this->db->where('id_grafik', $id);
        $this->db->update('grafik_kbli', $data);
    }

    public function delete_kbli($id_grafik)
    {
        $this->db->where('id_grafik', $id_grafik);
        $this->db->delete('grafik_kbli');
    }
    //--------Grafik Risiko------//
}
