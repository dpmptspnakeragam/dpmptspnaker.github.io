<!-- Modal -->
<?php foreach ($kabid->result() as $row) {
?>
    <div class="modal fade" id="ModalPegawai<?php echo $row->id_kabid; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalInformasi" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan"><?php echo $row->jabatan_kabid; ?></h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="row modal-pelayanan">
                                <?php foreach ($pegawai->result() as $row2) {
                                ?>
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                                        <div class="card-body shadow bg-light card-kabid">
                                            <img class="img-responsive img-kabid" src="<?= base_url() ?>assets/imgupload/<?= $row2->gambar; ?>" alt="<?= $row2->nama; ?>">
                                            <p class="display-4 nama-kabid mt-3"><?= $row2->nama; ?></p>
                                            <p>NIP. <?= $row2->nip; ?><br><b><?= $row2->jabatan; ?></b><br><?= $row2->alamat; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>