<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Survey Kepuasan Masyarakat (SKM)</title>

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/vectoragam.png">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link media rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        /* CSS umum */
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
        }

        .logo {
            max-width: 60px;
        }

        /* Pembatas */
        .divider {
            border-top: 1px solid #000;
            margin-bottom: 3px;
        }

        .jawaban {
            margin-left: 20px;
        }

        .table.table-sm tr td,
        .table.table-sm tr th {
            border-top: none;
            /* Menghilangkan garis bagian atas pada semua baris */
        }

        .h5 {
            font-size: 18px;
        }

        /* SKM Bintang */
        .stars-cetak {
            display: inline-block;
            font-size: 28px;
        }

        .stars-cetak .fa-star {
            color: #707070;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 text-center">
                    <img class="logo" src="<?= base_url('assets/img/agam.png'); ?>" alt="Logo">
                </div>
                <div class="col-sm-8 text-center d-flex justify-content-center align-items-center">
                    <h3>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu<br>Kabupaten Agam</h3>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
    </header>

    <!-- Pembatas -->
    <div class="divider"></div>
    <div class="divider"></div>
    <div class="divider"></div>


    <!-- Judul -->
    <div class="text-center mt-3 mb-3">
        <h4>Data Survey Kepuasan Masyarakat (SKM)</h4>
    </div>

    <?php foreach ($skm->result() as $row) : ?>
        <div class="container-fluid">
            <table class="table table-sm">
                <tr>
                    <td class="h5">Jenis Kelamin</td>
                    <td class="h5">:
                        <?php if ($row->jk == 1) : ?>
                            Laki-Laki
                        <?php elseif ($row->jk == 2) : ?>
                            Perempuan
                        <?php endif ?>
                    </td>

                    <td class="h5">Pekerjaan</td>
                    <td class="h5">:
                        <?php if ($row->pekerjaan == 1) : ?>
                            PNS
                        <?php elseif ($row->pekerjaan == 2) : ?>
                            TNI
                        <?php elseif ($row->pekerjaan == 3) : ?>
                            POLRI
                        <?php elseif ($row->pekerjaan == 4) : ?>
                            Swasta
                        <?php elseif ($row->pekerjaan == 5) : ?>
                            Wirausaha
                        <?php elseif ($row->pekerjaan == 6) : ?>
                            Lainnya
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td class="h5">Umur</td>
                    <td class="h5">:
                        <?= $row->umur; ?> Tahun</td>

                    <td class="h5">Layanan</td>
                    <td class="h5">:
                        <?= $row->layanan; ?>
                    </td>
                </tr>
                <tr>
                    <td class="h5">Pendidikan</td>
                    <td class="h5">:
                        <?php if ($row->pendidikan == 1) : ?>
                            SD Sederajat
                        <?php elseif ($row->pendidikan == 2) : ?>
                            SLTP Sederajat
                        <?php elseif ($row->pendidikan == 3) : ?>
                            SLTA Sederajat
                        <?php elseif ($row->pendidikan == 4) : ?>
                            D3
                        <?php elseif ($row->pendidikan == 5) : ?>
                            S1
                        <?php elseif ($row->pendidikan == 6) : ?>
                            S2
                        <?php endif; ?>
                    </td>

                    <td class="h5">Tanggal Survey</td>
                    <td class="h5">:
                        <?= $row->date; ?>
                    </td>
                </tr>
            </table>

            <div class="divider mb-3"></div>

            <div class="mb-3">
                <h4 class="text-center">Jawaban Responden Tentang Pelayanan Publik</h4>
            </div>
            <table class="table table-sm">
                <tr>
                    <td class="h5">1. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u1 == 4) : ?>
                                Sangat Sesuai
                            <?php elseif ($row->u1 == 3) : ?>
                                Sesuai
                            <?php elseif ($row->u1 == 2) : ?>
                                Kurang Sesuai
                            <?php elseif ($row->u1 == 1) : ?>
                                Tidak Sesuai
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">2. </td>
                    <td class="h5">Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bolder">
                            <?php if ($row->u2 == 4) : ?>
                                Sangat Mudah
                            <?php elseif ($row->u2 == 3) : ?>
                                Mudah
                            <?php elseif ($row->u2 == 2) : ?>
                                Kurang Mudah
                            <?php elseif ($row->u2 == 1) : ?>
                                Tidak Mudah
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">3. </td>
                    <td class="h5">Bagaimana pemahaman Saudara tentang kecepatan waktu dalam memberikan pelayanan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bolder">
                            <?php if ($row->u3 == 4) : ?>
                                Sangat Cepat
                            <?php elseif ($row->u3 == 3) : ?>
                                Cepat
                            <?php elseif ($row->u3 == 2) : ?>
                                Kurang Cepat
                            <?php elseif ($row->u3 == 1) : ?>
                                Tidak Cepat
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">4. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bolder">
                            <?php if ($row->u4 == 4) : ?>
                                Gratis
                            <?php elseif ($row->u4 == 3) : ?>
                                Murah
                            <?php elseif ($row->u4 == 2) : ?>
                                Cukup Mahal
                            <?php elseif ($row->u4 == 1) : ?>
                                Sangat Mahal
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">5. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang kesesuaian pelayanan yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u5 == 4) : ?>
                                Sangat Sesuai
                            <?php elseif ($row->u5 == 3) : ?>
                                Sesuai
                            <?php elseif ($row->u5 == 2) : ?>
                                Kurang Sesuai
                            <?php elseif ($row->u5 == 1) : ?>
                                Tidak Sesuai
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">6. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u6 == 4) : ?>
                                Sangat Kompeten
                            <?php elseif ($row->u6 == 3) : ?>
                                Kompeten
                            <?php elseif ($row->u6 == 2) : ?>
                                Kurang Kompeten
                            <?php elseif ($row->u6 == 1) : ?>
                                Tidak Kompeten
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">7. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u7 == 4) : ?>
                                Sangat Sopan & Ramah
                            <?php elseif ($row->u7 == 3) : ?>
                                Sopan & Ramah
                            <?php elseif ($row->u7 == 2) : ?>
                                Kurang Sopan & Ramah
                            <?php elseif ($row->u7 == 1) : ?>
                                Tidak Sopan & Ramah
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">8. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u8 == 4) : ?>
                                Dikelola Dengan Baik
                            <?php elseif ($row->u8 == 3) : ?>
                                Berfungsi Kurang Maksimal
                            <?php elseif ($row->u8 == 2) : ?>
                                Ada Tetapi Tidak Berfungsi
                            <?php elseif ($row->u8 == 1) : ?>
                                Tidak Ada
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

                <tr>
                    <td class="h5">9. </td>
                    <td class="h5">Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana ?</td>
                </tr>
                <tr>
                    <td class="h5"></td>
                    <td class="h5">Jawaban:
                        <span class="font-weight-bold">
                            <?php if ($row->u9 == 4) : ?>
                                Sangat Baik
                            <?php elseif ($row->u9 == 3) : ?>
                                Baik
                            <?php elseif ($row->u9 == 2) : ?>
                                Cukup Baik
                            <?php elseif ($row->u9 == 1) : ?>
                                Kurang Baik
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="h5"> </td>
                </tr>

            </table>

            <div class="divider mb-3"></div>

            <div class="mb-3">
                <h4 class="text-center">Jawaban Responden Tentang Persepsi Anti Korupsi</h4>
            </div>

            <div class="form-group">
                <h5>1. Tidak ada deskriminasi pelayanan pada unit layanan ini.</h5>
                <div class="stars-cetak" data-rating="rating_1">
                    <?php
                    $rating = $row->r1; // Ambil nilai rating dari $row->r1

                    // Loop untuk menghasilkan bintang sesuai dengan nilai rating
                    for ($i = 1; $i <= 6; $i++) {
                        $class = ($i <= $rating) ? 'fas fa-star' : 'far fa-star'; // Tentukan kelas bintang, jika $i kurang dari atau sama dengan $rating maka berikan kelas fas fa-star, jika tidak berikan kelas far fa-star
                        $starColor = ($i <= $rating) ? '#ffd700' : '#707070'; // Tentukan warna bintang, jika $i kurang dari atau sama dengan $rating maka berikan warna kuning (#ffd700), jika tidak kosongkan warna agar mengikuti default

                        echo '<i class="' . $class . '" data-value="' . $i . '" style="color: ' . $starColor . '; border-color: #000;"></i>'; // Tampilkan bintang dengan kelas dan warna yang sudah ditentukan
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <h5>2. Tidak ada pelayanan diluar prosedur/kecurangan pelayanan pada unit layanan ini.</h5>
                <div class="stars-cetak" data-rating="rating_2">
                    <?php
                    $rating = $row->r2;

                    for ($i = 1; $i <= 6; $i++) {
                        $class = ($i <= $rating) ? 'fas fa-star' : 'far fa-star';
                        $starColor = ($i <= $rating) ? '#ffd700' : '#707070';

                        echo '<i class="' . $class . '" data-value="' . $i . '" style="color: ' . $starColor . '; border-color: #000;"></i>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <h5>3. Tidak ada penerimaan imbalan uang/barang/fasilitas diluar ketentuan yang berlaku pada unit layanan ini.</h5>
                <div class="stars-cetak" data-rating="rating_3">
                    <?php
                    $rating = $row->r3;

                    for ($i = 1; $i <= 6; $i++) {
                        $class = ($i <= $rating) ? 'fas fa-star' : 'far fa-star';
                        $starColor = ($i <= $rating) ? '#ffd700' : '#707070';

                        echo '<i class="' . $class . '" data-value="' . $i . '" style="color: ' . $starColor . '; border-color: #000;"></i>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <h5>4. Tidak ada pungutan liar (pungli) pada unit layanan ini.</h5>
                <div class="stars-cetak" data-rating="rating_4">
                    <?php
                    $rating = $row->r4;

                    for ($i = 1; $i <= 6; $i++) {
                        $class = ($i <= $rating) ? 'fas fa-star' : 'far fa-star';
                        $starColor = ($i <= $rating) ? '#ffd700' : '#707070';

                        echo '<i class="' . $class . '" data-value="' . $i . '" style="color: ' . $starColor . '; border-color: #000;"></i>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <h5>5. Tidak ada percaloan/perantara tidak resmi pada unit layanan ini.</h5>
                <div class="stars-cetak" data-rating="rating_5">
                    <?php
                    $rating = $row->r5;

                    for ($i = 1; $i <= 6; $i++) {
                        $class = ($i <= $rating) ? 'fas fa-star' : 'far fa-star';
                        $starColor = ($i <= $rating) ? '#ffd700' : '#707070';

                        echo '<i class="' . $class . '" data-value="' . $i . '" style="color: ' . $starColor . '; border-color: #000;"></i>';
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Tabel Data -->
    <!-- <table class="table">
        <thead>
            <tr>
                <th class="text-center align-middle">Jenis Kelamin</th>
                <th class="text-center align-middle">Umur</th>
                <th class="text-center align-middle">Pendidikan</th>
                <th class="text-center align-middle">Pekerjaan</th>
                <th class="text-center align-middle">Layanan</th>
                <th class="text-center align-middle">U1</th>
                <th class="text-center align-middle">U2</th>
                <th class="text-center align-middle">U3</th>
                <th class="text-center align-middle">U4</th>
                <th class="text-center align-middle">U5</th>
                <th class="text-center align-middle">U6</th>
                <th class="text-center align-middle">U7</th>
                <th class="text-center align-middle">U8</th>
                <th class="text-center align-middle">U9</th>
                <th class="text-center align-middle">R1</th>
                <th class="text-center align-middle">R2</th>
                <th class="text-center align-middle">R3</th>
                <th class="text-center align-middle">R4</th>
                <th class="text-center align-middle">R5</th>
                <th class="text-center align-middle">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($skm->result() as $row) : ?>
                <tr>
                    <td class="text-center align-middle"><?= $row->jk; ?></td>
                    <td class="text-center align-middle"><?= $row->umur; ?></td>
                    <td class="text-center align-middle"><?= $row->pendidikan; ?></td>
                    <td class="text-center align-middle"><?= $row->pekerjaan; ?></td>
                    <td class="text-center align-middle"><?= $row->layanan; ?></td>
                    <td class="text-center align-middle"><?= $row->u1; ?></td>
                    <td class="text-center align-middle"><?= $row->u2; ?></td>
                    <td class="text-center align-middle"><?= $row->u3; ?></td>
                    <td class="text-center align-middle"><?= $row->u4; ?></td>
                    <td class="text-center align-middle"><?= $row->u5; ?></td>
                    <td class="text-center align-middle"><?= $row->u6; ?></td>
                    <td class="text-center align-middle"><?= $row->u7; ?></td>
                    <td class="text-center align-middle"><?= $row->u8; ?></td>
                    <td class="text-center align-middle"><?= $row->u9; ?></td>
                    <td class="text-center align-middle"><?= $row->r1; ?></td>
                    <td class="text-center align-middle"><?= $row->r2; ?></td>
                    <td class="text-center align-middle"><?= $row->r3; ?></td>
                    <td class="text-center align-middle"><?= $row->r4; ?></td>
                    <td class="text-center align-middle"><?= $row->r5; ?></td>
                    <td class="text-center align-middle"><?= $row->date; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> -->

    <!-- Bootstrap JS (for optional functionalities) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Script untuk mencetak otomatis saat halaman dimuat -->
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>