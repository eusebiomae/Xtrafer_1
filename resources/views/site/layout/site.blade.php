<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Xtra-fer Comércio de Ferramentas</title>
    <link rel="shortcut icon" type="image/jpg" href="{{ url('assets/images/favicon.png')}}" />
    <meta charset="UTF-8">
    <meta name="description" content="HTML Templates">
    <meta name="keywords" content="Construction,Building,Tools">
    <meta name="author" content="Pentabay">
    <meta name="viewport" content="width=device-width">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- Style link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css')  }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
</head>

<body>
    {{-- <div id="loading"> <img id="loading-image" src="{{ url('assets/images/loader.svg') }}" alt="Loading..." /> </div> --}}
    <div class="page">
        <!-- top header start -->
        <div class="top-header  d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 offset-xl-3 col-lg-6 col-md-7 col-12 col-sm-5">
                        <div class="header-top-left"> <span class="d-m-none">
                                <i class="far fa-envelope"></i>
                                <a href="#">contato@xtrafer.com.br</a>
                            </span> <span class="d-m-none">
                                <i class="fal fa-phone"></i>
                                <a href="#">+123 456 7890</a>
                            </span> </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 col-sm-12">
                        <div class="header-top-right">
                            <div class="header-top-right-flag f_right">
                                <ul>
                                    <li class="language-dropdown dropdown"> <a href="#" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PT
                                            <i class="fas fa-arrow-down"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a
                                                class="dropdown-item" href="#">English</a> <a class="dropdown-item"
                                                href="#">Chinese</a> <a class="dropdown-item" href="#">Spanish</a> <a
                                                class="dropdown-item" href="#">Arabic</a> </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-top-right-social f_right d-md-block">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header end -->
        <!-- main header start -->
        <div class="penta__header header-menu">
            <div class="container-fluid  d-none d-lg-block">
                <div class="row">
                    <div class="col-lg-3 col-8 col-md-5">
                        <div class="header-logo">
                            <a href="index.html"> <img src="assets/images/construct-logo.png" alt="logo"> </a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="header-side-btn f-right d-none d-lg-block"> <a href="#" data-toggle="modal"
                                data-target="#getquote">Orçamento</a> </div>
                        <div class="main-menu">
                            <nav class="main-menu-nav">
                                <ul>
                                    <li class="sub-menu-parent"> <a href="index.html">Home</a> </li>
                                    <li class="sub-menu-parent"> <a href="pages/about-us.html">Xtra-fer</a> </li>
                                    <li><a href="pages/brands.html">Distribuição</a></li>
                                    <!-- <li><a href="pages/brands.html">Produtos</a></li> -->
                                    <!-- <li><a href="pages/brands.html">Treinamento</a></li> -->
                                    <!-- <li><a href="pages/faq.html">FAQ</a></li> -->
                                    <li><a href="pages/team.html">Nosso Time</a></li>
                                    <li><a href="pages/news/news-1.html">Blog</a></li>
                                    <li class="sub-menu-parent"> <a href="pages/contact-us.html">Contato</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header end -->

        @yield('content')
    </div>


    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('assets/js/core.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>

    @include('site.layout.footer')
    @yield('scripts')

</body>

</html>
