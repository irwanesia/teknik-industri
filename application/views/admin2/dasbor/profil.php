<div class="container profil mt-5" style="margin-bottom: 160px;">
    <h3>Edit Profil</h3>
    <hr width="200px" class="float-left">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Visi, Misi, & Tujuan</h5>
                    <hr>
                    <p class="card-text">Paparan mengenai Visi, Misi, Dan Tujuan yang ada di Teknik Industri. </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#visi">
                    Lihat
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editVisi">
                    Edit
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Sejarah</h5>
                    <hr>
                    <p class="card-text">Sejarah Singkat tentang perjalanan dan berdirinya teknik industri.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sejarah">
                    Lihat
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editSejarah">
                    Edit
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Struktur Organisasi</h5>
                    <hr>
                    <p class="card-text">Susunan Struktur Organisasi lengkap yang terdapat pada teknik industri.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#struktur">
                    Lihat
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editStruktur">
                    Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal dari visi-->
<div class="modal fade bd-example-modal-lg visi" id="visi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visi, Misi & Tujuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Visi</h5>
        <hr>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ea deleniti quasi, ex quod nesciunt deserunt pariatur nobis rem officiis exercitationem, dolor doloremque doloribus! Nemo magni veritatis fuga labore molestias.</p>
        <h5>Misi</h5>
        <hr>
        <ol>
            <li><p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, voluptatem. Nulla ullam incidunt quia laboriosam minus suscipit animi. Iste excepturi modi harum tempora suscipit quidem numquam quas, voluptatem eius veniam!</p></li>
            <li><p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, voluptatem. Nulla ullam incidunt quia laboriosam minus suscipit animi. Iste excepturi modi harum tempora suscipit quidem numquam quas, voluptatem eius veniam!</p></li>
            <li><p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, voluptatem. Nulla ullam incidunt quia laboriosam minus suscipit animi. Iste excepturi modi harum tempora suscipit quidem numquam quas, voluptatem eius veniam!</p></li>
        </ol>
        
        <h5>Tujuan</h5>
        <hr>
        <p style="font-size: 12px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste obcaecati, totam sapiente, corrupti asperiores consequatur ducimus incidunt culpa reprehenderit quis esse error neque aliquam ex animi provident minima dolores laborum?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari edit visi-->
<div class="modal fade bd-example-modal-lg" id="editVisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Visi, Misi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Visi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Misi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tujuan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari Sejarah-->
<div class="modal fade bd-example-modal-lg visi" id="sejarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sejarah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Sejarah</h5>
        <hr>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ea deleniti quasi, ex quod nesciunt deserunt pariatur nobis rem officiis exercitationem, dolor doloremque doloribus! Nemo magni veritatis fuga labore molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sequi quae iusto debitis ea? Sapiente, molestias iste commodi quae tenetur, sint consectetur autem itaque quibusdam, impedit expedita magnam corrupti aliquam.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari edit Sejarah-->
<div class="modal fade bd-example-modal-lg" id="editSejarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Sejarah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Sejarah</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari Sejarah-->
<div class="modal fade bd-example-modal-lg visi" id="struktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Struktur Organisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Struktur Organisasi</h5>
        <hr>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ea deleniti quasi, ex quod nesciunt deserunt pariatur nobis rem officiis exercitationem, dolor doloremque doloribus! Nemo magni veritatis fuga labore molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sequi quae iusto debitis ea? Sapiente, molestias iste commodi quae tenetur, sint consectetur autem itaque quibusdam, impedit expedita magnam corrupti aliquam.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari edit Sejarah-->
<div class="modal fade bd-example-modal-lg" id="editStruktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Struktur Organisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Struktur Organisasi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>