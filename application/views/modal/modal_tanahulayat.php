<!-- Modal -->
<div class="modal fade" id="ModalTanahUlayat" tabindex="-1" role="dialog" aria-labelledby="ModalTanahUlayat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Data Tanah Ulayat Untuk Investasi</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($ulayat->result() as $row) {
                    ?>
                        <div class="col-lg-3 col-3">
                            <div class="text-center container">
                                <a href="<?php echo base_url() ?>tanah_ulayat/rincian/<?php echo $row->id_kecamatan; ?>" class="pilih-ulayat mb-2">Kec. <?= $row->kecamatan; ?></a>
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