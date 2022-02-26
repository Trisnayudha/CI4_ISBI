<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('berita') ?>">Berita</a></div>
                <div class="breadcrumb-item active"><a href="#">Tambah Berita</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Berita List</h2>
            <div class="card">
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>