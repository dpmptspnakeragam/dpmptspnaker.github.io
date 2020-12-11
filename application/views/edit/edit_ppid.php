<?php foreach ($ppid->result() as $row) {
?>
    <div class="modal fade" id="EditPpid<?php echo $row->id_ppid; ?>" role="dialog" aria-labelledby="ModalTambahppidLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit ppid</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/ppid/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_ppid; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Judul</label>
                            <input class="form-control" name="judul" placeholder="Judul PPID" value="<?php echo $row->judul; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Dokumen</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="file" type="file" id="form" /><?php echo $row->file; ?>
                                    <input name="old" type="hidden" id="old" value="<?php echo $row->file; ?>" />
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>