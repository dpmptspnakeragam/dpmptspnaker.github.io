<?php foreach ($pengaturan->result() as $row) {
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Pengaturan</h3>
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
                    <button href="" type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditPengaturan<?php echo $row->id_setting; ?>"><i class="fa fa-plus fa-fw"></i>Edit Data</button>
                </div><br>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 mb-3">
                        <h6><strong>Struktur Organisasi</strong></h6>
                        <img src="<?= base_url(); ?>assets/imgupload/<?= $row->struktur; ?>" style="width:100%;" class="img-responsive">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h6><strong>Maklumat Pelayanan</strong></h6>
                        <img src="<?= base_url(); ?>assets/imgupload/<?= $row->maklumat; ?>" style="width:100%;" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>