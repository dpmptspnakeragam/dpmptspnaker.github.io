<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<?php foreach ($pengaturan->result() as $row) {
?>
    <div class="modal fade" id="EditPengaturan<?php echo $row->id_setting; ?>" role="dialog" aria-labelledby="EditPengaturan" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pengaturan</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/pengaturan/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_setting; ?>">
                        </div>
                        <div class="form-group">
                            <label for="sejarah">Sejarah</label>
                            <textarea id="editsejarah" type="text" class="form-control" rows="5" name="sejarah" placeholder="Sejarah" required><?php echo $row->sejarah; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editsejarah');
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <textarea id="editvisi" type="text" class="form-control" rows="5" name="visi" placeholder="Visi" required><?php echo $row->visi; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editvisi');
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="Misi">Misi</label>
                            <textarea id="editmisi" type="text" class="form-control" rows="5" name="misi" placeholder="Misi" required><?php echo $row->misi; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editmisi');
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="tugas">Tugas</label>
                            <textarea id="edittugas" type="text" class="form-control" rows="5" name="tugas" placeholder="Tugas" required><?php echo $row->tugas; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('edittugas');
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="fungsi">Fungsi</label>
                            <textarea id="editfungsi" type="text" class="form-control" rows="5" name="fungsi" placeholder="Fungsi" required><?php echo $row->fungsi; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editfungsi');
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="struktur">Struktur Organisasi</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->struktur; ?>" width='80' height='60' />
                                <input name="struktur" type="file" id="struktur" />
                                <input name="old1" type="hidden" id="old1" value="<?php echo $row->struktur; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="maklumat">Maklumat Pelayanan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->maklumat; ?>" width='80' height='60' />
                                <input name="maklumat" type="file" id="maklumat" />
                                <input name="old2" type="hidden" id="old2" value="<?php echo $row->maklumat; ?>" />
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