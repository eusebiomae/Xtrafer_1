@foreach ($pageData->content as $item)
<div class="main-content-wrapper">
	<section class="breadcrumb-section about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-5">
					<div class="breadcrumb-wrapper">
						<h2>{{ $blog->title_pt }}</h2>
						<nav>
							<ul>
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item"><a href="/blog">Blog</a></li>
								<li class="breadcrumb-item active"><a href="#">Detalhes do Blog</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endforeach
