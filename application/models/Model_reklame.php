<?php

class Model_reklame extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('reklame');
        $this->db->join('kecamatan', 'reklame.kec_pasang=kecamatan.id_kecamatan');
        $this->db->join('nagari', 'reklame.nag_pasang=nagari.id_nagari');
        $query = $this->db->get();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_reklame', 'idmax');
        $this->db->from('reklame');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('reklame', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_reklame', $id);
        $this->db->update('reklame', $data);
    }

    public function delete($id_reklame)
    {
        $this->db->where('id_reklame', $id_reklame);
        $this->db->delete('reklame');
    }

    public function hitung_berlaku()
    {
        $tgl_sekarang = date('Y-m-d');
        $select = "count(*) as hitung_berlaku";
        $this->db->select($select);
        $this->db->from('reklame');
        $this->db->where('masa_berlaku >=', $tgl_sekarang);
        $query = $this->db->get()->row()->hitung_berlaku;
        return $query;
    }

    public function hitung_berlakuhabis()
    {
        $tgl_sekarang = date('Y-m-d');
        $select = "count(*) as hitung_berlakuhabis";
        $this->db->select($select);
        $this->db->from('reklame');
        $this->db->where('masa_berlaku <=', $tgl_sekarang);
        $query = $this->db->get()->row()->hitung_berlakuhabis;
        return $query;
    }

    public function hitung_setor()
    {
        $status = 'Sudah Setor';
        $select = "count(*) as hitung_setor";
        $this->db->select($select);
        $this->db->from('reklame');
        $this->db->where('ket', $status);
        $query = $this->db->get()->row()->hitung_setor;
        return $query;
    }

    public function hitung_belumsetor()
    {
        $status = 'Belum Setor';
        $select = "count(*) as hitung_belumsetor";
        $this->db->select($select);
        $this->db->from('reklame');
        $this->db->where('ket', $status);
        $query = $this->db->get()->row()->hitung_belumsetor;
        return $query;
    }

    public function hitung_total()
    {
        $this->db->select('Count(*) as hitung_total');
        $this->db->from('reklame');
        $query = $this->db->get()->row()->hitung_total;
        return $query;
    }

    public function get_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->order_by('kecamatan', 'asc');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_nagari($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('nagari');
        $this->db->where('id_kecamatan', $id_kecamatan);
        $this->db->order_by('id_nagari', 'asc');
        $query = $this->db->get()->result();
        return $query;
    }

    public function export_tgl($tgl_dari, $tgl_sampai, $ket)
    {
        $this->db->select('*');
        $this->db->from('reklame');
        $this->db->join('kecamatan', 'reklame.kec_pasang=kecamatan.id_kecamatan');
        $this->db->join('nagari', 'reklame.nag_pasang=nagari.id_nagari');
        $this->db->where('tgl_input >=', $tgl_dari);
        $this->db->where('tgl_input <=', $tgl_sampai);
        $this->db->where('ket', $ket);
        $query = $this->db->get()->result();
        return $query;
    }
}
