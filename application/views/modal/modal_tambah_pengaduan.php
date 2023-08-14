<div class="modal fade" id="ModalTambahPengaduan" tabindex="-1" role="dialog" aria-labelledby="ModalTambahPerizinanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengaduan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/pengaduan/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pelatihan">Nomor Pengaduan</label>
                        <input class="form-control" name="no_pengaduan" placeholder="Nomor Pengaduan" required>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Nama</label>
                        <input class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Alamat</label>
                        <textarea rows="3" class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">No. HP</label>
                        <input class="form-control" name="hp" placeholder="Nomor HP" required>
                    </div>
                    <div class="form-group">
                        <label for="formulir">Email</label>
                        <input class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="formulir">Jenis Pengaduan</label>
                        <input class="form-control" name="jenis_pengaduan" placeholder="Jenis Pengaduan" required>
                    </div>
                    <div class="form-group">
                        <label for="syarat">Lokasi Kejadian</label>
                        <textarea rows="3" class="form-control" name="lokasi_kejadian" placeholder="Loasi Kejadian" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formulir">Waktu Kejadian</label>
                        <input type="date" class="form-control" name="waktu_kejadian" placeholder="Waktu Kejadian" required>
                    </div>
                    <div class="form-group">
                        <label for="syarat">Materi Pengaduan</label>
                        <textarea rows="3" class="form-control" name="materi_pengaduan" placeholder="Materi Pengaduan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formulir">Status Pengaduan</label>
                        <input class="form-control" name="status" placeholder="Status Pengaduan" required>
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