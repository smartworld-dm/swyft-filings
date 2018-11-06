@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero pt-xl-7 pt-lg-7 pt-5 pb-xl-0 text-white">
		<div class="container">
			<div class="hero-inner-holder d-flex justify-content-start flex-lg-row flex-column-reverse align-items-start">
				<div class="hero-form-holder mr-5">
					<form>
						<div class="form-group mb-0 pt-3 pl-4 pr-4 pb-3">
							<p>Fill out the form below and we'll let you know if your company name is available.</p>
							<input type="text" class="form-control py-4 mb-2 d-block" placeholder="Desired Business Name">
							<select name="custom-select name-search-location" class="form-control py-4 px-3 mb-2 d-block">
								<option value="" selected="">Business Location</option>
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
							<input type="text" class="form-control py-4 mb-2 d-block" placeholder="Your Name">
							<input type="email" class="form-control py-4 mb-2 d-block" placeholder="Your Email">
							<button type="submit" class="btn btn-green btn-block mt-3 py-3">Get my results</button>
						</div>
					</form>
				</div>
				<div class="hero-content pt-3">
					<h1 class="text-center text-lg-left mb-3">Check to see if your name is available in your state today. For Free.</h1>
					<p class="text-uppercase font-weight-bold text-center text-lg-left">See if your company name is available in your state. there is no cost or commitment on your part. we will email you to let you know if your name is available and how to reserve it today.</p>
				</div>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/img02.jpg') }}" srcset="{{ asset('images/img02.jpg 2x') }}" alt="" width="4000" height="469">
		</div>
	</section>
	<section class="reviews bg-light border-bottom">
		<div class="container d-flex align-items-center">
			<div class="col-lg-4 py-4 px-6 d-none d-lg-block">
				<span>Trusted by thousands of businesses in all 50 states</span>
			</div>
			<div class="col-lg-8 py-3 py-lg-4 border-left d-flex align-items-center px-0 px-lg-3">
				<div class="col-5 col-sm-3 px-0 px-lg-3">
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
					<strong>14,000+ Reviews</strong>
				</div>
				<div class="col-7 col-sm-9 pr-0 pr-sm-3">
					<h6>Hassle Free</h6>
					<p class="mb-2">Swyft Filings was very informative and the process was very easy to follow.</p>
					<strong class="mr-2">Corey B</strong>
					<i class="fas fa-check-circle"></i>
					<span>Verified Order</span>
				</div>
			</div>
		</div>
	</section>
	<section class="section works-inner-section text-center pt-5 pb-lg-8 pb-6">
		<div class="container">
			<h2 class="font-raleway font-weight-light">How It Works</h2>
			<p>With no risk or commitment find out if your name is available</p>
			<div class="row">
				<div class="col-md-4 text-center pt-3">
					<i class="d-block pb-4 pb-md-3">
						<img src="{{ asset('images/ico01.png') }}" srcset="{{ asset('images/ico01.png 2x') }}" alt="image description" width="120" height="98">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase pb-3 font-weight-bold">Answer a few questions</h5>
						<p>Fill out our secure online form in seconds so we can run a check in your state.</p>
					</div>
				</div>
				<div class="col-md-4 text-center pt-3">
					<i class="d-block pb-4 pb-md-3">
						<img src="{{ asset('images/ico02.png') }}" srcset="{{ asset('images/ico02.png 2x') }}" alt="image description" width="120" height="98">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase pb-3 font-weight-bold">Get your results</h5>
						<p>We will notify you via email within 1 hour if your name is available in your state so you can reserve it today.</p>
					</div>
				</div>
				<div class="col-md-4 text-center pt-3">
					<i class="d-block pb-4 pb-md-3">
						<img src="{{ asset('images/ico03.png') }}" srcset="{{ asset('images/ico03.png 2x') }}" alt="image description" width="120" height="98">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase pb-3 font-weight-bold">Reserve it or try again</h5>
						<p>If it is available, you can reserve it and get started on your corporate formation today. If it is not available, we offer a <a class="text-success font-weight-medium" href="#">free business name generator</a> to help you with alternative names.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="faq-section faq-holder pb-lg-8 pb-6">
		<div class="container">
			<div class="row mb-5">
				<div class="col-xl-2 col-md-12 text-xl-left text-center">
					<div class="img-holder">
						<img src="{{ asset('images/customerreport.png') }}" srcset="{{ asset('images/customerreport.png 2x') }}" alt="image description" width="120" height="98">
					</div>
				</div>
				<div class="col-xl-10 col-md-12 pt-4 text-xl-left text-center">
					<h4 class="text-info font-weight-bold">Free Business Name Search FAQs</h4>
					<p>Still have questions? Call <a class="text-success font-weight-medium" href="tel:877-777-0450">877-777-0450</a> or <a href="#" class="text-success font-weight-medium">Live Chat</a> with us for real-time support</p>
				</div>
			</div>
			<div id="accordion">
				<div class="card border-card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What does it mean if the name is available?
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							It means that you would be able to file for that company name in your state. That could change at any time, so it is a good idea to reserve and file for the name as soon as you can. With Swyft Filings, you can get started in less than ten minutes.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Does it mean it is available for all uses?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							Not necessarily. We check the state databases to see if the name is available as a corporate filing. It does not necessarily mean that someone has not trademarked the name or is not using it another state. We also have a <a href="#" class="text-success font-weight-medium">free business name generator</a> you can use to check on domain name availability or find alternatives to your name if it is already taken.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								What does it mean to reserve a name?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							Some states allow you to reserve a name for future incorporation. While the exact time lines vary, you can sometimes save a name and then incorporate it within a few days to make sure no one takes it while you work on your incorporation. The better practice is to file as soon as possible and we would love to help.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
								How do I know you won’t take my name?
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							We are not in the business of taking names. We would rather help you incorporate and grow your business. We strive to have a long term relationship with our customers as they incorporate and grow. We do not sell or transfer in any way your interest in a certain name. Our goal is to help you find the name you want and help you get started forming and growing your business today.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="entity-section text-center">
		<div class="container">
			<h2 class="font-weight-light">Check your entity name for free</h2>
			<div class="btn-holder">
				<a href="#" class="btn btn-orange">Check your entity name now</a>
			</div>
		</div>
	</section>
@stop