<?php

class Model_skm extends CI_model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('skm');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('skm');
        $this->db->where('kecamatan', $id_kecamatan);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function get_kecamatan($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kecamatan', $id_kecamatan);
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->insert('skm', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id_ulayat', $id);
        $this->db->update('skm', $data);
    }

    public function delete($id_ulayat)
    {
        $this->db->where('id_ulayat', $id_ulayat);
        $this->db->delete('skm');
    }

    //--------------------------------------Hitung Data

    public function jmlh_data()
    {
        $this->db->select('Count(*) as jmlh_data');
        $this->db->from('skm');
        $query = $this->db->get()->row()->jmlh_data;
        return $query;
    }

    public function jmlh_lk()
    {
        $this->db->select('Count(jk) as jmlh_lk');
        $this->db->from('skm');
        $this->db->where('jk', '1');
        $query = $this->db->get()->row()->jmlh_lk;
        return $query;
    }

    public function jmlh_pr()
    {
        $this->db->select('Count(jk) as jmlh_pr');
        $this->db->from('skm');
        $this->db->where('jk', '2');
        $query = $this->db->get()->row()->jmlh_pr;
        return $query;
    }

    //---------------------------Jumlah data pendidikan

    public function jmlh_sd()
    {
        $this->db->select('Count(pendidikan) as jmlh_sd');
        $this->db->from('skm');
        $this->db->where('pendidikan', '1');
        $query = $this->db->get()->row()->jmlh_sd;
        return $query;
    }

    public function jmlh_smp()
    {
        $this->db->select('Count(pendidikan) as jmlh_smp');
        $this->db->from('skm');
        $this->db->where('pendidikan', '2');
        $query = $this->db->get()->row()->jmlh_smp;
        return $query;
    }

    public function jmlh_sma()
    {
        $this->db->select('Count(pendidikan) as jmlh_sma');
        $this->db->from('skm');
        $this->db->where('pendidikan', '3');
        $query = $this->db->get()->row()->jmlh_sma;
        return $query;
    }

    public function jmlh_d1()
    {
        $this->db->select('Count(pendidikan) as jmlh_d1');
        $this->db->from('skm');
        $this->db->where('pendidikan', '4');
        $query = $this->db->get()->row()->jmlh_d1;
        return $query;
    }

    public function jmlh_s1()
    {
        $this->db->select('Count(pendidikan) as jmlh_s1');
        $this->db->from('skm');
        $this->db->where('pendidikan', '5');
        $query = $this->db->get()->row()->jmlh_s1;
        return $query;
    }

    public function jmlh_s2()
    {
        $this->db->select('Count(pendidikan) as jmlh_s2');
        $this->db->from('skm');
        $this->db->where('pendidikan', '6');
        $query = $this->db->get()->row()->jmlh_s2;
        return $query;
    }

    //----------------Hitung Data Pekerjaan

    public function jmlh_pns()
    {
        $this->db->select('Count(pekerjaan) as jmlh_pns');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '1');
        $query = $this->db->get()->row()->jmlh_pns;
        return $query;
    }

    public function jmlh_tni()
    {
        $this->db->select('Count(pekerjaan) as jmlh_tni');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '2');
        $query = $this->db->get()->row()->jmlh_tni;
        return $query;
    }

    public function jmlh_polri()
    {
        $this->db->select('Count(pekerjaan) as jmlh_polri');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '3');
        $query = $this->db->get()->row()->jmlh_polri;
        return $query;
    }

    public function jmlh_swasta()
    {
        $this->db->select('Count(pekerjaan) as jmlh_swasta');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '4');
        $query = $this->db->get()->row()->jmlh_swasta;
        return $query;
    }

    public function jmlh_wirausaha()
    {
        $this->db->select('Count(pekerjaan) as jmlh_wirausaha');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '5');
        $query = $this->db->get()->row()->jmlh_wirausaha;
        return $query;
    }

    public function jmlh_lainnya()
    {
        $this->db->select('Count(pekerjaan) as jmlh_lainnya');
        $this->db->from('skm');
        $this->db->where('pekerjaan', '6');
        $query = $this->db->get()->row()->jmlh_lainnya;
        return $query;
    }

    //---------------------------Hitung Nilai SKM

    public function avg_u1()
    {
        $this->db->select('Avg(u1) as avg_u1');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u1;
        return $query;
    }

    public function avg_u2()
    {
        $this->db->select('Avg(u2) as avg_u2');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u2;
        return $query;
    }

    public function avg_u3()
    {
        $this->db->select('Avg(u3) as avg_u3');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u3;
        return $query;
    }

    public function avg_u4()
    {
        $this->db->select('Avg(u4) as avg_u4');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u4;
        return $query;
    }

    public function avg_u5()
    {
        $this->db->select('Avg(u5) as avg_u5');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u5;
        return $query;
    }

    public function avg_u6()
    {
        $this->db->select('Avg(u6) as avg_u6');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u6;
        return $query;
    }

    public function avg_u7()
    {
        $this->db->select('Avg(u7) as avg_u7');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u7;
        return $query;
    }

    public function avg_u8()
    {
        $this->db->select('Avg(u8) as avg_u8');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u8;
        return $query;
    }

    public function avg_u9()
    {
        $this->db->select('Avg(u9) as avg_u9');
        $this->db->from('skm');
        $query = $this->db->get()->row()->avg_u9;
        return $query;
    }
}
