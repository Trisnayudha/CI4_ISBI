<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('Berita') ?>">Berita</a></div>
                <div class="breadcrumb-item active"><a href="#">Tambah Berita</a></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('Berita/store') ?>" method="Post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Judul Berita</label>
                        <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" placeholder="Judul Berita Acara" value="<?= old('title') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('title') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi') ?>"></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori Berita</label>
                        <select name="kategori_id" id="kategori_id" class="form-control <?= ($validation->hasError('kategori_id')) ? 'is-invalid' : ''; ?>">
                            <option value="">Pilih Kategori</option>
                            <option value="1">Kategori 1</option>
                            <option value="2">Kategori 2</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('kategori_id') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control <?= ($validation->hasError('thumbl')) ? 'is-invalid' : ''; ?>" type="file" id="thumbl" name="thumbl">
                        <div class="invalid-feedback">
                            <?= $validation->getError('thumbl') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
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