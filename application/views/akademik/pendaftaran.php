<nav aria-label="breadcrumb">
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <h5 class="card-header bg-info">Pendaftaran Mahasiswa Baru</h5>
                    <div class="card-body">
                        <p>Jadwal Pendaftaran Program Pasca Sarjana Untuk Semester Gasal Tahun Ajaran <?= date('Y') ?>/<?= date('Y', time(60 * 24)) ?></p>
                        <img src="" alt="langkah pendaftaran">

                        <div class="list-group mt-3 mb-3 col-6">
                            <button type="button" class="list-group-item list-group-item-action active">
                                Persyaratan Pendaftaran Program Pasca Sarjana Teknik Industri
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Fotocopy KTP</button>
                            <button type="button" class="list-group-item list-group-item-action">Pas Foto 3x4</button>
                            <button type="button" class="list-group-item list-group-item-action">Fotocopy Ijazah</button>
                            <button type="button" class="list-group-item list-group-item-action">Keterangan Buta Warna</button>
                        </div>

                        <p>untuk informasi lebih lanjut, silahkan kunjungi tautan berikut : <a style="text-decoration: none; color:red;" href="http://ista.ac.id/">ista.ac.id</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> 