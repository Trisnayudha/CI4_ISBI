<?= $this->extend('portal/layout/template_layout'); ?>


<?= $this->section('content') ?>

<br /><br /><br /><br />
<div class="container">
  <div class="judul">
    <h2>Program Studi Antropologi Budaya</h2>
  </div>
  <!-- breadcrumb -->
  <section style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Fakultas Budaya Dan Media</li>
    </ol>
  </section>
  <!-- breadcrumb end -->
  <br />
  <!-- gambar -->
  <img src="img/antropologi.jpg" class="img-fluid" style="width: 1200px;" alt="Gambar Fakulatas Studi Antropologi Budaya" />
  <!-- gambar end-->
</div>

<!-- tabel dan akreditasi -->
<div class="container">
  <div class="tabelAk">
    <div class="row" style="margin-top: 100px;">
      <!-- table -->
      <div class="col-md-6">
        <br>
        <h4 style="margin-bottom: 10px; text-align: center;">Program Studi Antropologi Budaya</h4>
        <br>
        <table class="table" style="width: 100%; margin-left: auto; margin-right: auto;">
          <tr class="table-light">
            <th>Email</th>
            <td><a href="mailto:antrobud.fbm.isbi.bdg@gmail.com">antrobud.fbm.isbi.bdg@gmail.com</a></td>
          </tr>
          <tr class="table-light">
            <th>Jejang Pendidikan</th>
            <td>S1</td>
          </tr>
          <tr class="table-light">
            <th>Gelar</th>
            <td>S.Sos.</td>
          </tr>
          <tr class="table-light">
            <th>Profil Lulusan</th>
            <td>Etnografer</td>
          </tr>
          <tr class="table-light">
            <th>Jumlah SKS</th>
            <td>146 SKS</td>
          </tr>
          <tr class="table-light">
            <th>Masa Studi</th>
            <td>4 Tahun (8 Semester)</td>
          </tr>
          <tr class="table-light">
            <th>SK BAN-PT</th>
            <td>1034/SK/BAN-PT/Akred/S/II/2021</td>
          </tr>
          <tr class="table-light">
            <th>Akreditasi</th>
            <td>BAIK</td>
          </tr>
        </table>
      </div>
      <!-- table end-->

      <!-- ======= sertifikat Section ======= -->
      <div class="col-md-6">
        <section class="sertifikat">
          <div class="container">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
              <div class="col-lg-12 col-md-6 portfolio-wrap filter-app">
                <div class="akreditasi">
                  <a href=""><img src="img/sertifikat/sertifikat Prodi Antropologi Budaya.jpg" style="width: 450px;" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- tabel dan akreditasi end-->

  <!-- kepemimpinan -->
  <center>
    <div class="container" style="margin-top: 100px;">
      <div class="row">
        <div class="col-lg-6">
          <div class="card p-0">
            <div class="card-image"> <img src="img/prodi/Ketua Prodi Antropologi Budaya.jpg" style="width: 250px;" alt=""> </div>
            <div class="card-content d-flex flex-column align-items-center">
              <h4 class="pt-2">Dra. Sriati Dwiatmini, M.Hum.</h4>
              <h4>NIP : 196505061992022001</h4>
              <h5>Ketua Prodi Antropologi Budaya</h5>
              <ul class="social-icons d-flex justify-content-center">
                <li style="--i:1"> <a href="mailto:sriati_dwiatmini@isbi.ac.id"> <span class="fas fa-envelope"></span> </a> </li>
                <li style="--i:2"> <a href="mailto:dwiatminisunjoto@gmail.com"> <span class="fas fa-envelope"></span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card p-0">
            <div class="card-image"> <img src="img/prodi/Sekretaris Prodi Antropologi Budaya.jpg" style="width: 250px; height: 600px;" alt=""> </div>
            <div class="card-content d-flex flex-column align-items-center">
              <h4 class="pt-2">Imam Setyobudi, S.Sos., M.Hum.</h4>
              <h4>NIP : 197201252006041001</h4>
              <h5>Sekretaris Prodi Antropologi Budaya</h5>
              <ul class="social-icons d-flex justify-content-center">
                <li style="--i:1"> <a href="mailto:imam_setyobudi@isbi.ac.id"> <span class="fas fa-envelope"></span> </a> </li>
                <li style="--i:2"> <a href="mailto:setyobudiimam@gmail.com"> <span class="fas fa-envelope"></span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>

  <?= $this->endSection() ?>

  <?= $this->section('script') ?>


  <?= $this->endSection(); ?>