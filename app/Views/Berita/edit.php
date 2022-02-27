<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('Berita') ?>">Berita</a></div>
                <div class="breadcrumb-item active"><a href="#">Edit Berita</a></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('Berita/update/' . $berita['id']) ?>" method="Post">
                    <input type="hidden" name="slug" value="<?= $berita['slug'] ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul Berita Acara" value="<?= $berita['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" <?= $berita['deskripsi'] ?>></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori Berita</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <option value="1">Kategori 1</option>
                            <option value="2">Kategori 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control" type="file" id="thumbl" name="thumbl">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Edit Data</button>
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