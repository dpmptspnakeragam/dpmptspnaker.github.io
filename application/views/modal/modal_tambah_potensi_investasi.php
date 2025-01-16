<script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<div class="modal fade" id="ModalTambahPotensiInvestasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah <?= $title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="<?= base_url('admin/potensi_investasi/tambah'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div hidden class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label>Peluang Investasi</label>
                        <select class="form-control" name="nama_investasi" required>
                            <option value="" disabled selected>Pilih Peluang Investasi</option>
                            <option value="Pertanian">1. Pertanian</option>
                            <option value="Perkebunan">2. Perkebunan</option>
                            <option value="Peternakan">3. Peternakan</option>
                            <option value="Perikanan">4. Perikanan</option>
                            <option value="Pariwisata">5. Pariwisata</option>
                            <option value="UMKM">6. UMKM</option>
                            <option value="Buah-Buahan">7. Buah-Buahan</option>
                            <option value="Holtikultura">8. Holtikultura</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="form-control ckeditor" name="deskripsi" placeholder="Isi Berita" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>