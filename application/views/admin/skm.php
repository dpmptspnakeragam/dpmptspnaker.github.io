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
                <!-- start: Accordion -->
                <div class="">
                    <table class="table table-responsive table-striped table-borderless table-hover" id="TabelData1">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center align-middle" rowspan="2">No.</th>
                                <th class="text-center align-middle" rowspan="2">Jenis Kelamin</th>
                                <th class="text-center align-middle" rowspan="2">Umur</th>
                                <th class="text-center align-middle" rowspan="2">Pendidikan</th>
                                <th class="text-center align-middle" rowspan="2">Pekerjaan</th>
                                <th class="text-center align-middle" rowspan="2">Layanan</th>
                                <th class="text-center align-middle" colspan="9">Pendapat Responden</th>
                                <th class="text-center align-middle" rowspan="2">Tanggal</th>
                                <th class="text-center align-middle" rowspan="2">Aksi</th>
                            </tr>
                            <tr>
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
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($skm->result() as $row) {
                            ?>
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
                                    <td class="text-center align-middle"><?= $row->date; ?></td>
                                    <td class="text-center align-middle">
                                        <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url('skm/delete/' . $row->id_skm); ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->layanan; ?>?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>