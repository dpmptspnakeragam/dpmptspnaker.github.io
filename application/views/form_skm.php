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
        <div class="container">
            <!-- Breadcrumbs-->

            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header text-center">
                    <p><strong>Kuesioner Survey Kepuasan Masyarakat (SKM)<br>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu<br>Kabupaten Agam</strong></p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form role="form" action="<?= base_url(); ?>skm/tambah" method="post" enctype="multipart/form-data">
                                <?php foreach ($idmax->result() as $row) {
                                ?>
                                    <div class="form-group" hidden>
                                        <label class=" control-label">Id</label>
                                        <input type="text" class="form-control" id="id" name="id_skm" value="<?= $row->idmax + 1; ?>">
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="pelatihan">Jenis Kelamin</label>
                                    <select required name="jk" class="form-control">
                                        <option value="1">L</option>
                                        <option value="2">P</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="persyaratan">Usia</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="umur" placeholder="Usia" required>
                                        </div>
                                        <div class="col">
                                            Tahun
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select required name="pendidikan" class="form-control">
                                        <option value="1">SD Sederajat</option>
                                        <option value="2">SLTP Sederajat</option>
                                        <option value="3">SLTA Sederajat</option>
                                        <option value="4">D3</option>
                                        <option value="5">S1</option>
                                        <option value="6">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <select required name="pekerjaan" class="form-control">
                                        <option value="1">PNS</option>
                                        <option value="2">TNI</option>
                                        <option value="3">POLRI</option>
                                        <option value="4">Swasta</option>
                                        <option value="5">Wirausaha</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_layanan">Jenis Layanan yang diterima</label>
                                    <input type="text" class="form-control" name="layanan" placeholder="Jenis layanan yang diterima" required>
                                    <small class="text-danger">(misal : IMB,SIP,SIUP,dll)</small>
                                </div>
                                <hr>
                                <p class="text-center"> PENDAPAT RESPONDEN TENTANG PELAYANAN PUBLIK </P>
                                <div class="form-group">
                                    <label for="U1">1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya ?</label>
                                    <select required name="u1" class="form-control">
                                        <option value="4">Sangat Sesuai</option>
                                        <option value="3">Sesuai</option>
                                        <option value="2">Kurang Sesuai</option>
                                        <option value="1">Tidak Sesuai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U2">2. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini ?</label>
                                    <select required name="u2" class="form-control">
                                        <option value="4">Sangat Mudah</option>
                                        <option value="3">Mudah</option>
                                        <option value="2">Kurang Mudah</option>
                                        <option value="1">Tidak Mudah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U3">3. Bagaimana pemahaman Saudara tentang kecepatan waktu dalam memberikan pelayanan ?</label>
                                    <select required name="u3" class="form-control">
                                        <option value="4">Sangat Cepat</option>
                                        <option value="3">Cepat</option>
                                        <option value="2">Kurang Cepat</option>
                                        <option value="1">Tidak Cepat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U4">4. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan ?</label>
                                    <select required name="u4" class="form-control">
                                        <option value="4">Gratis</option>
                                        <option value="3">Murah</option>
                                        <option value="2">Culup Mahal</option>
                                        <option value="1">Sangat Mahal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U5">5. Bagaimana pendapat Saudara tentang kesesuaian pelayanan yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?</label>
                                    <select required name="u5" class="form-control">
                                        <option value="4">Sangat Sesuai</option>
                                        <option value="3">Sesuai</option>
                                        <option value="2">Kurang Sesuai</option>
                                        <option value="1">Tidak Sesuai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U6">6. Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan ?</label>
                                    <select required name="u6" class="form-control">
                                        <option value="4">Sangat Kompeten</option>
                                        <option value="3">Kompeten</option>
                                        <option value="2">Kurang Kompeten</option>
                                        <option value="1">Tidak Kompeten</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U7">7. Bagaimana pendapat Saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan ?</label>
                                    <select required name="u7" class="form-control">
                                        <option value="4">Sangat Sopan & Ramah</option>
                                        <option value="3">Sopan & Ramah</option>
                                        <option value="2">Kurang Sopan & Ramah</option>
                                        <option value="1">Tidak Sopan & Ramah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U8">8. Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan ?</label>
                                    <select required name="u8" class="form-control">
                                        <option value="4">Dikelola Dengan Baik</option>
                                        <option value="3">Berfungsi Kurang Maksimal</option>
                                        <option value="2">Ada Tetapi Tidak Berfungsi</option>
                                        <option value="1">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="U9">9. Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana ?</label>
                                    <select required name="u9" class="form-control">
                                        <option value="4">Sangat Baik</option>
                                        <option value="3">Baik</option>
                                        <option value="2">Cukup</option>
                                        <option value="1">Buruk</option>
                                    </select>
                                </div>
                                <div class="form-group" hidden>
                                    <input type="hidden" class="form-control" name="date" value="<?php echo date("Y-m-d"); ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" href="<?= base_url(); ?>home">Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

    </div>
</body>