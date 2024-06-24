<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Pegawai DPMPTSP Kabupaten Agam</h3>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahPegawai"><i class="fa fa-plus fa-fw"></i>Tambah Pegawai</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive mb-3">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr class="text-center">
                                <th class="align-middle">No</th>
                                <th class="align-middle">Nama</th>
                                <th class="align-middle">NIP</th>
                                <th class="align-middle">Jabatan</th>
                                <th class="align-middle">Golongan</th>
                                <th class="align-middle">Alamat</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pegawai->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td class="text-center align-middle"><?= $row->no_urut; ?></td>
                                    <td class="text-left align-middle"><?= $row->nama; ?></td>
                                    <td class="text-left align-middle"><?= $row->nip; ?></td>
                                    <td class="text-left align-middle"><?= $row->jabatan; ?></td>
                                    <td class="text-left align-middle"><?= $row->golongan; ?></td>
                                    <td class="text-left align-middle"><?= $row->alamat; ?></td>
                                    <td class="text-center align-middle">
                                        <img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:50px;" class="img-responsive">
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPegawai<?php echo $row->id_pegawai; ?>" title="Edit"><i class="fa fa-edit"></i></a>

                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/pegawai/hapus/<?php echo $row->id_pegawai; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama; ?>?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--end: Accordion -->
<<<<<<< HEAD

                <!-- <h3 class="text-center">Pejabat DPMPTSP Kabupaten Agam</h3>
                <hr> -->
                <!-- start: Accordion -->
                <!-- <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIP</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Golongan</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kabid->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama_kabid; ?></td>
                                    <td><?= $row->nip_kabid; ?></td>
                                    <td><?= $row->jabatan_kabid; ?></td>
                                    <td><?= $row->golongan_kabid; ?></td>
                                    <td><?= $row->alamat_kabid; ?></td>
                                    <td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar_kabid; ?>" style="width:95%;" class="img-responsive"></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditKabid<?php echo $row->id_kabid; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> -->
                <!--end: Accordion -->

=======
>>>>>>> 7808f97247d040ca8eac40ef381726bc753960db
            </div>
        </div>
    </div>
    </div>
    </div>
</main>