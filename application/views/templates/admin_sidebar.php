<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <img src="<?= base_url('assets/img/teknik.png'); ?>" alt="" width="70" height="50">
        </div>
        <div class="sidebar-brand-text mx-3">Teknik Industri</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin
    </div>

    <!-- profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profil'); ?>">
            <i class="far fa-fw fa-user"></i>
            <span>Data Profil</span></a>
    </li>

    <!-- Nav Item - Fasilitas -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fasilitas" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-university"></i>
            <span>Data Fasilitas</span>
        </a>
        <div id="fasilitas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/laboratorium'); ?>">Data Laboratorium</a>
                <a class="collapse-item" href="<?= base_url('admin/kelas'); ?>">Data Kelas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Akademik -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#akademik" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-university"></i>
            <span>Data Akademik</span>
        </a>
        <div id="akademik" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/stafDosen'); ?>">Staf Dosen</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#informasi" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-info"></i>
            <span>Data Informasi</span>
        </a>
        <div id="informasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Artikel</a>
                <a class="collapse-item" href="cards.html">Kerja Sama</a>
                <a class="collapse-item" href="cards.html">Penelitian</a>
                <a class="collapse-item" href="cards.html">Arsip</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Data Kemahasiswaan</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Data Mahasiswa</a>
                <a class="collapse-item" href="cards.html">Prestasi Mahasiswa</a>
                <a class="collapse-item" href="cards.html">Galeri</a>
                <a class="collapse-item" href="cards.html">Organisasi Mahasiswa</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --> 