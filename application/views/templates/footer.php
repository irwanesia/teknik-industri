<div class="mt-5" style="background-color:blue; height:2px;">
</div>

<!-- FOOTER -->
<footer id="main-footer" class="text-white bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center text-md-left">
                <a href="index.html">
                    <img src="<?= base_url(); ?>assets/img/teknik.png" style="height: 80px;">
                </a><br> <br>
                Teknik Industri <br>
                Institut Sains dan Teknologi Al-Kamal
            </div>

            <div class="col-md-4 text-center text-md-left">
                <h5>Tentang Kami</h5>
                <div class="text-nowrap"><a style="text-decoration: none; color:white;" href="<?= base_url('profil'); ?>"><i class="far fa-eye fa-fw mr-3"></i>Visi dan Misi</a></div>
                <div class="text-nowrap"><a style="text-decoration: none; color:white;" href="<?= base_url('kontak'); ?>"><i class="fas fa-id-card-alt fa-fw mr-3"></i>Kontak</a></div>
            </div>

            <div class="col-md-4 text-center text-md-left">
                <h5>Hubungi Kami</h5>
                <div class="text-nowrap"><i class="fas fa-envelope fa-fw mr-3"></i>chriswahyudi@ista.ac.id</div>
                <div class="text-nowrap"><i class="fas fa-envelope fa-fw mr-3"></i>chrisyudi@yahoo.com</div>
                <div class="text-nowrap"><i class="fas fa-phone fa-fw mr-3"></i>(021) 5811088, 58350692 </div>
                <div class="text-nowrap"><i class="fas fa-mobile fa-fw mr-3"></i>081808451386 </div>
                <div class="text-nowrap"><a style="text-decoration: none; color:white;" href="http://ista.ac.id/"><i class="fas fa-globe fa-fw mr-3"></i>www.ista.ac.id</a></div>
            </div>
        </div>
        <hr>

        <div class="row mt-10 mt-md-0">
            <div class="col-md-4 mr-md-auto text-center text-md-left">
                <small>&copy;<?= date('Y') ?> | Institut Sains dan Teknologi Al-kamal</small>
            </div>
            <div class="col-md-3 text-center text-md-left">
                <div>
                    <a href="#" class="text-white mr-2">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="#" class="text-white mr-2">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-white mr-2">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-white mr-2">
                        <i class="fab fa-google-plus fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</footer>

<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?= base_url(); ?>assets/js/script.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.lightbox-0.5.min.js"></script>
<script src="<?= base_url(); ?>assets/js/morris.min.js"></script>
<script src="<?= base_url(); ?>assets/js/raphael-min.js"></script>
<script src="<?= base_url(); ?>assets/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script>
    Morris.Bar({
        element: 'graph',
        data: <?php echo $data; ?>,
        xkey: 'thn_ajaran',
        ykeys: ['ipk'],
        labels: ['ipk']
    });
</script>
</body>

</html> 