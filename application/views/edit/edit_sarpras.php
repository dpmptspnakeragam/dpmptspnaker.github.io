<?php foreach ($sarpras->result() as $row) {
?>
    <div class="modal fade" id="EditSarpras<?php echo $row->id_sarpras; ?>" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sarana & Prasarana</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/sarpras/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_sarpras; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Nama Sarana & Prasarana</label>
                            <input type="teks" class="form-control" name="teks" placeholder="Nama" value="<?php echo $row->teks; ?>" required>
                        </div>
                        <div class=" row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar Sarana & Prasarana</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60' />
                                    <input name="gambar" type="file" id="gambar" />
                                    <input name="old" type="hidden" id="old" value="<?php echo $row->gambar; ?>" />
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