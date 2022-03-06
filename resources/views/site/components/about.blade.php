{{-- SECTION about --}}
@foreach ($pageData->content as $item)
    <section class="home-aboutus">
        <div class="top-tab-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="nav-tab-block">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active nav-col col-md-3" id="who-we-tab" data-toggle="tab"
                                    href="#who-we" role="tab" aria-controls="who-we" aria-selected="true">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon"> <img
                                                src="{{ url('assets/images/icons/user.png') }}" alt="img">
                                        </div>
                                        <div class="tab-info-text">
                                            <h2>Quem somos</h2>
                                            <p>Antes de mais nada, somos uma familia!</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link nav-col col-md-3" id="our-mission-tab" data-toggle="tab"
                                    href="#our-mission" role="tab" aria-controls="our-mission" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon"> <img
                                                src="{{ url('assets/images/icons/mission.png') }}" alt="img">
                                        </div>
                                        <div class="tab-info-text">
                                            <h2>Nossa missão</h2>
                                            <p>Revolucionar a produção da sua empresa!</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link nav-col col-md-3" id="what-we-tab" data-toggle="tab"
                                    href="#what-we" role="tab" aria-controls="what-we" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon"> <img
                                                src="{{ url('assets/images/icons/service.png') }}" alt="img"> </div>
                                        <div class="tab-info-text">
                                            <h2>Nossas expertises</h2>
                                            <p>Acima de tudo, qualidade e inovação!</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link nav-col col-md-3" id="safety-tab" data-toggle="tab"
                                    href="#safety" role="tab" aria-controls="safety" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon"> <img
                                                src="{{ url('assets/images/icons/helmet.png') }}" alt="img">
                                        </div>
                                        <div class="tab-info-text">
                                            <h2>Parceria de Exelência</h2>
                                            <p>Walter Brasil!</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content-block">
            <div class="container">
                <div class="tab-content" id="nav-tabContent">


                    <div class="tab-pane fade show active" id="who-we" role="tabpanel" aria-labelledby="who-we-tab">
                        <div class="row">
                            <div class="col-lg-6 col-about">
                                <div class="about-info-left">
                                    <div class="tab-content tab-content-wrapper">
                                        <img src="{{ url('assets/images/icons/user.png') }}" alt="img"
                                            style="max-width: 50%;"><br />
                                        <h2 style="position: absolute !important; margin-top: 125px !important;">Quem
                                            somos</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-about">
                                <h3 class="sub-heading-small">Sobre nos</h3>
                                <h2 class="main-heading">Temos o objetivo de fazer<br>a diferença.</h2>
                                <p>Somos uma família composta de vários ideais e a
                                    vontade de fazer a diferença no comércio de ferramentas para maquinário na região de
                                    São Paulo desde 2004 através da Xtra-fer.
                                    A grande dificuldade de encontrar bons equipamentos para produção industrial e
                                    metalúrgica, nos deu motivos e anseios de inserir no mercado produtos de altíssima
                                    qualidade. Onde nos tornamos distribuidores autorizados Walter do Brasil e essa
                                    parceria
                                    já dura 18 anos.
                                </p>
                                <a class="learn-more-btn" href="/about_details">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="our-mission" role="tabpanel" aria-labelledby="our-mission-tab">
                        <div class="row">
                            <div class="col-lg-6 col-about">
                                <div class="about-info-left2">
                                    <div class="tab-content tab-content-wrapper"> <img
                                            src="{{ url('assets/images/icons/mission.png') }}" alt="img"
                                            style="max-width: 50%;">
                                        <h2 style="position: absolute !important; margin-top: 125px !important;">Nossa
                                            missão</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-about">
                                <h3 class="sub-heading-small">Sobre nos</h3>
                                <h2 class="main-heading">Estamos aqui para ajudar<br>a sua empresa!</h2>
                                <p>Competência é uma promessa que se reflete em todas as nossas ações, produtos e
                                    serviços. Nas ferramentas de alto padrão de qualidade para torneamento, furação,
                                    fresamento e rosqueamento, bem como em nossas ferramentas customizadas para os
                                    clientes e soluções personalizadas.
                                </p><br><br><br><br>
                                {{-- <a class="learn-more-btn" href="/about_details">Saiba mais</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="what-we" role="tabpanel" aria-labelledby="what-we-tab">
                        <div class="row">
                            <div class="col-lg-6 col-about">
                                <div class="about-info-left3">
                                    <div class="tab-content tab-content-wrapper"> <img
                                            src="{{ url('assets/images/icons/service.png') }}" alt="img"
                                            style="max-width: 50%;">
                                        <h2 style="position: absolute !important; margin-top: 125px !important;">Nossas
                                            Expertises</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-about">
                                <h3 class="sub-heading-small">Sobre nos</h3>
                                <h2 class="main-heading">Prezamos pela excelência</h2>
                                <p>Seja no manuseio, manutenção e venda de peças para maquinários de torneamento,
                                    fresamento, ferramentas rotativas oferecemos todo o suporte e auxílio na compra.
                                    Também temos disponível treinamentos semanais e aulas práticas de cada ferramenta de
                                    torneamento e fresamento com seus devidos usos e aplicabilidades.
                                </p><br><br><br><br><br>
                                {{-- <a class="learn-more-btn" href="/about_details">Saiba mais</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="safety-tab">
                        <div class="row">
                            <div class="col-lg-6 col-about">
                                <div class="about-info-left4">
                                    <div class="tab-content tab-content-wrapper"> <img
                                            src="{{ url('assets/images/icons/helmet.png') }}" alt="img"
                                            style="max-width: 50%;">
                                        <h2 style="position: absolute !important; margin-top: 125px !important;">
                                            Parceria de exelência</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-about">
                                <h3 class="sub-heading-small">Sobre nos</h3>
                                <h2 class="main-heading">Qualidade e inovação<br>em cada projeto</h2>
                                <p>A Walter é uma empresa líder mundial na fabricação de ferramentas de precisão para o
                                    ramo da metalurgia, e a Xtra-fer possui parceria com sua representante no Brasil.
                                    Através
                                    disso, possuímos ferramentas inovadoras e soluções de usinagem customizadas para
                                    cada
                                    projeto.
                                </p><br><br><br><br>
                                {{-- <a class="learn-more-btn" href="/about_details">Saiba mais</a> --}}
                            </div>
                        </div>
                    </div>


                </div>

                {{-- <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="about-info-left about-bg">

                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="about-home-right-info">
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="who-we" role="tabpanel">

                                </div>

                                <div class="tab-pane fade" id="our-mission" role="tabpanel">

                                </div>

                                <div class="tab-pane fade" id="what-we" role="tabpanel">

                                </div>

                                <div class="tab-pane fade" id="safety" role="tabpanel">

                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
    </section>
@endforeach
