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

                <!-- start: Accordion -->
                <table class="table table-sm table-responsive table-striped table-borderless table-hover" id="TabelData1">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th class="text-center align-middle" rowspan="2">No.</th>
                            <th class="text-center align-middle" rowspan="2">Jenis Kelamin</th>
                            <th class="text-center align-middle" rowspan="2">Umur</th>
                            <th class="text-center align-middle" rowspan="2">Pendidikan</th>
                            <th class="text-center align-middle" rowspan="2">Pekerjaan</th>
                            <th class="text-center align-middle" rowspan="2">Layanan</th>
                            <th id="toggle-column" class="text-center align-middle" colspan="22" style="cursor: pointer;">Pendapat Responden</th>
                            <th class="text-center align-middle" rowspan="2">Tanggal</th>
                            <th class="text-center align-middle" rowspan="2">Aksi</th>
                        </tr>

                        <tr id="hidden-rows">
                            <th class="text-center align-middle bg-primary">U1</th>
                            <th class="text-center align-middle bg-primary">U2</th>
                            <th class="text-center align-middle bg-primary">U3</th>
                            <th class="text-center align-middle bg-primary">U4</th>
                            <th class="text-center align-middle bg-primary">U5</th>
                            <th class="text-center align-middle bg-primary">U6</th>
                            <th class="text-center align-middle bg-primary">U7</th>
                            <th class="text-center align-middle bg-primary">U8</th>
                            <th class="text-center align-middle bg-primary">U9</th>
                            <th class="text-center align-middle bg-success">Z1</th>
                            <th class="text-center align-middle bg-success">Z2</th>
                            <th class="text-center align-middle bg-success">Z3</th>
                            <th class="text-center align-middle bg-success">Z4</th>
                            <th class="text-center align-middle bg-success">Z5</th>
                            <th class="text-center align-middle bg-success">Z6</th>
                            <th class="text-center align-middle bg-success">Z7</th>
                            <th class="text-center align-middle bg-success">Z8</th>
                            <th class="text-center align-middle bg-info">R1</th>
                            <th class="text-center align-middle bg-info">R2</th>
                            <th class="text-center align-middle bg-info">R3</th>
                            <th class="text-center align-middle bg-info">R4</th>
                            <th class="text-center align-middle bg-info">R5</th>
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
                                <td class="text-center align-middle"><?= $row->z1; ?></td>
                                <td class="text-center align-middle"><?= $row->z2; ?></td>
                                <td class="text-center align-middle"><?= $row->z3; ?></td>
                                <td class="text-center align-middle"><?= $row->z4; ?></td>
                                <td class="text-center align-middle"><?= $row->z5; ?></td>
                                <td class="text-center align-middle"><?= $row->z6; ?></td>
                                <td class="text-center align-middle"><?= $row->z7; ?></td>
                                <td class="text-center align-middle"><?= $row->z8; ?></td>
                                <td class="text-center align-middle"><?= $row->r1; ?></td>
                                <td class="text-center align-middle"><?= $row->r2; ?></td>
                                <td class="text-center align-middle"><?= $row->r3; ?></td>
                                <td class="text-center align-middle"><?= $row->r4; ?></td>
                                <td class="text-center align-middle"><?= $row->r5; ?></td>
                                <td class="text-center align-middle"><?= date('d-m-Y / H:i', strtotime($row->date)); ?> WIB</td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url('admin/skm/delete/' . $row->id_skm); ?>" title="Hapus" onclick="return confirm('Anda yakin hapus <?= $row->layanan; ?>?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <button class="btn btn-outline-success btn-sm btn-circle" onclick="printSKM(<?= $row->id_skm; ?>)">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </td>

                                <script>
                                    function printSKM(id) {
                                        // Redirect ke halaman cetak dengan ID kuesioner
                                        window.open('<?php echo base_url('admin/skm/cetak/'); ?>' + id, '_blank');
                                    }
                                </script>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>