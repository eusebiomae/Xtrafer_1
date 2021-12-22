{{-- SECTION benefits --}}
@foreach ($pageData->content as $item)
    <!-- features start -->
    <section class="section" style="padding: 0px 0px">
        <div class="home-feature-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home-feature-box-wrapper">
                            <h3 class="sub-heading-small" style="font-size: 20px;">Nossos serviços</h3>
                            <h2 class="main-heading" style="color: #000;">Construimos soluções para<br> sua empresa </h2>
                            <div class="home-feature-list">
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon"> <img src="{{ url ('assets/images/icons/tools.png')}}" alt="img" style="width: 45px; height: 45px;">
                                    </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium" style="color: #000;">Ferramentas de primeira qualidade</h2>
                                        <p style="color: #000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon"> <img src="{{ url ('assets/images/icons/worker.png')}}" alt="img" style="width: 45px; height: 45px;">
                                    </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium" style="color: #000">especialistas experientes</h2>
                                        <p style="color: #000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div> <a href="/service_details" class="learn-more-btn m-25px-t">Saiba mais</a>
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
                    <div class="contactus-bar-button-block"> <a href="/contact"
                            class="contactus-bar-btn">contáte-nos</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- small contactus bar end -->
@endforeach
<canvas></canvas>
