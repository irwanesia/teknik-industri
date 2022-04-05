<nav>
    <div class="container mt-5">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-lab" role="tab" aria-controls="nav-lab" aria-selected="true">Laboratorium</a>
            <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kelas" role="tab" aria-controls="nav-kelas" aria-selected="false">Ruang Kelas</a>
        </div>
</nav>

<div class="tab-content mt-3 mb-5" id="nav-tabContent">

    <!-- Ruang Laboratorium -->
    <div class="tab-pane fade show active" id="nav-lab" role="tabpanel" aria-labelledby="nav-lab-tab">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laboratorium</li>
                    </ol>
                </div>
            </div>


            <div class="row mt-2 teknik">
                <div class="col-lg-6">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active bg-info">
                            Laboratorium
                        </button>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-fisika-modal-lg">Fisika</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-pemrograman-modal-lg">Pemrograman Komputer</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-desain-modal-lg">Lab Design</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-analisis-modal-lg">Analysis Engineering</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-manufaktur-modal-lg">Manufaktur</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-pengendalian-modal-lg">Perancangan Pengendalian Mutu</a>
                        <a href="" class="list-group-item list-group-item-action" data-toggle="modal" data-target=".bd-sistem-modal-lg">Perancangan Sistem Kerja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ruang kelas -->
    <div class="tab-pane fade" id="nav-kelas" role="tabpanel" aria-labelledby="nav-kelas-tab">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ruang Kelas</li>
                    </ol>
                </div>
            </div>

            <div class="row teknik">
                <div class="col-lg-6">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active">
                            Ruang Kelas
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                        <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                        <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                        <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Large modal lab Fisika -->
<div class="modal fade bd-fisika-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Large modal lab Pemrograman Komputer -->
<div class="modal fade bd-pemrograman-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Large modal lab design -->
<div class="modal fade bd-desain-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Large modal lab analisi engineering -->
<div class="modal fade bd-analisis-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Large modal lab Manufaktur -->
<div class="modal fade bd-manufaktur-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Large modal lab perancangan pengendalian Mutu -->
<div class="modal fade bd-pengendalian-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Large modal lab perancangan sistem kerja -->
<div class="modal fade bd-sistem-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-3">
                <b>Laboratorium Fisika</b>
                <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-lab-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-lab" aria-selected="true">Contact</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-lokasi" role="tab" aria-controls="nav-kelas" aria-selected="false">Lokasi</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kelas" aria-selected="false">Kegiatan</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-alat" role="tab" aria-controls="nav-kelas" aria-selected="false">Alat</a>
                    <a class="nav-item nav-link" id="nav-kelas-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-kelas" aria-selected="false">Dokumen</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col mt-3">
                            <i class="fas fa-info-circle"></i> <b>Informasi Laboratorium</b>
                            <hr>
                            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <i class="fas fa-envelope fa-fw"></i> chriswahyudi@ista.ac.id <br>
                                        <i class="fas fa-envelope fa-fw"></i> chrisyudi@yahoo.com
                                    </p>
                                    <h5 class="card-title">Kontak Person</h5>
                                    <p class="card-text">
                                        <i class="fas fa-id-card"></i> Chriswahyudi, ST, MT
                                    </p>
                                    <h5 class="card-title">Telepon</h5>
                                    <p class="card-text">
                                        <i class="fas fa-phone fa-fw"></i> (021) 5811088, 58350692
                                    </p>
                                    <h5 class="card-title">Alamat</h5>
                                    <p class="card-text">
                                        <i class="fas fa-university fa-fw"></i> Prodi Teknik Industri, Institute Sains & Teknologi Al-Kamal <br>
                                        <i class="fas fa-map-marker-alt fa-fw"></i> Jalan Raya Al-Kamal No.2, RT.7/RW.3, Kedoya Sel., Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" aria-labelledby="nav-lokasi-tab">
                        <div class="col mt-3">
                            <i class="fas fa-map-marker-alt"></i> <b>Lokasi</b>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5832426308916!2d106.75795021413721!3d-6.186487262335344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70570c60eeb%3A0x52c2dd686d3bb449!2sAl+Kamal+Jakarta!5e0!3m2!1sen!2sid!4v1553241754007" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                        <div class="col mt-3">
                            <i class="fas fa-calendar-alt"></i> <b>Kegiatan</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-alat" role="tabpanel" aria-labelledby="nav-alat-tab">
                        <div class="col mt-3">
                            <i class="fas fa-tools"></i> <b>Alat</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi Utama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <i class="far fa-angle-double-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                        <div class="col mt-3">
                            <i class="fas fa-folder-open"></i> <b>Dokumen</b>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomer Dokumen</th>
                                        <th scope="col">Nama Dokumen</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="">File terlampir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 