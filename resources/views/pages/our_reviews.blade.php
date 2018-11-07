@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<div class="secondary-nav bg-white">
		<div class="container">
			<ul class="secondary-nav-list d-flex justify-content-center">
				<li><a href="#">About Swyft Filings</a></li>
				<li><a href="#">Free Incorporation Guide</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Media Kit</a></li>
				<li><a href="#">Legal &amp; Privacy</a></li>
			</ul>
		</div>
	</div>
	<section class="hero pt-lg-9 pb-lg-9 pt-5 pb-5">
		<div class="container p-0">
			<div class="text-area pl-lg-6 pl-3 col-lg-8 col-xl-8">
				<h1 class="text-white mb-3 mb-lg-4 pt-1 pt-lg-0 text-center text-lg-left font-weight-normal text-shadow-none">Trusted by thousands of<br/>businesses in all 50 states.</h1>
				<h6 class="text-white text-uppercase pt-1 pt-lg-0 mb-4 pb-sm-4 pb-lg-3 text-center text-lg-left">Read more about how we are trusted by our satisfied customers</h6>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/img13.jpg') }}" srcset="{{ asset('images/img13.jpg 2x') }}" alt="" width="4000" height="986">
		</div>
	</section>
	<section class="reviews border-bottom">
		<div class="container d-flex align-items-center">
			<div class="col-xl-3 col-lg-3 col-3 py-4 px-2">
				<a href="#" class="img-holder d-block mb-3">
					<img src="{{ asset('images/img14.png') }}" srcset="{{ asset('images/img14.png 2x') }}" alt="" width="126" height="40">
				</a>
				<a href="#" class="img-holder">
					<img src="{{ asset('images/img15.png') }}" srcset="{{ asset('images/img15.png 2x') }}" alt="" width="119" height="19">
				</a>
			</div>
			<div class="col-xl-6 col-lg-6 col-6 py-3 py-lg-4 border-left border-right px-2 px-lg-5">
				<div class="d-flex justify-content-between align-content-center">
					<div class="rating-items d-flex align-items-center justify-content-xl-between justify-content-center">
						<div class="items d-flex flex-column align-items-center text-success px-2">
							<span class="num">8,547</span>
							<span class="title">Ratings</span>
						</div>
						<div class="items d-flex flex-column align-items-center text-primary px-2">
							<span class="num">4.6</span>
							<span class="title">Average</span>
						</div>
					</div>
					<ul class="progress-list d-none d-lg-block">
						<li class="justify-content-between d-flex align-items-center">
							<span class="ico">
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="num">5</span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="7623" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="progress-num">7623</span>
						</li>
						<li class="justify-content-between d-flex align-items-center">
							<span class="ico">
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="num">4</span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="992" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="progress-num">992</span>
						</li>
						<li class="justify-content-between d-flex align-items-center">
							<span class="ico">
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="num">3</span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 8.6%" aria-valuenow="688" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="progress-num">688</span>
						</li>
						<li class="justify-content-between d-flex align-items-center">
							<span class="ico">
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="num">2</span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 2.7%" aria-valuenow="221" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="progress-num">221</span>
						</li>
						<li class="justify-content-between d-flex align-items-center">
							<span class="ico">
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="num">1</span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 1.2%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="progress-num">96</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-3 py-3 py-lg-4 d-flex align-items-center px-2 px-lg-3 flex-column">
				<a href="#" class="img-holder d-block mb-3">
					<img src="{{ asset('images/img16.png') }}" srcset="{{ asset('images/img16.png 2x') }}" alt="" width="79" height="28">
				</a>
				<a href="#" class="img-holder">
					<img src="{{ asset('images/norton-header.png') }}" srcset="{{ asset('images/norton-header.png 2x') }}" alt="" width="79" height="32">
				</a>
			</div>
		</div>
	</section>
	<section class="inner-section pt-5">
		<div class="container pl-xl-8 pr-xl-9 pr-3 pl-3">
			<div class="reviews-items">
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Prompt response and clear information</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico green">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico green">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico green">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico green">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico gray">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Very helpful</h5>
					</div>
					<div class="content-item">
						<p>Every question I had was answered with no hesitation on the knowledge of any questions I came with very helpful.</p>
						<span class="verify">
							<strong class="mr-2">Michael</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Incomparable service!</h5>
					</div>
					<div class="content-item">
						<p>Incomparable service! Friendly, honest and super fast all for great price! Swyft filings has my 100% recommendations.</p>
						<span class="verify">
							<strong class="mr-2">Meir</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Prompt response and clear information</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Trustful and honest company</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Jenifer Jones Rocks shes like a breath of fresh air in this digital driven world</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Swift Filings / Jennifer Jones</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
				<article>
					<div class="d-flex flex-md-row flex-column">
						<ul class="stars d-flex mb-3">
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<span class="ico">
									<i class="fa fa-star" aria-hidden="true"></i>
								</span>
							</li>
						</ul>
						<h5 class="pl-xl-3 pl-lg-3 pl-md-3 pl-0">Fast, awesome customer service!</h5>
					</div>
					<div class="content-item">
						<p>I'm very new to business development. They seem to be a newer company but continuously updating their UI (good thing) and response time is roughly 1-2 hrs. Overall, happy to work with them.</p>
						<span class="verify">
							<strong class="mr-2">Sean</strong>
							<i class="fas fa-check-circle"></i>
							<span>Verified Order</span>
						</span>
					</div>
				</article>
			</div>
		</div>
	</section>
	<section class="inner-section start-business mt-2 text-center text-white pt-6 pb-6 text-center text-white">
		<div class="container">
			<h2 class="mb-4">Ready to Start Your Business?</h2>
			<form class="pt-2 px-0 col-lg-7 col-xl-6 m-auto text-left">
				<div class="form-row align-items-center justify-content-center flex-column flex-md-row pb-3 pb-lg-0">
					<div class="col-sm-30 mb-3 mb-md-0">
						<select class="custom-select mr-sm-2 jcf-hidden">
							<option selected="">Entity Type</option>
							<option value="LLC">LLC</option>
							<option value="C Corp">C Corporation</option>
							<option value="S Corp">S Corporation</option>
							<option value="Nonprofit">Nonprofit</option>
						</select>
					</div>
					<div class="col-sm-30 mb-3 mb-md-0">
						<select class="custom-select mr-sm-2 jcf-hidden">
							<option value="">State of formation</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class="col-sm-30 mb-3 mb-md-0">
						<button type="submit" class="btn btn-orange submit text-uppercase">Get started</button>
					</div>
				</div>
			</form>
			<div class="bg-stretch">
				<img src="{{ asset('images/bg02.png') }}" srcset="{{ asset('images/bg02.png 2x') }}" alt="" width="4000" height="468">
			</div>
		</div>
	</section>
@stop