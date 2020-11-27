<!-- Modal -->
<div class="modal fade" id="ModalKabid" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalKabid">Pegawai & Staff DPMPTSP-Naker Kab. Agam</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row modal-pelayanan">
                        <?php foreach ($kabid->result() as $row) {
                        ?>
                            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                                <div class="card-body shadow bg-light card-kabid">
                                    <img class="img-responsive img-kabid" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar_kabid; ?>" alt="<?= $row->nama_kabid; ?>">
                                    <p class="display-4 nama-kabid mt-3"><b><?= $row->nama_kabid; ?></b></p>
                                    <p>NIP. <?= $row->nip_kabid; ?><br><b><?= $row->jabatan_kabid; ?></b><br><?= $row->alamat_kabid; ?><br><a href="<?= base_url(); ?>home/view_pegawai?id_kabid=<?php echo $row->id_kabid; ?>" class="pilih-kabid text-center">Anggota</a></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>