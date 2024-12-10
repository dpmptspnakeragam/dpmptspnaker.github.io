<script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<?php foreach ($potensi_investasi->result() as $row) {
?>
    <div class="modal fade" id="EditPotensiInvestasi<?= $row->id_investasi; ?>" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
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
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?= $row->id_investasi; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Potensi Investasi</label>
                            <select class="form-control" name="nama_investasi" required>
                                <option disabled>Pilih Potensi Investasi</option>
                                <option value="Pertanian" <?= $row->nama_investasi == 'Pertanian' ? 'selected' : ''; ?>>1. Pertanian</option>
                                <option value="Perkebunan" <?= $row->nama_investasi == 'Perkebunan' ? 'selected' : ''; ?>>2. Perkebunan</option>
                                <option value="Holtikultura" <?= $row->nama_investasi == 'Holtikultura' ? 'selected' : ''; ?>>3. Holtikultura</option>
                                <option value="Peternakan" <?= $row->nama_investasi == 'Peternakan' ? 'selected' : ''; ?>>4. Peternakan</option>
                                <option value="Perikanan" <?= $row->nama_investasi == 'Perikanan' ? 'selected' : ''; ?>>5. Perikanan</option>
                                <option value="Pariwisata" <?= $row->nama_investasi == 'Pariwisata' ? 'selected' : ''; ?>>6. Pariwisata</option>
                                <option value="UMKM" <?= $row->nama_investasi == 'UMKM' ? 'selected' : ''; ?>>7. UMKM</option>
                                <option value="Buah-Buahan" <?= $row->nama_investasi == 'Buah-Buahan' ? 'selected' : ''; ?>>8. Buah-Buahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Deskripsi</label>
                            <textarea id="editinvestasi<?= $row->id_investasi; ?>"
                                class="form-control"
                                name="deskripsi"
                                placeholder="Deskripsi"
                                required><?= $row->deskripsi; ?></textarea>
                        </div>
                        <script type="text/javascript">
                            CKEDITOR.replace('editinvestasi<?= $row->id_investasi; ?>', {
                                // Optional: Customize the toolbar or configurations if needed
                                toolbar: [{
                                        name: 'basicstyles',
                                        items: ['Bold', 'Italic', 'Underline']
                                    },
                                    {
                                        name: 'paragraph',
                                        items: ['NumberedList', 'BulletedList']
                                    },
                                    {
                                        name: 'insert',
                                        items: ['Image', 'Link']
                                    }
                                ],
                                height: 200 // Adjust the editor height as needed
                            });
                        </script>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" width='80' height='60' />
                                    <input name="gambar" type="file" id="gambar" />
                                    <input name="old" type="hidden" id="old" value="<?= $row->gambar; ?>" />
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