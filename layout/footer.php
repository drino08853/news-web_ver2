<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#" class="d-flex flex-column flex-wrap">
                        <p class="text-white mb-0 display-6">Newsers</p>
                        <small class="text-light" style="letter-spacing: 11px; line-height: 0;">Newspaper</small>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="d-flex position-relative rounded-pill overflow-hidden">
                        <input class="form-control border-0 w-100 py-3 rounded-pill" type="email" placeholder="example@gmail.com">
                        <button type="submit" class="btn btn-primary border-0 py-3 px-5 rounded-pill text-white position-absolute" style="top: 0; right: 0;">Subscribe Now</button>
                    </div>
                </div>
            </div>
        </div>


        <?php
        $contact = mysqli_query($koneksi, "SELECT * FROM kontak");
        $data = mysqli_fetch_array($contact);
        ?>
        <div class="row g-5">
            <div class="col-lg-6 col-xl-3">
                <div class="footer-item-1">
                    <h4 class="mb-4 text-white">Contact Us</h4>
                    <p class="text-secondary line-h">Alamat: <span class="text-white"><?php echo $data['alamat']; ?></span></p>
                    <p class="text-secondary line-h">Telp: <span class="text-white"><?php echo $data['no_telp']; ?></span></p>
                    <div class="d-flex line-h">
                        <a class="btn btn-light me-2 btn-md-square rounded-circle" href="<?php echo $data['facebook']; ?>"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a class="btn btn-light me-2 btn-md-square rounded-circle" href="<?php echo $data['instagram']; ?>"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
                </div>
            </div>

            <?php
            $contact = mysqli_query($koneksi, "SELECT * FROM about");
            $data = mysqli_fetch_array($contact);
            ?>
            <div class="col-lg-6 col-xl-3">
                <div class="footer-item-2">
                    <div class="d-flex flex-column mb-4">
                        <h4 class="mb-4 text-white">About</h4>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                    <img src="admin/assets/images/<?php echo $data['gambar_about'] ?>" class="img-zoomin rounded-circle" height="90px" width="90px" alt="">
                                </div>
                                <div class="d-flex flex-column ps-4">
                                    <p class="text-uppercase text-white mb-3">Visi</p>
                                    <a href="#" class="h6 text-white">
                                        <?php echo $data['visi']; ?>
                                    </a>
                                    <p></p>
                                    <p class="text-uppercase text-white mb-3">Misi</p>
                                    <a href="#" class="h6 text-white">
                                        <?php echo $data['misi']; ?>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-xl-3">
                <div class="d-flex flex-column text-start footer-item-3">
                    <h4 class="mb-4 text-white">Kategori</h4>
                    <?php
                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($k = mysqli_fetch_array($kategori)) {
                    ?>
                        <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> <?= $k['nama_kategori'] ?></a>
                    <?php } ?>
                </div>
            </div>



            <div class="col-lg-6 col-xl-3">
                <div class="footer-item-4">
                    <h4 class="mb-4 text-white">Team</h4>
                    <div class="row g-2">
                        <?php
                        $team = mysqli_query($koneksi, "SELECT * FROM tim");
                        while ($t = mysqli_fetch_array($team)) {
                        ?>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="admin/assets/images/<?= $t['foto'] ?>" class="img-zoomin img-fluid rounded w-100" style="height: 80px;" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>

<!--Whatsaap floating button -->
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>
</body>

</html>