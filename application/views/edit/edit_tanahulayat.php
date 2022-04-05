<?php foreach ($tanah_ulayat->result() as $row) {
?>
    <div class="modal fade" id="EditTanahUlayat<?php echo $row->id_ulayat; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalTambahTanahUlayat" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tanah Ulayat Untuk Investasi</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/tanah_ulayat/ubah" method="post" enctype="multipart/form-data">
                        <div hidden class="form-group">
                            <input type="text" class="form-control" name="kecamatan" value="<?php echo $row->kecamatan; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="pelatihan">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="<?php echo $row->lokasi; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Luas Tanah</label>
                            <input type="text" class="form-control" name="luas" value="<?php echo $row->luas; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="pelatihan">Status Kepemilikan</label>
                            <input type="text" class="form-control" name="status" value="<?php echo $row->status; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="pelatihan">Jenis Investasi</label>
                            <input type="text" class="form-control" name="jenis" value="<?php echo $row->jenis; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="pelatihan">Bentuk Kerjasama</label>
                            <input type="text" class="form-control" name="jenis" value="<?php echo $row->bentuk; ?>">
                        </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>