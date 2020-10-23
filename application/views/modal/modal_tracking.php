<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $("#btn-tracking").click(function(event) {
            var no_permohonan = $("#no_permohonan").val();
            $.ajax({
                url: 'https://sicantikws.layanan.go.id/api/TemplateData/keluaran/24218.json',
                data: "no_permohonan=" + no_permohonan,
                success: function(data) {
                    var json = data,
                        obj = $.parseJSON(json),
                        coba = JSON.parse(obj);
                    $('#display').html('<p> Nama: ' + coba.nama + '</p>');
                    $('#display').append('<p> Jenis Izin : ' + coba.success + '</p>');
                }
            });
        });
    });
</script>
<div class="modal fade" id="ModalTracking" tabindex="-1" role="dialog" aria-labelledby="ModalPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-4 judul-modal" id="LabelModalPelayanan">Tracking SiCantik</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-lg-12 mb-1">
                            <p>Tracking SiCantik merupakan fitur yang dapat Anda gunakan untuk mengetahui sampai dimana proses izin yang anda ajukan dengan menggunakan No. Permohonan yang didapat dari Petugas Front Office Kami. Silahkan Anda hubungi Petugas Front Office untuk mendapatkan No. Permohonan Anda.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input id="no_permohonan" class="form-control" name="no_permohonan" placeholder="Masukkan No. Permohonan Anda" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" id="btn-tracking" class="btn-tracking text-center"><i class="ikon fa fa-search icon-square icon-32"></i> Tracking</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div id="display" class="bg-light"></div>
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