<!-- {{-- BANNER --}} -->
<section id="banner_home" class="slider-section">
    <div class="slider-container">
        <ul class="site-slider">
            @foreach ($banners as $banner)
                <li>
                    <div class="slider-img"><img src="{{ $banner->image }}" alt="Sldie 1" /></div>
                    <div class="slider-text">
                        <h3 style="color: #fff;">{{ $banner->title_pt }}
                        </h3>
                        <p style="color: #fff;"><span>{{ $banner->subtitle_pt }}</span></p>
                        <div class="banner-btns">
                            <a href="/about_details" class="banner-learn-btn" style="color: #000">saiba mais</a>
                            <a href="#" data-toggle="modal" data-target="#getquote" class="banner-quote-btn">faça um orçamento</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
