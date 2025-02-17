<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-primary" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Role -->
        <li class="nav-item">
            <span class="nav-link active">
                <?= $this->session->userdata('online') == 1 ? '<span class="text-primary">Online</span>' : '<span class="text-danger">Offline</span>'; ?>
            </span>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="<?= base_url('assets/img/agam.png'); ?>" alt="Arsip Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">
            <b>Arsip DPMPTSP</b>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-1 d-flex">
            <div style="margin-left: 10px;">
                <img src="<?= base_url('assets/img/admin-avatar.png'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info d-flex justify-content-between align-items-center w-100">
                <span class="d-block"><?= $this->session->userdata('nama') ?></span>
                <a href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-0">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Informasi -->
                <li class="nav-item">
                    <a href="<?= base_url('arsip/dashboard'); ?>" class="nav-link <?php if (in_array($this->uri->segment(2), ['dashboard'])) echo "active"; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if ($this->session->userdata('role') == 'admin'): ?>

                    <!-- Profile -->
                    <li class="nav-item <?= in_array(
                                            $this->uri->segment(2),
                                            [
                                                'admin',
                                                'pegawai',
                                            ]
                                        ) ? 'menu-open' : ''; ?>">
                        <a href="" class="nav-link <?= in_array(
                                                        $this->uri->segment(2),
                                                        [
                                                            'admin',
                                                            'pegawai',
                                                        ]
                                                    ) ? 'active' : ''; ?>">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Management Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('arsip/admin'); ?>" class="nav-link <?= $this->uri->segment(2) == 'admin' ? 'active' : ''; ?>">
                                    <i class="<?= $this->uri->segment(2) == 'kadis' ? 'fas' : 'far'; ?> fa-circle nav-icon <?= $this->uri->segment(2) == 'admin' ? 'text-primary' : ''; ?>"></i>
                                    <p>Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('arsip/pegawai'); ?>" class="nav-link <?= $this->uri->segment(2) == 'pegawai' ? 'active' : ''; ?>">
                                    <i class="<?= $this->uri->segment(2) == 'pegawai' ? 'fas' : 'far'; ?> fa-circle nav-icon <?= $this->uri->segment(2) == 'pegawai' ? 'text-primary' : ''; ?>"></i>
                                    <p>Pegawai</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php endif; ?>

                <!-- <div class="user-panel mb-1 d-flex"></div> -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a class="text-primary" href="<?= base_url('arsip/dashboard'); ?>">
                                <i class="fas fa-home"></i> <?= $home; ?>
                            </a>
                        </li>

                        <!-- Breadcrumb untuk Uri Segment 1 atau 2 -->

                        <?php if ($this->uri->segment(2) !== 'dashboard') : ?>
                            <li class="breadcrumb-item text-primary"><?= $title1; ?></li>
                        <?php endif; ?>
                        <li class="breadcrumb-item active"><?= $title2; ?></li>

                        <?php if ($this->uri->segment(1) && !$this->uri->segment(2)) : ?>
                        <?php elseif ($this->uri->segment(1) && $this->uri->segment(2)) : ?>
                        <?php endif; ?>

                        <!-- Breadcrumb untuk Halaman Tambah User, Update User, Hapus User -->
                        <?php if ($this->uri->segment(2) == 'add' || $this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'delete') : ?>
                            <li class="breadcrumb-item active"><?= $action; ?></li>
                        <?php endif; ?>

                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->