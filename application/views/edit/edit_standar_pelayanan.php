<?php foreach ($pdf as $data) : ?>
    <!-- Modal Update PDF -->
    <div class="modal fade" id="ModalUpdateSP<?= $data->id_sp; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Update Standar Pelayanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/standar_pelayanan/update/' . $data->id_sp); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div hidden class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $data->id_sp; ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Nama File</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $data->title; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="file_name">Upload File</label>
                            <input type="file" class="form-control" id="file_name" name="file_name">
                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti file</small>
                        </div>
                        <div class="form-group">
                            <label>File saat ini</label>
                            <p><?= $data->file_name; ?></p>
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
<?php endforeach; ?>