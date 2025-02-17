<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel <?= $title2; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="d-flex mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahKadis">
                                <i class="fa fa-plus p-1" aria-hidden="true"></i>
                                Tambah Data
                            </button>
                        </div>

                        <table id="TabelData1" class="table table-bordered table-sm table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Nama</th>
                                    <th class="text-center align-middle">Username</th>
                                    <th class="text-center align-middle">Password</th>
                                    <th class="text-center align-middle">Role</th>
                                    <th class="text-center align-middle">Create At</th>
                                    <th class="text-center align-middle">Update At</th>
                                    <th class="text-center align-middle">Status</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($admin as $row) : ?>
                                    <tr>
                                        <td class="text-center align-middle"><?= $no++; ?></td>
                                        <td class="text-center align-middle"><?= htmlspecialchars($row['nama']); ?></td>
                                        <td class="text-center align-middle"><?= htmlspecialchars($row['username']); ?></td>
                                        <td class="text-center align-middle">*****</td>
                                        <td class="text-center align-middle"><?= htmlspecialchars($row['role']); ?></td>
                                        <td class="text-center align-middle"><?= date('d F Y H:i:s', strtotime($row['created_at'])); ?></td>
                                        <td class="text-center align-middle"><?= date('d F Y H:i:s', strtotime($row['updated_at'])); ?></td>
                                        <td class="text-center align-middle">
                                            <?= ($row['online'] == 1) ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>'; ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="<?= base_url('admin/edit/' . $row['id_user']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i></a>
                                            <a href="<?= base_url('admin/hapus/' . $row['id_user']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?');"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->