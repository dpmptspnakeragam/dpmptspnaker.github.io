<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_spkp_antikorupsi extends CI_Model
{

    public function get_data_rating()
    {
        $this->db->select('spkp.*, IFNULL(spak.r1, 0) AS r1, IFNULL(spak.r2, 0) AS r2, IFNULL(spak.r3, 0) AS r3, IFNULL(spak.r4, 0) AS r4, IFNULL(spak.r5, 0) AS r5, IFNULL(spkp.z1, 0) AS z1, IFNULL(spkp.z2, 0) AS z2, IFNULL(spkp.z3, 0) AS z3, IFNULL(spkp.z4, 0) AS z4, IFNULL(spkp.z5, 0) AS z5, IFNULL(spkp.z6, 0) AS z6, IFNULL(spkp.z7, 0) AS z7, IFNULL(spkp.z8, 0) AS z8');
        $this->db->from('spkp');
        $this->db->join('spak', 'spkp.id_spkp = spak.id_spkp', 'left');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function total_responden()
    {
        $this->db->from('spkp');
        $total = $this->db->count_all_results();
        return $total;
    }

    public function get_rating_spkp()
    {
        $ratings = [];

        // Mengambil data dari tabel 'spkp'
        $query = $this->db->get('spkp');
        $results = $query->result_array();

        // Inisialisasi total bintang untuk nilai 1-6
        $total_bintang = [0, 0, 0, 0, 0, 0];

        // Menghitung total bintang untuk setiap nilai (1-6)
        foreach ($results as $result) {
            for ($i = 1; $i <= 8; $i++) { // Ubah dari 1-8 sesuai dengan kolom z1 - z8
                $field = "z$i";
                if ($result[$field] >= 1 && $result[$field] <= 6) { // Hanya menghitung bintang 1-6
                    $total_bintang[$result[$field] - 1]++;
                }
            }
        }

        // Menghitung total jawaban
        $total_jawaban = array_sum($total_bintang);

        // Menghitung persentase untuk setiap nilai (1-6) jika total jawaban tidak nol
        if ($total_jawaban != 0) {
            for ($i = 0; $i < 6; $i++) {
                $percentage = ($total_bintang[$i] / $total_jawaban) * 100;
                $ratings[$i + 1] = ['total' => $total_bintang[$i], 'percentage' => round($percentage, 2)];
            }
        } else {
            // Jika total jawaban nol, kosongkan nilai persentase
            for ($i = 0; $i < 6; $i++) {
                $ratings[$i + 1] = ['total' => $total_bintang[$i], 'percentage' => 0];
            }
        }

        return $ratings;
    }

    public function get_rating_antikorupsi()
    {
        $ratings = [];

        // Mengambil data dari tabel 'spak'
        $query = $this->db->get('spak');
        $results = $query->result_array();

        // Inisialisasi total bintang untuk nilai 1-6
        $total_bintang = [0, 0, 0, 0, 0, 0];

        // Menghitung total bintang untuk setiap nilai (1-6) dari kolom r1 hingga r5
        foreach ($results as $result) {
            for ($i = 1; $i <= 5; $i++) { // Ubah dari 1-5 sesuai dengan kolom r1 - r5
                $field = "r$i";
                if (isset($result[$field]) && $result[$field] >= 1 && $result[$field] <= 6) { // Hanya menghitung bintang 1-6
                    $total_bintang[$result[$field] - 1]++;
                }
            }
        }

        // Menghitung total jawaban
        $total_jawaban = array_sum($total_bintang);

        // Menghitung persentase untuk setiap nilai (1-6) jika total jawaban tidak nol
        if ($total_jawaban != 0) {
            for ($i = 0; $i < 6; $i++) {
                $percentage = ($total_bintang[$i] / $total_jawaban) * 100;
                $ratings[$i + 1] = ['total' => $total_bintang[$i], 'percentage' => round($percentage, 2)];
            }
        } else {
            // Jika total jawaban nol, kosongkan nilai persentase
            for ($i = 0; $i < 6; $i++) {
                $ratings[$i + 1] = ['total' => $total_bintang[$i], 'percentage' => 0];
            }
        }

        return $ratings;
    }

    public function hapus_spkp($id_spkp)
    {
        $this->db->where('id_spkp', $id_spkp);
        $this->db->delete('spkp');
        return $this->db->affected_rows() > 0;
    }

    public function hapus_spak($id_spkp)
    {
        $this->db->where('id_spkp', $id_spkp);
        $this->db->delete('spak');
        return $this->db->affected_rows() > 0;
    }

    public function get_data_by_id($id_spkp)
    {
        $this->db->select('spkp.*, spak.*'); // Select semua kolom dari kedua tabel
        $this->db->from('spkp');
        $this->db->where('spkp.id_spkp', $id_spkp); // Menggunakan alias untuk kolom id_spkp
        $this->db->join('spak', 'spak.id_spkp = spkp.id_spkp', 'left'); // Menggunakan alias untuk penggabungan
        $query = $this->db->get();
        return $query->result();
    }

    // Nilai Survey
    public function get_avg_z()
    {
        $this->db->select('AVG(z1) as avg_z1, AVG(z2) as avg_z2, AVG(z3) as avg_z3, AVG(z4) as avg_z4, AVG(z5) as avg_z5, AVG(z6) as avg_z6, AVG(z7) as avg_z7, AVG(z8) as avg_z8');
        $query = $this->db->get('spkp')->row();
        return $query;
    }

    public function get_avg_r()
    {
        $this->db->select('AVG(r1) as avg_r1, AVG(r2) as avg_r2, AVG(r3) as avg_r3, AVG(r4) as avg_r4, AVG(r5) as avg_r5');
        $query = $this->db->get('spak')->row();
        return $query;
    }
}

/* End of file Model_spkp_antikorupsi.php */
