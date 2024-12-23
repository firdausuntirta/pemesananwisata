<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Desa Wisata Banten</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('pengunjung/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('pengunjung/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('pengunjung/css/pengunjung.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('pengunjung/assets/img/navbar-logo.svg') }}"
                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#info">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Website! </div>
            <div class="masthead-heading text-uppercase">Destinasi Wisata Banten</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Explore</a>
        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Destinasi</h2>
                <h3 class="section-subheading text-muted">Destinasi Wisata Banten</h3>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="portfolio-image-wrapper">
                                <img class="img-fluid portfolio-image"
                                    src="{{ asset('pengunjung/assets/img/portfolio/marbella.jpg') }}"
                                    alt="Pantai Anyer" />
                                <div class="portfolio-rating-value">4.5<img
                                        src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}" alt="">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Pantai Anyer</h3>
                                    <p>Kabupaten Serang, Anyer</p>
                                    <div class="portfolio-rating">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </a>
                        <!-- <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Nasional Ujung Kulon</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div> -->
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="portfolio-image-wrapper">
                                <img class="img-fluid portfolio-image"
                                    src="{{ asset('pengunjung/assets/img/portfolio/taman-nasional-ujung-kulon.jpg') }}"
                                    alt="Taman Nasional Ujung Kulon" />
                                <div class="portfolio-rating-value">4.4<img
                                        src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                        alt="">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Taman Nasional Ujung Kulon</h3>
                                    <p>Kabupaten Pandeglang</p>
                                    <div class="portfolio-rating">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Nasional Ujung Kulon</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div> -->
                    </div>
                </div>



                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="portfolio-image-wrapper">
                                <img class="img-fluid portfolio-image"
                                    src="{{ asset('pengunjung/assets/img/portfolio/telaga-cisoka.jpg') }}"
                                    alt="Telaga Biru Cisoka" />
                                <div class="portfolio-rating-value">4.4<img
                                        src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                        alt="">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Telaga Biru Cisoka</h3>
                                    <p>Kabupaten Tangerang</p>
                                    <div class="portfolio-rating">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Nasional Ujung Kulon</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div> -->
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="portfolio-image-wrapper">
                                <img class="img-fluid portfolio-image"
                                    src="{{ asset('pengunjung/assets/img/portfolio/masjid-agung.jpg') }}"
                                    alt="Telaga Biru Cisoka" />
                                <div class="portfolio-rating-value">5.0<img
                                        src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                        alt="">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Masjid Agung Banten</h3>
                                    <p>Kasemen Banten</p>
                                    <div class="portfolio-rating">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Nasional Ujung Kulon</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div> -->
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="portfolio-image-wrapper">
                                <img class="img-fluid portfolio-image"
                                    src="{{ asset('pengunjung/assets/img/portfolio/suku-baduy.jpg') }}"
                                    alt="Telaga Biru Cisoka" />
                                <div class="portfolio-rating-value">5.0<img
                                        src="{{ asset('pengunjung/assets/img/portfolio/star0.png') }}"
                                        alt="">
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Desa Wisata Suku Baduy</h3>
                                    <p>Lebak Banten</p>
                                    <div class="portfolio-rating">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                        <img src="{{ asset('pengunjung/assets/img/portfolio/star.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="next">
                    <h1><a href="#" style="color:black; font-size: 20px;">Lihat destinasi lainnya</a></h1>
                </div>



            </div>
        </div>

    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tentang Banten</h2>
                <h3 class="section-subheading text-muted">Sejarah kesultanan banten</h3>
            </div>
            <div class="row featurette">
                <div class="col-md-7">
                    <p class="lead">
                        Kesultanan Banten berdiri pada abad ke-16, didirikan oleh Sultan Maulana Hasanuddin setelah
                        memisahkan diri dari Kerajaan Sunda. Berkat letaknya di Selat Sunda, Banten berkembang menjadi
                        pusat perdagangan internasional, terutama lada, yang menarik pedagang Asia hingga Eropa. Pada
                        masa kejayaan Sultan Ageng Tirtayasa, kesultanan ini menjadi kuat dalam politik dan ekonomi,
                        serta gigih melawan dominasi VOC. Namun, konflik internal dan tekanan Belanda perlahan
                        melemahkan kekuasaannya hingga akhirnya dihapuskan pada abad ke-19.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('pengunjung/assets/img/about/Kesultanan-Banten.jpg') }}" alt=""
                        style="width: 450px; height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel -->
    <section class="page-section" id="info">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Informasi</h2>
        </div>
        <div class="container bg-dark">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <!-- Video Slide 1 -->
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="video-wrapper text-center">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/uhYUrYzNXbM?si=PqjPwDmWkYbRvzcn"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Video Slide 2 -->
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="video-wrapper text-center">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/CgGSrRgWHEA?si=w5gR5Ce3ZJRWCUhz"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Video Slide 3 -->
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="video-wrapper text-center">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/4zguxXpAQn8?si=LDW7SuMB4mb4Yvtx"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- Carousel Navigation -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kontak kami</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>



    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('pengunjung/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Pantai Anyer</h2>
                                <p class="item-intro text-muted">Kabupaten Serang, Anyer</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ asset('pengunjung/assets/img/portfolio/marbella.jpg') }}"
                                    alt="..." />
                                <p>Pantai Anyer adalah destinasi wisata populer yang terkenal dengan pasir
                                    putihnya, ombak yang tenang, dan pemandangan indah Selat Sunda serta Gunung Krakatau
                                    di kejauhan. Terletak sekitar 2 jam perjalanan dari Jakarta, pantai ini menawarkan
                                    berbagai aktivitas seperti berenang, snorkeling, banana boat, dan menikmati matahari
                                    terbenam yang memukau. Pantai Anyer juga dilengkapi dengan beragam fasilitas,
                                    termasuk penginapan, restoran, dan area rekreasi, menjadikannya tempat ideal untuk
                                    liburan keluarga atau pasangan.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Rating:</strong>
                                        4.5⭐
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    <a href="https://maps.app.goo.gl/E8awwD7kYVfC36xh9" target="_blank"
                                        style="color: white; text-decoration: none;">
                                        Follow the maps
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('pengunjung/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Taman Nasional Ujung Kulon</h2>
                                <p class="item-intro text-muted">Kabupaten Pandeglang</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ asset('pengunjung/assets/img/portfolio/taman-nasional-ujung-kulon.jpg') }}"
                                    alt="..." />
                                <p>Taman Nasional Ujung Kulon di Banten adalah kawasan konservasi yang menjadi rumah
                                    bagi berbagai flora dan fauna langka, termasuk Badak Jawa yang terancam punah.
                                    Terletak di ujung barat Pulau Jawa, taman ini mencakup hutan tropis, pantai,
                                    pulau-pulau kecil, dan ekosistem laut yang kaya. Ujung Kulon menawarkan keindahan
                                    alam yang memukau serta kesempatan untuk aktivitas seperti trekking, snorkeling, dan
                                    mengamati satwa liar, menjadikannya destinasi unggulan untuk wisata alam dan
                                    pendidikan lingkungan.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Rating:</strong>
                                        4.4⭐
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    <a href="https://maps.app.goo.gl/wXFMHJNX8Qv2xWbg7" target="_blank"
                                        style="color: white; text-decoration: none;">
                                        Follow the maps
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('pengunjung/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Telaga Biru Cisoka</h2>
                                <p class="item-intro text-muted">Kabupaten Tangerang</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ asset('pengunjung/assets/img/portfolio/telaga-cisoka.jpg') }}"
                                    alt="..." />
                                <p>Telaga Biru Cisoka, yang terletak di Tangerang, Banten, adalah destinasi wisata unik
                                    berupa danau bekas tambang pasir dengan air berwarna biru yang jernih dan
                                    pemandangan indah. Warna airnya yang menawan berubah-ubah tergantung pencahayaan dan
                                    cuaca, menjadikannya daya tarik utama bagi pengunjung. Tempat ini cocok untuk
                                    bersantai, berfoto, atau sekadar menikmati suasana alam yang tenang dan asri.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Rating:</strong>
                                        4.3⭐
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    <a href="https://maps.app.goo.gl/u5yFkvqbj15XXFMMA" target="_blank"
                                        style="color: white; text-decoration: none;">
                                        Follow the maps
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('pengunjung/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Masjid Agung Banten</h2>
                                <p class="item-intro text-muted">Kasemen Banten</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ asset('pengunjung/assets/img/portfolio/masjid-agung.jpg') }}"
                                    alt="..." />
                                <p>Masjid Agung Banten adalah salah satu masjid tertua di Indonesia yang dibangun pada
                                    abad ke-16 oleh Sultan Maulana Hasanuddin, pendiri Kesultanan Banten. Masjid ini
                                    terkenal karena arsitekturnya yang unik, memadukan gaya tradisional Jawa dengan
                                    pengaruh Hindu-Buddha dan Tiongkok, terlihat dari menara masjid yang menyerupai
                                    mercusuar. Sebagai situs sejarah dan religi, Masjid Agung Banten menjadi destinasi
                                    ziarah dan wisata budaya yang banyak dikunjungi oleh wisatawan dan peziarah.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Rating:</strong>
                                        5.0⭐
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    <a href="https://maps.app.goo.gl/fXAiqRjLyTQt873s8" target="_blank"
                                        style="color: white; text-decoration: none;">
                                        Follow the maps
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('pengunjung/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Desa Wisata Suku Baduy</h2>
                                <p class="item-intro text-muted">Lebak Banten</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ asset('pengunjung/assets/img/portfolio/suku-baduy.jpg') }}"
                                    alt="..." />
                                <p> Desa wisata Suku Baduy di Kabupaten Lebak, Banten, adalah destinasi
                                    unik yang menawarkan pengalaman mengenal kehidupan tradisional suku Baduy. Terbagi
                                    menjadi Baduy Dalam dan Baduy Luar, desa ini mempertahankan adat istiadat yang
                                    ketat, seperti larangan teknologi modern dan pola hidup selaras dengan alam.
                                    Pengunjung dapat menikmati keindahan alam, kerajinan tangan, serta budaya khas yang
                                    mengajarkan kesederhanaan dan harmoni dengan lingkungan.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Rating:</strong>
                                        5.0⭐
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    <a href="https://maps.app.goo.gl/uvQrs8xdd96ps71U7" target="_blank"
                                        style="color: white; text-decoration: none;">
                                        Follow the maps
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="{{ asset('pengunjung/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
