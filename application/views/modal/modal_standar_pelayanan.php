<!-- Modal -->
<div class="modal fade" id="StandarPelayanan" tabindex="-1" role="dialog" aria-labelledby="LabelSTDPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelSTDPelayanan">Standar Pelayanan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="pdfPreview" src="" style="width:100%; height:500px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <a id="downloadButton" href="" class="btn btn-primary">Download PDF</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#StandarPelayanan').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var pdfUrl = button.data('pdf-url'); // Extract info from data-* attributes
            var downloadUrl = button.data('download-url');

            var modal = $(this);
            modal.find('#pdfPreview').attr('src', pdfUrl);
            modal.find('#downloadButton').attr('href', downloadUrl);
        });
    });
</script>