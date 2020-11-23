<?php foreach ($pegawai->result() as $row) {
?>
    <div class="modal fade" id="EditPegawai<?php echo $row->id_pegawai; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/pegawai/ubah_pegawai" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id_pegawai" value="<?php echo $row->id_pegawai; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Nama</label>
                            <input class="form-control" name="nama" placeholder="Nama Pegawai" value="<?php echo $row->nama; ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="persyaratan">NIP</label>
                            <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?php echo $row->nip; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="jabatan">Bidang</label>
                            <select required name="id_kabid" class="form-control">
                                <option value="<?php echo $row->id_kabid; ?>"><?php echo $row->jabatan_kabid; ?></option>
                                <?php foreach ($kabid->result() as $row2) {
                                ?>
                                    <option value="<?= $row2->id_kabid; ?>"><?= $row2->jabatan_kabid; ?></option>;
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="persyaratan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?php echo $row->jabatan; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="golongan">Golongan</label>
                            <select required name="golongan" class="form-control" onchange="" required>
                                <option value="<?php echo $row->golongan; ?>" selected><?php echo $row->golongan; ?></option>
                                <option>IV/e</option>
                                <option>IV/d</option>
                                <option>IV/c</option>
                                <option>IV/b</option>
                                <option>IV/a</option>
                                <option>III/d</option>
                                <option>III/c</option>
                                <option>III/b</option>
                                <option>III/a</option>
                                <option>II/d</option>
                                <option>II/c</option>
                                <option>II/b</option>
                                <option>II/a</option>
                                <option>I/d</option>
                                <option>I/c</option>
                                <option>I/b</option>
                                <option>I/a</option>
                                <option>PTT</option>
                                <option>Kontrak</option>
                                <option>THL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="persyaratan">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto</label>
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