<div class="modal fade" id="ModalTambahPerizinan" tabindex="-1" role="dialog" aria-labelledby="ModalTambahPerizinanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Perizinan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/perizinan_risiko/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pelatihan">Jenis Risiko</label>
                        <input class="form-control" name="jenis" placeholder="Nama Izin" required>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Biaya</label>
                        <input class="form-control" name="biaya" placeholder="Jumlah Biaya" required>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Lama Proses</label>
                        <input class="form-control" name="lamaproses" placeholder="Lama Proses" required>
                    </div>
                    <div class="form-group">
                        <label for="syarat">Persyaratan</label>
                        <textarea id="ckeditor" class="form-control ckeditor" name="syarat" placeholder="Persyaratan" required></textarea>
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