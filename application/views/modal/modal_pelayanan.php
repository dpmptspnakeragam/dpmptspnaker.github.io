<!-- Modal -->
<div class="modal fade" id="ModalPelayanan" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Standar Pelayanan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row modal-pelayanan">
                        <div class="col-sm-12 col-md-4 col-lg-6 col-6 mb-3">
                            <a href="<?= base_url(); ?>perizinan" class="pilih-modal-pelayanan">
                                <i class="ikon fa fa-file icon-square icon-32"></i>
                                <br>Perizinan</a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-6 col-6 mb-3">
                            <a href="<?= base_url(); ?>non_perizinan" class="pilih-modal-pelayanan">
                                <i class="ikon fa fa-file icon-square icon-32"></i>
                                <br>Non Perizinan</a>
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