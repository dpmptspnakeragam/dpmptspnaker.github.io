<?php foreach ($berita->result() as $row) {
?>
    <div class="modal fade" id="EditInformasi<?php echo $row->id_berita; ?>" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Informasi</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/informasi/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_berita; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Judul</label>
                            <input class="form-control" name="judul_berita" placeholder="Judul Berita" value="<?php echo $row->judul_berita; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="persyaratan">Tanggal</label>
                            <input type="date" class="form-control" name="tgl_berita" placeholder="Tanggal" value="<?php echo $row->tgl_berita; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tl_lahir">Rangkuman</label>
                            <textarea type="text" class="form-control" rows="3" name="rangkuman" placeholder="Rangkuman Berita" required><?php echo $row->rangkuman; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Isi Berita</label>
                            <textarea id="ckeditor2" class="form-control" name="isi_berita" placeholder="Isi Berita" required><?php echo $row->isi_berita; ?></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60' />
                                    <input name="gambar" type="file" id="gambar" />
                                    <input name="old" type="hidden" id="old" value="<?php echo $row->gambar; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_jenis">Kategori</label>
                            <select required name="id_kategori" class="form-control">
                                <option value="<?php echo $row->id_kategori; ?>"><?php echo $row->kategori; ?></option>
                                <?php foreach ($kategori->result() as $row) {
                                ?>
                                    <option value="<?= $row->id_kategori; ?>"><?= $row->kategori; ?></option>;}
                                <?php }    ?>
                            </select>
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