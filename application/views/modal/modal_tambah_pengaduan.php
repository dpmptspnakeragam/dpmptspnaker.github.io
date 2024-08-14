<div class="modal fade" id="ModalTambahPengaduan" tabindex="-1" role="dialog" aria-labelledby="ModalTambahPerizinanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengaduan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" action="<?= base_url(); ?>admin/pengaduan/tambah" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <?php
                    $unique_id = strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));
                    ?>
                    <div class="row">
                        <div class="col-12">

                            <div class="form-group">
                                <label for="no_pengaduan">Nomor Pengaduan</label>
                                <div class="input-group">
                                    <input id="no_pengaduan" name="no_pengaduan" type="text" class="form-control" placeholder="Masukan Nomor Pengaduan" value="<?= $unique_id; ?>" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="cursor: pointer;" onclick="copyToClipboard()">
                                            <span class="fas fa-copy"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('no_pengaduan'); ?></small>
                            </div>
                            <script>
                                function copyToClipboard() {
                                    var copyText = document.getElementById('no_pengaduan');
                                    copyText.select();
                                    copyText.setSelectionRange(0, 99999);
                                    document.execCommand('copy');
                                    alert("Nomor Pengaduan berhasil dicopy: " + copyText.value);
                                }
                            </script>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <div class="input-group">
                                    <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" value="<?= set_value('nama'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user-tag"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <div class="input-group">
                                    <input name="alamat" type="text" class="form-control" placeholder="Masukan Alamat" value="<?= set_value('alamat'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marker"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="hp">Nomor WhatsApp</label>
                                <div class="input-group">
                                    <input name="hp" type="number" class="form-control" placeholder="Masukan Nomor Whatsapp" value="<?= set_value('hp'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fab fa-whatsapp"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('hp'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <input name="email" type="email" class="form-control" placeholder="Masukan Email" value="<?= set_value('email'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jenis_pengaduan">Jenis Pengaduan</label>
                                <div class="input-group">
                                    <input name="jenis_pengaduan" type="text" class="form-control" placeholder="Masukan Jenis Pengaduan" value="<?= set_value('jenis_pengaduan'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('jenis_pengaduan'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lokasi_kejadian">Lokasi Kejadian</label>
                                <div class="input-group">
                                    <input name="lokasi_kejadian" type="text" class="form-control" placeholder="Masukan Lokasi Kejadian" required value="<?= set_value('lokasi_kejadian'); ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marked-alt"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('lokasi_kejadian'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="waktu_kejadian">Waktu Kejadian</label>
                                <div class="input-group">
                                    <input name="waktu_kejadian" type="date" class="form-control" placeholder="Masukan Status Pengaduan" value="<?= set_value('waktu_kejadian'); ?>" required>
                                </div>
                                <small class="text-danger"><?= form_error('waktu_kejadian'); ?></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status">Status Pengaduan</label>
                                <div class="input-group">
                                    <input name="status" type="text" class="form-control" placeholder="Masukan Status Pengaduan" value="<?= set_value('status'); ?>" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-spinner"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('status'); ?></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="materi_pengaduan">Uraian Pengaduan</label>
                                <div class="input-group">
                                    <textarea name="materi_pengaduan" id="materi_pengaduan" class="form-control" cols="20" rows="3" placeholder="Masukan Uraian Pengaduan" required><?= set_value('materi_pengaduan'); ?></textarea>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-list-ol"></span>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger"><?= form_error('materi_pengaduan'); ?></small>
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