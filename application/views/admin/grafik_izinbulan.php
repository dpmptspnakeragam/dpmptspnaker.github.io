<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik Izin Keluar /Bulan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Grafik Izin Terbit /Tahun</h3>
                <!---<h5 class="text-center"> Periode
                    <?php
                    $no = 1;
                    foreach ($periode_grafik_izinbulan->result() as $graph) {
                    ?>
                        <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?> <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPeriodeGrafikIzinBulan<?php echo $graph->id_periode; ?>" title="Edit"><i class="fa fa-edit"></i></a>

                    <?php } ?>
                </h5>--->
                <hr>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikIzinBulan"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Izin</th>
                                <th class="text-center">2020</th>
                                <th class="text-center">2021</th>
                                <th class="text-center">2022</th>
                                <th class="text-center">2023</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($grafik->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->izin; ?></td>
                                    <td><?= $row->thn2020; ?></td>
                                    <td><?= $row->thn2021; ?></td>
                                    <td><?= $row->thn2022; ?></td>
                                    <td><?= $row->thn2023; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikIzinBulan<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_izinbulan/hapus/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->izin; ?>?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--end: Accordion -->
            </div>
            <div class="col-lg-12 bg-dark text-light">
                <canvas id="myChart"></canvas>
                <?php
                //Inisialisasi nilai variabel awal
                $nama_izin = "";
                $total = null;
                $total2 = null;
                $total3 = null;
                $total4 = null;
                foreach ($grafik->result() as $item) {
                    $nama = $item->izin;
                    $nama_izin .= "'$nama'" . ", ";
                    $jum = $item->thn2020;
                    $total .= "$jum" . ", ";
                    $jum2 = $item->thn2021;
                    $total2 .= "$jum2" . ", ";
                    $jum3 = $item->thn2022;
                    $total3 .= "$jum3" . ", ";
                    $jum4 = $item->thn2023;
                    $total4 .= "$jum4" . ", ";
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<script>
    var tahun = new Date().getFullYear();
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = {
        labels: [<?php echo $nama_izin; ?>],
        datasets: [{
            label: "Tahun 2020",
            backgroundColor: '#fb836f',
            data: [<?php echo $total; ?>]
        }, {
            label: "Tahun 2021",
            backgroundColor: '#7e549f',
            data: [<?php echo $total2; ?>]
        }, {
            label: "Tahun 2022",
            backgroundColor: '#7e549f',
            data: [<?php echo $total3; ?>]
        }, {
            label: "Tahun 2023",
            backgroundColor: '#7e549f',
            data: [<?php echo $total4; ?>]
        }]
    };
    var chart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            legend: {
                labels: {
                    fontColor: 'white'
                }
            },
            "hover": {
                "animationDuration": 0
            },
            "animation": {
                "duration": 1,
                "onComplete": function() {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;

                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function(dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            },
            tooltips: {
                mode: 'index',
                intersect: true
            },
            responsive: true,
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: 'white'
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: 'white'
                    }
                }]
            }
        }
    });
</script>