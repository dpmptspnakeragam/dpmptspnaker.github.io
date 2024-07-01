<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Standar Pelayanan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Standar Pelayanan</h3>
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
                    <?php if (empty($pdf)) : ?>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahSP"><i class="fa fa-plus fa-fw"></i> Tambah Data</button>
                    <?php endif; ?>

                </div><br>

                <!-- start: Display PDF -->
                <?php if (!empty($pdf)) : ?>
                    <?php foreach ($pdf as $file) : ?>
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $file->title; ?></h5>
                                <?php if (file_exists('./assets/fileupload/' . $file->file_name)) : ?>
                                    <embed src="<?= base_url('assets/fileupload/' . $file->file_name); ?>" type="application/pdf" width="100%" height="500px" />
                                <?php else : ?>
                                    <p>File PDF tidak tersedia.</p>
                                <?php endif; ?>
                                <br><br>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalUpdateSP<?= $file->id_sp; ?>"><i class="fa fa-edit"></i> Edit</button>
                                <a href="<?= base_url('admin/standar_pelayanan/delete/' . $file->id_sp); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i> Delete</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="alert alert-warning" role="alert">
                        Data PDF tidak ditemukan.
                    </div>
                <?php endif; ?>
                <!--end: Display PDF -->
            </div>
        </div>
    </div>
</main>