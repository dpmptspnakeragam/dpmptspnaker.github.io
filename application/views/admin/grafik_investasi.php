<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik Realisasi Investasi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Grafik Realisasi Investasi</h3>
                <h5 class="text-center"> Periode
                    <?php
                    $no = 1;
                    foreach ($periode_grafik_investasi->result() as $graph) {
                    ?>
                        <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?> <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPeriodeGrafikInvestasi<?php echo $graph->id_periode; ?>" title="Edit"><i class="fa fa-edit"></i></a>

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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahGrafikInvestasi"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Nilai</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($grafik_investasi->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->tahun; ?></td>
                                    <td><?= $row->nilai; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditGrafikInvestasi<?php echo $row->id_grafik; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/grafik_investasi/hapus/<?php echo $row->id_grafik; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->tahun; ?>?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--end: Accordion -->
            </div>
            <div class="col-lg-12">
                <canvas id="myChart"></canvas>
                <?php
                //Inisialisasi nilai variabel awal
                $tahun_investasi = "";
                $total = null;
                foreach ($grafik_investasi->result() as $item) {
                    $nama = $item->tahun;
                    $tahun_investasi .= "'$nama'" . ", ";
                    $jum = $item->nilai;
                    $total .= "$jum" . ", ";
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
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $tahun_investasi; ?>],
            datasets: [{
                label: "Nilai",
                backgroundColor: 'maroon',
                data: [<?php echo $total; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>