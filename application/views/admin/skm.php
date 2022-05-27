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
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center" rowspan="2">No.</th>
                                <th class="text-center" rowspan="2">Jenis Kelamin</th>
                                <th class="text-center" rowspan="2">Umur</th>
                                <th class="text-center" rowspan="2">Pendidikan</th>
                                <th class="text-center" rowspan="2">Pekerjaan</th>
                                <th class="text-center" rowspan="2">Layanan</th>
                                <th class="text-center" colspan="9">Pendapat Responden</th>
                                <th class="text-center" rowspan="2">Tanggal</th>
                            </tr>
                            <tr>
                                <th class="text-center">U1</th>
                                <th class="text-center">U2</th>
                                <th class="text-center">U3</th>
                                <th class="text-center">U4</th>
                                <th class="text-center">U5</th>
                                <th class="text-center">U6</th>
                                <th class="text-center">U7</th>
                                <th class="text-center">U8</th>
                                <th class="text-center">U9</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($skm->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->jk; ?></td>
                                    <td><?= $row->umur; ?></td>
                                    <td><?= $row->pendidikan; ?></td>
                                    <td><?= $row->pekerjaan; ?></td>
                                    <td><?= $row->layanan; ?></td>
                                    <td><?= $row->u1; ?></td>
                                    <td><?= $row->u2; ?></td>
                                    <td><?= $row->u3; ?></td>
                                    <td><?= $row->u4; ?></td>
                                    <td><?= $row->u5; ?></td>
                                    <td><?= $row->u6; ?></td>
                                    <td><?= $row->u7; ?></td>
                                    <td><?= $row->u8; ?></td>
                                    <td><?= $row->u9; ?></td>
                                    <td><?= $row->date; ?></td>
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