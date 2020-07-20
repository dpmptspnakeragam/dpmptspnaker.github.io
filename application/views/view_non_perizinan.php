<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href=""><i class="fa fa-file"></i> Prosedur Non Perizinan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="tutup" href="<?= base_url(); ?>home"><i class="fa fa-arrow-left"></i> Kembali</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Formulir dan Persyaratan</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Jenis Izin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Izin Rekomendasi Keramaian</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/666.docx" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/666.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Wilayah Pertambangan(WIUP)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/wiup.docx" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/wiup.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Usaha Pertambangan(IUP) Eksplorasi</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/eksplo.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/eksplo.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Usaha Pertambangan(IUP) Operasi Produksi</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/tambang.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/tambang.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Pertambangan Rakyat(IPR)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/ipr.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i>Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/ipr.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Pendirian SPBU</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/spbu.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/spbu.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Depot BBM</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/bbm.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/bbm.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Izin Pengumpulan Dan Penyaluran Pelumas Bekas</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/pbekas.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/pbekas.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Keterangan Penyimpanan Barang(SKPB)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/simpanbrg.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/simpanbrg.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Eksportir Terdaftar</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/eksp.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/eksp.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Badan Koordinasi Penataan Ruang Daerah</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/daerah.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/daerah.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Pernyataan Pengelolaan Lingkungan(SPPL)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/sppl.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/sppl.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Keputusan Kelayakan Lingkungan(SKKL)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/skkl.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/skkl.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Upaya Pengelolaan Lingkungan/Upaya Pemantauan Lingkungan(UKL/UPL)</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/ukl.docx" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/ukl.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Sarana Umum (PSU) Perumahan</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/8999.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/8999.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Izin Perumahan & Pengembangan Kawasan Permukiman</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/899.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/899.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pas Kecil Dan Sertifikat Keselamatan Kapal</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/pas.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/pas.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Kartu Pencari Kerja</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/Ak1.doc" onclick="" class="btn btn-basic" title='Form'><i class="fa fa-download"></i> Download</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>assets/file/Ak1.pdf" onclick="" class="btn btn-basic" title='Persyaratan'><i class="fa fa-eye"></i> Persyaratan</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
</body>