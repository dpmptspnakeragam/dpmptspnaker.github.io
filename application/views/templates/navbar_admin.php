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
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_izin">Grafik Izin Terbit</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse1">
                            <span data-feather="dollar-sign"></span>
                            Investasi
                        </a>
                        <div class="collapse" id="collapse3">
                            <ul>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/investasi">Peluang Investasi</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/potensi_investasi">Potensi Investasi</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/tanah_ulayat">Tanah Ulayat Untuk Investasi</a></li>
                            </ul>
                        </div>
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
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse1">
                            <span data-feather="trending-up"></span>
                            Grafik
                        </a>
                        <div class="collapse" id="collapse2">
                            <ul>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_izin">Grafik Izin Diterbtkan</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_investasi">Grafik Realisasi Investasi</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_skm">Grafik SKM</a></li>
                                <li><a class="nav-link" href="<?= base_url(); ?>admin/grafik_izinbulan">Grafik Izin Diterbitkan /Tahun</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/runningteks">
                            <span data-feather="info"></span>
                            Running Teks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/banner">
                            <span data-feather="image"></span>
                            Banner
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/sarpras">
                            <span data-feather="tool"></span>
                            Sarana & Prasarana
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>admin/skm">
                            <span data-feather="file"></span>
                            Survey Kepuasan masyarakat (SKM)
                        </a>
                    </li>
                </ul>
            </div>
        </nav>