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
            <div class="card">
                <div class="card-header">
                    <h4>Simple</h4>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@ddd</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<?= $this->endSection(); ?>