<div class="register-box">
    <div class="card card-outline card-maroon">
        <div class="card-header text-center">
            <a href="<?= base_url('login'); ?>">
                <img src="<?= base_url('assets/img/agam.png'); ?>" alt="Logo Agam" class="img-size-64">
            </a>
            <br>
            <span class="font-weight-bold">
                Dinas Penanaman Modal
                <br>
                Pelayanan Terpadu Satu Pintu (DPMPTSP)
                <br>
                Kabupaten Agam
            </span>
        </div>
        <div class="card-body login-card-body rounded">
            <h6 class="login-box-msg">
                <strong>Register Akun Arsip</strong>
            </h6>

            <div class="dropdown-divider"></div>

            <?= validation_errors(
                '<div class="alert alert-warning alert-dismissible small">
                <i class="icon fas fa-exclamation-triangle"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>',
                '</div>'
            ); ?>

            <form action="<?= base_url('arsip/register/reg_now'); ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-address-card"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="r_password" placeholder="Konfirmasi Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" name="role" required>
                        <option value="" selected disabled>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <button type="submit" class="btn btn-outline-danger btn-block"><i class="fas fa-check-double"></i> Submit</button>
                    </div>
                    <div class="col-5">
                        <a href="<?= base_url('arsip'); ?>" class="btn btn-outline-secondary btn-block"><i class="fas fa-door-open"></i> Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>