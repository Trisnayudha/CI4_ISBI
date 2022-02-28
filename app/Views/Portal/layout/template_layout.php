<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wilujeng Sumping di ISBI Bandung</title>
    <!-- icon -->
    <link href="<?= base_url('portal') ?>/img/logo/Logo.png" rel="icon" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url('portal') ?>/css/navbar.css" />
    <link rel="stylesheet" href="<?= base_url('portal') ?>/css/stylefe.css" />
    <link rel="stylesheet" href="<?= base_url('portal') ?>/css/font.css" />

    <script src="https://kit.fontawesome.com/13dde45cc4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navigation -->
    <?= $this->include('portal/layout/navbar') ?>
    <!-- navigation end-->

    <!-- Content -->
    <?= $this->renderSection('content'); ?>
    <!-- endContent -->



    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #eceff1; margin-top: 100px">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
            <!-- Left -->
            <div class="me-5">
                <span>Sosial Media Institut Seni Budaya Indonesia Bandung</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://twitter.com/isbibandung" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.instagram.com/isbibandung/" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/institut-seni-budaya-indonesia-bandung/mycompany/" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.youtube.com/c/OfficialISBIBandung" class="text-white me-4">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="isbi@isbi.ac.id" class="text-white me-4">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Institut Seni Budaya Indonesia Bandung</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: justify">Perguruan Tinggi yang menyelenggarakan pendidikan Program Vokasi, Sarjana dan Pascasarjana dibidang Seni dan Budaya.</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Link Lainnya</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="https://lppm.isbi.ac.id/" class="text-dark" style="text-decoration: none">> Lembaga</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark" style="text-decoration: none">> Unit Pelaksana Teknis</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark" style="text-decoration: none">> Biro Akademik dan Umum</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark" style="text-decoration: none">> SIMPT</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Alamat</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>Jl. Buah Batu No. 212 Bandung</p>
                        <p>Telp. (022)-7314982, 7315435</p>
                        <p>Fax. (022) - 7303021</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- footer end -->
    <?= $this->renderSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>