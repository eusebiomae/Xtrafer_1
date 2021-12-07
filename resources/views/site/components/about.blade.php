{{-- SECTION about --}}
@foreach ($pageData->content as $item)
<section class="home-aboutus">
	<div class="top-tab-block">
			<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="nav-tab-block">
											<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="who-we-tab" data-toggle="tab" href="#who-we" role="tab" aria-controls="who-we" aria-selected="true">
															<div class="tab-info-block">
																	<div class="tab-info-icon"> <img src="assets/images/who-we-are.png" alt="img"> </div>
																	<div class="tab-info-text">
																			<h2>who we are</h2>
																			<p>Lorem Ipsum is dummy</p>
																	</div>
															</div>
													</a>
													<a class="nav-item nav-link" id="our-mission-tab" data-toggle="tab" href="#our-mission" role="tab" aria-controls="our-mission" aria-selected="false">
															<div class="tab-info-block">
																	<div class="tab-info-icon"> <img src="assets/images/our-mission.png" alt="img"> </div>
																	<div class="tab-info-text">
																			<h2>our mission</h2>
																			<p>Lorem Ipsum is dummy</p>
																	</div>
															</div>
													</a>
													<a class="nav-item nav-link" id="what-we-tab" data-toggle="tab" href="#what-we" role="tab" aria-controls="what-we" aria-selected="false">
															<div class="tab-info-block">
																	<div class="tab-info-icon"> <img src="assets/images/what-we-have.png" alt="img"> </div>
																	<div class="tab-info-text">
																			<h2>what we have</h2>
																			<p>Lorem Ipsum is dummy</p>
																	</div>
															</div>
													</a>
													<a class="nav-item nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="safety" aria-selected="false">
															<div class="tab-info-block">
																	<div class="tab-info-icon"> <img src="assets/images/safety.png" alt="img"> </div>
																	<div class="tab-info-text">
																			<h2>safety first</h2>
																			<p>Lorem Ipsum is dummy</p>
																	</div>
															</div>
													</a>
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	<div class="tab-content-block">
			<div class="container">
					<div class="row">
							<div class="col-12 col-lg-6 col-md-6">
									<div class="about-info-left">
											<div class="tab-content" id="nav-tabContent">
													<div class="tab-pane fade show active" id="who-we" role="tabpanel" aria-labelledby="who-we-tab">
															<div class="tab-content-wrapper"> <img src="assets/images/who-we-are.png" alt="img">
																	<h2>ANY KIND PROJECT PLANNING</h2>
															</div>
													</div>
													<div class="tab-pane fade" id="our-mission" role="tabpanel" aria-labelledby="our-mission-tab">
															<div class="tab-content-wrapper"> <img src="assets/images/our-mission.png" alt="img">
																	<h2>ANY KIND PROJECT PLANNING</h2>
															</div>
													</div>
													<div class="tab-pane fade" id="what-we" role="tabpanel" aria-labelledby="what-we-tab">
															<div class="tab-content-wrapper"> <img src="assets/images/what-we-have.png" alt="img">
																	<h2>ANY KIND PROJECT PLANNING</h2>
															</div>
													</div>
													<div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="safety-tab">
															<div class="tab-content-wrapper"> <img src="assets/images/safety.png" alt="img">
																	<h2>ANY KIND PROJECT PLANNING</h2>
															</div>
													</div>
											</div>
									</div>
							</div>
							<div class="col-12 col-lg-6 col-md-6">
									<div class="about-home-right-info">
											<h3 class="sub-heading-small">About Us</h3>
											<h2 class="main-heading">Standing on pure<br> Need & Dope</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure d olor in reprehenderit in voluptate velit esse cillum dolore. </p> <a class="learn-more-btn" href="pages/about-us.html">Learn More</a> </div>
							</div>
					</div>
			</div>
	</div>
</section>
@endforeach
