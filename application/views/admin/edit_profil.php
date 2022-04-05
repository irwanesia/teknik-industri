<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <form action="" method="post">
                <input type="hidden" name="id_profil" value="<?= $profil['id_profil']; ?>">
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea class="form-control" id="visi" name="visi" rows="3" value="<?= $profil['visi']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea class="form-control" id="misi" name="misi" rows="3" value="<?= $profil['misi']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="sejarah">Sejarah</label>
                    <textarea class="form-control" id="sejarah" name="sejarah" rows="3" value="<?= $profil['sejarah']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Struktur Organisasi</label>
                    <img src="" alt="">
                </div>
                <button type="submit" class="btn btn-primary" name="edit_Profil">Edit</button>
            </form>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 