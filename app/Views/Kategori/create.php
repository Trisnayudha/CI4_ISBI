<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kategori Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('Kategori') ?>">Kategori</a></div>
                <div class="breadcrumb-item active"><a href="#">Tambah Kategori Berita</a></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('Kategori/store') ?>" method="Post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori Berita</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori Berita" value="<?= old('nama_kategori') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_kategori') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Tambah Data</button>
                        <a href="<?= base_url('Berita') ?>" class="btn btn-warning">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>


<?= $this->endSection(); ?>