<script src="<?= base_url(); ?>assets/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>assets/popper.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable();
    });
</script>

<script>
    $(function() {
        function DataTable(selectors) {
            selectors.forEach(function(selector) {
                $(selector).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo($(selector + '_wrapper .col-md-6:eq(0)'));
            });
        }

        DataTable(["#TabelData1", "#TabelData2", "#TabelData3", "#TabelData4"]);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            var alertKey = alert.getAttribute('data-alert-key');
            setTimeout(function() {
                alert.parentNode.removeChild(alert); // Menghapus elemen alert dari DOM
                // Hapus juga flashdata sesuai dengan kunci alert
                <?php if ($this->session->flashdata('gagal')) : ?>
                    if (alertKey === 'gagal') {
                        <?= $this->session->set_flashdata('gagal', ''); ?>
                    }
                <?php endif; ?>
                <?php if ($this->session->flashdata('berhasil')) : ?>
                    if (alertKey === 'berhasil') {
                        <?= $this->session->set_flashdata('berhasil', ''); ?>
                    }
                <?php endif; ?>
            }, 5000); // Menghapus setelah 5 detik (5000 milidetik)
        });
    });
</script>

</body>

</html>