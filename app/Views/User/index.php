<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="#">Pengguna</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Users List</h2>
            <?php
            if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?><div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="<?= base_url('Users/create') ?>" type="button" class="btn btn-success" style="color: white;"><i class="fa fa-plus"></i>
                        Tambah Pengguna</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $a) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $a['name'] ?></td>
                                    <td><?= $a['email'] ?></td>
                                    <td><?= $a['role'] ?></td>
                                    <td>
                                        <a href="<?= base_url('Users/' . $a['id']) ?>" class="btn btn-success">Edit</a>
                                        <form action="Users/<?= $a['id'] ?>" method="POST" class="d-inline">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>

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