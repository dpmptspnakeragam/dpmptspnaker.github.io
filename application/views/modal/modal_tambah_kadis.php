<div class="modal fade" id="ModalTambahKadis" tabindex="-1" role="dialog" aria-labelledby="ModalTambahBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kadis</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/kadis/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pelatihan">Nama</label>
                        <input class="form-control" name="nama" placeholder="Nama Kadis" required>
                    </div>
                    <div class="form-group">
                        <label for="persyaratan">Periode</label>
                        <input type="text" class="form-control" name="periode" placeholder="Masa Periode" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto</label>
                        <input type="file" name="foto">
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