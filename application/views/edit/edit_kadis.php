<?php foreach ($kadis->result() as $row) {
?>
    <div class="modal fade" id="EditKadis<?php echo $row->id_kadis; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kadis</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/kadis/edit" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id_kadis" value="<?php echo $row->id_kadis; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Nama</label>
                            <input class="form-control" name="nama" value="<?php echo $row->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="persyaratan">Periode</label>
                            <input type="text" class="form-control" name="periode" value="<?php echo $row->periode; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto</label>
                            <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->foto; ?>" width='80' height='60' />
                            <input type="file" name="foto">
                            <input name="old" type="hidden" id="old" value="<?php echo $row->foto; ?>" />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>