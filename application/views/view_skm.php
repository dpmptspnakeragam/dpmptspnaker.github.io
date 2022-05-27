<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href=""><i class="fa fa-file"></i> Survey Kepuasan Masyarakat (SKM)</a>
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
                <div class="card-header text-center">
                    <p style="font-size:24px;"><strong>Indeks Kepuasan Masyarakat (IKM)<br>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu & Ketenagakerjaan<br>Kabupaten Agam</strong></p>
                </div>
                <div class="card-body">
                    <div class="panel-heading">
                        <?php if ($this->session->flashdata('gagal')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('gagal'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('berhasil')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('berhasil'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="<?= base_url(); ?>skm/form" class="btn btn-success">Lakukan Survey</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-12 text-center">
                            <h1>NILAI IKM</h1>
                            <P style="font-size:200px;" class="text-info"><strong><?php echo number_format($ikm); ?></strong></P>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <h6>NAMA LAYANAN : PERIZINAN & NON PERIZINAN</h6>
                            <hr>
                            <p><strong>RESPONDEN</strong></p>
                            <P><strong>JUMLAH</strong> : <?php echo number_format($jumlah); ?> ORANG</P>
                            <p><strong>LAKI-LAKI</strong> : <?php echo number_format($jmlh_lk); ?> ORANG / <strong>PEREMPUAN</strong> : <?php echo number_format($jmlh_pr); ?> ORANG</p>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <p><strong>PENDIDIKAN</strong></p>
                                    <ul>
                                        <li>SD : <?php echo number_format($jmlh_sd); ?> ORANG</li>
                                        <li>SMP : <?php echo number_format($jmlh_smp); ?> ORANG</li>
                                        <li>SMA : <?php echo number_format($jmlh_sma); ?> ORANG</li>
                                        <li>DI/DII/DIII : <?php echo number_format($jmlh_d1); ?> ORANG</li>
                                        <li>DIV/S1 : <?php echo number_format($jmlh_s1); ?> ORANG</li>
                                        <li>S2 : <?php echo number_format($jmlh_s2); ?> ORANG</li>
                                    </ul>
                                </div>
                                <div class="col-6 text-left">
                                    <p><strong>PEKERJAAN</strong></p>
                                    <ul>
                                        <li>PNS : <?php echo number_format($jmlh_pns); ?> ORANG</li>
                                        <li>TNI : <?php echo number_format($jmlh_tni); ?> ORANG</li>
                                        <li>POLRI : <?php echo number_format($jmlh_polri); ?> ORANG</li>
                                        <li>SWASTA : <?php echo number_format($jmlh_swasta); ?> ORANG</li>
                                        <li>WIRAUSAHA : <?php echo number_format($jmlh_wirausaha); ?> ORANG</li>
                                        <li>LAINNYA : <?php echo number_format($jmlh_lainnya); ?> ORANG</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center">
                            <p><strong>TERIMA KASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN
                                    MASUKKAN ANDA SANGAT BERMANFAAT BAGI KEMAJUAN DINAS KAMI AGAR TERUS MEMPERBAIKI
                                    DAN MENNGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT</strong></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <p>MUTU PELAYANAN
                            <ul>
                                <li><strong>A (Sangat Baik)</strong> : 88,31 - 100,00</li>
                                <li><strong>B (Baik)</strong> : 76,61 - 88,30</li>
                                <li><strong>C (Kurang Baik)</strong> : 65,00 - 76,00)</li>
                                <li><strong>D (Tidak Baik)</strong> : 25,00 - 64,99</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

    </div>
</body>