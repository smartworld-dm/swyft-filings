@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero">
		<div class="container p-0">
			<div class="text-area py-4 py-sm-5 py-lg-8 col-lg-8 col-xl-7">
				<h1 class="text-white mb-3 mb-lg-4 pt-1 pt-lg-0 text-center text-lg-left">Do what you love.<br/>We'll handle the paperwork.</h1>
				<h6 class="text-white text-uppercase pt-1 pt-lg-0 mb-4 pb-sm-4 pb-lg-3 text-center text-lg-left">Start your business with confidence. affordable. fast. simple.</h6>
				<form>
					@csrf
					<div class="form-row align-items-center flex-column flex-sm-row pb-3 pb-lg-0">
						<div class="col-sm-30 mb-3 mb-md-0">
							<select class="custom-select mr-sm-2">
								<option selected>Entity Type</option>
								<option value="LLC">LLC</option>
								<option value="C Corp">C Corporation</option>
								<option value="S Corp">S Corporation</option>
								<option value="Nonprofit">Nonprofit</option>
							</select>
						</div>
						<div class="col-sm-30 mb-3 mb-md-0">
							<select class="custom-select mr-sm-2">
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
							<button type="submit" class="btn btn-primary submit text-uppercase">Get started</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/hero-home.jpg') }}" srcset="{{ asset('images/hero-home.jpg 2x') }}" alt="" width="4000" height="986">
		</div>
	</section>
	<section class="reviews border-bottom">
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
	<section class="section pt-5 pb-7 pb-lg-6">
		<div class="container d-flex flex-column flex-md-row">
			<div class="col-md-4 text-center pt-3">
				<i class="d-block pb-4 pb-md-3">
					<img src="{{ asset('images/clock.png') }}" srcset="{{ asset('images/clock.png 2x') }}" alt="image description" width="96" height="79">
				</i>
				<div class="text-center pt-3 pt-md-0">
					<h5 class="text-uppercase pb-3">Save time and money</h5>
					<p>Our Business Specialists will form your new business the correct way, saving you time and money by avoiding costly errors. Let us handle your business filings while you focus on growing your business.</p>
				</div>
			</div>
			<div class="col-md-4 text-center pt-3">
				<i class="d-block pb-4 pb-md-3">
					<img src="{{ asset('images/fasttime.png') }}" srcset="{{ asset('images/fasttime.png 2x') }}" alt="image description" width="96" height="79">
				</i>
				<div class="text-center pt-3 pt-md-0">
					<h5 class="text-uppercase pb-3">Fast turnaround time</h5>
					<p>When you place your order through Swyft Filings, we immediately start the process of forming your new business. Our processing times are some of the fastest in the industry. This allows you to get your business up and running Swyftly.</p>
				</div>
			</div>
			<div class="col-md-4 text-center pt-3">
				<i class="d-block pb-4 pb-md-3">
					<img src="{{ asset('images/customerreport.png') }}" srcset="{{ asset('images/customerreport.png 2x') }}" alt="image description" width="96" height="79">
				</i>
				<div class="text-center pt-3 pt-md-0">
					<h5 class="text-uppercase pb-3">Personal customer support</h5>
					<p>Each and every one of our customers is assigned a personal Business Specialist. You have their direct phone number and email. Have questions? Just call your personal Business Specialist. No need to wait in a pool of phone calls.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="business pt-lg-5 pt-4 pt-lg-0">
		<div class="container">
			<div class="headings text-center pb-5 pb-xl-6">
				<h3 class="text-capitalize">Let's talk Business</h3>
				<small>No matter the business type, Swyft Filings can help you form your new company.</small>
			</div>
			<div class="tabs d-flex flex-column flex-md-row row px-3 px-md-0 pt-4 pt-md-2 pb-5 pb-lg-6">
				<div class="col-md-4 px-0 px-md-3 pb-4 pb-md-0">
					<ul class="tabset">
						<li class="text-center text-uppercase mb-2">
							<a href="#tab1" class="d-block p-3 py-md-2 py-lg-3">Limited liability company</a>
						</li>
						<li class="text-center text-uppercase mb-2">
							<a href="#tab2" class="d-block p-3 py-md-2 py-lg-3">C Corporation</a>
						</li>
						<li class="text-center text-uppercase mb-2">
							<a href="#tab3" class="d-block p-3 py-md-2 py-lg-3">S Corporation</a>
						</li>
						<li class="text-center text-uppercase mb-2">
							<a href="#tab4" class="d-block p-3 py-md-2 py-lg-3">Nonprofit</a>
						</li>
					</ul>
				</div>
				<div class="tab-content col-md-8 px-0 px-md-3">
					<div id="tab1">
						<h5 class="text-uppercase pb-4 mb-4 border-bottom">Form a limited liabilty company (llc)</h5>
						<p class="mb-4 pb-1">The Limited Liability Company (LLC) is now one of the most popular business structures among smaller organizations. While allowing business owners to remain free from a great deal of the formalities imposed on other types of businesses, it still provides limited liability protection for its owners (members). LLCs are also eligible for "pass-through" taxation, which means that the company's income taxes are only reflected on each owner's personal tax return, not at the business level. To learn more about forming an LLC, click the link below.</p>
						<a href="#!" class="d-flex justify-content-end text-success">Learn more about forming an LLC <i class="icon ti-angle-double-right"></i></a>
					</div>
					<div id="tab2">
						<h5 class="text-uppercase pb-4 mb-4 border-bottom">Form a c corporation (c corp)</h5>
						<p class="mb-4 pb-1">The C Corporation (C Corp) is what most people think of when they hear the word "corporation". Most large companies are formed under this structure as it offers the most tax related options for business owners. It provides the greatest level of separation between the company and its owners, and allows the company to raise capital through the issuance of publicly traded stock. However, the many formal requirements placed on C Corps prevent the structure from being the ideal choice for many smaller organizations. To learn more about forming an C Corp, click the link below.</p>
						<a href="#!" class="d-flex justify-content-end text-success">Learn more about forming a C Corporation <i class="icon ti-angle-double-right"></i></a>
					</div>
					<div id="tab3">
						<h5 class="text-uppercase pb-4 mb-4 border-bottom">Form a s corporation (s corp)</h5>
						<p class="mb-4 pb-1">The S Corporation (S Corp) structure is similar to the C Corp, with a few notable differences. The most important of these differences is that S Corps are eligible for special pass through taxation status with the IRS. This allows S Corp owners to avoid double taxation on their business income. S Corps must request pass through taxation status, by filing Form 2553 with IRS after successfully incorporating. To learn more about forming an S Corp, click the link below.</p>
						<a href="#!" class="d-flex justify-content-end text-success">Learn more about forming a S Corporation <i class="icon ti-angle-double-right"></i></a>
					</div>
					<div id="tab4">
						<h5 class="text-uppercase pb-4 mb-4 border-bottom">Form a nonprofit</h5>
						<p class="mb-4 pb-1">The Nonprofit corporation is a special type of business structure that exists to provide certain benefits to organizations that have as their main goal service to the public. Much like other formal business types, those who run Nonprofits are provided limited liability protection. To learn more about forming a Nonprofit, click the link below.</p>
						<a href="#!" class="d-flex justify-content-end text-success">Learn more about forming a Nonprofit <i class="icon ti-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="business-name pt-6 pb-5 py-md-5">
		<div class="container d-flex flex-column flex-md-row">
			<div class="search-block col-md-6 pb-3 px-0 pb-lg-4 pb-md-0 pl-md-0 pl-lg-3">
				<div class="position-relative buttoncontainer d-flex align-items-center justify-content-center mb-5 mb-lg-0">
					<a href="#!" class="text-uppercase">Free business name search</a>
				</div>
			</div>
			<div class="col-md-6 px-0 px-sm-3 pl-xl-6 pr-xl-9 px-sm-6 pr-md-0 pl-md-3">
				<form>
					@csrf
					<div class="form-group mr-lg-2">
						<p>Fill out the form below and we'll let you know if your company name is available.</p>
						<input type="text" class="form-control py-4 mb-3 d-block" placeholder="Desired Business Name">
						<select name="custom-select name-search-location" class="form-control py-4 px-3 mb-3 d-block">
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
						<input type="text" class="form-control py-4 mb-3 d-block" placeholder="Your Name">
						<input type="email" class="form-control py-4 mb-3 d-block" placeholder="Your Email">
						<button type="submit" class="btn btn-primary btn-block mt-4 py-3">Get my results</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="support pt-5 pt-lg-5">
		<div class="container pt-2 pt-md-0">
			<div class="headings text-center pb-sm-4">
				<h3 class="text-capitalize">How can we help?</h3>
				<p>Our Business Specialists are standing by. Call us at <a href="tel:&#049;&#056;&#055;&#055;&#055;&#055;&#055;&#048;&#052;&#053;&#048;" class="tel-link">1-877-777-0450</a> <br>or <a href="#!">Live Chat</a> with us for real-time support.</p>
			</div>
			<div class="team d-md-flex justify-content-center align-items-end px-3 pt-3 d-none">
				<div class="w-xl-100 v-md-20">
					<img src="{{ asset('images/support-staff-allen.png') }}" srcset="{{ asset('images/support-staff-allen.png 2x') }}" alt="image description" width="170" height="303">
				</div>
				<div class="w-xl-100 v-md-20">
					<img src="{{ asset('images/support-staff-brandie.png') }}" srcset="{{ asset('images/support-staff-brandie.png 2x') }}" alt="image description" width="174" height="291">
				</div>
				<div class="w-xl-100 v-md-20">
					<img src="{{ asset('images/support-staff-michelle.png') }}" srcset="{{ asset('images/support-staff-michelle.png 2x') }}" alt="image description" width="153" height="289">
				</div>
				<div class="w-xl-100 v-md-20">
					<img src="{{ asset('images/support-staff-paul.png') }}" srcset="{{ asset('images/support-staff-paul.png 2x') }}" alt="image description" width="194" height="292">
				</div>
				<div class="w-xl-100 v-md-20">
					<img src="{{ asset('images/support-staff-sarah.png') }}" srcset="{{ asset('images/support-staff-sarah.png 2x') }}" alt="image description" width="210" height="291">
				</div>
			</div>
		</div>
	</section>
@stop