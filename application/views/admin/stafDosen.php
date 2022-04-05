<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
                </div>
                <div class="col-md-4">
                    <form action="" method="post" class="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="cari data dosen.." name="cari">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php if ($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Dosen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Konsentrasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stafDosen as $dsn) : ?>
                    <tr>
                        <th scope="row"><?= $dsn['id'] ?></th>
                        <td><?= $dsn['nidn'] ?></td>
                        <td><?= $dsn['foto'] ?></td>
                        <td><?= $dsn['nama'] ?></td>
                        <td><?= $dsn['status'] ?></td>
                        <td><?= $dsn['konsentrasi'] ?></td>
                        <td><a href="<?= base_url(); ?>admin/editDosen/<?= $dsn['id']; ?>" class="badge badge-info">Edit</a>
                            <a href="<?= base_url(); ?>admin/hapusDosen/<?= $dsn['id']; ?>" class="badge badge-danger" onclick="return confirm('hapus?');">Hapus</a>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
            <a href="<?= base_url(); ?>admin/tambahDosen" class="btn btn-primary">Input</a>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 