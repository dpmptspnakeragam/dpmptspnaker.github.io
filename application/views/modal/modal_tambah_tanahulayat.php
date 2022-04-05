<div class="modal fade" id="ModalTambahTanahUlayat" tabindex="-1" role="dialog" aria-labelledby="ModalTambahTanahUlayat" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tanah Ulayat</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/tanah_ulayat/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select id="kecamatan" name="kecamatan" class="form-control">
                            <option value="">Pilih Kecamatan</option>
                            <?php foreach ($kecamatan->result() as $kec) {
                            ?>
                                <option value="<?php echo $kec->id_kecamatan; ?>">
                                    <?php echo $kec->kecamatan; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Tanah Ulayat">
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Luas Tanah</label>
                        <input type="text" class="form-control" name="luas" placeholder="Luas Tanah Ulayat">
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Status Kepemilikan</label>
                        <input type="text" class="form-control" name="status" placeholder="Status Kepemilikan Tanah Ulayat">
                    </div>
                    <div class="form-group">
                        <label for="pelatihan">Jenis Investasi</label>
                        <input type="text" class="form-control" name="jenis" placeholder="Jenis Investasi Tanah Ulayat">
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