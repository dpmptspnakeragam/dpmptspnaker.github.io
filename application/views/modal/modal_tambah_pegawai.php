<div class="modal fade" id="ModalTambahPegawai" tabindex="-1" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/pegawai/tambah" method="post" enctype="multipart/form-data">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div hidden class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id_pegawai" value="<?= $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="pelatihan">Nama</label>
                        <input class="form-control" name="nama" placeholder="Nama Pegawai" required>

                    </div>
                    <div class="form-group">
                        <label for="persyaratan">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jabatan">Bidang</label>
                        <select required name="id_kabid" class="form-control">
                            <?php foreach ($kabid->result() as $row) {
                            ?>
                                <option value="<?= $row->id_kabid; ?>"><?= $row->jabatan_kabid; ?></option>;
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="persyaratan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="golongan">Golongan</label>
                        <select required name="golongan" class="form-control" onchange="" required>
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
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto</label>
                        <input type="file" name="gambar">
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