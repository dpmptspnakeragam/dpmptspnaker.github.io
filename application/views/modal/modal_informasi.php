<!-- Modal -->
<?php foreach ($berita->result() as $row) {
?>
    <div class="modal fade" id="DetailInformasi<?= $row->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalInformasi" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan"></h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container text-justify">
                        <div class="row modal-informasi">
                            <img class="gambar-carousel" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->judul_berita; ?>">
                            <div class="container">
                                <h1 class="judul-informasi"><?= $row->judul_berita; ?></h1>
                                <small><?= date_indo($row->tgl_berita) ?>, Kategori : <?= $row->kategori; ?></small>
                                <p class="rangkuman"><?= $row->isi_berita; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>