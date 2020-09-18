<!-- Cover -->
<div class="jumbotron mb-0 ml-0">
  <div class="container text-center judul">
    <img class="mb-4" src="<?= base_url(); ?>assets/img/vectoragam.png" alt="logoagam" width="10%">
    <h3 class="display-3">SELAMAT DATANG</h3>
    <h4 class="display-2">DINAS PENANAMAN MODAL PELAYANAN TERPADU <br> SATU PINTU DAN KETENAGAKERJAAN</h4>
    <h5 class="display-4">Kabupaten Agam<h5>
  </div>
</div>
<!-- close Cover -->

<!-- navbar -->
<nav class="navbar shadow sticky-top navbar-bottom navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand page-scroll" href="#home">DPMPTSP-NAKER KAB.AGAM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-right" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#profil">Profil Dinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#pelayanan">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#investasi">GIS Potensi Investasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#naker">e-Naker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#pengaduan">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- close navbar -->

<!-- Informasi -->
<section class="informasi" id="informasi">
  <div>
    <div id="carouselExampleIndicators" class="carousel slide berita-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < $berita->num_rows(); $i++) {
          echo '
        <li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '"';
          if ($i == 0) {
            echo 'class="active"';
          }
          echo '></li>';
        } ?>
      </ol>
      <div class="carousel-inner">
        <?php
        if ($berita->num_rows() > 0) {
          foreach ($berita->result() as $row) {
            if ($row->id_berita == 1) {
        ?> <div class="carousel-item active">
              <?php
            } else {
              ?> <div class="carousel-item ">
                <?php
              }
                ?>
                <a href="#" data-toggle="modal" data-target="#DetailInformasi<?php echo $row->id_berita; ?>">
                  <img class="gambar-carousel" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->judul_berita; ?>">
                  <div class="carousel-caption text-left">
                    <p class="judul-informasi mb-0"><?= $row->judul_berita; ?></p>
                    <small class="tgl_berita"><?= date_indo($row->tgl_berita); ?> , Kategori : <?= $row->kategori; ?></small>
                    <p class="ringkasan mt-1"><?= $row->rangkuman; ?>'</p>
                </a>
                </div>
              </div>
          <?php }
        } ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- close informasi -->

<!-- Profil -->
<section class="profil" id="profil">
  <div class="container text-center ">
    <div class="row">
      <div class="col-lg-12 mt-4 mb-4">
        <h1 class="judul-profil"><b>Profil Dinas</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="text-justify isi-profil col-lg-12 col-sm-12 mb-0">
          <p>
            Sebelum dibentuknya Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan, OPD ini bernama Kantor Penanaman Modal
            dan Pelayanan Terpadu (KPMPT) yang merupakan unsur pelaksana teknis
            Pemerintah Daerah di bidang pelayanan penanaman modal, perizinan, dan non perizinan. Institusi ini dibentuk berdasarkan
            Peraturan Daerah Kabupaten Agam Nomor 5 Tahun 2011 tentang Perubahan atas Peraturan Daerah Nomor 7 Tahun 2008 tentang
            Pembentukan Organisasi dan Lembaga Teknis Daerah. Sebelum lahirnya Peraturan Daerah Nomor 5 Tahun 2011 tersebut, pelayanan
            perizinan dan non perizinan telah dilaksanakan secara terpadu melalui Kantor Pelayanan Terpadu (KPT) sejak tahun 2008.
            Pada tahun 2011, tugas pokok dan fungsi institusi ini diperluas dengan bergabungnya pelayanan penanaman modal.
            Tujuannya adalah untuk memberikan pelayanan kepada masyarakat di bidang penanaman modal, perizinan, dan non
            perizinan dengan kepastian waktu, syarat, biaya, dan akuntabilitas, serta memperpendek jalur birokrasi sehingga ke depannya
            diharapkan akan berdampak pada peningkatan kenyamanan dan motivasi bagi investor untuk berinvestasi di Kabupaten Agam.
            Pada tahun 2016 melalui Peraturan Daerah Kabupaten Agam Nomor 11 Tahun 2016 tentang Pembentukan
            dan Susunan Perangkat Daerah maka dibentuklah Organisasi Perangkat Daerah yaitu Dinas Penanaman Modal Pelayanan Terpadu
            Satu Pintu dan Ketenagakerjaan (DPMPTSP-NAKER), seterusnya ditindak lanjuti dengan Peraturan Bupati Agam
            Nomor 56 Tahun 2016 tentang Penjabaran Tugas dan Fungsi Dinas Penanaman Modal, Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan.
          </p>
        </div>
        <div class="col-lg-3 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalVisi">Visi</a>
        </div>
        <div class="col-lg-3 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalMisi">Misi</a>
        </div>
        <div class="col-lg-3 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalTugas">Tugas</a>
        </div>
        <div class="col-lg-3 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalFungsi">Fungsi</a>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <di class="text-center col-md-12 col-lg-12 col-sm-12 display-4 mt-4">
            <div class="slogan"><u>Kami Melayani Dengan PASTI !!!</u></div>
          </di>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- close profil -->

<!-- Pelayanan -->
<section class="pelayanan" id="pelayanan">
  <div class="container text-center">
    <div class="row ">
      <div class="col-lg-12 mt-4 mb-auto ">
        <h1 class="judul-layanan"><b>Layanan</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-justify">
        <p class="isi-pelayanan intro-pelayanan">
          Kami membuka Layanan Perizinan dan Non Perizinan melalui tatap muka maupun online. Untuk tatap muka secara langsung
          silahkan kunjungi kantor kami dengan alamat yang tertera pada menu Kontak. Untuk pelayanan melalui online silahkan
          kunjungi situs yang telah kami sediakan dibawah ini (SiCantik atau OSS) atau bisa juga hubungi nomor HP yang tertera pada menu Kontak.
          Untuk melihat persyaratan atau info tentang Izin yang akan anda buat, silahkan pilih Standar Pelayanan.
        </p>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row isi-pelayanan">
      <div class="col-sm-12 col-md-4 col-lg-4 display-4 mb-3">
        <a href="https://sicantikui.layanan.go.id" class="pilih-pelayanan">SiCantik</a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 display-4 mb-3">
        <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalPelayanan">Standar Pelayanan</a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 display-4 mb-3">
        <a href="https://app.oss.go.id/app/#front/home" class="pilih-pelayanan">OSS</a>
      </div>
    </div>
  </div>
</section>
<!-- close pelayanan -->

<!-- Investasi -->
<section class="investasi" id="investasi">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-investasi"><b>GIS Potensi Investasi</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="PETA POTENSI INVESTASI KABUPATEN AGAM" src="//www.arcgis.com/apps/Embed/index.html?webmap=ae83c5f68ead4e8a894d82b536186438&extent=99.4542,-0.6519,100.8906,0.1131&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&disable_scroll=true&theme=light"></iframe>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <p class="display-4 penjelasan-investasi">Peta diatas merupakan peta Penyebaran Potensi Investasi yang berada di Kabupaten Agam.</p>
      </div>
    </div>
  </div>
</section>
<!-- close Investasi -->

<!-- Naker -->
<section class="naker" id="naker">
  <div class="container text-center">
    <div class="row isi-naker">
      <div class="col-lg-12 mt-4">
        <h1 class="judul-naker"><b>e-Naker</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="col-lg-12 mt-4">
          <img class="logo-enaker" src="<?= base_url(); ?>assets/img/logoenaker.png" alt="logoagam">
        </div>
        <p class="isi-naker mt-3">Merupakan situs yang dapat digunakan pengguna untuk memperoleh informasi dibidang Ketenagakerjaan yang meliputi :
          Lowongan Kerja, Magang, Pelatihan serta yang berkaitan dengan Ketenagakerjaan</p>
        <p class="isi-naker">Untuk mengunjungi situs e-Naker, silahkan klik tombol dibawah ini.<p>
      </div>
    </div>
    <div class="row isi-naker">
      <div class="col-sm-12 col-md-4 col-lg-12 display-4">
        <a href="https://enaker.agamkab.go.id" class="pilih-naker">e-Naker</a>
      </div>
    </div>
  </div>
</section>
<!-- close Investasi -->

<!-- Pengaduan -->
<section class="pengaduan" id="pengaduan">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-pengaduan"><b>Pengaduan Online</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-12 mt-4">
        <img class="shadow" src="<?= base_url(); ?>assets/img/mekanisme_pengaduan.jpg" alt="gambar" width="100%">
      </div>
      <div class="col-lg-4 col-sm-12 mt-4 display-4 kontak-pp text-justify">
        <p>Kami membuka layanan Pengaduan Online. Apabila terjadi atau menemukan ketidaksesuaian di lapangan mengenai <b>Perizinan</b>, silahkan hubungi kami melalui kontak
          dibawah ini :</p>
        <ul class="list-unstyled ">
          <li><i class="ikon-pengaduan fa fa-envelope icon-square icon-32"></i>
            E-Mail : <b>ppdpmptspkabagam@gmail.com</b></li>
          <li><i class="ikon-pengaduan fa fa-phone icon-square icon-32"></i> HP : </li>
          <li><b>> 0852-6381-3484 (Zuherizal)</b></li>
          <li><b>> 0823-8582-2706 (Masrial)</b></li>
        </ul>
        <p>Atau isi Form Pengaduan Online yang telah kami sediakan dibawah ini :</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 col-sm-12 form-pengaduan">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf5xrwvHE6LLl3BJZvZggJ5AytgBJgpttuu8gOHtbLQzqhMOw/viewform?embedded=true" class="shadow" width="100%" height="500px" frameborder="0" marginheight="1" marginwidth="0">Memuat…</iframe>
      </div>
    </div>
  </div>
</section>
<!-- close pengaduan -->

<!-- kontak -->
<section class="kontak" id="kontak">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-kontak"><b>Kontak</b></h1>
        <hr class="garis-judul">
      </div>
      <div class="col-lg-12 container-fluid">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7583387626346!2d100.03203871432113!3d-0.3141742354257383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd50d7a167ac1a7%3A0xb9ec2c79c573f227!2sDPMPTSP-Naker+Kab.+Agam!5e0!3m2!1sid!2sid!4v1552378695102" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
      </div>
      <div class="col-lg-8 text-left">
        <address>
          <i class="icon-home">
          </i>
          <strong>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan
          </strong>
          <br>
          <i class="fa fa-map-pin">
          </i> Jl.Veteran No.1 Padang Baru,
          Lubuk Basung Kabupaten Agam
        </address>
        <p>
          <i class="fa fa-clock">
          </i> Jam Operasional :
          <br>
          <i class="icon-time"></i>
          Hari Senin - Kamis Pukul 08:00 - 16:00
          <br>
          Hari Jum'at 08:00 - 16:30
          <br>
        </p>
        <p>
          <i class="fa fa-phone">
          </i> 0752-66354 / 081364609770
          <br>
          <i class="fa fa-envelope">
          </i> dpmptspnakeragam@gmail.com
        </p>
        <ul class="list-inline social-buttons mt-10">
          <li class="list-inline-item">
            <a href="https://twitter.com/DpmptspA" data-toggle="tooltip" data-placement="top" title="Twitter DPMPTSP-NAKER AGAM" style="color:white;">
              <i class="ikon fab fa-twitter icon-square">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.facebook.com/dpmptsp.agam/" data-toggle="tooltip" data-placement="top" title="Facebook DPMPTSP-NAKER AGAM" style="color:white;">
              <i class="ikon fab fa-facebook icon-square icon-32 ">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/dpmptspnakeragam/" data-toggle="tooltip" data-placement="top" title="Instagram DPMPTSP-NAKER AGAM" style="color:white;">
              <i class="ikon fab fa-instagram icon-square icon-32">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.youtube.com/channel/UCIRaBvE_7XyLf1lKFyGa08Q" data-toggle="tooltip" data-placement="top" title="Youtube DPMPTSP-NAKER AGAM" style="color:white;">
              <i class="ikon fab fa-youtube icon-square icon-32">
              </i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- close kontak -->