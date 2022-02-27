<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('Kategori') ?>">Kategori</a></div>
                <div class="breadcrumb-item active"><a href="#">Edit Kategori</a></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('Kategori/update/' . $kategori['id']) ?>" method="Post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori Berita</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Kategori Berita" value="<?= $kategori['nama_kategori'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Edit Data</button>
                        <a href="<?= base_url('Kategori') ?>" class="btn btn-warning">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>


<?= $this->endSection(); ?>