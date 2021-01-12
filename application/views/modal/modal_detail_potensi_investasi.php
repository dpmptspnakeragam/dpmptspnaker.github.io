<!-- Modal -->
<?php foreach ($potensi_investasi->result() as $row) {
?>
    <div class="modal fade" id="ModalDetailPotensiInvestasi<?php echo $row->id_investasi; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalInformasi" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan"><?php echo $row->nama_investasi; ?></h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <img class="img-responsive img-investasi" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->nama_investasi; ?>">
                            </div>
                            <div class="col-6">
                                <div class="container-fluid">
                                    <p class=""><?= $row->deskripsi; ?></p>
                                </div>
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