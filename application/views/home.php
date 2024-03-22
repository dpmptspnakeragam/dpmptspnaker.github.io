<!-- Cover -->

<div class="jumbotron mb-0 ml-0">
  <div class="container-fluid text-left">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="posisi-agam">
          <img class="mb-4 mr-1 jumbotronimg agam" src="<?= base_url(); ?>assets/img/agam.png" alt="logoagam">
          <!---<img class="mb-4 ml-2 jumbotronimg hut" src="<?= base_url(); ?>assets/img/hut_ri_77.png" alt="logoagam">--->
        </div>
        <h1 class="jumbotronteks welcome">SELAMAT DATANG</h1>
        <h1 class="jumbotronteks nama"><strong>DINAS PENANAMAN MODAL <br> PELAYANAN TERPADU SATU PINTU <br> KABUPATEN AGAM</strong></h1>
      </div>
      <!---<div class="col-lg-6 col-12">
        <div class="inline">
          <img class="jumbotronimg" src="<?= base_url(); ?>assets/img/kantor_vector.png" alt="kantor" width="100%">
        </div>
      </div>--->
    </div>
  </div>
</div>
<!-- close Cover -->

<!-- navbar -->
<nav class="navbar shadow sticky-top navbar-bottom navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="inline">
      <a class="navbar-brand page-scroll" href="#home">
        <img class="" src="<?= base_url(); ?>assets/img/logo_dpmptsp.png" alt="logodpmptsp" height="50px">
      </a>
    </div>
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
          <a class="nav-link page-scroll" href="#pelayanan">Layanan Publik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#investasi">Investasi</a>
        </li>
        <!---<li class="nav-item">
          <a class="nav-link page-scroll" href="#naker">e-Naker</a>
        </li>--->
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
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide berita-carousel multi-item-carousel" data-ride="carousel">
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
            <?php if ($berita->num_rows() > 0) {
              foreach ($berita->result() as $row) {
                foreach ($idmax->result() as $row2) {
                  if ($row->id_berita == $row2->idmax) { ?>
                    <div class="carousel-item active">
                    <?php
                  } else {
                    ?> <div class="carousel-item">
                    <?php
                  }
                }
                    ?>
                    <div class="item__third">
                      <a href="#" data-toggle="modal" data-target="#DetailInformasi<?php echo $row->id_berita; ?>">
                        <div class="container">
                          <div class="row">
                            <img class="gambar-carousel mt-5" src="<?= base_url() ?>assets/imgupload/<?= $row->gambar; ?>" alt="<?= $row->judul_berita; ?>">
                          </div>
                        </div>
                        <div class="carousel-caption text-left">
                          <div class="row">
                            <p class="judul-informasi mb-2 pl-2 pr-2"><?= $row->judul_berita; ?></p>
                          </div>
                          <di class="row">
                            <small class="tgl_berita bg-dark p-1"><?= date_indo($row->tgl_berita); ?></small>
                          </di>
                      </a>
                      <div class="text-center tombol-informasi">
                        <small><a href="<?= base_url(); ?>informasi" class="informasi-lainnya">> Berita Lainnnya < </a></small>
                      </div>
                    </div>
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
    <div class="container pt-3">
      <div class="row">
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalMisi"><i class="ikon fa fa-info" aria-hidden="true"></i><br>Sejarah</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalVisi"><i class="ikon fa fa-paper-plane" aria-hidden="true"></i><br>Visi & Misi</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalTugas"><i class="ikon fa fa-pen-square" aria-hidden="true"></i><br>Tugas & Fungsi</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalStruktur"><i class="ikon fa fa-sitemap" aria-hidden="true"></i><br>Struktur Organisasi</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalKadis"><i class="ikon fa fa-user" aria-hidden="true"></i><br>Kepala Dinas</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalKabid"><i class="ikon fa fa-users" aria-hidden="true"></i><br>Pegawai</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="<?= base_url(); ?>regulasi" class="pilih-profil"><i class="ikon fa fa-balance-scale" aria-hidden="true"></i><br>Regulasi</a>
        </div>
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="<?= base_url(); ?>ppid" class="pilih-profil"><i class="ikon fa fa-server" aria-hidden="true"></i><br>PPID</a>
        </div>
        <!-- <div class="col-lg-4 col-6 display-4 mb-3"> -->
        <!-- <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalMaklumat"><i class="ikon fa fa-certificate" aria-hidden="true"></i><br>Maklumat Pelayanan</a> -->
        <!-- </div> -->
        <div class="col-lg-4 col-6 display-4 mb-3">
          <a href="#" class="pilih-profil" data-toggle="modal" data-target="#ModalSarpras"><i class="ikon fa fa-building" aria-hidden="true"></i><br>Sarana & Prasarana</a>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <di class="text-center col-md-12 col-lg-12 col-sm-12 display-4 mt-4">
            <div class="slogan">
              <strong>MOTTO :</strong><br>
              <u>Kami Melayani Dengan PASTI !!!</u><br>
              <small>Cepat | Sederhana | Transparan | Terintegrasi</small>
            </div>
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
        <h1 class="judul-layanan"><strong>Layanan Publik</strong></h1>
        <hr class="garis-judul">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 ">
        <?php
        foreach ($pengaturan->result() as $row) {
        ?>
          <img style="width:100%;" class="shadow mb-3 isi-pelayanan intro-pelayanan" src="<?= base_url(); ?>assets/imgupload/<?= $row->maklumat; ?>" alt="Maklumat Pelayanan">
        <?php } ?>
      </div>
      <div class="col-lg-8 col-12 text-justify">
        <p class="isi-pelayanan intro-pelayanan">
          Kami membuka Layanan Perizinan dan Non Perizinan melalui tatap muka maupun online. Untuk tatap muka secara langsung
          silahkan kunjungi kantor kami dengan alamat yang tertera pada menu Kontak. Untuk pelayanan melalui online silahkan
          kunjungi situs yang telah kami sediakan dibawah ini (SiCantik atau OSS) atau bisa juga hubungi nomor HP yang tertera pada menu Kontak.
          Untuk melihat persyaratan atau info tentang Izin yang akan anda buat, silahkan pilih Standar Operasional Prosedur.
        </p>
        <div class="row isi-pelayanan text-center">
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalPelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sp.jpg" alt="gambarsp" width="100%">Formulir & Persyaratan Perizinan</a>
          </div>
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="https://sicantik.go.id/#/login" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sicantikcloud.jpg" alt="gambarsicantikcloud" width="100%">SiCantik</a>
          </div>
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="https://ui-login.oss.go.id/login" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/oss.jpg" alt="gambaross" width="100%">OSS</a>
          </div>
          <!---<div class="col col-sm-12 col-md-3 col-lg-3 col-6 display-4 mb-3">
            <a href="https://account.kemnaker.go.id/auth/login" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sisnaker.jpg" alt="gambarsicantikcloud" width="100%">SISNAKER KEMNAKER</a>
          </div>--->
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="https://www.lapor.go.id/" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/lp.jpg" alt="gambarsicantikcloud" width="100%">Lapor.go.id</a>
          </div>
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalTracking"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/trackingsicantik.jpg" alt="gambarsicantikcloud" width="100%">Tracking SiCantik</a>
          </div>
          <!----<div class="col col-sm-12 col-md-3 col-lg-3 col-6 display-4 mb-3">
            <a href="" class="pilih-pelayanan" data-toggle="modal" data-target="#ModalRetribusi"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/sr.jpg" alt="gambarsimulasiretribusi" width="100%">Simulasi Retribusi</a>
          </div>--->
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="https://simbg.pu.go.id" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/simbg.jpg" alt="gambarsicantikcloud" width="100%">SIMBG</a>
          </div>
          <div class="col col-sm-12 col-md-4 col-lg-4 col-6 display-4 mb-3">
            <a href="https://simbg.pu.go.id" class="pilih-pelayanan"><img id="img-layanan" class="mb-2 img-layanan" src="<?= base_url(); ?>assets/img/simbg.jpg" alt="gambarsicantikcloud" width="100%">SIMBG</a>
          </div>
        </div>
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
        <h1 class="judul-investasi"><b>Potensi & Peluang Investasi</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-lg-12 col-sm-6 col-xs-12">
        <p class="penjelasan-investasi">Peta dibawah merupakan Peta Penyebaran Potensi Investasi yang berada di Kabupaten Agam. </p>
        <iframe class="peta-investasi shadow" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="PETA POTENSI INVESTASI KABUPATEN AGAM" src="//www.arcgis.com/apps/Embed/index.html?webmap=ae83c5f68ead4e8a894d82b536186438&extent=99.4542,-0.6519,100.8906,0.1131&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&disable_scroll=true&theme=light"></iframe>
      </div>
      <div class="col-lg-4 col">
        <p class="penjelasan-investasi">Untuk lebih detail mengenai Potensi Investasi di Kabupaten Agam, silahkan klik tombol dibawah ini :
        </p>
        <div class="display-4">
          <a href="#" class="pilih-investasi" data-toggle="modal" data-target="#ModalPotensiInvestasi">Potensi Investasi</a>
        </div>
      </div>
      <div class="col-lg-4">
        <p class="penjelasan-investasi">Untuk lebih detail mengenai Peluang Investasi di Kabupaten Agam, silahkan klik tombol dibawah ini :
        </p>
        <div class="display-4">
          <a href="#" class="pilih-investasi" data-toggle="modal" data-target="#ModalInvestasi">Peluang Investasi</a>
        </div>
      </div>
      <div class="col-lg-4">
        <p class="penjelasan-investasi">Untuk mengetahui Tanah Ulayat untuk Investasi di Kabupaten Agam, silahkan klik tombol dibawah ini :
        </p>
        <div class="display-4">
          <a href="#" class="pilih-investasi" data-toggle="modal" data-target="#ModalTanahUlayat">Tanah Ulayat Untuk Investasi</a>
        </div>
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
    <div class="row pl-4 pr-4 pb-2">
      <div class="col-lg-7 col-sm-12 mt-4 mb-1">
        <img class="shadow mekanisme-pengaduan mb-4" src="<?= base_url(); ?>assets/img/mekanisme_pengaduan.jpg" alt="gambar" width="100%">
        <h4><strong>Info Kontak Pengaduan</strong></h4>
        <p>Masril, S.IP - 082385822706</p>
        <p>Email : dpmptspagam@gmail.com</p>
        <a href="" class="pilih-profil" data-toggle="modal" data-target="#ModalTrackingPengaduan"><i class="ikon fa fa-search" aria-hidden="true"></i> Tracking Pengaduan</a>

      </div>
      <div class="col-lg-5 col-sm-6 form-pengaduan">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc8Jd_iY0No3oCuuqGXBMD0kz4g4Uexw0yJLUobFRZJNCFO6A/viewform?embedded=true" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
      </div>
    </div>
  </div>
</section>
<!-- close pengaduan -->

<!-- SKM -->
<section class="skm" id="skm">
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-lg-12 mt-4">
        <h1 class="judul-investasi"><b>Survey Kepuasan Masyarakat (SKM) Online</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row pb-4 pt-3 pl-4 pr-4">
      <div class="col-12 mb-3">
        <div class="text-center">
          <p style="font-size:20px;">Untuk mengisi kuesioner Survey Kepuasan Masyarakat (SKM) secara online, silahkan klik tombol dibawah ini</p>
          <a href="<?= base_url(); ?>skm" class="pilih-profil">Lakukan Survey</a>
        </div>
      </div>
      <div class="col-12 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Survey Kepuasan Masyarakat</h5>
        <h6 class="text-center"> Periode
          <?php
          $no = 1;
          foreach ($periode_grafik_skm->result() as $graph) {
          ?>
            <?= date("Y", strtotime($graph->tgl_awal)); ?> s/d <?= date("Y", strtotime($graph->tgl_akhir)); ?>
          <?php } ?>
        </h6>
        <canvas id="myChart3"></canvas>
        <p style="font-size:12px;">
          <small>Keterangan : A (Sangat Baik) : 88,31 - 100,00 | B (Baik) : 76,61 - 88,30 | C (Kurang) : 65,00 - 76,60 | D (Sangat Kurang) : 25,00 - 64,99</small>
        </p>
        <?php
        $tahun_skm = "";
        $total = null;
        $total2 = null;
        foreach ($grafik_skm->result() as $item) {
          $nama = $item->tahun;
          $tahun_skm .= "'$nama'" . ", ";
          $jum = $item->nilai;
          $total .= "$jum" . ", ";
          $jum2 = $item->nilai2;
          $total2 .= "$jum2" . ", ";
        }
        ?>
        <script>
          var tahun = new Date().getFullYear();
          var ctx = document.getElementById('myChart3').getContext('2d');
          var data = {
            labels: [<?php echo $tahun_skm; ?>],
            datasets: [{
              label: "Semester I",
              backgroundColor: '#0037B3',
              data: [<?php echo $total; ?>]
            }, {
              label: "Semester II",
              backgroundColor: '#70BAFF',
              data: [<?php echo $total2; ?>]
            }]
          };
          var chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
              legend: {
                labels: {
                  fontColor: 'white'
                }
              },
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
              tooltips: {
                mode: 'index',
                intersect: true
              },
              responsive: true,
              scales: {
                xAxes: [{
                  ticks: {
                    fontColor: 'white'
                  }
                }],
                yAxes: [{
                  gridLines: {
                    zeroLineColor: 'grey',
                    color: 'grey'
                  },
                  ticks: {
                    max: Math.max(...data.datasets[0].data) + 50,
                    beginAtZero: true,
                    fontColor: 'white'
                  }
                }]
              }
            }
          });
        </script>
      </div>
      <!-- <div class="col-lg-5 col form-pengaduan">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScGlxCpQhHCl0rdvbMeAIqebo-vU34xk7-7VR6M4saB_Ly7iQ/viewform?embedded=true" width="100%" height="500px" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
      </div> -->
    </div>
</section>
<!-- close skm -->

<!-- Grafik -->
<section class="pengaduan" id="">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-lg-12 mt-4 ">
        <h1 class="judul-pengaduan"><b>Info Grafik</b></h1>
        <hr class="garis-judul">
      </div>
    </div>
    <div class="row p-3">
      <div class="col-lg-6 col text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Izin Diterbitkan</h5>
        <h6 class="text-center"> Periode
          <?php
          $no = 1;
          foreach ($periode_grafik->result() as $graph) {
          ?>
            <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?>
          <?php } ?>
        </h6>
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
              label: "Jumlah",
              backgroundColor: '#db162f',
              data: [<?php echo $total; ?>]
            }]
          };
          var chart = new Chart(ctx, {
            showTooltips: false,
            type: 'bar',
            data: data,
            options: {
              legend: {
                labels: {
                  fontColor: 'white'
                }
              },
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
                xAxes: [{
                  ticks: {
                    fontColor: 'white'
                  }
                }],
                yAxes: [{
                  gridLines: {
                    zeroLineColor: 'grey',
                    color: 'grey'
                  },
                  ticks: {
                    max: Math.max(...data.datasets[0].data) + 10,
                    beginAtZero: true,
                    fontColor: 'white'
                  }
                }]
              }
            }
          });
        </script>
      </div>
      <div class="col-lg-6 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Realisasi Investasi (Rp. M)</h5>
        <h6 class="text-center"> Periode
          <?php
          $no = 1;
          foreach ($periode_grafik_investasi->result() as $graph) {
          ?>
            <?= date("Y", strtotime($graph->tgl_awal)); ?> s/d <?= date("Y", strtotime($graph->tgl_akhir)); ?>
          <?php } ?>
        </h6>
        <canvas id="myChart2"></canvas>
        <?php
        $tahun_investasi = "";
        $total = null;
        $total2 = null;
        foreach ($grafik_investasi->result() as $item) {
          $nama = $item->tahun;
          $tahun_investasi .= "'$nama'" . ", ";
          $jum = $item->nilai;
          $total .= "$jum" . ", ";
          $jum2 = $item->nilai2;
          $total2 .= "$jum2" . ", ";
        }
        ?>
        <script>
          var tahun = new Date().getFullYear();
          var ctx = document.getElementById('myChart2').getContext('2d');
          var data = {
            labels: [<?php echo $tahun_investasi; ?>],
            datasets: [{
              label: "Target",
              backgroundColor: '#f5542e',
              data: [<?php echo $total; ?>]
            }, {
              label: "Realisasi",
              backgroundColor: '#008b6e',
              data: [<?php echo $total2; ?>]
            }]
          };
          var chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
              legend: {
                labels: {
                  fontColor: 'white'
                }
              },
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
              tooltips: {
                mode: 'index',
                intersect: true
              },
              responsive: true,
              scales: {
                xAxes: [{
                  ticks: {
                    fontColor: 'white'
                  }
                }],
                yAxes: [{
                  gridLines: {
                    zeroLineColor: 'grey',
                    color: 'grey'
                  },
                  ticks: {
                    max: Math.max(...data.datasets[0].data) + 650,
                    beginAtZero: true,
                    fontColor: 'white'
                  }
                }]
              }
            }
          });
        </script>
      </div>

      <div class="col-lg-12 col-12 col text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Izin Diterbitkan /Tahun</h5>
        <!----<h6 class="text-center"> Periode
          <?php
          $no = 1;
          foreach ($periode_grafik_izinbulan->result() as $graph) {
          ?>
            <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?>
          <?php } ?>
        </h6>--->
        <canvas id="myChart4"></canvas>
        <?php
        $nama_izinbulan = "";
        $totalbulan = null;
        $totalbulan2 = null;
        $totalbulan3 = null;
        $totalbulan4 = null;
        foreach ($grafik_bulan->result() as $item) {
          $nama = $item->izin;
          $nama_izinbulan .= "'$nama'" . ", ";
          $jum = $item->thn2020;
          $totalbulan .= "$jum" . ", ";
          $jum2 = $item->thn2021;
          $totalbulan2 .= "$jum2" . ", ";
          $jum3 = $item->thn2022;
          $totalbulan3 .= "$jum3" . ", ";
          $jum4 = $item->thn2023;
          $totalbulan4 .= "$jum4" . ", ";
        }
        ?>
        <script>
          var tahun = new Date().getFullYear();
          var ctx = document.getElementById('myChart4').getContext('2d');
          var data = {
            labels: [<?php echo $nama_izinbulan; ?>],
            datasets: [{
              label: "Tahun 2020",
              backgroundColor: '#BBE2F2',
              data: [<?php echo $totalbulan; ?>]
            }, {
              label: "Tahun 2021",
              backgroundColor: '#34A6BF',
              data: [<?php echo $totalbulan2; ?>]
            }, {
              label: "Tahun 2022",
              backgroundColor: '#F2C094',
              data: [<?php echo $totalbulan3; ?>]
            }, {
              label: "Tahun 2023",
              backgroundColor: '#D90404',
              data: [<?php echo $totalbulan4; ?>]
            }]
          };
          var chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
              legend: {
                labels: {
                  fontColor: 'white'
                }
              },
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
              tooltips: {
                mode: 'index',
                intersect: true
              },
              responsive: true,
              scales: {
                xAxes: [{
                  ticks: {
                    fontColor: 'white'
                  }
                }],
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    fontColor: 'white'
                  }
                }]
              }
            }
          });
        </script>
        <hr>
        <h3>Grafik OSS RBA<h3>
            <h6 class="text-center"> Periode
              <?php
              $no = 1;
              foreach ($periode_grafik_oss->result() as $graph) {
              ?>
                <?= longdate_indo_nohari($graph->tgl_awal); ?> s/d <?= longdate_indo_nohari($graph->tgl_akhir); ?>
              <?php } ?>
            </h6>
      </div>
      <div class="col-lg-6 col-12 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik NIB Diterbitkan</h5>
        <canvas id="grafiknib"></canvas>
        <?php
        $nama_nib = "";
        $total = null;
        foreach ($grafik_nib->result() as $item) {
          $nama = $item->nib;
          $nama_nib .= "'$nama'" . ", ";
          $jum = $item->jumlah;
          $total .= "$jum" . ", ";
        }
        ?>
        <script>
          var kanvasnib = document.getElementById("grafiknib").getContext("2d");

          Chart.defaults.global.defaultFontFamily = "Lato";
          Chart.defaults.global.defaultFontSize = 12;

          var nilai = {
            labels: [<?php echo $nama_nib; ?>],
            datasets: [{
              label: "Jumlah",
              data: [<?php echo $total; ?>],
              backgroundColor: ['#8bfd43', '#fdfd43', '#8bfd43', '#fdfd43']
            }]
          };

          var chartOptions = {
            legend: {
              display: false,
              position: 'top',
              labels: {
                boxWidth: 10,
                fontColor: 'white'
              }
            },
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
              xAxes: [{
                ticks: {
                  fontColor: 'white'
                }
              }],
              yAxes: [{
                ticks: {
                  beginAtZero: true,
                  fontColor: 'white'
                }
              }]
            }
          };

          var lineChart = new Chart(kanvasnib, {
            type: 'bar',
            data: nilai,
            options: chartOptions
          });
        </script>
      </div>
      <div class="col-lg-6 col-12 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Sebaran Proyek Bedasarkan Risiko</h5>
        <div class="chart-container" style="width:70%; margin:auto;">
          <canvas id="grafikrisiko" style="width:50% !important"></canvas>
        </div>
        <?php
        $nama_risiko = "";
        $total = null;
        foreach ($grafik_risiko->result() as $item) {
          $nama = $item->risiko;
          $nama_risiko .= "'$nama'" . ", ";
          $jum = $item->jumlah;
          $total .= "$jum" . ", ";
        }
        ?>
        <script>
          var kanvasrisiko = $("#grafikrisiko");

          var nilai = {
            labels: [<?php echo $nama_risiko; ?>],
            datasets: [{
              label: "Jumlah",
              data: [<?php echo $total; ?>],
              backgroundColor: ['#8bfd43', '#fdfd43', '#fe9643', '#ff4442']
            }]
          };

          var chartOptions = {
            responsive: true,
            legend: {
              display: true,
              position: 'top',
              labels: {
                boxWidth: 10,
                fontColor: 'white'
              }
            }
          };

          var lineChart = new Chart(kanvasrisiko, {
            plugins: ["ChartDataLabels"],
            type: 'doughnut',
            data: nilai,
            options: chartOptions
          });
        </script>
      </div>
      <div class="col-lg-6 col-12 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Sebaran Proyek Per Kecamatan Usaha</h5>
        <canvas id="grafikkecamatan" width="100%"></canvas>
        <?php
        $nama_kecamatan = "";
        $total = null;
        foreach ($grafik_kecamatan->result() as $item) {
          $nama = $item->kecamatan;
          $nama_kecamatan .= "'$nama'" . ", ";
          $jum = $item->jumlah;
          $total .= "$jum" . ", ";
        }
        ?>
        <script>
          var kanvaskecamatan = document.getElementById("grafikkecamatan").getContext("2d");

          Chart.defaults.global.defaultFontFamily = "Lato";
          Chart.defaults.global.defaultFontSize = 12;

          var nilai = {
            labels: [<?php echo $nama_kecamatan; ?>],
            datasets: [{
              label: "Jumlah",
              data: [<?php echo $total; ?>],
              backgroundColor: ['#8bfd43', '#8bfd43', '#8bfd43', '#8bfd43', '#fdfd43', '#fdfd43', '#fdfd43', '#fdfd43', '#fe9643', '#fe9643', '#fe9643', '#fe9643', '#ff4442', '#ff4442', '#ff4442', '#ff4442']
            }]
          };

          var chartOptions = {
            indexAxis: 'y',
            legend: {
              display: false,
              position: 'top',
              labels: {
                boxWidth: 10,
                fontColor: 'white'
              }
            },
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
              xAxes: [{
                ticks: {
                  min: 0, // Edit the value according to what you need
                  fontColor: 'white'
                }
              }],
              yAxes: [{
                stacked: true,
                ticks: {
                  fontColor: 'white'
                }
              }]
            }
          };

          var lineChart = new Chart(kanvaskecamatan, {
            type: 'horizontalBar',
            data: nilai,
            options: chartOptions
          });
        </script>
      </div>
      <div class="col-lg-6 col-12 text-center text-light bg-dark isi-investasi p-3">
        <h5>Grafik Top 5 KBLI</h5>
        <canvas id="grafikkbli" width="100%"></canvas>
        <?php
        $nama_kbli = "";
        $total = null;
        foreach ($grafik_kbli->result() as $item) {
          $kbli = $item->kbli;
          $nama_kbli .= "'$kbli'" . ", ";
          $jum = $item->jumlah;
          $total .= "$jum" . ", ";
        }
        ?>
        <script>
          var kanvaskbli = document.getElementById("grafikkbli").getContext("2d");

          Chart.defaults.global.defaultFontFamily = "Lato";
          Chart.defaults.global.defaultFontSize = 12;

          var nilai = {
            labels: [<?php echo $nama_kbli; ?>],
            datasets: [{
              label: "Jumlah",
              data: [<?php echo $total; ?>],
              backgroundColor: ['#42ccff', '#8bfd43', '#fdfd43', '#fe9643', '#ff4442']
            }]
          };

          var chartOptions = {
            indexAxis: 'y',
            legend: {
              display: false,
              position: 'top',
              labels: {
                boxWidth: 10,
                fontColor: 'white'
              }
            },
            scales: {
              xAxes: [{
                ticks: {
                  min: 0, // Edit the value according to what you need
                  fontColor: 'white'
                }
              }],
              yAxes: [{
                stacked: true,
                ticks: {
                  mirror: true,
                  fontColor: 'white'
                }
              }]
            },
            events: false,
            showTooltips: true,
            animation: {
              duration: 500,
              easing: "easeOutQuart",
              onComplete: function() {
                var ctx = this.chart.ctx;
                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'left';
                ctx.textBaseline = 'bottom';
                this.data.datasets.forEach(function(dataset) {
                  console.log(dataset);
                  for (var i = 0; i < dataset.data.length; i++) {
                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                      scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                    left = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.left;
                    offset = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.longestLabelWidth;
                    ctx.fillStyle = '#000';
                    var y_pos = model.y - 5;
                    var label = model.label;
                    // Make sure data value does not get overflown and hidden
                    // when the bar's value is too close to max value of scale
                    // Note: The y value is reverse, it counts from top down
                    if ((scale_max - model.y) / scale_max >= 0.93)
                      y_pos = model.y + 20;
                    // ctx.fillText(dataset.data[i], model.x, y_pos);
                    ctx.fillText(label, left + 10, model.y + 8);
                  }
                });
              }
            }
          };

          var lineChart = new Chart(kanvaskbli, {
            type: 'horizontalBar',
            data: nilai,
            options: chartOptions
          });
        </script>
      </div>

    </div>
  </div>
</section>
<!-- close grafik -->

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
          <strong>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu
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
          <!---<i class="fa fa-phone">
          </i> 0752-66354 / 081364609770
          <br>--->
          <i class="fa fa-envelope">
          </i> dpmptspagam@gmail.com
        </p>
        <ul class="list-inline social-buttons mt-10">
          <li class="list-inline-item">
            <a href="https://twitter.com/DpmptspA" data-toggle="tooltip" data-placement="top" title="Twitter DPMPTSP AGAM" style="color:white;">
              <i class="ikon fab fa-twitter icon-square">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.facebook.com/dpmptspkab.agam" data-toggle="tooltip" data-placement="top" title="Facebook DPMPTSP AGAM" style="color:white;">
              <i class="ikon fab fa-facebook icon-square icon-32 ">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/dpmptsp_kab.agam/" data-toggle="tooltip" data-placement="top" title="Instagram DPMPTSP AGAM" style="color:white;">
              <i class="ikon fab fa-instagram icon-square icon-32">
              </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.youtube.com/channel/UCIRaBvE_7XyLf1lKFyGa08Q" data-toggle="tooltip" data-placement="top" title="Youtube DPMPTSP AGAM" style="color:white;">
              <i class="ikon fab fa-youtube icon-square icon-32">
              </i>
            </a>
          </li>
        </ul>
        <p>
          <img class="" src="<?= base_url(); ?>assets/img/logo_dpmptspwarna.png" alt="logodpmptsp" width="50%"></a>
        </p>
      </div>
      <div class="col-lg-6 mb-3 text-left">
        <div class="statistik">
          <h5><b>Statistik Pengunjung</b></h5>
          <table class="table-statistik" id="foot-table-list">
            <tr>
              <td>
                <p><i class="fa fa-eye"></i> Sedang Online</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjungonline ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-user"></i> Pengunjung Hari Ini</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjunghariini ?> Pengunjung</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-users"></i> Pengunjung Tahun Lalu</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjung2020 ?> Pengunjung</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-users"></i> Pengunjung Tahun Ini</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjung2021 ?> Pengunjung</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-users"></i> Pengunjung Bulan Lalu</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjungbulanlalu ?> Pengunjung</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><i class="fa fa-users"></i> Pengunjung Bulan Ini</p>
              </td>
              <td>
                <p>&nbsp;&nbsp;:&nbsp;&nbsp;</p>
              </td>
              <td>
                <p><?php echo $pengunjungbulanini ?> Pengunjung</p>
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
                <p><?php echo $totalpengunjung ?> Pengunjung</p>
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
<?php if ($banner->num_rows() == 0) { ?>
  <div class="popUpBannerBox modal" hidden>
  </div>
<?php } else {  ?>
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
<?php } ?>
<!-- close popup banner -->

<!--<input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
<label class='chatButton' for='offchatMenu'>
  <svg class='svg-1' viewBox='0 0 32 32'>
    <g>
      <path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path>
      <path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path>
    </g>
  </svg>
  <svg class='svg-2' viewBox='0 0 512 512'>
    <path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path>
  </svg>
</label>

<div class='chatBox'>
  <div class='chatContent'>
    <div class='chatHeader'>
      <svg viewbox='0 0 32 32'>
        <path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path>
        <rect height='2' width='2' x='19' y='9'></rect>
        <rect height='2' width='2' x='14' y='9'></rect>
        <rect height='2' width='2' x='24' y='9'></rect>
        <path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path>
      </svg>
      <div class='chatTitle'>Silahkan chat dengan tim kami <span>Admin akan membalas dalam beberapa menit</span></div>
    </div>
    <div class='chatText'>
      <span>Halo, Ada yang bisa kami bantu?</span>
      <span class='typing'>...</span>
    </div>
  </div>

  <a class='chatStart' href='https://api.whatsapp.com/send?phone=6285263882201&text=Assalamualaikum,%20Saya%20ingin%20bertanya' rel='nofollow noreferrer' target='_blank'>
    <span>Mulai chat...</span>
  </a>
</div>---->

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

  $('.popUpBannerBox').click(function() {
    $('.popUpBannerBox').fadeOut("2000");
    return false;
  });
</script>


<marquee class=" layer-1 fixed-bottom bg-dark text-light text-center">
  <span width="100%">
    <?php foreach ($teks->result() as $running) {
    ?>
      <img class="ml-3 mr-3" src="<?= base_url(); ?>assets/img/agam.png" alt="logoagam" width="15px"> <?php echo $running->teks; ?>
    <?php } ?>
  </span>
</marquee>
<!--End of Tawk.to Script-->
<script>
  $('.carousel-item', '.multi-item-carousel').each(function() {
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }).each(function() {
    var prev = $(this).prev();
    if (!prev.length) {
      prev = $(this).siblings(':last');
    }
    prev.children(':nth-last-child(2)').clone().prependTo($(this));
  });
</script>