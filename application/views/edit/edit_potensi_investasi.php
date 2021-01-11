<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<?php foreach ($potensi_investasi->result() as $row) {
?>
    <div class="modal fade" id="EditPotensiInvestasi<?php echo $row->id_investasi; ?>" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Potensi Investasi</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/potensi_investasi/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_investasi; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Potensi Investasi</label>
                            <input class="form-control" name="nama_investasi" placeholder="Potensi investasi" value="<?php echo $row->nama_investasi; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Deskripsi</label>
                            <textarea id="editinvestasi<?= $row->id_investasi; ?>" class="form-control" name="deskripsi" placeholder="Deskripsi" required><?php echo $row->deskripsi; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editinvestasi<?= $row->id_investasi; ?>');
                            </script>
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