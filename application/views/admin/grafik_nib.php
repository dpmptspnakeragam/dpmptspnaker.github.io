<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik NIB</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Grafik NIB Yang Diterbitkan</h3>
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
                </div><br>
                <!-- start: Accordion -->
                <div class="row">
                    <div class="col-6">
                        <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikNIB"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless table-hover">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">PMDN/PMA & UMK/Non UMK</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($grafik_nib->result() as $row) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nib; ?></td>
                                            <td><?= $row->jumlah; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikNIB<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_nib/hapus_nib/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nib; ?>?')"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <canvas id="grafiknib" width="100%"></canvas>
                        <?php
                        $nama_nib = "";
                        $total = null;
                        foreach ($grafik_nib->result() as $item) {
                            $nama = $item->nib;
                            $nama_nib .= "'$nama'" . ", ";
                            $jum = $item->jumlah;
                            $total .= "$jum" . ", ";
                        }
                        ?>
                        <script>
                            var kanvasnib = document.getElementById("grafiknib").getContext("2d");

                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 12;

                            var nilai = {
                                labels: [<?php echo $nama_nib; ?>],
                                datasets: [{
                                    label: "Jumlah",
                                    data: [<?php echo $total; ?>],
                                    backgroundColor: ['#8bfd43', '#fdfd43', '#8bfd43', '#fdfd43']
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

                            var lineChart = new Chart(kanvasnib, {
                                type: 'bar',
                                data: nilai,
                                options: chartOptions
                            });
                        </script>
                    </div>
                    <div class="col-6">
                        <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikRisiko"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless table-hover">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Risiko</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($grafik_risiko->result() as $row) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->risiko; ?></td>
                                            <td><?= $row->jumlah; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikRisiko<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_nib/hapus_risiko/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->risiko; ?>?')"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <canvas id="grafikrisiko" width="100%"></canvas>
                        <?php
                        $nama_risiko = "";
                        $total = null;
                        foreach ($grafik_risiko->result() as $item) {
                            $nama = $item->risiko;
                            $nama_risiko .= "'$nama'" . ", ";
                            $jum = $item->jumlah;
                            $total .= "$jum" . ", ";
                        }
                        ?>
                        <script>
                            var kanvasrisiko = document.getElementById("grafikrisiko").getContext("2d");

                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 12;

                            var nilai = {
                                labels: [<?php echo $nama_risiko; ?>],
                                datasets: [{
                                    label: "Jumlah",
                                    data: [<?php echo $total; ?>],
                                    backgroundColor: ['#8bfd43', '#fdfd43', '#fe9643', '#ff4442']
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

                            var lineChart = new Chart(kanvasrisiko, {
                                type: 'doughnut',
                                data: nilai,
                                options: chartOptions
                            });
                        </script>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikKecamatan"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless table-hover">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Kecamatan</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($grafik_kecamatan->result() as $row) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->kecamatan; ?></td>
                                            <td><?= $row->jumlah; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikKecamatan<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_nib/hapus_kecamatan/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->kecamatan; ?>?')"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <canvas id="grafikkecamatan" width="100%"></canvas>
                        <?php
                        $nama_kecamatan = "";
                        $total = null;
                        foreach ($grafik_kecamatan->result() as $item) {
                            $nama = $item->kecamatan;
                            $nama_kecamatan .= "'$nama'" . ", ";
                            $jum = $item->jumlah;
                            $total .= "$jum" . ", ";
                        }
                        ?>
                        <script>
                            var kanvaskecamatan = document.getElementById("grafikkecamatan").getContext("2d");

                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 12;

                            var nilai = {
                                labels: [<?php echo $nama_kecamatan; ?>],
                                datasets: [{
                                    label: "Jumlah",
                                    data: [<?php echo $total; ?>],
                                    backgroundColor: ['#42ccff', '#8bfd43', '#fdfd43', '#fe9643', '#ff4442']
                                }]
                            };

                            var chartOptions = {
                                indexAxis: 'y',
                                legend: {
                                    display: true,
                                    position: 'top',
                                    labels: {
                                        boxWidth: 80,
                                        fontColor: 'black'
                                    }
                                },
                                scales: {
                                    xAxes: [{
                                        ticks: {
                                            min: 0 // Edit the value according to what you need
                                        }
                                    }],
                                    yAxes: [{
                                        stacked: true
                                    }]
                                }
                            };

                            var lineChart = new Chart(kanvaskecamatan, {
                                type: 'horizontalBar',
                                data: nilai,
                                options: chartOptions
                            });
                        </script>
                    </div>
                    <div class="col-6">
                        <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikKbli"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless table-hover">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">KBLI</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($grafik_kbli->result() as $row) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->kbli; ?></td>
                                            <td><?= $row->jumlah; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikKbli<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_nib/hapus_kbli/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->kbli; ?>?')"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <canvas id="grafikkbli" width="100%"></canvas>
                        <?php
                        $nama_kbli = "";
                        $total = null;
                        foreach ($grafik_kbli->result() as $item) {
                            $kbli = $item->kbli;
                            $nama_kbli .= "'$kbli'" . ", ";
                            $jum = $item->jumlah;
                            $total .= "$jum" . ", ";
                        }
                        ?>
                        <script>
                            var kanvaskbli = document.getElementById("grafikkbli").getContext("2d");

                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 12;

                            var nilai = {
                                labels: [<?php echo $nama_kbli; ?>],
                                datasets: [{
                                    label: "Jumlah",
                                    data: [<?php echo $total; ?>],
                                    backgroundColor: ['#42ccff', '#8bfd43', '#fdfd43', '#fe9643', '#ff4442']
                                }]
                            };

                            var chartOptions = {
                                indexAxis: 'y',
                                legend: {
                                    display: true,
                                    position: 'top',
                                    labels: {
                                        boxWidth: 80,
                                        fontColor: 'black'
                                    }
                                },
                                scales: {
                                    xAxes: [{
                                        ticks: {
                                            min: 0 // Edit the value according to what you need
                                        }
                                    }],
                                    yAxes: [{
                                        stacked: true,
                                        ticks: {
                                            mirror: true
                                        }
                                    }]
                                },
                                events: false,
                                showTooltips: false,
                                animation: {
                                    duration: 500,
                                    easing: "easeOutQuart",
                                    onComplete: function() {
                                        var ctx = this.chart.ctx;
                                        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                                        ctx.textAlign = 'left';
                                        ctx.textBaseline = 'bottom';
                                        this.data.datasets.forEach(function(dataset) {
                                            console.log(dataset);
                                            for (var i = 0; i < dataset.data.length; i++) {
                                                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                                left = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.left;
                                                offset = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.longestLabelWidth;
                                                ctx.fillStyle = '#000';
                                                var y_pos = model.y - 5;
                                                var label = model.label;
                                                // Make sure data value does not get overflown and hidden
                                                // when the bar's value is too close to max value of scale
                                                // Note: The y value is reverse, it counts from top down
                                                if ((scale_max - model.y) / scale_max >= 0.93)
                                                    y_pos = model.y + 20;
                                                // ctx.fillText(dataset.data[i], model.x, y_pos);
                                                ctx.fillText(label, left + 10, model.y + 8);
                                            }
                                        });
                                    }
                                }
                            };

                            var lineChart = new Chart(kanvaskbli, {
                                type: 'horizontalBar',
                                data: nilai,
                                options: chartOptions
                            });
                        </script>
                    </div>
                </div>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>