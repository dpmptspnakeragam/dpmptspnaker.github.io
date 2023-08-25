<div class="modal fade" id="ModalTambahAset" tabindex="-1" role="dialog" aria-labelledby="ModalTambahAset" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Aset</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/aset/tambah" method="post" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <?php foreach ($idmax->result() as $row) {
                                ?>
                                    <div hidden class="form-group">
                                        <label>Id</label>
                                        <input type="text" class="form-control" id="id" name="id_aset" value="<?= $row->idmax + 1; ?>">
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="kode barang">Kode Barang</label>
                                    <input class="form-control" name="kode_brg" placeholder="Kode Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="kode rekening">Kode rekening</label>
                                    <input class="form-control" name="kode_rekening" placeholder="Kode Rekening" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama barang">Nama Barang</label>
                                    <input class="form-control" name="nama_brg" placeholder="Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="no register">No. Register</label>
                                    <input class="form-control" name="no_register" placeholder="Nomor Register" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun pembelian">Tahun Pembelian</label>
                                    <input class="form-control" name="tahun_beli" placeholder="Tahun Pembelian" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="asal usul">Asal Usul</label>
                                    <select name="asal_usul" class="form-control" required>
                                        <option value="APBD">APBD</option>
                                        <option value="Hibah">Hibah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kondisi barang">Kondisi Barang</label>
                                    <select name="kondisi_brg" class="form-control" required>
                                        <option value="Baik">Baik</option>
                                        <option value="RR">RR</option>
                                        <option value="RB">RB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nilai aset">Nilai Aset</label>
                                    <input class="form-control" name="nilai_aset" placeholder="Nilai Aset" required>
                                </div>
                                <div class="form-group">
                                    <label for="pemakai">Pemakai</label>
                                    <select name="pemakai" id="" class="form-control">
                                        <?php foreach ($pegawai->result() as $r) { ?>
                                            <option value="<?= $r->nama; ?>"><?= $r->nama; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="foto barang">Foto Barang</label>
                                    <input type="file" class="form-control" name="foto_brg" placeholder="Foto Barang" required>
                                </div>
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