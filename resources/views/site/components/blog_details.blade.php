 <!-- content start -->
 {{-- <div class="main-content-wrapper"> --}}
	{{-- <section class="breadcrumb-section about">
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
	</section> --}}

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
								<p>{!! $blog->text_pt !!}</p>
							</div>
							<div class="tags-area d-flex align-item-center justify-content-between">
								<div class="post-tags"> <a href="#">Construction</a> <a href="#">Safety</a> <a
									href="#">Planning</a> </div>
									<div class="share-item">
										<ul class="post-social-icons list-unstyled">
											<li>Compartilhar:</li>
											<li> <a title="Facebook" href="" id="facebook-share-btt" rel="nofollow" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
											<li> <a title="Email" href="" id="mail-share-btt" rel="nofollow" target="_blank"><i class="fas fa-at"></i></a> </li>
											<li> <a title="Telegram" href="" id="telegram-share-btt" rel="nofollow" target="_blank"><i class="fab fa-telegram-plane"></i></a> </li>
											<li> <a title="Linkedin" href="" id="linkedin-share-btt" rel="nofollow" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
											<li> <a title="Twitter" href="" id="twitter-share-btt" rel="nofollow" target="_blank"><i class="fab fa-twitter"></i></a> </li>
											<li> <a title="Whatsapp" href="" id="whatsapp-share-btt" rel="nofollow" target="_blank"><i class="fab fa-whatsapp"></i></a> </li>
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
												<input class="form-input" type="text" placeholder="Seu Assunto">
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

				<script>
					//Constrói a URL depois que o DOM estiver pronto FACEBOOK
					document.addEventListener("DOMContentLoaded", function() {
						//altera a URL do botão
						document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
					}, false);

					//Constrói a URL depois que o DOM estiver pronto TWITTER
					document.addEventListener("DOMContentLoaded", function() {
						var url = encodeURIComponent(window.location.href);
						var titulo = encodeURIComponent(document.title);
						//var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
						//altera a URL do botão
						document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url=" + url +
						"&text=" + titulo;

						//se for usar o atributo via, utilize a seguinte url
						//document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
					}, false);

					//Constrói a URL depois que o DOM estiver pronto EMAIL
					document.addEventListener("DOMContentLoaded", function() {
						var url = window.location.href; //url
						var title = encodeURIComponent(document.title); //título
						var mailToLink = "mailto:contato@xtrafer.com.br?subject=Informação sobre Xtra-fer";

						//tenta obter o conteúdo da meta tag description
						var desc = document.querySelector("meta[name='description']");
						desc = (!!desc)? desc.getAttribute("content") : null;

						//se a meta tag description estiver ausente...
						if(!desc){
							//...tenta obter o conteúdo da meta tag og:description
							desc = document.querySelector("meta[property='og:description']");
							desc = (!!desc)? desc.getAttribute("content") : null;
						}
						//Se houver descrição, combina a descrição com a url
						//senão o corpo da mensagem terá apenas a url
						var body = (!!desc)? desc + " " + url : url;
						//altera o link do botão
						mailToLink = mailToLink + "&body=" + encodeURIComponent(body);
						document.getElementById("mail-share-btt").href = mailToLink;
					}, false);

					//Constrói a URL depois que o DOM estiver pronto WHASTAPP
					document.addEventListener("DOMContentLoaded", function() {
						//conteúdo que será compartilhado: Título da página + URL
						var conteudo = encodeURIComponent(document.title + " " + window.location.href);
						//altera a URL do botão
						document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
					}, false);

					//Constrói a URL depois que o DOM estiver pronto LINKEDIN
					document.addEventListener("DOMContentLoaded", function() {
						var url = encodeURIComponent(window.location.href); //url
						var titulo = encodeURIComponent(document.title); //título
						var linkedinLink = "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;

						//tenta obter o conteúdo da meta tag description
						var summary = document.querySelector("meta[name='description']");
						summary = (!!summary)? summary.getAttribute("content") : null;

						//se a meta tag description estiver ausente...
						if(!summary){
							//...tenta obter o conteúdo da meta tag og:description
							summary = document.querySelector("meta[property='og:description']");
							summary = (!!summary)? summary.getAttribute("content") : null;
						}
						//altera o link do botão
						linkedinLink = (!!summary)? linkedinLink + "&summary=" + encodeURIComponent(summary) : linkedinLink;
						document.getElementById("linkedin-share-btt").href = linkedinLink;
					}, false);


					//Constrói a URL depois que o DOM estiver pronto TELEGRAM
					document.addEventListener("DOMContentLoaded", function() {
						var url = encodeURIComponent(window.location.href); //url
						var title = encodeURIComponent(document.title); //título
						var telegramLink = 'https://telegram.me/share/url?url=' + url + '&text=' + title;
						document.getElementById("telegram-share-btt").href = telegramLink;
					}, false);

					//Constrói a URL depois que o DOM estiver pronto PINTEREST
					document.addEventListener("DOMContentLoaded", function() {
						var url = encodeURIComponent(window.location.href);

						//tenta obter o conteúdo da meta tag description
						var desc = document.querySelector("meta[name='description']");
						desc = (!!desc)? desc.getAttribute("content") : null;

						//se a meta tag description estiver ausente...
						if(!desc){
							//...tenta obter o conteúdo da meta tag og:description
							desc = document.querySelector("meta[property='og:description']");
							desc = (!!desc)? desc.getAttribute("content") : null;
						}

						//metas tags description e og:description ausentes
						if(!desc){
							//obtém title
							desc = document.title;
						}

						//altera a URL do botão
						document.getElementById("pinterest-share-btt").href = "https://www.pinterest.com/pin/create/button/?url="+url+"&description="+encodeURIComponent(desc);
					}, false);

				</script>


			</section>
			@endforeach
			{{-- </div> --}}
			<!-- content end -->
