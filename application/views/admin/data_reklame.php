<main role="main">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><strong><i class="fa fa-home"></i> Dashboard</strong></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Reklame</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Data Reklame Kabupaten Agam</h3>
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
                    <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalTambahReklame"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                    <button href="" type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#ModalExportReklameTgl"><i class="fa fa-file fa-fw"></i>Export Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="DataTables">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">No. Izin</th>
                                <th class="text-center">Nama Perusahaan</th>
                                <th class="text-center">Alamat Perusahaan</th>
                                <th class="text-center">Penanggung Jawab</th>
                                <th class="text-center">No. HP</th>
                                <th class="text-center">Alamat Pasang</th>
                                <th class="text-center">Nilai Retribusi</th>
                                <th class="text-center">Ukuran / Unit</th>
                                <th class="text-center">Jenis Reklame</th>
                                <th class="text-center">Titik Koordinat</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Tanggal Pasang</th>
                                <th class="text-center">Masa Berlaku</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($reklame->result() as $row) {
                                $sekarang = date('Y-m-d');
                                if ($row->masa_berlaku <= $sekarang) {
                            ?>
                                    <tr class="odd gradeX bg-danger text-light">
                                    <?php } else if ($row->ket == 'Belum Setor') { ?>
                                    <tr class="odd gradeX bg-warning">
                                    <?php } else { ?>
                                    <tr class="odd gradeX">
                                    <?php } ?>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->no_izin; ?></td>
                                    <td><?= $row->nama_perusahaan; ?></td>
                                    <td><?= $row->alamat_perusahaan; ?></td>
                                    <td><?= $row->pemohon; ?></td>
                                    <td><?= $row->no_hp; ?></td>
                                    <td><?= $row->alamat_pasang; ?>, Nagari <?= $row->nama_nagari; ?>, Kecamatan <?= $row->kecamatan; ?></td>
                                    <td><?= $row->pajak; ?></td>
                                    <td><?= $row->ukuran; ?> / <?= $row->unit; ?></td>
                                    <td><?= $row->jenis_reklame; ?></td>
                                    <td><?= $row->lat; ?>, <?= $row->long; ?></td>
                                    <td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->foto; ?>" style="width:95%;" class="img-responsive"></td>
                                    <td><?= $row->tgl_pasang; ?></td>
                                    <td><?= $row->masa_berlaku; ?></td>
                                    <td><?= $row->ket; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditReklame<?php echo $row->id_reklame; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/reklame/hapus/<?php echo $row->id_reklame; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus Reklame?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>