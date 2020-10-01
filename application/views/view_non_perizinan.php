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
                                <?php
                                $no = 1;
                                foreach ($nonperizinan->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?= $row->nama_izin; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url(); ?>assets/fileupload/<?= $row->form; ?>" class="tombol-aksi">
                                                    <i class="fa fa-download ">
                                                    </i> Formulir
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="<?= base_url(); ?>assets/fileupload/<?= $row->syarat; ?>" class="tombol-aksi">
                                                    <i class="fa fa-download ">
                                                    </i> Persyaratan
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
</body>