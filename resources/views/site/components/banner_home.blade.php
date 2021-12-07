<!-- {{-- BANNER --}} -->
{{-- <section id="banner-home" class="breadcrumbs-custom-svg text-center">
    <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-main" data-loop="true" data-autoplay="5500"
        data-simulate-touch="false" data-slide-effect="fade"
        style="background-image: url('assets/images/banner/bg.png'); no-repeat center; background-size:cover;">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide" data-slide-bg="">
                    <div class="swiper-slide-caption">
                        <div class="container-wide swiper-main-section">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-4 col-xl-4">
                                    <p class="heading-1 breadcrumbs-custom-subtitle" data-caption-animate="blurIn"
                                        data-caption-delay="50"><img src="{{ $banner->image }}" alt="" width="500"
                                            style="margin-right: 350px; margin-top: 150px;" /></p>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <p class="breadcrumbs-custom-subtitle" data-caption-animate="fxRotateInUp"
                                        data-caption-delay="550" style="color: #fff">
                                        {{ internation($banner, 'title') }}</p>

                                    <p class="heading-1 breadcrumbs-custom-title" data-caption-animate="blurIn"
                                        data-caption-delay="50" style="color: #fff">
                                        {{ internation($banner, 'pretitle') }}</p>

                                    <p class="heading-2" data-caption-animate="fxRotateInDown"
                                        data-caption-delay="550" style="color: #fff">
                                        {{ internation($banner, 'subtitle') }}
                                    </p>
                                    <div class="group-md button-group">
                                        <a class="button button-secondary button-nina button-lg" href="/budget"
                                            data-caption-animate="fxRotateInDown"
                                            data-caption-delay="550">{{ __('menu.budget') }}</a>
                                        <a class="button button-default-outline button-nina button-lg" href="/products"
                                            data-caption-animate="fxRotateInDown"
                                            data-caption-delay="550">{{ __('menu.productsSee') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
<section id="banner_home" class="slider-section">
    <div class="slider-container">
        <ul class="site-slider">
            @foreach ($banners as $banner)
                <li>
                    <div class="slider-img"><img src="{{ $banner->image }}" alt="Sldie 1" /></div>
                    <div class="slider-text">
                        <h3>{{ $banner->title_pt }}
                        </h3>
                        <p><span>{{ $banner->subtitle_pt }}</span></p>
                        <div class="banner-btns"> <a href="pages/about-us.html" class="banner-learn-btn">learn
                                more</a>
                            <a href="#" data-toggle="modal" data-target="#getquote" class="banner-quote-btn">get
                                a
                                quote</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
