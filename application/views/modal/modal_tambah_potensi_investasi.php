<div class="modal fade" id="ModalTambahPotensiInvestasi" tabindex="-1" role="dialog" aria-labelledby="ModalTambahInvestasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Potensi Investasi</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" action="<?= base_url(); ?>admin/potensi_investasi/tambah" method="post" enctype="multipart/form-data">
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
                        <label for="tahun">Deskripsi</label>
                        <textarea id="ckeditor" class="form-control" name="deskripsi" placeholder="Isi Berita" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
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