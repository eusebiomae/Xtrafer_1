	<!-- content start -->
	{{-- @foreach ($pageData->content as $item) --}}
	<div class="main-content-wrapper">
		<section class="breadcrumb-section about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-5">
						<div class="breadcrumb-wrapper">
							<h2>Blogs</h2>
							<nav>
								<ul>
									<li class="breadcrumb-item"><a href="/">Home</a></li>
									<li class="breadcrumb-item active"><a href="#">Blogs</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		{{-- @foreach ($pageData->content as $item) --}}
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-9">
						<div class="row">
							@foreach ($blogs as $blog)
							<div class="col-12 col-lg-6 col-md-6 item">
								<div class="grid-news-wrapper">
									<div class="grid-news-item">
										<div class="grid-news-img"> <img src="{{$blog->image}}" alt="img"> </div>
										<div class="grid-news-info">
											<h2>{{$blog->title_pt}}</h2>
											<div class="grid-news-action-info">
												<div class="grid-news-action-list"> <span><i class="material-icons">category</i></span>
													<p>{{$blog->blogCategory->description_pt}}</p>
												</div>
												<div class="grid-news-action-list"> <span><i class="material-icons">calendar_today</i></span>
													<p>{{$blog->scheduling_date}}</p>
												</div>
											</div>
											<p>{{$blog->subtitle_pt}}</p>
										</div>
										<div class="grid-news-button"> <a href="blog_details/{{$blog->id}}" class="news-read-more-btn">Ler mais...</a> </div>
									</div>
								</div>
							</div>
							@endforeach
							{{-- <div class="col-12">
								<div class="grid-news-paggination">
									<ul>
										<li><a href="#"><span>Prev</span></a></li>
										<li><a href="#"><span>1</span></a></li>
										<li><a href="#"><span>2</span></a></li>
										<li class="active"><a href="#"><span>3</span></a></li>
										<li><a href="#"><span>4</span></a></li>
										<li><a href="#"><span>5</span></a></li>
										<li><a href="#"><span>Next</span></a></li>
									</ul>
								</div>
							</div> --}}
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="blog-sidebar-wrapper">
							<div class="search-widget">
								<form>
									<div>
										<input type="text" class="search-widget-input" placeholder="Search....">
										<button type="submit" class="search-widget-btn"><i class="material-icons">search</i></button>
									</div>
								</form>
							</div>
							<div class="categories-widget">
								<h3 class="heading-widget">Categorias</h3>
								<hr>
								<ul>
									<li><a href="{{$blog->blogCategory->description_pt}}">Ferramentas</a></li>
									<li><a href="{{$blog->blogCategory->description_pt}}">Industria</a></li>
									<li><a href="{{$blog->blogCategory->description_pt}}">Logística</a></li>
									<li><a href="{{$blog->blogCategory->description_pt}}">Treinamentos</a></li>
								</ul>
							</div>
							<div class="recent-post-widget">
								<h3 class="heading-widget">Posts Mais Antigos</h3>
								<hr>
								@foreach ($blog_right as $item)
								<div class="post">
									<a href="blog_details/{{$blog->id}}"> <img src="{{$item->image}}" alt="img"> </a>
									<h4><a href="blog_details/{{$blog->id}}">{{$item->title_pt}}</a></h4> <span class="date">{{$item->scheduling_date}}</span>
								</div>
								@endforeach
							</div>
							<div class="tags-widget">
								<h3 class="heading-widget">Popular Tags</h3>
								<hr>
								<div> <a href="#">Exterior</a> <a href="#">Structural</a> <a href="#">Floor</a> <a href="#">Ceiling</a> <a href="#">Roof</a> <a href="#">Heavy Timber</a> <a href="#">Wood Frame</a> <a href="#">House</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		{{-- @endforeach --}}
	</div>
	<!-- content end -->
