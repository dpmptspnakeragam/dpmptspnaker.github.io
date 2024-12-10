<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Pengaduan</h3>
                <hr>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahPengaduan"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <table class="table table-responsive table-striped table-borderless table-hover" id="TabelData1">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th class="text-center align-middle">No.</th>
                            <th class="text-center align-middle">Nomor Pengaduan</th>
                            <th class="text-center align-middle">Nama</th>
                            <th class="text-center align-middle">Alamat</th>
                            <th class="text-center align-middle">No. HP</th>
                            <th class="text-center align-middle">Email</th>
                            <th class="text-center align-middle">Jenis Pengaduan</th>
                            <th class="text-center align-middle">Lokasi Kejadian</th>
                            <th class="text-center align-middle">Waktu Kejadian</th>
                            <th class="text-center align-middle">Materi Pengaduan</th>
                            <th class="text-center align-middle">Status</th>
                            <th class="text-center align-middle">File Pengaduan</th>
                            <th class="text-center align-middle"><i class="fa fa-cog"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengaduan->result() as $row) {
                        ?>
                            <tr class="odd gradeX">
                                <td class="align-middle text-center"><?= $no++; ?></td>
                                <td class="align-middle text-center"><?= $row->no_pengaduan; ?></td>
                                <td class="align-middle text-center"><?= $row->nama; ?></td>
                                <td class="align-middle text-center"><?= $row->alamat; ?></td>
                                <td class="align-middle text-center"><?= $row->hp; ?></td>
                                <td class="align-middle text-center"><?= $row->email; ?></td>
                                <td class="align-middle text-center"><?= $row->jenis_pengaduan; ?></td>
                                <td class="align-middle text-center"><?= $row->lokasi_kejadian; ?></td>
                                <td class="align-middle text-center"><?= $row->waktu_kejadian; ?></td>
                                <td class="align-middle text-center"><?= $row->materi_pengaduan; ?></td>
                                <td class="align-middle text-center"><?= $row->status; ?></td>
                                <td class="align-middle text-center">
                                    <?php
                                    $file_path = base_url('assets/imgupload/') . $row->file_pengaduan;
                                    $server_file_path = FCPATH . 'assets/imgupload/' . $row->file_pengaduan; // Path file di server
                                    $file_extension = strtolower(pathinfo($row->file_pengaduan, PATHINFO_EXTENSION));
                                    $image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp']; // Daftar ekstensi file gambar

                                    // Periksa apakah file ada
                                    if (file_exists($server_file_path) && !empty($row->file_pengaduan)) {
                                        if (in_array($file_extension, $image_extensions)) : ?>
                                            <a href="<?= $file_path; ?>" target="_blank">
                                                <img src="<?= $file_path; ?>" alt="File_Pengaduan" class="img-responsive w-75">
                                            </a>
                                        <?php else : ?>
                                            <a href="<?= $file_path; ?>" target="_blank" class="btn btn-sm btn-primary">
                                                <i class="fas fa-download"></i> Unduh File
                                            </a>
                                        <?php endif;
                                    } else { ?>
                                        <p class="text-muted">Tidak ada gambar atau file upload</p>
                                    <?php } ?>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPengaduan<?php echo $row->id_pengaduan; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/pengaduan/hapus/<?php echo $row->id_pengaduan; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->no_pengaduan; ?>?')"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>