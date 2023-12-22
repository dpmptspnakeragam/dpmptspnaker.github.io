<!-- Modal -->
<div class="modal fade" id="ModalMisi" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Sejarah DPMPTSP Kabupaten Agam</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-justify">
                    <div class="text-justify isi-profil col-lg-12 col-sm-12 mb-0">
                        <?php
                        foreach ($pengaturan->result() as $row) {
                        ?>
                            <p>
                                <?= $row->sejarah; ?>
                            </p>
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