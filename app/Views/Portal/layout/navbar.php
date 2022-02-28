<nav class="shadow-sm">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= base_url('portal') ?>/img/logo/Logo.png" alt="Logo ISBI" />
            <a href="index.php">ISBI BANDUNG</a>
        </div>
        <input type="radio" name="slider" id="menu-btn" />
        <input type="radio" name="slider" id="close-btn" />
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times" style="color: black"></i></label>
            <li><a href="index.php">Beranda</a></li>
            <li>
                <a href="tentang.php" class="desktop-item">Tentang ISBI</a>
                <input type="checkbox" id="showMega" />
                <label for="showMega" class="mobile-item">Tentang ISBI</label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <header>Tentang</header>
                            <ul class="mega-links">
                                <li><a href="sejarah.php">Sejarah ISBI</a></li>
                                <li><a href="Lambang.php">Lambang ISBI</a></li>
                                <li><a href="visi.php">Visi, misi dan Tujuan</a></li>
                                <li><a href="hymne.php">Hymne ISBI</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Struktur ISBI</header>
                            <ul class="mega-links">
                                <li><a href="struktur.php">Pimpinan</a></li>
                                <li><a href="#">Senat</a></li>
                                <li><a href="#">Fakultas</a></li>
                                <li><a href="https://pasca.isbi.ac.id/" target="_blank">Pascasarjana</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Laporan Kinerja</header>
                            <ul class="mega-links">
                                <li><a href="#">Laporan Kinerja 2020</a></li>
                                <li><a href="#">Laporan Kinerja 2019</a></li>
                                <li><a href="#">Laporan Kinerja 2018</a></li>
                                <li><a href="#">Laporan Kinerja 2017</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Laporan Keuangan</header>
                            <ul class="mega-links">
                                <li><a href="#">Laporan Keuangan 2020</a></li>
                                <li><a href="#">Laporan Keuangan 2019</a></li>
                                <li><a href="#">Laporan Keuangan 2018</a></li>
                                <li><a href="#">Laporan Keuangan 2017</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Laporan BMN</header>
                            <ul class="mega-links">
                                <li><a href="#">Laporan BMN 2020</a></li>
                                <li><a href="#">Laporan BMN 2019</a></li>
                                <li><a href="#">Laporan BMN 2018</a></li>
                                <li><a href="#">Laporan BMN 2017</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="senitari.php" class="desktop-item">Akademik</a>
                <input type="checkbox" id="showMega1" />
                <label for="showMega1" class="mobile-item">Akademik</label>
                <div class="mega-box">
                    <div class="content2">
                        <div class="row2">
                            <header>Fakultas Seni Pertunjukan</header>
                            <ul class="mega-links">
                                <li><a href="senitari.php">Program Studi Seni Tari</a></li>
                                <li><a href="senikarawitan.php">Program Studi Seni Karawitan</a></li>
                                <li><a href="seniteater.php">Program Studi Seni Teater</a></li>
                                <li><a href="seniangklung.php">Program Studi Angklung dan Musik Bambu</a></li>
                                <li><a href="senitari.php">Program Studi Seni Tari Sunda</a></li>
                            </ul>
                        </div>
                        <div class="row2">
                            <header>Fakultas Seni Rupa dan Desain</header>
                            <ul class="mega-links">
                                <li><a href="senirupa.php">Program Studi Seni Rupa Murni</a></li>
                                <li><a href="senikriya.php">Program Studi Kriya Seni</a></li>
                                <li><a href="tatarias.php">Program Studi Rias dan Busana</a></li>
                            </ul>
                        </div>
                        <div class="row2">
                            <header>Fakultas Budaya Dan Media</header>
                            <ul class="mega-links">
                                <li><a href="antropologi.php">Program Studi Antropologi Budaya</a></li>
                                <li><a href="tvdanfilm.php">Program Studi Televisi dan Film</a></li>
                            </ul>
                        </div>
                        <div class="row2">
                            <header>Pascasarjana</header>
                            <ul class="mega-links">
                                <li><a href="magister.php">Magister Penciptaan dan Pengkajian Seni</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="fasilitas.php">Fasilitas</a></li>
            <li>
                <a href="#" class="desktop-item">Pencapaian</a>
                <input type="checkbox" id="showDrop" />
                <label for="showDrop" class="mobile-item">Pencapaian</label>
                <ul class="drop-menu">
                    <li><a href="#">Pretasi</a></li>
                    <li class="kerjasama">
                        <a href="#">kerjasama</a>
                        <ul class="kerjasama-sub-menu sub-menu">
                            <li><a href="#">Kerja sama dalam Negeri</a></li>
                            <li><a href="#">Kerja sama luar Negeri</a></li>
                            <li><a href="https://sinema.isbi.ac.id/">Monitoring</a></li>
                            <li><a href="#">Laporan</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="<?= base_url('Login') ?>">Login</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars" style="color: black"></i></label>
    </div>
</nav>