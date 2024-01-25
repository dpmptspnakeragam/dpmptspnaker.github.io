<!-- Modal -->
<div class="modal fade" id="ModalKadis" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalKabid">Kepala DPMPTSP Kabupaten Agam Dari Masa Ke Masa</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row modal-pelayanan">
                        <?php foreach ($kadis->result() as $row) {
                        ?>
                            <div class="col-sm-12 col-md-3 col-6 col-lg-3 mb-3">
                                <div class="card-body shadow bg-light card-kabid">
                                    <img class="shadow img-responsive img-kabid" src="<?= base_url() ?>assets/imgupload/<?= $row->foto; ?>" alt="<?= $row->nama; ?>">
                                    <p class="display-4 nama-kabid mt-3"><strong><?= $row->nama; ?></strong></p>
                                    <p class="ket-kabid">Masa Periode<br><?= $row->periode; ?></p>
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