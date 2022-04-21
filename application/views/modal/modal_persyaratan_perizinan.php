<!-- Modal -->
<?php foreach ($perizinan->result() as $row) {
?>
    <div class="modal fade" id="ModalPersyaratanP<?php echo $row->id_izin; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Persyaratan <?= $row->nama_izin; ?></h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://docs.google.com/viewer?url=<?= base_url(); ?>assets/fileupload/<?= $row->syarat; ?>&embedded=true" width="100%" height="900"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>