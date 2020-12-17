<nav class="navbar header-admin navbar-dark p-0 sticky-top flex-md-nowrap shadow">
    <a class="navbar-brand brand col-sm-3 col-md-2 mr-0" href="<?= base_url(); ?>admin/home">
        <img src="<?= base_url(); ?>assets/img/vectoragam.png" width="25px" alt="Logo Agam"> DPMPTSP-NAKER AGAM
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?= base_url(); ?>admin/home/logout"><i class="fa fa-sign-out-alt"></i> Log Out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid ">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/home">
                            <span data-feather="home"></span>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/pegawai">
                            <span data-feather="users"></span>
                            Pegawai
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/informasi">
                            <span data-feather="info"></span>
                            Informasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                            <span data-feather="book"></span>
                            Layanan
                        </a>
                        <div class="collapse" id="collapse1">
                            <ul>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/perizinan">Perizinan</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/nonperizinan">Non Perizinan</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_izin">Grafik Izin Keluar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/investasi">
                            <span data-feather="trending-up"></span>
                            Peluang Investasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/regulasi">
                            <span data-feather="file-text"></span>
                            Regulasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/ppid">
                            <span data-feather="database"></span>
                            PPID
                        </a>
                    </li>
                </ul>
            </div>
        </nav>