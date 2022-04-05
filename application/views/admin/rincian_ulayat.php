<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tanah Ulayat</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($get_kecamatan->result() as $kec) {
                } ?>
                <h3 class="text-center">Tanah Ulayat Kecamatan <?= $kec->kecamatan; ?></h3>
                <hr>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Luas Tanah</th>
                                <th class="text-center">Status Kepemilikan</th>
                                <th class="text-center">Jenis Investasi</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tanah_ulayat->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->lokasi; ?></td>
                                    <td><?= $row->luas; ?></td>
                                    <td><?= $row->status; ?></td>
                                    <td><?= $row->jenis; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditTanahUlayat<?php echo $row->id_ulayat; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/tanah_ulayat/hapus/<?php echo $row->id_ulayat; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->lokasi; ?>?')"><i class="fa fa-times"></i></a>
                                        </div>
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