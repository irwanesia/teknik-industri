<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>
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
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Sejarah</th>
                        <th scope="col">Struktur Organisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profil as $prof) : ?>
                    <tr>
                        <td><?= $prof['visi'] ?></td>
                        <td><?= $prof['misi'] ?></td>
                        <td><?= $prof['sejarah'] ?></td>
                        <td><?= $prof['struktur_org'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url() ?>admin/edit_profil/<?= $prof['id_profil']; ?>" class="btn btn-primary">Edit</a>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 