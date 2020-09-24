<!-- Modal -->
<div class="modal fade" id="ModalInvestasi" tabindex="-1" role="dialog" aria-labelledby="ModalInformasi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Peluang Investasi Kabupaten</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($investasi->result() as $row) {
                    ?>
                        <div class="col-lg-4 display-4">
                            <a href="#" class="pilih-investasi-2 text-center" data-toggle="modal" data-target="#ModalDetailInvestasi<?php echo $row->id_investasi; ?>"><?= $row->nama_investasi; ?></a>
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