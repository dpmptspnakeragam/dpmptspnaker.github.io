<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik Survey Kepuasan Masyarakat</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h3 class="text-center">Grafik Survey Kepuasan Masyarakat</h3>
                <h5 class="text-center">Periode
                    <?php
                    $no = 1;
                    foreach ($periode_grafik_skm->result() as $graph) {
                    ?>
                        <?= date("Y", strtotime($graph->tgl_awal)); ?> s/d <?= date("Y", strtotime($graph->tgl_akhir)); ?> <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPeriodeGrafikSkm<?php echo $graph->id_periode; ?>" title="Edit"><i class="fa fa-edit"></i></a>

                    <?php } ?>
                </h5>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikSkm"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div>
            </div>

            <br>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-3">
                        <div class="card table-responsive shadow-sm">
                            <table class="card-header table table-striped table-borderless table-hover">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Tahun</th>
                                        <th class="text-center">Semester I</th>
                                        <th class="text-center">Semester II</th>
                                        <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($grafik_skm->result() as $row) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->tahun; ?></td>
                                            <td><?= $row->nilai; ?></td>
                                            <td><?= $row->nilai2; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikSkm<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_skm/hapus/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->tahun; ?>?')"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-header text-center bg-dark text-white">
                                <label>Grafik SKM</label>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>
                            <?php
                            //Inisialisasi nilai variabel awal
                            $tahun_skm = "";
                            $total = null;
                            $total2 = null;
                            foreach ($grafik_skm->result() as $item) {
                                $nama = $item->tahun;
                                $tahun_skm .= "'$nama'" . ", ";
                                $jum = $item->nilai;
                                $total .= "$jum" . ", ";
                                $jum2 = $item->nilai2;
                                $total2 .= "$jum2" . ", ";
                            }
                            ?>
                            <script>
                                var tahun = new Date().getFullYear();
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var data = {
                                    labels: [<?php echo $tahun_skm; ?>],
                                    datasets: [{
                                        label: "Semester I",
                                        backgroundColor: '#0037B3',
                                        data: [<?php echo $total; ?>]
                                    }, {
                                        label: "Semester II",
                                        backgroundColor: '#70BAFF',
                                        data: [<?php echo $total2; ?>]
                                    }]
                                };
                                var chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: data,
                                    options: {
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
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card table-responsive shadow-sm">
                    <div class="card-header text-center">
                        <span>Indeks Kepuasan Masyarakat (IKM)</span>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-3" data-toggle="modal" data-target="#TambahIKM"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                        <table class="table table-striped table-borderless table-hover">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Preview</th>
                                    <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($skm_gambar as $data) {
                                ?>
                                    <tr class="odd gradeX">
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $data['title']; ?></td>
                                        <td class="text-center align-middle">
                                            <img src="<?= base_url('assets/imgupload/' . $data['file_name']); ?>" style="width:250px;" class="img-responsive">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditIKM<?= $data['id_skm_gambar']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_skm/hapus_skm_gambar/<?= $data['id_skm_gambar']; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $data['file_name']; ?>?')"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>