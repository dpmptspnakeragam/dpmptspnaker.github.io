<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manajemen Aset</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Manajemen Aset</h3>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahAset"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="DataTables">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Kode Barang</th>
                                <th class="text-center">Kode Rekening</th>
                                <th class="text-center">Nama Barang</th>
                                <th class="text-center">No. Register</th>
                                <th class="text-center">Tahun Pembelian</th>
                                <th class="text-center">Asal Usul</th>
                                <th class="text-center">Kondisi Barang</th>
                                <th class="text-center">Nilai Aset</th>
                                <th class="text-center">Pemakai</th>
                                <th class="text-center">Foto Barang</th>
                                <th class="text-center">QRCODE</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($aset->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->kode_brg; ?></td>
                                    <td><?= $row->kode_rekening; ?></td>
                                    <td><?= $row->nama_brg; ?></td>
                                    <td><?= $row->no_register; ?></td>
                                    <td><?= $row->tahun_beli; ?></td>
                                    <td><?= $row->asal_usul; ?></td>
                                    <td><?= $row->kondisi_brg; ?></td>
                                    <td><?= $row->nilai_aset; ?></td>
                                    <td><?= $row->pemakai; ?></td>
                                    <td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->foto_brg; ?>" style="width:20vw;" class="img-responsive"></td>
                                    <td><img src="<?= base_url(); ?>qr/<?= $row->qrcode; ?>" style="width:10vw;" class="img-responsive"></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditAset<?php echo $row->id_aset; ?>" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/aset/hapus/<?php echo $row->id_aset; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus aset <?= $row->nama_brg; ?> ?')"><i class="fa fa-ban"></i> Hapus</a>
                                            <a href="<?= base_url(); ?>admin/aset/download/<?= $row->qrcode; ?>" class="btn btn-sm btn-outline-success btn-circle"><i class="fa fa-qrcode "></i> Download</a>
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