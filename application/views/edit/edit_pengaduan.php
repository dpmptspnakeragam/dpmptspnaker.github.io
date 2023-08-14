<?php foreach ($pengaduan->result() as $row) {
?>
    <div class="modal fade" id="EditPengaduan<?php echo $row->id_pengaduan; ?>" role="dialog" aria-labelledby="ModalPengaduanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pengaduan</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/pengaduan/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_pengaduan; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Nomor Pengaduan</label>
                            <input class="form-control" name="no_pengaduan" value="<?php echo $row->no_pengaduan; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Nama</label>
                            <input class="form-control" name="nama" value="<?php echo $row->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Alamat</label>
                            <textarea rows="3" class="form-control" name="alamat" required><?php echo $row->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">No. HP</label>
                            <input class="form-control" name="hp" value="<?php echo $row->hp; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formulir">Email</label>
                            <input class="form-control" name="email" value="<?php echo $row->email; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formulir">Jenis Pengaduan</label>
                            <input class="form-control" name="jenis_pengaduan" value="<?php echo $row->jenis_pengaduan; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="syarat">Lokasi Kejadian</label>
                            <textarea rows="3" class="form-control" name="lokasi_kejadian" required><?php echo $row->lokasi_kejadian; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formulir">Waktu Kejadian</label>
                            <input type="date" class="form-control" name="waktu_kejadian" value="<?php echo $row->waktu_kejadian; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="syarat">Materi Pengaduan</label>
                            <textarea rows="3" class="form-control" name="materi_pengaduan" required><?php echo $row->materi_pengaduan; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formulir">Status Pengaduan</label>
                            <input class="form-control" name="status" value="<?php echo $row->status; ?>" required>
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