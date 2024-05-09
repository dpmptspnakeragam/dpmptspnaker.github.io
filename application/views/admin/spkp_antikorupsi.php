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
                <h3 class="text-center">Suvey Persepsi Kualitas Pelayanan (SPKP) dan Persepsi Anti Korupsi</h3>
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
                <table class="table table-sm table-responsive table-bordered table-striped table-hover" id="TabelData1">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th class="text-center align-middle" rowspan="2">No.</th>
                            <th id="toggle-column" class="text-center align-middle" colspan="8" style="cursor: pointer;">SPKP</th>
                            <th id="toggle-column" class="text-center align-middle" colspan="5" style="cursor: pointer;">Anti Korupsi</th>
                            <th class="text-center align-middle" rowspan="2">Tanggal</th>
                            <th class="text-center align-middle" rowspan="2">Aksi</th>
                        </tr>

                        <tr id="hidden-rows">
                            <th class="text-center align-middle">Z1</th>
                            <th class="text-center align-middle">Z2</th>
                            <th class="text-center align-middle">Z3</th>
                            <th class="text-center align-middle">Z4</th>
                            <th class="text-center align-middle">Z5</th>
                            <th class="text-center align-middle">Z6</th>
                            <th class="text-center align-middle">Z7</th>
                            <th class="text-center align-middle">Z8</th>
                            <th class="text-center align-middle">R1</th>
                            <th class="text-center align-middle">R2</th>
                            <th class="text-center align-middle">R3</th>
                            <th class="text-center align-middle">R4</th>
                            <th class="text-center align-middle">R5</th>
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
                        foreach ($rating->result() as $row) : ?>
                            <tr class="odd gradeX">
                                <td class="text-center align-middle"><?= $no++; ?></td>
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
                                <td class="text-center align-middle"><?= date('d-m-Y / H:i:s', strtotime($row->date)); ?></td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-outline-danger btn-sm btn-circle mt-1 mb-1" href="<?php echo base_url('admin/spkp_antikorupsi/delete/' . $row->id_spkp); ?>" title="Hapus" onclick="return confirm('Anda yakin hapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <button class="btn btn-outline-success btn-sm btn-circle mt-1 mb-1" onclick="printSPKP(<?= $row->id_spkp; ?>)">
                                        <i class="fas fa-print"></i>
                                    </button>
                                    <script>
                                        function printSPKP(id) {
                                            // Redirect ke halaman cetak dengan ID kuesioner
                                            window.open('<?php echo base_url('PdfController/cetak_spkp/'); ?>' + id, '_blank');
                                        }
                                    </script>
                                </td>

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