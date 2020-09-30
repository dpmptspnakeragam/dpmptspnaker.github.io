<?php foreach ($nonperizinan->result() as $row) {
?>
    <div class="modal fade" id="EditNonPerizinan<?php echo $row->id_izin; ?>" role="dialog" aria-labelledby="ModalTambahNonPerizinanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Non Perizinan</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/nonperizinan/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_izin; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Nama Izin</label>
                            <input class="form-control" name="nama_izin" placeholder="Nama Izin" value="<?php echo $row->nama_izin; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Formulir</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="form" type="file" id="form" /><?php echo $row->form; ?>
                                    <input name="old" type="hidden" id="old" value="<?php echo $row->form; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="syarat">Persyaratan</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="syarat" type="file" id="syarat" /><?php echo $row->syarat; ?>
                                    <input name="old2" type="hidden" id="old2" value="<?php echo $row->syarat; ?>" />
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