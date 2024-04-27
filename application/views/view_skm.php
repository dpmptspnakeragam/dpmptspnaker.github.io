<body class="layout-top-nav layout-navbar-fixed bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="main-header navbar navbar-expand-md navbar-dark bg-dark fixed-top navbar-white">
        <div class="container-fluid">
            <a href="<?= base_url('skm/form'); ?>" class="navbar-brand">
                <span class="brand-text font-weight-light font-weight-bold"><i class="fas fa-file"></i> Survey Kepuasan Masyarakat (SKM)</span>
            </a>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a class="nav-link mt-2" data-widget="control-sidebar" data-slide="true" href="<?= base_url('home'); ?>" role="button">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        @media (max-width: 991.98px) {
            .navbar-brand {
                display: none;
                /* Sembunyikan brand pada hp dan tablet */
            }
        }
    </style>

    <div class="content-wrapper mb-3">
        <!-- Content Header (Page header) -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 33px;">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <p class="h5">
                                    <strong>
                                        Indeks Kepuasan Masyarakat (IKM)
                                        <br>
                                        Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu
                                        <br>
                                        Kabupaten Agam
                                    </strong>
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="panel-heading">
                                    <?php if ($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('gagal'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata('berhasil')) : ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('berhasil'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="<?= base_url(); ?>skm/form" class="btn btn-success">Lakukan Survey</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-12 text-center">
                                        <h1>NILAI IKM</h1>
                                        <h1 class="text-info" style="font-size: 135px;"><strong><?php echo round($ikm, 2); ?></strong></h1>
                                    </div>
                                    <div class="col-lg-6 col-12 text-center">
                                        <h6>NAMA LAYANAN : PERIZINAN & NON PERIZINAN</h6>
                                        <hr>
                                        <p><strong>RESPONDEN</strong></p>
                                        <P><strong>JUMLAH</strong> : <?php echo number_format($jumlah); ?> ORANG</P>
                                        <p><strong>LAKI-LAKI</strong> : <?php echo number_format($jmlh_lk); ?> ORANG / <strong>PEREMPUAN</strong> : <?php echo number_format($jmlh_pr); ?> ORANG</p>
                                        <div class="row">
                                            <div class="col-6 text-left">
                                                <p><strong>PENDIDIKAN</strong></p>
                                                <ul>
                                                    <li>SD : <?php echo number_format($jmlh_sd); ?> ORANG</li>
                                                    <li>SMP : <?php echo number_format($jmlh_smp); ?> ORANG</li>
                                                    <li>SMA : <?php echo number_format($jmlh_sma); ?> ORANG</li>
                                                    <li>DI/DII/DIII : <?php echo number_format($jmlh_d1); ?> ORANG</li>
                                                    <li>DIV/S1 : <?php echo number_format($jmlh_s1); ?> ORANG</li>
                                                    <li>S2 : <?php echo number_format($jmlh_s2); ?> ORANG</li>
                                                </ul>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p><strong>PEKERJAAN</strong></p>
                                                <ul>
                                                    <li>PNS : <?php echo number_format($jmlh_pns); ?> ORANG</li>
                                                    <li>TNI : <?php echo number_format($jmlh_tni); ?> ORANG</li>
                                                    <li>POLRI : <?php echo number_format($jmlh_polri); ?> ORANG</li>
                                                    <li>SWASTA : <?php echo number_format($jmlh_swasta); ?> ORANG</li>
                                                    <li>WIRAUSAHA : <?php echo number_format($jmlh_wirausaha); ?> ORANG</li>
                                                    <li>LAINNYA : <?php echo number_format($jmlh_lainnya); ?> ORANG</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p><strong>TERIMA KASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN
                                                MASUKKAN ANDA SANGAT BERMANFAAT BAGI KEMAJUAN DINAS KAMI AGAR TERUS MEMPERBAIKI
                                                DAN MENNGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT</strong></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <p>MUTU PELAYANAN
                                        <ul>
                                            <li><strong>A (Sangat Baik)</strong> : 88,31 - 100,00</li>
                                            <li><strong>B (Baik)</strong> : 76,61 - 88,30</li>
                                            <li><strong>C (Kurang Baik)</strong> : 65,00 - 76,00)</li>
                                            <li><strong>D (Tidak Baik)</strong> : 25,00 - 64,99</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center p-3">
                                        <h3><strong>Grafik Nilai Per Unsur</strong></h3>
                                        <canvas id="grafikunsur" width="100%"></canvas>
                                        <script>
                                            var kanvasunsur = document.getElementById("grafikunsur").getContext("2d");

                                            Chart.defaults.global.defaultFontFamily = "Lato";
                                            Chart.defaults.global.defaultFontSize = 14;

                                            var nilai = {
                                                labels: ["Persyaratan", "Prosedur", "Kecepatan", "Tarif", "Kesesuaian", "Kompeten", "Perilaku", "Penanganan", "Sarana"],
                                                datasets: [{
                                                    label: "Nilai Rata-Rata",
                                                    data: [<?php echo $u1; ?>, <?php echo $u2; ?>, <?php echo $u3; ?>, <?php echo $u4; ?>, <?php echo $u5; ?>, <?php echo $u6; ?>, <?php echo $u7; ?>, <?php echo $u8; ?>, <?php echo $u9; ?>],
                                                    lineTension: 0,
                                                    fill: false,
                                                    beginAtZero: true,
                                                    borderColor: 'maroon',
                                                    backgroundColor: 'transparent',
                                                    pointBorderColor: 'yellow',
                                                    pointBackgroundColor: 'rgba(255,150,0,0.5)',
                                                    pointRadius: 5,
                                                    pointHoverRadius: 10,
                                                    pointHitRadius: 30,
                                                    pointBorderWidth: 2,
                                                    pointStyle: 'rectRounded'
                                                }]
                                            };

                                            var chartOptions = {
                                                legend: {
                                                    display: true,
                                                    position: 'top',
                                                    labels: {
                                                        boxWidth: 80,
                                                        fontColor: 'black'
                                                    }
                                                }
                                            };

                                            var lineChart = new Chart(kanvasunsur, {
                                                type: 'line',
                                                data: nilai,
                                                options: chartOptions
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</body>