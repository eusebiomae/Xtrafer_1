<!-- Footer Default-->
<footer class="section novi-bg novi-bg-img page-footer page-footer-default text-start bg-gray-darker section-way-point"
    data-preset='{"title":"Footer light 2","category":"footer, forms, gallery, social","reload":true,"id":"footer-light-2"}'
    style="padding-bottom: 0; padding-top: inherit;">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row align-item-center">
                <div class="col-lg-3 col-md-3">
                    <div class="footer-logo">
                        <a href="index.html"> <img src="/assets/images/construct-logo-white.png" alt="footer-logo"> </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="footer-top-right-info">
                                <div class="footer-top-info-icon"> <span><i class="fas fa-envelope-open-text"
                                            style="color: #000;"></i></span> </div>
                                <div class="footer-top-info-text">
                                    <h2>Inscreva-se em nossas Newsletter.</h2>
                                    <p>Fique por de dentro de todas nossas inovações.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 footer-form" id="footer-form">
                            <div class="footer-top-right-form">
                                <form method="post" class="" data-form-output="form-output-global"
                                    data-form-type="quote" action="/sendNewsletter">
                                    {{ csrf_field() }}
                                    <input id="txtEmail" name="email" class="subscribe-input col-lg-6" type="text"
                                        placeholder="Email" required />

                                    <input id="nameEmail" name="name" class="subscribe-input col-lg-6"
                                        placeholder="Nome Completo" type="text" required>

                                    <button id="demo" type="submit" class="submit-btn-btn col-lg-4"><i
                                            class="fa fa-envelope" style="color: #fdc300;"></i>
                                    </button>

                                </form>
                            </div>
                            <div class="error-msg" id="error">
                                <p>Email inválido</p>
                            </div>
                            <div class="success-msg" id="success">
                                <p><span class="check-success-icon"><i class="fa fa-check"></i></span>Enviado com
                                    sucesso!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Xtra-fer</h2>
                        <p class="footer-middle-text" style="text-align: justify !important;"> Somos uma família
                            composta de vários ideais e a vontade de fazer a diferença
                            no comércio de ferramentas para maquinário na região de São Paulo desde 2004 através
                            da Xtra-fer.</p>
                    </div>
                    <div class="share-item" style="margin-top: 25px;">
                        <ul class="post-social-icons list-unstyled" style="text-align: inherit;">
                            <li> <a class="footercontact-list-icon-index" title="Facebook"
                                    href="https://www.facebook.com/xtra.fer/" target="_blank"><i
                                        class="social fab fa-facebook-f"></i></a> </li>
                            {{-- <li> <a class="footercontact-list-icon-index" title="Email" href="" id="mail-share-btt" target="_blank"><i class="social fas fa-at"></i></a> </li> --}}
                            {{-- <li> <a class="footercontact-list-icon-index" title="Telegram" href="" id="telegram-share-btt" target="_blank"><i class="social fab fa-telegram-plane"></i></a> </li> --}}
                            <li> <a class="footercontact-list-icon-index" title="Linkedin"
                                    href="https://www.linkedin.com/company/xtrafer/?viewAsMember=true"
                                    target="_blank"><i class="social fab fa-linkedin"></i></a> </li>
                            {{-- <li> <a class="footercontact-list-icon-index" title="Twitter" href="" id="twitter-share-btt" target="_blank"><i class="social fab fa-twitter"></i></a> </li> --}}
                            <li> <a class="footercontact-list-icon-index" title="Instagram"
                                    href="https://www.instagram.com/xtra.fer/" target="_blank"><i
                                        class="social fab fa-instagram"></i></a> </li>
                            {{-- <li> <a class="footercontact-list-icon-index" title="Whatsapp" href="https://api.whatsapp.com/send?phone=5511984475407&text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20a%20Xtra-fer!" target="_blank"><i class="social fab fa-whatsapp"></i></a> </li> --}}
                            <li> <a class="footercontact-list-icon-index" title="Pixelcard Xtra-fer"
                                    href="https://pixelcard.com.br/xtrafer/" target="_blank"><img
                                        src="/assets/images/mini_negativo_amarelo.png" alt=""
                                        style="max-width: 27px;"></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Links Rápidos</h2>
                        <div class="footer-menu-list-wrapper">
                            <ul class="footer-menu-list">
                                <li> <a href="/">Home</a> </li>
                                {{-- <li> <a href="pages/services/services-1.html">Services</a> </li> --}}
                                <li> <a href="/about_details">Sobre nós</a> </li>
                                <li> <a href="/brands">Distribuição</a> </li>
                                <li> <a href="/service_details">Serviços</a> </li>
                                <li> <a href="/experts">Nosso Time</a> </li>
                                <li> <a href="/blog">Blog</a> </li>
                                <li> <a href="/contact">Contato</a> </li>
                                <li> <a href="/about_details/#faq">Perguntas Frequentes</a> </li>
                            </ul>
                            <ul class="footer-menu-list">
                                {{-- <li> <a href="/about_details/#faq">Perguntas Frequentes</a> </li> --}}
                                {{-- <li> <a href="pages/error-404.html">404 Error</a> </li> --}}
                                {{-- <li> <a href="pages/testimonials.html">Testimonials</a> </li> --}}
                                {{-- <li> <a href="/brands">Distribuição</a> </li> --}}
                                {{-- <li> <a href="pages/services/single-service.html">Single Service</a> </li> --}}
                                {{-- <li> <a href="pages/news/single-news.html">Single News</a> </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Contáte-nos</h2>
                        <div class="footercontact-list-item">
                            <div class="footercontact-list-icon"> <i class="fas fa-map-marked-alt"></i> </div>
                            <div class="footercontact-list-info">
                                <h2>ENDEREÇO</h2>
                                <a href="http://maps.google.com/maps?q=65+Rua+José+Pio+Magalhães,+Guarulhos,+CEP+07133080"
                                    target="_blank">
                                    <p class="addressFooter">R. José Pio Magalhães, 65, Jardim Bela Vista. Guarulhos -
                                        SP</p>
                                    {{-- <p>Guarulhos - SP</p> --}}
                                </a>
                            </div>
                        </div>
                        <div class="footercontact-list-item">
                            <div class="footercontact-list-icon"> <i class="fas fa-phone-alt"></i> </div>
                            <div class="footercontact-list-info">
                                <h2>CONTATOS</h2>
                                <p><a href="tel:+55-11-2405-0783">+55 11 2405 0783</a>
                                    <br> <a
                                        href="mailto:vendas@xtrafer.com.br?subject=Informação sobre Xtra-fer">vendas@xtrafer.com.br</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 item">
                    <h2 class="footer-middle-heading">Desenvolvimento e Hospedagem</h2>
                    <div class="footer-block-list">
                        <a href="https://gigapixel.com.br/" target="_blank"><img
                                src="{{ url('assets/images/logo_gigapixel.png') }}"
                                style="max-width: 215px; margin-bottom: 15px;" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <p>Copyright © {{ date('Y') }} Xtra-fer - Comércio de Ferramentas. All rights reserved.</p>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- <!-- footer end --><a href="#" class="back-to-top"><i class="material-icons">expand_less</i></a> --}}
<!-- Javascript-->
<script src="{{ url('assets/js/core.min.js') }}"></script>
<script src="{{ url('assets/js/script.js') }}"></script>
<!-- Script tag -->
{{-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="assets/js/main.js"></script>




<style>
    .post-social-icons a i.social {

        width: 28px;
        height: 26px;
        line-height: 26px;
        color: #FDC300;
        text-align: center;
        font-size: 20px;
        margin-left: 0px;
    }

    .footercontact-list-icon-index {

        width: 35px;
        height: 35px;
        border: 1px solid #FDC300;
        background: transparent;
        color: #FDC300;
        text-align: center;
        border-radius: 6px;
        display: table;
        align-items: center;
        justify-content: center;
        margin-right: 5px;
        padding: 5px;
    }

    .addressFooter:hover {
        color: #FDC300;
    }

</style>
