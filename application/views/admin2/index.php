<nav style="height: 250px; ">
    <div class="row">
        <div class="col-md-2 bg-dark">
            <ul class="nav nav-pills flex-column m-4 " style="height:450px;">
                <li class="nav-item">
                <a class="nav-link" href="#">Active</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link Menu 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link Menu 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="container mt-4">
                <h3>Visi, Misi & Tujuan</h3>
                <br>
                <span><b>Visi</b></span>
                <hr style="width:100px; margin-left:0px;">   

                <?php foreach($admin as $adm) : ?> 
                <p><?= $adm['visi']?></p>
                <span><b>Misi</b></span>
                <hr style="width:100px; margin-left:0px;">
                <p><?= $adm['misi']?></p>
                <span><b>Tujuan</b></span>
                <hr style="width:100px; margin-left:0px;">      
                <p><?= $adm['tujuan']?></p>
                <?php endforeach; ?>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                Edit
                </button>


                <!-- Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Edit Visi, Misi Dan Tujuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <form action="<?= base_url();?>/admin" method="post">

                    <div class="form-group">
                        <label for="visi">Visi</label><br>
                        <textarea name="visi" id="" cols="50" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="visi">Misi</label><br>
                        <textarea name="misi" id="" cols="50" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="visi">Tujuan</label><br>
                        <textarea name="tujuan" id="" cols="50" rows="5"></textarea>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>

                    </form>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</nav>

