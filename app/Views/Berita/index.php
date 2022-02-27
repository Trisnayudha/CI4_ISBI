<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Berita Management</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="#">Berita</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Berita List</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    Data Berhasil ditambahkan
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="<?= base_url('Berita/create') ?>" type="button" class="btn btn-success" style="color: white;"><i class="fa fa-plus"></i>
                        Tambah Berita</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($berita as $a) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $a['title'] ?></td>
                                    <td><?= $a['user_id'] ?></td>
                                    <td><?= $a['created_at'] ?></td>
                                    <td><a href="<?= base_url('Berita/' . $a['slug']) ?>" class="btn btn-success">Edit</a> </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script') ?>


<?= $this->endSection(); ?>