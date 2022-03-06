{{-- SECTION benefits --}}
@foreach ($pageData->content as $item)
    <!-- features start -->
    <section class="section" style="padding: 0px 0px">
        <div class="home-feature-bg" style="height: auto !important">
            <div class="container">
                <div class="row" style="margin-top: -25px;">
                    <div class="col-md-12">
                        <div class="home-feature-box-wrapper">
                            <h3 class="sub-heading-small" style="font-size: 20px;">Nossos Portfólios</h3>
                            <h2 class="main-heading" style="color: #fff;">Construimos soluções para sua empresa </h2>
                            <div class="home-feature-list">
                                <div class="home-feature-listitem listitem-head">
                                    <div class="feature-list-icon"> <img
                                            src="{{ url('assets/images/icons/worker.png') }}" alt="img"
                                            style="width: 45px; height: 45px;">
                                    </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium" style="color: #fff;">Treinamentos</h2>
                                        <p style="color: #fff"> Sempre procuramos manter nossos clientes atualizamos
                                            sobre cada
                                            inovação no mercado. Por isso, oferecemos treinamentos sobre Torneamento e
                                            Fresamento juntamente com aula práticas e estudos de casos específicos. </p>
                                    </div>
                                </div>
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon"> <img
                                            src="{{ url('assets/images/icons/tools.png') }}" alt="img"
                                            style="width: 45px; height: 45px;">
                                    </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium" style="color: #fff">Produtos</h2>
                                        <p style="color: #fff"> Temos disponíveis peças para maquinários da mais alta
                                            qualidade e inovação.
                                            Dessa forma, oferecemos peças específicas para torneamento, lâminas de
                                            corte, barras de
                                            mandrilar, furação, fresa de metal duro, macho laminador, fresamento de
                                            facear,
                                            fresamento 90° e muitas outras.</p>
                                    </div>
                                </div>
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon"> <img
                                            src="{{ url('assets/images/icons/helmet.png') }}" alt="img"
                                            style="width: 45px; height: 45px;">
                                    </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium" style="color: #fff">Consultoria</h2>
                                        <p style="color: #fff">Auxiliamos em todo o processo para a escolha do produto
                                            certo para a sua
                                            empresa. Assim, realizamos:</p>
                                        <p style="color: #fff">
                                            Acompanhamentos de novos projetos até a sua finalização; Indicações de
                                            ferramentas ideias de acordo com a necessidade de cada cliente;
                                            Instalações de ferramentas; Acompanhamento para melhorar o processo de
                                            funcionamento de ferramentas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="/service_details" class="learn-more-btn m-25px-t btn-saiba"
                                style="color: #000;">Saiba
                                mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->
    <!-- services start -->
    {{-- <section class="section">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12">
                    <div class="main-heading-block">
                        <h2 class="main-heading">our special services</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="sinfo-more-icon"> <img src="assets/images/safety.png" alt="img"> </div>
                            <div class="sinfo-more-content">
                                <h2 class="sub-heading-medium-camel">Apartment Design</h2>
                                <p>Get exterior design ideas for your modern house elevation with our 50 unique modern
                                    house facades.</p> <a href="pages/services/services-1.html"
                                    class="services-more"><i class="material-icons">arrow_forward</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="services-info-more-inner">
                                <div class="sinfo-more-icon"> <img src="assets/images/safety.png" alt="img"> </div>
                                <div class="sinfo-more-content">
                                    <h2 class="sub-heading-medium-camel">Expert Mechanical</h2>
                                    <p>Get exterior design ideas for your modern house elevation with our 50 unique
                                        modern house facades.</p> <a href="pages/services/services-1.html"
                                        class="services-more"><i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-wrapper">
                        <div class="services-inner-box">
                            <div class="services-inner-icon"> <i class="material-icons"><span
                                        class="material-icons-outlined">
                                        miscellaneous_services
                                    </span></i> </div>
                            <h3>Provide Variety</h3>
                            <h3>Construction Services</h3>
                            <div class="services-inner-discount">
                                <p>Discount 25%</p>
                                <h3>Restructure Services</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="sinfo-more-icon"> <img src="assets/images/safety.png" alt="img"> </div>
                            <div class="sinfo-more-content">
                                <h2 class="sub-heading-medium-camel">Apartment Design</h2>
                                <p>Get exterior design ideas for your modern house elevation with our 50 unique modern
                                    house facades.</p> <a href="pages/services/services-1.html"
                                    class="services-more"><i class="material-icons">arrow_forward</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="services-info-more-inner">
                                <div class="sinfo-more-icon"> <img src="assets/images/safety.png" alt="img"> </div>
                                <div class="sinfo-more-content">
                                    <h2 class="sub-heading-medium-camel">Expert Mechanical</h2>
                                    <p>Get exterior design ideas for your modern house elevation with our 50 unique
                                        modern house facades.</p> <a href="pages/services/services-1.html"
                                        class="services-more"><i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- services end -->
    <!-- small contactus bar start -->
    <section class="contactus-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 display-flex align-item-center">
                    <div class="contactus-bar-text">
                        <h2>OFERECEMOS A SOLUÇÃO ADEQUADA PARA OS PROJETOS DA SUA EMPRESA</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="contactus-bar-button-block"> <a href="/contact" class="contactus-bar-btn">entre em
                            contato</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- small contactus bar end -->
@endforeach
<canvas></canvas>
