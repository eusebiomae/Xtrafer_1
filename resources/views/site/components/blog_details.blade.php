 <!-- content start -->
 <div class="main-content-wrapper">
	<section class="breadcrumb-section about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-5">
					<div class="breadcrumb-wrapper">
						<h2>Detalhes do Blog</h2>
						<nav>
							<ul>
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active"><a href="#">Detalhes do Blog</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	@foreach ($pageData->content as $item)
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-9">
					<div class="single-post-wrapper">
						<div class="post-content">
							<div class="post-image"> <img src="{{ $blog->image }}" alt="img"> </div>
							<div class="post-body">
								<div class="post-meta"> <span class="post-cat">
									<i class="far fa-folder-open"></i>
									<a href="#">{{ $blog->blogCategory->description_pt }}</a>
								</span> <span class="post-date">
									<i class="far fa-calendar"></i>
									<a href="#">{{ $blog->scheduling_date }}</a>
								</span>
							</div>
							<div class="post-title">
								<h2>{{ $blog->title_pt }}</h2>
							</div>
							<div class="post-entry-content">
								<p>{{ $blog->text_pt }}</p>
							</div>
							<div class="tags-area d-flex align-item-center justify-content-between">
								<div class="post-tags"> <a href="#">Construction</a> <a
									href="#">Safety</a> <a href="#">Planning</a> </div>
									<div class="share-item">
										<ul class="post-social-icons list-unstyled">
											<li>Compartilhar:</li>
											<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
											<li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
											<li> <a href="#"><i class="fab fa-google-plus"></i></a> </li>
											<li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-form">
							<h2 class="main-heading">Adicionar Comentário</h2>
							<div class="form-inner">
								<form>
									<div class="row">
										<div class="col-12 col-lg-4 col-md-4">
											<div class="contact-form-group">
												<label class="form-label">Nome Completo</label>
												<input class="form-input" type="text" placeholder="Seu Nome">
											</div>
										</div>
										<div class="col-12 col-lg-4 col-md-4">
											<div class="contact-form-group">
												<label class="form-label">Email</label>
												<input class="form-input" type="text" placeholder="Seu Email">
											</div>
										</div>
										<div class="col-12 col-lg-4 col-md-4">
											<div class="contact-form-group">
												<label class="form-label">Assunto</label>
												<input class="form-input" type="text"
												placeholder="Seu Assunto">
											</div>
										</div>
										<div class="col-12 col-lg-12 col-md-12">

											<div class="contact-form-group">
												<label class="form-label">Comentário</label>
												<textarea class="form-input-textarea" rows="6"
												placeholder="Seu Comentário"></textarea>
											</div>
										</div>
										<div class="col-12 col-lg-12 col-md-12">
											<div class="contact-form-group float-right">
												<button type="submit"
												class="learn-more-btn float-right">Enviar</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			@endforeach
		</div>
		<!-- content end -->
