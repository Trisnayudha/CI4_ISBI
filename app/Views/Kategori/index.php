<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori Management</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="#">Kategori</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Kategori List</h2>
            <?php
            if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?><div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="<?= base_url('Kategori/create') ?>" type="button" class="btn btn-success" style="color: white;"><i class="fa fa-plus"></i>
                        Tambah Kategori Berita</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori Berita</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kategori as $a) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $a['nama_kategori'] ?></td>
                                    <td>
                                        <a href="<?= base_url('Kategori/' . $a['id']) ?>" class="btn btn-success">Edit</a>
                                        <form action="Kategori/<?= $a['id'] ?>" method="POST" class="d-inline">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
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