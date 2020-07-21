<body style="background: linear-gradient(#343A40, #17A2B8);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center text-white" style="margin:80px auto;">
                <img src="<?= base_url(); ?>assets/img/logoenaker(new)putih.png" width="110px" alt="Logo e-Naker">
                <h1>DINAS PENANAMAN MODAL PELAYANAN TERPADU SATU PINTU DAN KETENAGAKERJAAN <br> KABUPATEN AGAM</h1>
                <h2>Silahkan Login</h2>
                <div class="card-body" style="width:400px; margin:auto;">
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
                            <button type="submit" class="shadow btn btn-lg btn-danger btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>