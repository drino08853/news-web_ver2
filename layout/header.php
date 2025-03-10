<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Newsers - Free HTML Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar bg-dark d-none d-lg-block">
            <div class="container px-0">
                <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                    <div class="top-info flex-grow-0">
                        <span class="rounded-circle btn-sm-square bg-primary me-2">
                            <i class="fas fa-bolt text-white"></i>
                        </span>
                        <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                            <p class="mb-0 text-white fs-6 fw-normal">Trending</p>
                        </div>
                        <div class="overflow-hidden" style="width: 735px;">
                            <div id="note" class="ps-2">
                                <img src="assets/img/features-fashion.jpg" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                                <a href="#">
                                    <p class="text-white mb-0 link-hover">Newsan unknown printer took a galley of type andscrambled Newsan.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="top-link flex-lg-wrap">
                        <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span class="text-body">Tuesday, Sep 12, 2024</span></i>
                        <div class="d-flex icon">
                            <p class="mb-0 text-white me-2">Follow Us:</p>
                            <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                            <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand mt-3">
                        <p class="text-primary display-6 mb-2" style="line-height: 0;">Newsers</p>
                        <small class="text-body fw-normal" style="letter-spacing: 12px;">Nespaper</small>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="?page=home" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY nama_kategori DESC");
                                    while ($k = mysqli_fetch_array($kategori)) {
                                    ?>
                                        <a href="index.php?nama_kategori=<?= $k['nama_kategori'] ?>" class="dropdown-item"><?= $k['nama_kategori'] ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <a href="?page=contact" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                            <div class="d-flex">
                                <img src="assets/img/weather-icon.png" class="img-fluid w-100 me-2" alt="">
                                <div class="d-flex align-items-center">
                                    <strong class="fs-4 text-secondary">31°C</strong>
                                    <div class="d-flex flex-column ms-2" style="width: 150px;">
                                        <span class="text-body">NEW YORK,</span>
                                        <small>Mon. 10 jun 2024</small>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="index.php" method="POST">
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" name="keyword" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <button type="submit" name="cari" class="input-group-text p-3"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Modal Search End -->