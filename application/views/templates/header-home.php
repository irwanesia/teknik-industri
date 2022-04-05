<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title><?= $judul; ?> | Teknik Industri</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/morris.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fancybox/dist/jquery.fancybox.min.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>

    <nav class="my-nav navbar navbar-expand-lg navbar-default">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>assets/img/logo.png" alt="ista">
                Teknik Industri
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fas fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>home">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url(); ?>profil">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url(); ?>fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akademik
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>akademik/staffDosen">Staf Dosen</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>akademik/kompetensi">Kompetensi Sarjana</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>akademik/kurikulum">Kurikulum Sarjana</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>akademik/pendaftaran">Pendaftaran</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>informasi/artikel">Artikel</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>informasi/kerjasama">Kerja Sama</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>informasi/penelitian">Penelitian</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kemahasiswaan
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>kemahasiswaan/dataMahasiswa">Data Mahasiswa</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>kemahasiswaan/prestasiMahasiswa">Prestasi Mahasiswa</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>kemahasiswaan/galeri">Galeri</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>kemahasiswaan/organisasiMahasiswa">Organisasi Mahasiswa</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 