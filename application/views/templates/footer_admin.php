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
                    "ordering": false,
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
</body>

</html>