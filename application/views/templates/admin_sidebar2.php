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



    <!-- query dari menu -->
    <?php 

    $role_id = $this->session->userdata('role_id');
    // join tabel user_menu dan user_access_menu
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
                ";
    $menu =  $this->db->query($queryMenu)->result_array();

    ?>


    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>

    <!-- SIAPKAN SUB MENU SESUAI MENU -->
    <?php 
    // join tabel user_sub_menu dan user_menu
    $menuId = $m['id'];
    $querySubMenu = "SELECT *
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`menu_id` = $menuId
                AND `user_sub_menu`.`is_active` = 1
            ";
    $subMenu = $this->db->query($querySubMenu)->result_array();
    ?>


    <!-- foreach didalam foreach -->
    <?php foreach ($subMenu as $sm) : ?>
    <!-- Nav Item - Dashboard -->
    <!-- membuat menu active ketika halaman tersebut aktif-->
    <?php if ($title == $sm['title']) : ?>
    <li class="nav-item active">
        <?php else : ?>
    <li class="nav-item">
        <?php endif; ?>

        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
            <i class="<?= $sm['icon']; ?>"></i>
            <span><?= $sm['title']; ?></span></a>
    </li>
    <?php endforeach; ?>

    <?php endforeach; ?>

    <!-- Nav Item - Profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profil'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-university"></i>
            <span>Akademik</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/stafDosen'); ?>">Staf Dosen</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-info"></i>
            <span>Informasi</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
            <span>Kemahasiswaan</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Data Mahasiswa</a>
                <a class="collapse-item" href="cards.html">Prestasi Mahasiswa</a>
                <a class="collapse-item" href="cards.html">Galeri</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="far fa-fw fa-building"></i>
            <span>Fasilitas</span></a>
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