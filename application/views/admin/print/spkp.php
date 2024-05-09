<!DOCTYPE html>
<html>

<head>
    <title>Cetak SPKP dan SPAK</title>

    <style>
        .divider {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }

        .d-block {
            display: block;
        }

        .bold {
            font-weight: bold;
        }

        /* Bintang */
        .stars-cetak {
            display: inline-block;
            font-size: 28px;
        }

        .stars-cetak .star {
            display: inline-block;
            width: 28px;
            height: 28px;
            font-size: 28px;
            background-image: url('<?= $starSrc; ?>');
            background-size: contain;
            /* Menggunakan contain agar gambar bintang sesuai ukuran */
        }

        .stars-cetak .star.filled {
            background-color: transparent;
            /* Menghilangkan background warna agar hanya gambar bintang yang terlihat */
            color: transparent;
            /* Menghilangkan warna teks agar hanya gambar bintang yang terlihat */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <img src="<?= $imageSrc; ?>" alt="Logo" style="position: absolute; width: 50px; height: auto; margin-left: 30px;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.3; font-weight: bold; font-size: 18px;">
                    Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu<br>(DPMPTSP) Kabupaten Agam
                </span>
            </td>
        </tr>
    </table>
    <div class="divider" style="margin-top: 20px;"></div>
    <div class="divider" style="margin-top: 1px;"></div>
    <div class="divider" style="margin-top: 1px;"></div>

    <?php foreach ($spkp as $row) : ?>
        <div style="margin-top: 15px;" class="bold">
            <span>Jawaban Responden Survey Persepsi Kualitas Pelayanan (SPKP):</span>
        </div>
        <table>
            <tr>
                <td class="d-block">1. </td>
                <td>Informasi pelayanan pada unit layanan ini tersedia melalui media sosial elektronik maupun non elektronik.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z1;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">2. </td>
                <td>Persyaratan pelayanan yang diinformasikan sesuai dengan persyaratan yang ditetapkan unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z2;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">3. </td>
                <td>Prosedur/Alur pelayanan yang ditetapkan unit layanan ini mudah diikuti/dilakukan.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z3;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">4. </td>
                <td>Jangka waktu penyelesaian pelayanan yang diterima Bapak/Ibu sesuai dengan yang ditetapkan unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z4;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">5. </td>
                <td>Tarif/Biaya pelayanan yang dibayarkan pada unit layanan ini sesuai dengan tarif/biaya yang ditetapkan.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z5;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">6. </td>
                <td>Sarana prasarana pendukung pelayanan/sistem pelayanan online yang disediakan unit layanan ini memberikan kenyamanan/mudah digunakan.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z6;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">7. </td>
                <td>Petugas pelayanan/sistem pelayanan online pada unit layanan ini merespon keperluan Bapak/Ibu dengan cepat.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z7;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">8. </td>
                <td>Layanan konsultasi dan pengaduan yang disediakan unit layanan ini mudah digunakan/diakses.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->z8;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>

        <div style="margin-top: 15px;" class="bold">
            <span>Jawaban Responden Survey Persepsi Anti Korupsi (SPAK):</span>
        </div>
        <table>
            <tr>
                <td class="d-block">1. </td>
                <td>Tidak ada deskriminasi pelayanan pada unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->r1;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">2. </td>
                <td>Tidak ada pelayanan diluar prosedur/kecurangan pelayanan pada unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->r2;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">3. </td>
                <td>Tidak ada penerimaan imbalan uang/barang/fasilitas diluar ketentuan yang berlaku pada unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->r3;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">4. </td>
                <td>Tidak ada pungutan liar (pungli) pada unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->r4;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="d-block">5. </td>
                <td>Tidak ada percaloan/perantara tidak resmi pada unit layanan ini.</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="stars-cetak" data-rating="<?= $row->z1; ?>">
                        <?php
                        $rating = $row->r5;

                        // Loop untuk menampilkan bintang sesuai dengan nilai rating
                        for ($i = 1; $i <= 6; $i++) {
                            $class = ($i <= $rating) ? 'star filled' : 'star dark'; // Tambahkan kelas "dark" untuk bintang yang tidak terpilih
                            echo '<i class="' . $class . '" data-value="' . $i . '"></i>';

                            // Berhenti loop jika sudah mencapai nilai rating
                            if ($i == $rating) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
</body>

</html>