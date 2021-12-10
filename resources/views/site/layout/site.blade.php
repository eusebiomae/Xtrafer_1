<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Xtra-fer Comércio de Ferramentas</title>
    <link rel="shortcut icon" type="image/jpg" href="{{ url('assets/images/favicon.png') }}" />
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
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
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
                                <a href="mailto:contato@xtrafer.com.br?subject=Informação sobre Xtra-fer">contato@xtrafer.com.br</a>
                            </span> <span class="d-m-none">
                                <i class="fal fa-phone"></i>
                                <a href="tel:+55-11-2401-2697">+55 11 2401 2697</a>
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
                                    <li class="sub-menu-parent"> <a href="/">Home</a> </li>
                                    <li class="sub-menu-parent"> <a href="/about_details">Xtra-fer</a> </li>
                                    <li><a href="pages/brands.html">Distribuição</a></li>
                                    <!-- <li><a href="pages/brands.html">Produtos</a></li> -->
                                    <!-- <li><a href="pages/brands.html">Treinamento</a></li> -->
                                    <!-- <li><a href="pages/faq.html">FAQ</a></li> -->
                                    <li><a href="/#experts">Nosso Time</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li class="sub-menu-parent"> <a href="/contact">Contato</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header end -->

        <!-- Modal -->
        <div class="modal fade quote" id="getquote" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="sub-heading-medium m-15px-b">Faça seu orçamento</h2>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-input" placeholder="Nome" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Sobrenome</label>
                                        <input type="text" class="form-input" placeholder="Sobrenome" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Empresa</label>
                                        <input type="text" class="form-input" placeholder="Empresa" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Telefone</label>
                                        <input type="text" class="form-input" placeholder="Telefone" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Serviços</label>
                                        <select class="form-input" required>
                                            <option>Selecione...</option>
                                            <option>Soluções em Ferramentas</option>
                                            <option>Soluções para Industria</option>
                                            <option>Logística</option>
                                            <option>Treinamento</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="quote-form-wrapper">
                                        <label class="form-label">Mensagem</label>
                                        <textarea class="form-input-textarea" rows="4" placeholder="Sua Mensagem"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="request-quote-btn">faça seu orçamento</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End-->
        @yield('content')
    </div>


    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('assets/js/core.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="assets/js/main.js"></script>

    @include('site.layout.footer')
    @yield('scripts')

</body>

</html>
