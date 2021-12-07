<!-- Contact information-->
@foreach ($pageData->content as $item)
<section class="section section-lg bg-default">
	<!-- section wave-->
	<div class="section-wave">
		<svg x="0px" y="0px" width="1920px" height="46px" viewbox="0 0 1920 46" preserveAspectRatio="none">
			<path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
		</svg>
	</div>
	<div class="container container-bigger">
		<div class="row row-ten row-50 justify-content-md-center justify-content-xl-between">
			<div class="col-md-9 col-lg-6">
				<h3>{{__('csa.title')}}</h3>
				<hr class="divider divider-left divider-default">
				<p class="big">{{__('csa.subtitle')}}</p>
				<!-- RD Mailform-->
				<form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
					<div class="row row-20 row-fix">
						<div class="col-md-12">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-name">{{__('csa.name')}}</label>
								<input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-company">{{__('csa.company')}}</label>
								<input class="form-input" id="form-1-company" type="text" name="company" data-constraints="@Required"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-invoice">{{__('csa.invoice')}}</label>
								<input class="form-input" id="form-1-invoice" type="text" name="invoice" data-constraints="@Required"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-last-name">{{__('csa.product')}}</label>
								<input class="form-input" id="form-1-last-name" type="text" name="last-name" data-constraints="@Required"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-email">{{__('csa.email')}}</label>
								<input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-phone">{{__('csa.phone')}}</label>
								<input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required"/>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-subject">{{__('csa.text')}}</label>
								<input class="form-input" id="form-1-subject" type="text" name="subject" data-constraints="@Required"/>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-wrap form-wrap-validation">
								<label class="form-label-outside" for="form-1-message">{{__('csa.message')}}</label>
								<textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
							</div>
						</div>
						<div class="col-sm-12 offset-custom-4">
							<div class="form-button">
								<button class="button button-secondary button-nina" type="submit">{{__('csa.submit')}}</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-9 col-lg-4 col-xl-3">
				<div class="column-aside">
					<div class="row">
						<div class="col-sm-10 col-md-6 col-lg-12">
							<h6>{{__('csa.address')}}</h6>
							<hr class="divider-thin">
							<article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span><span><a href="http://maps.google.com/maps?q=1259+Avenida+Joaquim+Payolla,+Campinas,+CEP+13040211" target="blank">Av. Joaquim Payolla, 1259 Parque da Figueira -  Campinas - São Paulo - Brasil <br class="d-none d-xl-block"> Cep: 13040-211</a></span></article>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-12">
							<h6>{{__('csa.phone')}}</h6>
							<hr class="divider-thin">
							<article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
								<ul class="list-comma">
									<li><a href="tel:+55-16-3272-6380" target="_blank">(19) 3272-6380</a></li>
									{{-- <li><a href="tel:#">1-800-3434-876</a></li> --}}
								</ul>
							</article>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-12">
							<h6>{{__('csa.email')}}</h6>
							<hr class="divider-thin">
							<article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><span><a href="mailto:atendimento@transformadoresminuzzi.com.br?subject=Informação sobre a Minuzzi" target="_blank">atendimento@transformadoresminuzzi.com.br</a></span></article>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-12">
							<h6>{{__('csa.officeSchedule')}}</h6>
							<hr class="divider-thin">
							<article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-calendar-clock"></span>
								<ul class="list-0">
									<li>Sex–Sex: 07:30 - 17:30</li>
									{{-- <li>Sat–Sun: 11:00 am–4:00 pm</li> --}}
								</ul>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endforeach
