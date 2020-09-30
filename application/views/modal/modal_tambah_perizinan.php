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
                <form role="form" action="<?= base_url(); ?>admin/perizinan/tambah" method="post" enctype="multipart/form-data">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div hidden class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="pelatihan">Nama Izin</label>
                        <input class="form-control" name="nama_izin" placeholder="Nama Izin" required>

                    </div>
                    <div class="form-group">
                        <label for="formulir">Formulir</label>
                        <input type="file" name="form">
                    </div>
                    <div class="form-group">
                        <label for="syarat">Persyaratan</label>
                        <input type="file" name="syarat">
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