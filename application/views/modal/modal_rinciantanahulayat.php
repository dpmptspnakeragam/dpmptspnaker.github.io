<?php foreach ($ulayat->result() as $kec) {
?>
    <div class="modal fade" id="ModalRincianTanahUlayat<?php echo $kec->id_kecamatan; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalTanahUlayat" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Rincian Tanah Ulayat untuk Investasi Kecamatan <?php echo $kec->kecamatan; ?></h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>