<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Banner</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Banner</h3>
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

                <div class="panel-heading">
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahBanner"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div>
                <br>
                <!-- start: Accordion -->
                <table class="table table-sm table-striped table-borderless table-hover" id="TabelData1">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th class="text-center align-middle">No.</th>
                            <th class="text-center align-middle">Teks</th>
                            <th class="text-center align-middle">Gambar</th>
                            <th class="text-center align-middle"><i class="fa fa-cog"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($banner->result() as $row) {
                        ?>
                            <tr class="odd gradeX">
                                <td class="text-center align-middle"><?= $no++; ?></td>
                                <td class="text-center align-middle"><?= $row->teks; ?></td>
                                <td class="text-center align-middle">
                                    <img src="<?= base_url('assets/imgupload/' . $row->gambar); ?>" class="img-thumbnail w-auto" style="max-width: 100px;">
                                </td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-outline-warning btn-sm" href="#" data-toggle="modal" data-target="#EditBanner<?php echo $row->id_banner; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url() ?>admin/banner/hapus/<?php echo $row->id_banner; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus Banner?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>