<div class="container mt-2">
        
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url();?>admin/stafDosen">Kembali</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form Tambah Dosen</li>
        </ol>

<div class="card" style="width: 24rem;">
  <div class="card-header">
    Form Tambah Daftar Staf Dosen
  </div>
  <div class="card-body">
  
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">NIDN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nidn" placeholder="0318xxxx..">
                <small class="form-text text-danger"><?= form_error('nidn');?></small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Foto</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
                
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="masukan nama..">
                <small class="form-text text-danger"><?= form_error('nama');?></small>
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
            <button type="submit" class="btn btn-info float-right" name="tambahDosen">Tambah Data</button>
        </form>
  </div>
</div>
</div>
