<section class="contact " id="contact">
    <div class="container">
        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kontak</li>
        </ol>
        <div class="row pt-2 mb-4">
            <div class="col text-center">
                <h2>Contact Us</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text text-white text-center"><small>Prodi Teknik Industri Institut Sains Teknologi Al-Kamal</small></p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-weight-bold">Location</li>
                        <li class="list-group-item font-italic text-monospace ">My Campus</li>
                        <li class="list-group-item font-italic text-monospace ">Jl. Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat </li>
                        <li class="list-group-item font-italic text-monospace ">DKI Jakarta</li>
                        <li class="list-group-item font-italic text-monospace ">Kode Pos : 11520</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telpon</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea type="text" class="form-control" id="pesan" name="pesan"></textarea>
                    </div>
                    <form class="form-group" action="">
                        <button type="submit" class="btn btn-primary">Kirim Pesan!</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</section> 