<div class="container mt-3" style="margin-bottom: 250px;">
<h3>Artikel Teknik Industri</h3>
<hr>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sejarah">Tulis Artikel</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editSejarah">Edit Artikel</button>
    <nav class="navbar navbar-light bg-light float-right">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="cari.." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
    </nav>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Artikel</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Modal dari artikel-->
<div class="modal fade bd-example-modal-lg visi" id="sejarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tulis Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan judul..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Sub Judul</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan sub judul..">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Artikel</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="tulis artikel.." rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Upload Gambar</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dari edit artikel-->
<div class="modal fade bd-example-modal-lg" id="editSejarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan judul..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Sub Judul</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan sub judul..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Artikel</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="tulis artikel.." rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Upload Gambar</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
            </form>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" name="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>