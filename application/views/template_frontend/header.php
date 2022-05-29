<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yuk Saling Bantu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div class="header-top_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-md-12 col-lg-8">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-phone"></i> +62 86-7683-1728</a></li>
                                        <li><a href="#"> <i class="fa fa-envelope"></i>yuksalingbantu@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-lg-4">
                                <div class="social_media_links d-none d-lg-block">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4">
                                <div class="logo">
                                    <a href="<?= base_url('') ?>">
                                        <!-- <img src="img/logo.png" alt=""> -->
                                        <h1 style="color: #fff;">Yuk Saling Bantu</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?= base_url('') ?>">Home</a></li>
                                            <li><a href="<?= base_url('home/about') ?>">About</a></li>
                                            <li><a href="<?= base_url('home/gallery') ?>">Gallery</a></li>
                                            <li><a href="<?= base_url('home/donation') ?>">Donasi</a></li>
                                        </ul>
                                    </nav>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <?php if($this->session->userdata('hak_akses') == 'User') { ?>
                                                <a href="<?= base_url('auth/logout') ?>">Logout</a>
                                            <?php }else{ ?>
                                                <a href="<?= base_url('auth/login') ?>">Login / Register</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->