<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12 text-center" style="margin:80px auto;">
                <div class="card-body kartu_login" style="width:400px; margin:auto;">
                    <img src="<?= base_url(); ?>assets/img/vectoragam.png" width="90px" alt="Logo Agam">
                    <h3 class="display-4 judul_login">DINAS PENANAMAN MODAL PELAYANAN TERPADU SATU PINTU DAN KETENAGAKERJAAN KABUPATEN AGAM</h3>
                    <h5>Login</h5>
                    <?php if ($this->session->flashdata('pesan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form role="form" action="<?= base_url(); ?>login/cek_login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control shadow" autocomplete="off" placeholder="Masukkan Username" name="usrname" autofocus>
                                <small id="emailHelp" class="form-text text-danger"><?= form_error('usrname'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control shadow" autocomplete="off" placeholder="Masukkan Password" name="pssword" type="password">
                                <small id="emailHelp" class="form-text text-danger"><?= form_error('pssword'); ?></small>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="shadow btn btn-lg btn-success btn-block">
                                <i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>