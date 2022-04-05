<div class="container">

    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
      <div class="col-md">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Dosen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <br>
    
    <div class="row">
        <div class="col-md-1">
          <a href="<?= base_url();?>admin/tambahDosen" class="btn btn-primary">Input</a>
        </div>
        <div class="col-md-4">
          <form action="" method="post" class="">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="btn btn-primary" type="submit">Cari</button>
                </div>
                <input type="text" class="form-control" placeholder="cari data dosen.." name="cari">
              </div>
            </form>
        </div>
        <div class="col-md-7 text-center">
        <h5>Daftar Staff Dosen Teknik Industri</h5>
        </div>
    </div>


    <div class="row">
      <div class="col">
          
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
            <?php foreach($stafDosen as $dsn) : ?>
                <tr>
                <th scope="row"><?= $dsn['id'] ?></th>
                <td><?= $dsn['nidn'] ?></td>
                <td><?= $dsn['foto'] ?></td>
                <td><?= $dsn['nama'] ?></td>
                <td><?= $dsn['status'] ?></td>
                <td><?= $dsn['konsentrasi'] ?></td>
                <td><a href="<?= base_url();?>admin/editDosen/<?= $dsn['id']; ?>" class="badge badge-info">Edit</a>
                <a href="<?= base_url();?>admin/hapusDosen/<?= $dsn['id']; ?>" class="badge badge-danger" onclick="return confirm('hapus?');">Hapus</a>
                </tr>
            </tbody>
        <?php endforeach; ?>
            </table>
      </div>
    </div>
</div>


<!-- Modal Input-->
<div class="modal fade" id="inputDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Staf Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php validation_errors(); ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">NIDN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nidn" placeholder="0318xxxx..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="masukan nama..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option>Dosen Tetap Yayasan</option>
                <option>Dosen Tidak Tetap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Konsentrasi</label>
                <select class="form-control" id="exampleFormControlSelect1" name="konsentrasi">
                <option value="Supply Chain Management">Supply Chain Management</option>
                <option value="Operation Research and Optimasi">Operation Research and Optimasi</option>
                <option value="Quality and Strategy">Quality and Strategy</option>
                <option value="Statistic">Statistic</option>
                <option value="roduction System">Production System</option>
                <option value="Project Management">Project Management</option>
                <option value="Design of Experiment">Design of Experiment</option>
                <option value="K3 dan Ergonomi">K3 dan Ergonomi</option>
                <option value="Quality">Quality</option>
                </select>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Staf Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">NIDN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nidn" placeholder="0318xxxx..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="masukan nama..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option>Dosen Tetap Yayasan</option>
                <option>Dosen Tidak Tetap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Konsentrasi</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option value="Supply Chain Management">Supply Chain Management</option>
                <option value="Operation Research and Optimasi">Operation Research and Optimasi</option>
                <option value="Quality and Strategy">Quality and Strategy</option>
                <option value="Statistic">Statistic</option>
                <option value="roduction System">Production System</option>
                <option value="Project Management">Project Management</option>
                <option value="Design of Experiment">Design of Experiment</option>
                <option value="K3 dan Ergonomi">K3 dan Ergonomi</option>
                <option value="Quality">Quality</option>
                </select>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" name="tambahStafDosen">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Akan DiHapus!</h5>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Hapus</button>
      </div>
    </div>
  </div>
</div>