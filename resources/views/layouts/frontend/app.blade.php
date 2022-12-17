<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $getHeader->title ?? 'My Portofolio' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('favicon-32x32.png') }}" rel="icon">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/ionicons/css/ionicons.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">{{ $getHeader->navbar_title ?? 'MY PORTOFOLIO' }}</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image" style="background-image: url({{ asset('wp.png') }})">
        <div style="background-image: url();"></div>
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="intro-title mb-4">Muhammad Khanif</h1>
                    <p class="intro-subtitle">I'am a junior programming<strong class="text-slider"></strong></p>
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="{{ asset('logo_amik.jpg') }}"
                                                    style="height: 200px; object-fit: cover; object-position: center;"
                                                    class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p><span class="title-s">Name : </span>
                                                    <span>Muhammad Khanif</span>
                                                </p>
                                                <p><span class="title-s">NIM : </span>
                                                    <span></span>
                                                </p>
                                                <p><span class="title-s">Semester : 1 (satu)</span>
                                                    <span></span>
                                                </p>
                                                <p><span class="title-s">Alamat : </span>
                                                    <span>Desa Mertapada Wetan, Kecamatan Astanajapura, Kabupaten
                                                        Cirebon</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                {{ $getAbout->title ?? 'About Me' }}
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ad modi
                                            aliquid porro in repellendus iure animi maiores vitae minus cupiditate aut
                                            placeat explicabo, tenetur repudiandae cum exercitationem, asperiores
                                            consequuntur!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Project
                            </h3>
                            <p class="subtitle-a">
                                Web Yang Pernah Dikerjakan
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ asset('project/portfolio.JPG') }}" data-gall="portfolioGallery"
                                class="venobox">
                                <div class="work-img">
                                    <img src="{{ asset('project/portfolio.JPG') }}" alt="Portfolio Tailwindcss"
                                        class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="w-title">Portofolio menggunakan Tailwindcss</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ asset('project/pengkat.JPG') }}" data-gall="portfolioGallery"
                                class="venobox">
                                <div class="work-img">
                                    <img src="{{ asset('project/pengkat.JPG') }}" alt="Portfolio Tailwindcss"
                                        class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="w-title">Pengaduan Masyarakat mengguanakan laravel-8</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section class="paralax-mf footer-paralax bg-image sect-mt4 route">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6 mx-auto">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                {{ $getFooter->title ?? 'Footer Title' }}
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                {{ $getFooter->description ?? 'Footer description here' }}
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="ion-email"></span>
                                                    {{ $getFooter->email ?? '' }} <a
                                                        href="mailto:muhammadkhanif453@gmail.com">Muhammadkhanif453@gmail.com</a>
                                                </li>
                                                <li>&nbsp;<span class="ion-social-facebook"></span>
                                                    {{ $getFooter->facebook ?? '' }} <a
                                                        href="http://facebook.com/muhammadkhanif453" target="_blank"
                                                        rel="noopener noreferrer">Facebook</a>
                                                </li>
                                                <li><span class="ion-social-github"></span>
                                                    {{ $getFooter->email ?? '' }} <a
                                                        href="github.com/khanif453">Github</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright
                            <strong>{{ $getFooter->copyright ?? 'Footer Copyright' }}</strong>. All Rights Reserved
                        </p>
                        <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/typed.js/typed.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/js/main.js"></script>

</body>

</html>
