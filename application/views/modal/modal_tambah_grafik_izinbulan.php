<div class="modal fade" id="ModalTambahGrafikIzinBulan" tabindex="-1" role="dialog" aria-labelledby="ModalTambahgrafikLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Grafik Izin Keluar /Tahun</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/grafik_izinbulan/tambah" method="post" enctype="multipart/form-data">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div hidden class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="pelatihan">Nama Izin</label>
                        <input class="form-control" name="izin" placeholder="Nama Izin" required>

                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Tahun 2020</label>
                        <input class="form-control" name="thn2020" placeholder="Izin Tahun 2020" required>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Tahun 2021</label>
                        <input class="form-control" name="thn2021" placeholder="Izin Tahun 2021" required>
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