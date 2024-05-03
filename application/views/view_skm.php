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
                                        <h1 class="text-info" style="font-size: 110px;"><strong><?= round($ikm, 2); ?></strong></h1>
                                    </div>
                                    <div class="col-lg-6 col-12 text-center">
                                        <h6>NAMA LAYANAN : PERIZINAN & NON PERIZINAN</h6>
                                        <hr>
                                        <p><strong>RESPONDEN</strong></p>
                                        <P><strong>JUMLAH</strong> : <?= number_format($jumlah); ?> ORANG</P>
                                        <p><strong>LAKI-LAKI</strong> : <?= number_format($jmlh_lk); ?> ORANG / <strong>PEREMPUAN</strong> : <?= number_format($jmlh_pr); ?> ORANG</p>
                                        <div class="row">
                                            <div class="col-6 text-left">
                                                <p><strong>PENDIDIKAN</strong></p>
                                                <ul>
                                                    <li>SD : <?= number_format($jmlh_sd); ?> ORANG</li>
                                                    <li>SMP : <?= number_format($jmlh_smp); ?> ORANG</li>
                                                    <li>SMA : <?= number_format($jmlh_sma); ?> ORANG</li>
                                                    <li>DI/DII/DIII : <?= number_format($jmlh_d1); ?> ORANG</li>
                                                    <li>DIV/S1 : <?= number_format($jmlh_s1); ?> ORANG</li>
                                                    <li>S2 : <?= number_format($jmlh_s2); ?> ORANG</li>
                                                </ul>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p><strong>PEKERJAAN</strong></p>
                                                <ul>
                                                    <li>PNS : <?= number_format($jmlh_pns); ?> ORANG</li>
                                                    <li>TNI : <?= number_format($jmlh_tni); ?> ORANG</li>
                                                    <li>POLRI : <?= number_format($jmlh_polri); ?> ORANG</li>
                                                    <li>SWASTA : <?= number_format($jmlh_swasta); ?> ORANG</li>
                                                    <li>WIRAUSAHA : <?= number_format($jmlh_wirausaha); ?> ORANG</li>
                                                    <li>LAINNYA : <?= number_format($jmlh_lainnya); ?> ORANG</li>
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

                                <!-- GRAFIK SURVEY NILAI PER UNSUR -->
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3><strong>Grafik Nilai Per Unsur</strong></h3>
                                                <div class="position-relative">
                                                    <canvas id="barChartPerUnsur" height="350"></canvas>
                                                    <script>
                                                        var kanvasunsur = document.getElementById("barChartPerUnsur").getContext("2d");

                                                        Chart.defaults.global.defaultFontFamily = "Lato";
                                                        Chart.defaults.global.defaultFontSize = 14;

                                                        var nilai = {
                                                            labels: ["Persyaratan", "Prosedur", "Kecepatan", "Tarif", "Kesesuaian", "Kompeten", "Perilaku", "Penanganan", "Sarana"],
                                                            datasets: [{
                                                                label: "Nilai Rata-Rata",
                                                                data: [<?= $u1; ?>, <?= $u2; ?>, <?= $u3; ?>, <?= $u4; ?>, <?= $u5; ?>, <?= $u6; ?>, <?= $u7; ?>, <?= $u8; ?>, <?= $u9; ?>],
                                                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                                borderColor: 'rgba(54, 162, 235, 1)',
                                                                borderWidth: 2,
                                                                pointBackgroundColor: 'rgba(255, 159, 64, 1)',
                                                                pointBorderColor: '#fff',
                                                                pointBorderWidth: 2,
                                                                pointRadius: 5,
                                                                pointHoverRadius: 8,
                                                                pointHoverBackgroundColor: '#ff6b6b',
                                                                pointHoverBorderColor: '#fff',
                                                                pointHoverBorderWidth: 2,
                                                                pointStyle: 'circle'
                                                            }]
                                                        };

                                                        var chartOptions = {
                                                            responsive: true, // Grafik akan menyesuaikan ukuran layar
                                                            maintainAspectRatio: false, // Grafik tidak akan mempertahankan rasio aspek
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero: true,
                                                                        fontColor: 'black',
                                                                        fontSize: 12,
                                                                    },
                                                                    gridLines: {
                                                                        color: 'rgba(0, 0, 0, 0.1)'
                                                                    }
                                                                }],
                                                                xAxes: [{
                                                                    ticks: {
                                                                        fontColor: 'black',
                                                                        fontSize: 12,
                                                                        fontStyle: 'bold'
                                                                    },
                                                                    gridLines: {
                                                                        color: 'rgba(0, 0, 0, 0.1)'
                                                                    }
                                                                }]
                                                            },
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

                                <!-- GRAFIK SURVEY PERSEPSI KUALITAS PELAYANAN (SPKP) dan PERSEPSI ANTI KORUPSI (SPAK) -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <h5 class="text-center"><strong>Grafik Rating <br> Survey Persepsi Kualitas Pelayanan (SPKP)</strong></h5>
                                                <div class="position-relative">
                                                    <canvas id="barChartSPKP" height="275"></canvas>
                                                    <!-- Bar grafik SPKP (Survey Persepsi Kualitas Pelayanan) -->
                                                    <script>
                                                        var avg_values = <?= json_encode($rating_spkp) ?>;

                                                        var chart_data = [];
                                                        var percentages = [];
                                                        for (var i = 1; i <= 6; i++) {
                                                            chart_data.push(avg_values[i]['total']);
                                                            percentages.push(avg_values[i]['percentage']);
                                                        }

                                                        var $barChart = document.getElementById('barChartSPKP').getContext('2d');

                                                        var barChart = new Chart($barChart, {
                                                            type: 'bar',
                                                            data: {
                                                                labels: ['Bintang 1', 'Bintang 2', 'Bintang 3', 'Bintang 4', 'Bintang 5', 'Bintang 6'],
                                                                datasets: [{
                                                                    label: 'Total Bintang',
                                                                    backgroundColor: '#FFD700',
                                                                    borderColor: '#FFD700',
                                                                    borderWidth: 1,
                                                                    data: chart_data
                                                                }, {
                                                                    label: 'Persentase',
                                                                    backgroundColor: '#007bff',
                                                                    borderColor: '#007bff',
                                                                    borderWidth: 1,
                                                                    data: percentages
                                                                }]
                                                            },
                                                            options: {
                                                                maintainAspectRatio: false,
                                                                tooltips: {
                                                                    mode: 'index',
                                                                    intersect: false,
                                                                    callbacks: {
                                                                        label: function(tooltipItem, data) {
                                                                            var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || '';
                                                                            var value = tooltipItem.yLabel;
                                                                            if (datasetLabel === 'Persentase') {
                                                                                value += '%'; // Menambahkan simbol "%" untuk persentase
                                                                            }
                                                                            return datasetLabel + ': ' + value;
                                                                        }
                                                                    }
                                                                },
                                                                hover: {
                                                                    mode: 'index',
                                                                    intersect: true
                                                                },
                                                                legend: {
                                                                    display: true,
                                                                    labels: {
                                                                        fontColor: 'black'
                                                                    }
                                                                },
                                                                title: {
                                                                    display: false,
                                                                    // text: 'Grafik Rating Survei'
                                                                },
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true,
                                                                            fontColor: 'black',
                                                                            fontSize: 12,
                                                                            // fontStyle: 'bold'
                                                                        },
                                                                    }],
                                                                    xAxes: [{
                                                                        ticks: {
                                                                            fontColor: 'black',
                                                                            fontSize: 12,
                                                                            fontStyle: 'bold'
                                                                        },
                                                                    }]
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <h5 class="text-center"><strong>Grafik Rating <br> Survey Persepsi Anti Korupsi (SPAK)</strong></h5>
                                                <div class="position-relative">
                                                    <canvas id="barChartSPAK" height="275"></canvas>
                                                    <!-- Bar grafik SPAK (Survey Persepsi Anti Korupsi) -->
                                                    <script>
                                                        var avg_values = <?= json_encode($rating_antikorupsi) ?>;

                                                        var chart_data = [];
                                                        var percentages = [];
                                                        for (var i = 1; i <= 6; i++) {
                                                            chart_data.push(avg_values[i]['total']);
                                                            percentages.push(avg_values[i]['percentage']);
                                                        }

                                                        var $barChart = document.getElementById('barChartSPAK').getContext('2d');

                                                        var barChart = new Chart($barChart, {
                                                            type: 'bar',
                                                            data: {
                                                                labels: ['Bintang 1', 'Bintang 2', 'Bintang 3', 'Bintang 4', 'Bintang 5', 'Bintang 6'],
                                                                datasets: [{
                                                                    label: 'Total Bintang',
                                                                    backgroundColor: '#FFD700',
                                                                    borderColor: '#FFD700',
                                                                    borderWidth: 1,
                                                                    data: chart_data
                                                                }, {
                                                                    label: 'Persentase',
                                                                    backgroundColor: '#e9724d',
                                                                    borderColor: '#e9724d',
                                                                    borderWidth: 1,
                                                                    data: percentages
                                                                }]
                                                            },
                                                            options: {
                                                                maintainAspectRatio: false,
                                                                tooltips: {
                                                                    mode: 'index',
                                                                    intersect: false,
                                                                    callbacks: {
                                                                        label: function(tooltipItem, data) {
                                                                            var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || '';
                                                                            var value = tooltipItem.yLabel;
                                                                            if (datasetLabel === 'Persentase') {
                                                                                value += '%'; // Menambahkan simbol "%" untuk persentase
                                                                            }
                                                                            return datasetLabel + ': ' + value;
                                                                        }
                                                                    }
                                                                },
                                                                hover: {
                                                                    mode: 'index',
                                                                    intersect: true
                                                                },
                                                                legend: {
                                                                    display: true,
                                                                    labels: {
                                                                        fontColor: 'black'
                                                                    }
                                                                },
                                                                title: {
                                                                    display: false,
                                                                    text: 'Grafik Rating Survei'
                                                                },
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true,
                                                                            fontColor: 'black',
                                                                            fontSize: 12,
                                                                            // fontStyle: 'bold'
                                                                        },
                                                                    }],
                                                                    xAxes: [{
                                                                        ticks: {
                                                                            fontColor: 'black',
                                                                            fontSize: 12,
                                                                            fontStyle: 'bold'
                                                                        },
                                                                    }]
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
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