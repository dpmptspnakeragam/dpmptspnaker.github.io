<!-- Modal Update PDF -->
<div class="modal fade" id="ModalUpdateSP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="exampleModalLabel">Update Standar Pelayanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/standar_pelayanan/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_sp" value="<?= $pdf->id_sp; ?>">
                    <div class="form-group">
                        <label for="title">Nama File</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $pdf->title; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf_file">PDF File</label>
                        <input type="file" class="form-control" id="pdf_file" name="pdf_file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>