@foreach ($pageData->content as $item)
    <!-- latest news start -->
    <section class="section" style="margin-top: 75px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-heading-block">
                        <h2 class="main-heading">nossos blogs mais recentes</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 item">
                    @foreach ($blog_home as $blog_home)
                        <div class="construction-news-wrapper">
                            <a href="blog_details/{{ $blog_home->id }}" class="news-read-more-btn">
                                <div class="construction-news-img"> <img src="{{ $blog_home->image }}" alt="img">
                                    <div class="date-box">
                                        <p>{{ $blog_home->scheduling_date }}</p>
                                    </div>
                                </div>
                            </a>
                            <div class="construction-new-info">
                                <h2>{{ $blog_home->title_pt }}</h2>
                                <p>{{ $blog_home->subtitle_pt }}</p>
                            </div>
                            <div class="construction-news-action">
                                <div class="connews-action-box"> <i class="material-icons">chat_bubble_outline</i>
                                    <span>{{ $blog_home->blogCategory->description_pt }}</span>
                                </div>
                                {{-- <div class="connews-action-box"> <i class="material-icons">person</i> <span>Mario</span> </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-12 col-lg-6 item">
                    @foreach ($blog_right as $item)
                        <div class="construction-news-wrapper">
                            <div class="consnews-right-img">
                                <a href="blog_details/{{ $item->id }}" class="news-read-more-btn">
                                    <div class="construction-news-img"> <img id="image" src="{{ $item->image }}"
                                            style="object-position: 100% 5%;">
                                        <div class="date-box">
                                            <p>{{ $item->scheduling_date }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="consnews-right-info">
                                {{-- <div class="construction-new-info">
													<h2>{{$item->title_pt}}</h2>
											</div> --}}
                                <div class="construction-news-action">
                                    <div class="connews-action-box"> <i class="material-icons">chat_bubble_outline</i>
                                        <span>{{ $item->blogCategory->description_pt }}</span>
                                    </div>
                                    {{-- <div class="connews-action-box"> <i class="material-icons">person</i> <span>Mario</span> </div> --}}
                                </div>
                                <div class="construction-new-info">
                                    <p>{{ $item->subtitle_pt }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- latest news end -->
@endforeach
