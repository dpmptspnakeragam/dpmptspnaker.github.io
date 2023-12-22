<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<style type="text/css">
    #mapreklame {
        height: 80vh;
    }
</style>
<main role="main">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><strong><i class="fa fa-home"></i> Dashboard</strong></li>
                        <li class="breadcrumb-item active" aria-current="page">Peta Reklame</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="mapreklame"></div>
                <script>
                    var mymap = L.map('mapreklame').setView([-0.2499547, 100.159555], 10);

                    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; DPMPTSP Kab. Agam'
                    }).addTo(mymap);

                    <?php foreach ($reklame->result() as $row) { ?>

                        var tooltip = L.tooltip({
                                permanent: true
                            })
                            .setLatLng([<?php echo $row->lat ?>, <?php echo $row->long ?>])
                            .setContent('<?php echo $row->nama_perusahaan ?>')
                            .addTo(mymap);

                        var marker = L.marker([<?php echo $row->lat ?>, <?php echo $row->long ?>]).addTo(mymap)
                            .bindPopup("<div class='container-fluid text-light p-1' style='width:300px; background-color:#600574;'><div class='row'><div class='col-5'>Perusahaan</div><div class='col-7'>: <?php echo $row->nama_perusahaan ?></div></div><div class='row'><div class='col-5'>No. HP</div><div class='col-7'>: <?php echo $row->no_hp ?></div></div><div class='row'><div class='col-5'>Masa Berlaku</div><div class='col-7'>: <?php echo $row->masa_berlaku ?></div></div><div class='row'><div class='col-5'>Status Retribusi</div><div class='col-7'>: <?php echo $row->ket ?></div></div><div class='row'><div class='col-5'>Gambar</div><div class='col-7'>: <img src='<?= base_url(); ?>assets/imgupload/<?= $row->foto; ?>' style='width:150px;' class='img-responsive'></div></div></div>");


                    <?php } ?>
                </script>
            </div>
        </div>
</main>