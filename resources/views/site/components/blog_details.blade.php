 <!-- content start -->
 {{-- <div class="main-content-wrapper"> --}}
 @foreach ($pageData->content as $item)
     <section class="section">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-lg-9" style="margin-inline: auto;">
                     <div class="single-post-wrapper">
                         <div class="post-content">
                             <div class="post-image"> <img src="{{ $blog->image }}" alt="img"
                                     style="height: auto;"> </div>
                             <div class="post-body">
                                 <div class="post-meta"> <span class="post-cat">
                                         <i class="far fa-folder-open"></i>
                                         <a href="#">{{ $blog->blogCategory->description_pt }}</a>
                                     </span> <span class="post-date">
                                         <i class="far fa-calendar"></i>
                                         <a href="#">{{ $blog->scheduling_date }}</a>
                                     </span>
                                 </div>
                                 <div class="post-entry-content">
                                     <p>{!! $blog->text_pt !!}</p>
                                 </div>
                                 <div class="tags-area d-flex align-item-center justify-content-between">
                                     {{-- <div class="post-tags">
                                         <a href="#">{{ $blog->tags }}</a>
                                     </div> --}}
                                     <div class="share-item">
                                         <ul class="post-social-icons list-unstyled">
                                             <li>Compartilhar:</li>
                                             <li> <a title="Facebook" href="" id="facebook-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                                             <li> <a title="Email" href="" id="mail-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fas fa-at"></i></a> </li>
                                             <li> <a title="Telegram" href="" id="telegram-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fab fa-telegram-plane"></i></a> </li>
                                             <li> <a title="Linkedin" href="" id="linkedin-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                                             <li> <a title="Twitter" href="" id="twitter-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fab fa-twitter"></i></a> </li>
                                             <li> <a title="Whatsapp" href="" id="whatsapp-share-btt" rel="nofollow"
                                                     target="_blank"><i class="fab fa-whatsapp"></i></a> </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="comment-form">
                             <h2 class="main-heading">Adicionar Comentário</h2>
                             <div class="form-inner">

                                 <form id="formContact" action="/sendComment" method="POST" class="add_comment">
                                     {!! csrf_field() !!}

                                     <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                                     <div class="row">

                                         <div class="col-12 col-lg-6 col-md-6">
                                             <div class="contact-form-group">
                                                 <label class="form-label">Nome Completo*</label>
                                                 <input class="form-input" id="name" name="name" type="text"
                                                     placeholder="Seu Nome" required>
                                             </div>
                                         </div>

                                         <div class="col-12 col-lg-6 col-md-6">
                                             <div class="contact-form-group">
                                                 <label class="form-label">Email*</label>
                                                 <input class="form-input" id="email" name="email" type="email"
                                                     placeholder="Seu Email" required>
                                             </div>
                                         </div>

                                         <div class="col-12 col-lg-12 col-md-12">
                                             <div class="contact-form-group">
                                                 <label class="form-label">Comentário*</label>
                                                 <textarea class="form-input-textarea" type="text" rows="6"
                                                     placeholder="Seu Comentário" id="comments" name="comments"
                                                     required></textarea>
                                             </div>
                                         </div>

                                         <!--Google captcha-->
                                         <div class="col-sm-12">
                                             <div class="form-wrap form-validation-left">
                                                 <div class="g-recaptcha"
                                                     data-sitekey="6Le0N7cdAAAAAFlWhqw80Iof8cP7C81hYXHFKxaE"></div>
                                             </div>
                                         </div>
                                         <!--End Google captcha -->

                                         <div class="col-12 col-lg-12 col-md-12">
                                             <div class="contact-form-group float-right">
                                                 <button type="submit" value="Enviar" name="button"
                                                     class="learn-more-btn float-right">Enviar</button>

                                             </div>
                                         </div>

                                     </div>
                                 </form><br />

                                 <h2 class="main-heading">Comentários Adicionados:</h2><br />

                                 <?php
                                 $comment = App\Model\api\CommentModel::select()
                                     ->orderBy('id', 'desc')
                                     ->get();
                                 
                                 if ($comment['comments'] = null) {
                                     echo 'Este blog ainda não possui comentários';
                                 }
                                 
                                 ?>

                                 @foreach ($comment as $comment)
                                     <div class="comments-area">
                                         <ul class="comments-list">
                                             <li>
                                                 <div class="comment d-flex last"> <img class="comment-avatar"
                                                         src="../../assets/images/favicon.png" alt="img">
                                                     <div class="comment-body col-12">
                                                         <div class="comment-meta-data"> <span
                                                                 class="comment-author col-6">{{ $comment['name'] }}</span>
                                                             <span
                                                                 class="comment-date-right float-right col-6">{{ $comment['created_at'] }}</span>
                                                         </div>
                                                         <div class="comment-content col-12">
                                                             <p>{{ $comment['comments'] }} </p>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <hr />
                                             </li>
                                         </ul>
                                     </div>
                                 @endforeach


                             </div>

                         </div>
                     </div>
                 </div>

                 <script type="text/javascript" src=" code.jquery.com/jquery-1.11.3.min.js"></script>
                 <script src='https://www.google.com/recaptcha/api.js'></script>
                 <script>
                     window.onload = function() {
                         var recaptcha = document.forms["formContact"]["g-recaptcha-response"];
                         recaptcha.required = true;
                         recaptcha.oninvalid = function(e) {
                             // fazer algo, no caso to dando um alert
                             alert("Por favor complete o captchaba");
                         }
                     }
                 </script>

                 <script>
                     //Constrói a URL depois que o DOM estiver pronto FACEBOOK
                     document.addEventListener("DOMContentLoaded", function() {
                         //altera a URL do botão
                         document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" +
                             encodeURIComponent(window.location.href);
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
                         desc = (!!desc) ? desc.getAttribute("content") : null;

                         //se a meta tag description estiver ausente...
                         if (!desc) {
                             //...tenta obter o conteúdo da meta tag og:description
                             desc = document.querySelector("meta[property='og:description']");
                             desc = (!!desc) ? desc.getAttribute("content") : null;
                         }
                         //Se houver descrição, combina a descrição com a url
                         //senão o corpo da mensagem terá apenas a url
                         var body = (!!desc) ? desc + " " + url : url;
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
                         var linkedinLink = "https://www.linkedin.com/shareArticle?mini=true&url=" + url + "&title=" + titulo;

                         //tenta obter o conteúdo da meta tag description
                         var summary = document.querySelector("meta[name='description']");
                         summary = (!!summary) ? summary.getAttribute("content") : null;

                         //se a meta tag description estiver ausente...
                         if (!summary) {
                             //...tenta obter o conteúdo da meta tag og:description
                             summary = document.querySelector("meta[property='og:description']");
                             summary = (!!summary) ? summary.getAttribute("content") : null;
                         }
                         //altera o link do botão
                         linkedinLink = (!!summary) ? linkedinLink + "&summary=" + encodeURIComponent(summary) : linkedinLink;
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
                         desc = (!!desc) ? desc.getAttribute("content") : null;

                         //se a meta tag description estiver ausente...
                         if (!desc) {
                             //...tenta obter o conteúdo da meta tag og:description
                             desc = document.querySelector("meta[property='og:description']");
                             desc = (!!desc) ? desc.getAttribute("content") : null;
                         }

                         //metas tags description e og:description ausentes
                         if (!desc) {
                             //obtém title
                             desc = document.title;
                         }

                         //altera a URL do botão
                         document.getElementById("pinterest-share-btt").href =
                             "https://www.pinterest.com/pin/create/button/?url=" + url + "&description=" + encodeURIComponent(
                                 desc);
                     }, false);
                 </script>


     </section>
 @endforeach
 {{-- </div> --}}
 <!-- content end -->
