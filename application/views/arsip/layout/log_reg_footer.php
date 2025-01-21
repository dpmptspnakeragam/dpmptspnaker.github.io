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