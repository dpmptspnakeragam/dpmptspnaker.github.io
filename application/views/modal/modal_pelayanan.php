<!-- Modal -->
<div class="modal fade" id="ModalPelayanan" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Standar Operasional Prosedur</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <img width="100%" class="mb-4" src="<?= base_url() ?>assets/img/aluross.png?>" alt="Alur OSS">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img width="100%" class="mb-4" src="<?= base_url() ?>assets/img/alursicantik.png?>" alt="Alur Perizinan">
                        </div>
                    </div>
                    <div class="row modal-pelayanan">
                        <div class="inline col-sm-12 col-md-4 col-lg-4 col-4 mb-3">
                            <a href="<?= base_url(); ?>perizinan" class="pilih-modal-pelayanan">
                                <i class="ikon fa fa-file icon-square icon-32"></i>
                                <strong> Perizinan </strong></a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-4 mb-3">
                            <a href="<?= base_url(); ?>non_perizinan" class="pilih-modal-pelayanan">
                                <i class="ikon fa fa-file icon-square icon-32"></i>
                                <strong> Non Perizinan </strong></a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-4 mb-3">
                            <a href="<?= base_url(); ?>perizinan_berbasis_risiko" class="pilih-modal-pelayanan">
                                <i class="ikon fa fa-file icon-square icon-32"></i>
                                <strong> Perizinan Berbasis Risiko</strong></a>
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