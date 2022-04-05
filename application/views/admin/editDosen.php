<div class="container mt-2">
        
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url();?>admin/stafDosen">Kembali</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form Edit Dosen</li>
        </ol>

<div class="card" style="width: 24rem;">
  <div class="card-header">
    Form Tambah Daftar Staf Dosen
  </div>
  <div class="card-body">
    <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
  
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $stafDosen['id']; ?>">
            <div class="form-group">
                <label for="exampleFormControlInput1">NIDN</label>
                <input type="text" class="form-control" name="nidn" placeholder="0318xxxx.." value="<?= $stafDosen['nidn'];?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="masukan nama.." value="<?= $stafDosen['nama'];?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                
                <?php foreach($status as $sts) : ?>
                    <?php if ( $sts == $stafDosen['status']) : ?>
                        <option value="<?= $sts; ?>" selected><?= $sts; ?></option>
                    <?php else : ?>
                        <option value="<?= $sts; ?>" ><?= $sts; ?></option>
                    <?php endif; ?>    
                <?php endforeach; ?>
                
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Konsentrasi</label>
                <select class="form-control" name="konsentrasi">
                
                <?php foreach($konsentrasi as $kons) : ?>
                    <?php if ( $kons == $stafDosen['konsentrasi']) : ?>
                        <option value="<?= $kons; ?>" selected><?= $kons; ?></option>
                    <?php else : ?>
                        <option value="<?= $kons; ?>" ><?= $kons; ?></option>
                    <?php endif; ?>    
                <?php endforeach; ?>

                </select>
            </div>
            <button type="submit" class="btn btn-info float-right" name="editDosen">Simpan</button>
        </form>
  </div>
</div>
</div>
