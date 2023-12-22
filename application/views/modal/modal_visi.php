<!-- Modal -->
<div class="modal fade" id="ModalVisi" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Visi & Misi</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-left">
                    <h3 class="text-center">
                        Visi & Misi Pemerintah Kabupaten Agam
                    </h3>
                    <h3>Visi</h3>
                    <?php
                    foreach ($pengaturan->result() as $row) {
                    ?>
                        <p>
                            <?= $row->visi; ?>
                        </p>
                    <?php } ?>
                    <h3>Misi</h3>
                    <?php
                    foreach ($pengaturan->result() as $row) {
                    ?>
                        <p>
                            <?= $row->misi; ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>