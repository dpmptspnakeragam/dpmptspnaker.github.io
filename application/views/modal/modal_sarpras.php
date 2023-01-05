<!-- Modal -->
<div class="modal fade" id="ModalSarpras" tabindex="-1" role="dialog" aria-labelledby="ModalSarpras" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Sarana & Prasarana DPMPTSP Kabupaten Agam</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($sarpras->result() as $row) {
                    ?>
                        <div class="col-lg-4 display-4 mb-1">
                            <div class="text-center container">
                                <img class="gambar-sarpras" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->teks; ?>">
                                <h4 class="mt-3"><?= $row->teks; ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>