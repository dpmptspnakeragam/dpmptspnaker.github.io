<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link href="<?= base_url('assets/img/agam.png'); ?>" rel="shortcut icon" type="image/png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
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
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('arsip/dashboard/logout'); ?>" class="btn btn-outline-secondary btn-block"><i class="fas fa-check-double"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            function showToast(icon, message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "center",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: icon,
                    title: message
                });
            }

            <?php if ($this->session->flashdata('success')) { ?>
                showToast("success", "<?= $this->session->flashdata('success'); ?>");
            <?php } ?>

            <?php if ($this->session->flashdata('error')) { ?>
                showToast("error", "<?= $this->session->flashdata('error'); ?>");
            <?php } ?>

            <?php if ($this->session->flashdata('warning')) { ?>
                showToast("warning", "<?= $this->session->flashdata('warning'); ?>");
            <?php } ?>
        });

        document.addEventListener('DOMContentLoaded', function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                var alertKey = alert.getAttribute('data-alert-key');
                setTimeout(function() {
                    alert.parentNode.removeChild(alert);
                    <?php if ($this->session->flashdata('success')) : ?>
                        if (alertKey === 'success') {
                            <?= $this->session->set_flashdata('success', ''); ?>
                        }
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')) : ?>
                        if (alertKey === 'error') {
                            <?= $this->session->set_flashdata('error', ''); ?>
                        }
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('warning')) : ?>
                        if (alertKey === 'warning') {
                            <?= $this->session->set_flashdata('warning', ''); ?>
                        }
                    <?php endif; ?>
                }, 3000);
            });
        });
    </script>

</body>

</html>