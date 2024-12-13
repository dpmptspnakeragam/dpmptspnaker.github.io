<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Survey Kepuasan Masyarakat (SKM)</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Survey Kepuasan Masyarakat (SKM)</h3>
                <hr>

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

                <table class="table table-sm table-responsive table-bordered table-striped table-hover" id="TabelData1">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th class="text-center align-middle" rowspan="2">No.</th>
                            <th class="text-center align-middle" rowspan="2">Nama</th>
                            <th class="text-center align-middle" rowspan="2">Telepon</th>
                            <th class="text-center align-middle" rowspan="2">Jenis Kelamin</th>
                            <th class="text-center align-middle" rowspan="2">Umur</th>
                            <th class="text-center align-middle" rowspan="2">Pendidikan</th>
                            <th class="text-center align-middle" rowspan="2">Pekerjaan</th>
                            <th class="text-center align-middle" rowspan="2">Layanan</th>
                            <th id="toggle-column" class="text-center align-middle" colspan="9" style="cursor: pointer;">Pendapat Responden</th>
                            <th class="text-center align-middle" rowspan="2">Tanggal</th>
                            <th class="text-center align-middle" rowspan="2">Aksi</th>
                        </tr>

                        <tr id="hidden-rows">
                            <th class="text-center align-middle">U1</th>
                            <th class="text-center align-middle">U2</th>
                            <th class="text-center align-middle">U3</th>
                            <th class="text-center align-middle">U4</th>
                            <th class="text-center align-middle">U5</th>
                            <th class="text-center align-middle">U6</th>
                            <th class="text-center align-middle">U7</th>
                            <th class="text-center align-middle">U8</th>
                            <th class="text-center align-middle">U9</th>
                        </tr>
                    </thead>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var toggleColumn = document.getElementById('toggle-column');
                            var hiddenRows = document.getElementById('hidden-rows');

                            toggleColumn.addEventListener('click', function() {
                                if (hiddenRows.style.display === 'none') {
                                    hiddenRows.style.display = '';
                                } else {
                                    hiddenRows.style.display = 'none';
                                }
                            });
                        });
                    </script>

                    <tbody>
                        <?php $no = 1;
                        foreach ($skm->result() as $row) : ?>
                            <tr class="odd gradeX">
                                <td class="text-center align-middle"><?= $no++; ?></td>
                                <td class="text-center align-middle"><?= $row->nama; ?></td>
                                <td class="text-center align-middle"><?= $row->no_hp; ?></td>
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
                                <td class="text-center align-middle"><?= date('d-m-Y / H:i:s', strtotime($row->date)); ?></td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-outline-danger btn-sm btn-circle mt-1 mb-1" href="<?php echo base_url('admin/skm/delete/' . $row->id_skm); ?>" title="Hapus" onclick="return confirm('Anda yakin hapus data SKM, SPKP, dan SPAK')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <button class="btn btn-outline-success btn-sm btn-circle mt-1 mb-1" onclick="printSKM(<?= $row->id_skm; ?>)">
                                        <i class="fas fa-print"></i>
                                    </button>
                                    <script>
                                        function printSKM(id) {
                                            // Redirect ke halaman cetak dengan ID kuesioner
                                            window.open('<?php echo base_url('admin/skm/cetak/'); ?>' + id, '_blank');
                                        }
                                    </script>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>