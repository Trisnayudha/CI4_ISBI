<?= $this->extend('portal/layout/template_layout'); ?>


<?= $this->section('content') ?>
<!-- Corousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="<?= base_url('portal') ?>/mg/senirupamurni.jpg" class="d-block w-100" alt="Gambar1" />
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?= base_url('portal') ?>/img/senitari.jpg" class="d-block w-100" alt="Gambar2" />
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?= base_url('portal') ?>/img/senikarawitan.jpg" class="d-block w-100" alt="Gambar3" />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Corousel end-->

<!-- berita -->
<div class="container" style="margin-top: 80px">
    <div class="card-group">
        <div class="card" style="border-bottom-left-radius: 20px">
            <img src="<?= base_url('portal') ?>/img/senitari.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title text-center">Judul Berita</h5>
                <p class="card-text" style="text-align: justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="<?= base_url('portal') ?>/img/senirupamurni.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title text-center">Judul Berita</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card" style="border-bottom-right-radius: 20px">
            <img src="<?= base_url('portal') ?>/img/senikarawitan.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title text-center">Judul Berita</h5>
                <p class="card-text" style="text-align: justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
</div>
<!-- berita end-->

<!-- button -->
<div class="Tlainnya">
    <center>
        <a href="#" target="_blank">Berita Lainnya</a>
    </center>
</div>
<!-- button -->

<!-- event -->
<div class="container" style="margin-top: 80px">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="<?= base_url('portal') ?>/img/senikarawitan.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?= base_url('portal') ?>/img/senitari.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?= base_url('portal') ?>/img/senirupamurni.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- button -->
<div class="Tlainnya">
    <center>
        <a href="#" target="_blank">Event Lainnya</a>
    </center>
</div>
<!-- button -->

<!-- event end -->

<!-- ======= Ngacapi ======= -->
<div class="container">
    <section class="ngacapi section-bg" data-aos="fade-up" date-aos-delay="200" style="margin-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 video-box">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/K9nEc8j5A8A" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center p-5">
                    <h4 class="title"><a href="">NGACAPI</a></h4>
                    <ul class="description">
                        <li><a href="https://lapor.go.id/" target="_blank">Lapor!</a></li>
                        <li><a href="https://wbs.isbi.ac.id/" target="_blank">Whistleblowing System</a></li>
                        <li><a href="https://ppid.isbi.ac.id/" target="_blank">PPID</a></li>
                    </ul>
                    <h4 class="title"><a href="https://gaskeun.isbi.ac.id/" target="_blank">GASKEUN</a></h4>
                    <ul class="description">
                        <li><a href="http://perpustakaan.isbi.ac.id/" target="_blank">Perpustakaan</a></li>
                        <li><a href="https://jurnal.isbi.ac.id/">Jurnal</a></li>
                        <li><a href="https://www.isbi.ac.id/images/pdf/2021/renstra_final_2020_2024/renstra_final_2020_2024.pdf">Renstra 2020-2024</a></li>
                        <li><a href="https://www.isbi.ac.id/images/pdf/2021/sk_kalender_akademik_2021_2022/sk_kalender_akademik_tahun_2021_2022.pdf">Kalender Akademik 2021/2022</a></li>
                        <li><a href="https://www.isbi.ac.id/images/pdf/rkakl/rkakl2021/rkakl2021.pdf">RKAKL 2021</a></li>
                        <li><a href="https://www.isbi.ac.id/images/pdf/dipa/dipa2021/dipa2021.pdf">DIPA 2021</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Ngacapi Section -->
<?= $this->endSection() ?>

<?= $this->section('script') ?>


<?= $this->endSection(); ?>