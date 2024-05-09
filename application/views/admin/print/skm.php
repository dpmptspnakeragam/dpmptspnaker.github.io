<!DOCTYPE html>
<html>

<head>
    <title>Cetak Survey Kepuasan Masyarakat</title>
</head>

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
</style>

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

    <?php foreach ($skm as $row) : ?>
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <tr>
                <td>Jenis Kelamin</td>
                <td>:
                    <?php if ($row->jk == 1) : ?>
                        Laki-Laki
                    <?php elseif ($row->jk == 2) : ?>
                        Perempuan
                    <?php endif ?>
                </td>

                <td>Pekerjaan</td>
                <td>:
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
                <td>Umur</td>
                <td>:
                    <?= $row->umur; ?> Tahun</td>

                <td>Layanan</td>
                <td>:
                    <?= $row->layanan; ?>
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:
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

                <td>Tanggal Survey</td>
                <td>:
                    <?= date('d-m-Y / H:i', strtotime($row->date)); ?> WIB
                </td>
            </tr>
        </table>

        <div style="margin-top: 15px;" class="bold">
            <span>Jawaban Responden Tentang Pelayanan Publik:</span>
        </div>
        <table class="table table-sm">
            <tr>
                <td class="d-block">1. </td>
                <td>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">2. </td>
                <td>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">3. </td>
                <td>Bagaimana pemahaman Saudara tentang kecepatan waktu dalam memberikan pelayanan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">4. </td>
                <td>Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">5. </td>
                <td>Bagaimana pendapat Saudara tentang kesesuaian pelayanan yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">6. </td>
                <td>Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">7. </td>
                <td>Bagaimana pendapat Saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td class="d-block">8. </td>
                <td>Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

            <tr>
                <td>9. </td>
                <td>Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</td>
            </tr>
            <tr>
                <td></td>
                <td>Jawaban:
                    <span class="bold">
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
                <td> </td>
            </tr>

        </table>
    <?php endforeach; ?>
</body>

</html>