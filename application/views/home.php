<!-- Cover -->
<div class="jumbotron mb-0 ml-0">
  <div class="container text-center judul">
    <img class="mb-4 jumbotronimg" src="<?= base_url(); ?>assets/img/agam.png" alt="logoagam" width="10%">
    <h3 class="display-3 jumbotronteks">SELAMAT DATANG</h3>
    <h4 class="display-2 jumbotronteks">DINAS PENANAMAN MODAL PELAYANAN TERPADU</h4>
    <h4 class="display-2 jumbotronteks">SATU PINTU DAN KETENAGAKERJAAN</h4>
    <h5 class="display-4 jumbotronteks">Kabupaten Agam<h5>
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
          <a class="nav-link page-scroll" href="#informasi">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#pelayanan">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#investasi">Peluang Investasi</a>
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
      <span class="navbar-text tanggal text-light">
        <?php echo longdate_indo(date('Y-m-d')); ?><br>
        <?php echo konvhijriah(date('Y-m-d H:i:s')); ?>
      </span>
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
            foreach ($idmax->result() as $row2) {
              if ($row->id_berita == $row2->idmax) {
        ?> <div class="carousel-item active">
                <?php
              } else {
                ?> <div class="carousel-item">
                <?php
              }
            }
                ?>
                <a href="#" data-toggle="modal" data-target="#DetailInformasi<?php echo $row->id_berita; ?>">
                  <div class="container">
                    <div class="row">
                      <img class="gambar-carousel shadow mt-5" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->judul_berita; ?>">
                    </div>
                  </div>
                  <div class="carousel-caption text-left">
                    <div class="row">
                      <p class="judul-informasi mb-2 pl-2 pr-2"><?= $row->judul_berita; ?></p>
                    </div>
                    <small class="tgl_berita"><?= date_indo($row->tgl_berita); ?></small>
                </a>
                <!-- <div class="text-center tombol-informasi">
                  <small><a href="<?= base_url(); ?>informasi" class="informasi-lainnya">Informasi lainnnya<br>KLIK DISINI</a></small>
                </div> -->
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
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalMisi"><i class="ikon fa fa-info" aria-hidden="true"></i><br>Sejarah</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalVisi"><i class="ikon fa fa-paper-plane" aria-hidden="true"></i><br>Visi & Misi</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalTugas"><i class="ikon fa fa-pen-square" aria-hidden="true"></i><br>Tugas & Fungsi</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalStruktur"><i class="ikon fa fa-sitemap" aria-hidden="true"></i><br>Struktur Organisasi</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalKabid"><i class="ikon fa fa-users" aria-hidden="true"></i><br>Pegawai</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="<?= base_url(); ?>regulasi" class="pilih-profil"><i class="ikon fa fa-balance-scale" aria-hidden="true"></i><br>Regulasi</a>
        </div>
        <div class="col-lg-3 col-6 display-4 mb-3">
          <a href="<?= base_url(); ?>ppid" class="pilih-profil"><i class="ikon fa fa-server" aria-hidden="true"></i><br>PPID</a>
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
    <div class="row isi-pelayanan text-center">
      <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
        <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalPelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sp.jpg" alt="gambarsp" width="100%"> Formulir & Persyaratan Perizinan</a>
      </div>
      <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
        <a href="https://app.oss.go.id/app/#front/home" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/oss.jpg" alt="gambaross" width="100%"> OSS</a>
      </div>
      <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
        <a href="https://account.kemnaker.go.id/auth/login" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sisnaker.jpg" alt="gambarsicantikcloud" width="100%"> SISNAKER KEMNAKER</a>
      </div>
    </div>
    <div class="row text-center">
      <div class="col col-sm-12 col-md-4 col-lg-6 col-6 display-4 mb-3">
        <a href="https://sicantikui.layanan.go.id" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sicantikcloud.jpg" alt="gambarsicantikcloud" width="100%"> SiCantik</a>
      </div>
      <div class="col col-sm-12 col-md-4 col-lg-6 col-6 display-4 mb-3">
        <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalTracking"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/trackingsicantik.jpg" alt="gambarsicantikcloud" width="100%"> Tracking SiCantik</a>
      </div>
    </div>
  </div>
</section>
<!-- close pelayanan -->

<!-- Investasi -->
<section class="investasi" id="investasi">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?= base_url(); ?>assets/img/bgvideo.mp4" type="video/mp4">
  </video>
  <div class="container text-center bid-investasi">
    <div class="row">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-investasi"><b>Peluang Investasi</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row mt-4 pt-5 pb-5">
      <div class="col-lg-12 col-sm-6 col-xs-12">
        <iframe class="peta-investasi shadow" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="PETA POTENSI INVESTASI KABUPATEN AGAM" src="//www.arcgis.com/apps/Embed/index.html?webmap=ae83c5f68ead4e8a894d82b536186438&extent=99.4542,-0.6519,100.8906,0.1131&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&disable_scroll=true&theme=light"></iframe>
      </div>
      <div class="col-lg-12 col-sm-6 col-xs-12">
        <p class="penjelasan-investasi">Peta disamping merupakan Peta Penyebaran Peluang Investasi yang berada di Kabupaten Agam.
          <br>Untuk lebih detailnya mengenai Peluang Investasi di Kabupaten Agam, silahkan klik tombol dibawah ini :
        </p>
        <div class="display-4">
          <a href="#" class="pilih-investasi" data-toggle="modal" data-target="#ModalInvestasi">Peluang Investasi</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- close Investasi -->

<!-- Naker -->
<section class="naker" id="naker">
  <div class="container text-center">
    <div class="row">
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
        <p class="isi-naker">Untuk mengunjungi situs e-Naker, silahkan klik tombol dibawah ini.
        <p>
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
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-pengaduan"><b>Pengaduan Online</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 mt-4 mb-4">
        <img class="shadow mekanisme-pengaduan" src="<?= base_url(); ?>assets/img/mekanisme_pengaduan.jpg" alt="gambar" width="100%">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 form-pengaduan">
        <h3 class="mb-1">Pengaduan Online</h3>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf5xrwvHE6LLl3BJZvZggJ5AytgBJgpttuu8gOHtbLQzqhMOw/viewform?embedded=true" width="100%" height="300px" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
        <p>Email : ppdpmptspkabagam@gmail.com</p>
      </div>
      <div class="col-lg-6 col-sm-6 form-pengaduan">
        <h3 class="mb-1">Survey Kepuasan Masyarakat Online</h3>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScGlxCpQhHCl0rdvbMeAIqebo-vU34xk7-7VR6M4saB_Ly7iQ/viewform?embedded=true" width="100%" height="300px" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
      </div>
    </div>
  </div>
</section>
<!-- close pengaduan -->

<!-- Grafik -->
<section class="grafik" id="grafik">
  <div class="container text-center">
    <div class="row isi-naker">
      <div class="col-lg-12 mt-4">
        <h1 class="judul-naker"><b>Grafik Izin Diterbitkan</b></h1>
        <h5 class="text-center"> Periode
          <?php
          $no = 1;
          foreach ($periode_grafik->result() as $graph) {
          ?>
            <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?>
          <?php } ?>
        </h5>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center bg-light mb-5 isi-naker p-3">
        <canvas id="myChart"></canvas>
        <?php
        $nama_izin = "";
        $total = null;
        foreach ($grafik->result() as $item) {
          $nama = $item->izin;
          $nama_izin .= "'$nama'" . ", ";
          $jum = $item->jumlah;
          $total .= "$jum" . ", ";
        }
        ?>
        <script>
          var tahun = new Date().getFullYear();
          var ctx = document.getElementById('myChart').getContext('2d');
          var data = {
            labels: [<?php echo $nama_izin; ?>],
            datasets: [{
              label: "Jumlah Izin Diterbitkan",
              backgroundColor: 'maroon',
              data: [<?php echo $total; ?>]
            }]
          };
          var chart = new Chart(ctx, {
            showTooltips: false,
            type: 'bar',
            data: data,
            options: {
              "hover": {
                "animationDuration": 0
              },
              "animation": {
                "duration": 1,
                "onComplete": function() {
                  var chartInstance = this.chart,
                    ctx = chartInstance.ctx;

                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign = 'center';
                  ctx.textBaseline = 'bottom';

                  this.data.datasets.forEach(function(dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function(bar, index) {
                      var data = dataset.data[index];
                      ctx.fillText(data, bar._model.x, bar._model.y - 5);
                    });
                  });
                }
              },
              scales: {
                yAxes: [{
                  ticks: {
                    max: Math.max(...data.datasets[0].data) + 10,
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>
      </div>
    </div>
</section>
<!-- close Grafik -->

<!-- kontak -->
<section class="kontak" id="kontak">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-kontak"><b>Kontak</b></h1>
        <hr class="garis-judul">
      </div>
      <div class="col-lg-12 container-fluid mb-2">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7583387626346!2d100.03203871432113!3d-0.3141742354257383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd50d7a167ac1a7%3A0xb9ec2c79c573f227!2sDPMPTSP-Naker+Kab.+Agam!5e0!3m2!1sid!2sid!4v1552378695102" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
      </div>
      <div class="col-lg-6 text-left">
        <p>
          <i class="icon-home">
          </i>
          <strong>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan
          </strong>
          <br>
          <i class="fa fa-map-pin">
          </i> Jl.Veteran No.1 Padang Baru,
          Lubuk Basung Kabupaten Agam
        </p>
        <p>
          <i class="fa fa-clock">
          </i> Jam Operasional :
          <br>
          <i class="icon-time"></i>
          Hari Senin - Kamis Pukul 07:30 - 16:00
          <br>
          Hari Jum'at Pukul 07:30 - 16:30
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
      <div class="col-lg-6 mb-3 text-left">
        <div class="statistik">
          <h5>Statistik Pengunjung</h5>
          <table class="table-statistik" id="foot-table-list">
            <tr>
              <td>
                <p><i class="fa fa-user"></i> Pengunjung Hari ini</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjunghariini ?> orang</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-users"></i> Total Pengunjung</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $totalpengunjung ?> orang</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-eye"></i> Pengunjung Online</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjungonline ?> orang</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- close kontak -->

<!-- popup banner -->
<div class="popUpBannerBox modal">
  <div class="popUpBannerInner">
    <div class="popUpBannerContent">
      <div class="container">
        <div class="row">
          <p class="text-right text-light"><a href="#" class="closeButton"><i class="ikon fa fa-times-circle"></i></a></p>
          <?php
          foreach ($banner->result() as $row) {
          ?>
            <div class="col-12">
              <img width="100%" class="banner img-responsive" src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" alt="" />
            </div>
            <div class="col-12 mt-3 text-light">
              <p><?= $row->teks; ?></p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- close popup banner -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5fd95be9a8a254155ab3bce3/1epkgu28v';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>

<script type="text/javascript">
  function showPopUpBanner() {
    $('.popUpBannerBox').fadeIn("2000");
  }
  setTimeout(showPopUpBanner, 3000);

  $('.popUpBannerBox').click(function(e) {
    if (!$(e.target).is('.popUpBannerContent, .popUpBannerContent *')) {
      $('.popUpBannerBox').fadeOut("2000");
      return false;
    }
  });

  $('.closeButton').click(function() {
    $('.popUpBannerBox').fadeOut("2000");
    return false;
  });
</script>

<marquee class=" layer-1 fixed-bottom bg-dark text-light text-justify">
  <span width="100%">
    <?php foreach ($teks->result() as $running) {
    ?>
      <img src="<?= base_url(); ?>assets/img/agam.png" alt="logoagam" width="15px"> <?php echo $running->teks; ?>
    <?php } ?>
  </span>
</marquee>
<!--End of Tawk.to Script-->