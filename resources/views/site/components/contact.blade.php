<!-- Contact information-->
{{-- @foreach ($pageData->content as $item) --}}
<!-- content start -->
<div class="main-content-wrapper">
    <section class="breadcrumb-section about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="breadcrumb-wrapper">
                        <h2>Fale conosco</h2>
                        <nav>
                            <ul>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><a href="#">Fale conosco</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7">
                    <div class="main-heading-block">
                        <h2 class="main-heading">Nossa localização</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 text-center item">
                    <div class="contact-block-wrapper"> <span class="icon-box"><i
                                class="material-icons">location_on</i></span>
                        <h2 class="contact-box-heading">nos visite</h2>
                        <p class="contact-box-info">R. José Pio Magalhães, 5 - Guarulhos</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center item">
                    <div class="contact-block-wrapper">
                        <a href="mailto:contato@xtrafer.com.br?subject=Informação sobre Xtra-fer"><span
                                class="icon-box"><i class="material-icons">email</i></span></a>
                        <h2 class="contact-box-heading">nos escreva</h2>
                        <p class="contact-box-info"><a
                                href="mailto:contato@xtrafer.com.br?subject=Informação sobre Xtra-fer">contato@xtrafer.com.br</a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center item">
                    <div class="contact-block-wrapper">
                        <a href="tel:+55-11-2401-2697"><span class="icon-box"><i
                                    class="material-icons">call</i></span></a>
                        <h2 class="contact-box-heading">nos ligue</h2>
                        <p class="contact-box-info"><a href="tel:+55-11-2401-2697">+55 11 2401 2697</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="map-wrapper">
                        <div class="mapouter">
                            <h2>&nbsp;</h2>
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                        scrolling="no" marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?width=600&amp;height=350&amp;hl=pt&amp;q=guarulhos/Xtra-Fer+Com%C3%A9rcio+de+Ferramentas&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                        href="https://www.fridaynightfunkin.net/friday-night-funkin-mods-fnf-play-online/">FNF
                                        Mods</a></div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        width: 100%;
                                        height: 350px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        width: 100%;
                                        height: 350px;
                                    }

                                    .gmap_iframe {
                                        height: 350px !important;
                                    }

                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" style="margin: 50px; margin-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-wrapper">
                        <h2 class="main-heading">nos envie uma mensagem</h2>
                        <div class="form-inner">
                            <form method="POST" action="/sendContact">
																{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="contact-form-group">
                                            <label class="form-label">Nome</label>
                                            <input name="name" class="form-input" type="text" placeholder="Seu Nome">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="contact-form-group">
                                            <label class="form-label">Empresa</label>
                                            <input name="company" class="form-input" type="text" placeholder="Sua Empresa">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="contact-form-group">
                                            <label class="form-label">Email</label>
                                            <input name="email" class="form-input" type="text" placeholder="Seu Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="contact-form-group">
                                            <label class="form-label">Assunto</label>
                                            <input name="subject" class="form-input" type="text" placeholder="Seu Assunto">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="contact-form-group">
                                            <label class="form-label">Mensagem</label>
                                            <textarea class="form-input-textarea" rows="6"
                                                placeholder="Seu Mensagem" name="msg"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="contact-form-group float-right">
                                            <button id="your-id" type="submit" class="learn-more-btn float-right"> enviar </button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // 1. Acquire a reference to our <form>.
            //    This can also be done by setting <form name="blub">:
            //       var form = document.forms.blub;
        </script>

    </section>
</div>
<!-- content end -->
{{-- @endforeach --}}
