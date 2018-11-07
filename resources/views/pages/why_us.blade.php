@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero register-inner text-white text-lg-left text-center pt-lg-7 pb-lg-7 pt-5 pb-5">
		<div class="container pl-lg-6 pl-3">
			<h1 class="font-open-sans mb-lg-6 mb-4">Leave the Paperwork<br> to Us.</h1>
			<h6 class="mb-5">You love your business idea. You’ll love Swyft <br> Filings for helping it get off the ground.</h6>
			<div class="btn-holder">
				<a href="#" class="btn btn-green px-lg-5 px-4 py-3">Launch your business today</a>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/hero-why.jpg') }}" srcset="{{ asset('images/hero-why.jpg 2x') }}" alt="" width="4000" height="470">
		</div>
	</section>
	<section class="service-section pt-5 text-center text-white">
		<div class="container">
			<h2 class="h2-title mb-5">Experienced Business Formation Professionals.</h2>
			<div class="row service-holder business-service text-lg-left text-center">
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico07.png') }}" srcset="{{ asset('images/ico07.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Save time and money</h5>
							<p>Your paperwork will be done the correct way, saving you time and money by avoiding costly errors.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico13.png') }}" srcset="{{ asset('images/ico13.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Fast Turnaround Time</h5>
							<p>When you place your order, we start going to work for you. Our processing times are some of the fastest in the industry. This allows you to get your business up and running Swyftly.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico14.png') }}" srcset="{{ asset('images/ico14.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Personal Customer Support</h5>
							<p>You will be assigned a personal Business Specialist and you can contact them directly via phone or email. Have a question – let them know.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico15.png') }}" srcset="{{ asset('images/ico15.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Guaranteed Results</h5>
							<p>We guarantee our results to form your company correctly and Swyftly. If not, we will make it right or return your fees to you.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="visual">
				<img src="{{ asset('images/img17.png') }}" srcset="{{ asset('images/img17.png 2x') }}" alt="" width="800" height="486">
			</div>
		</div>
	</section>
	<section class="business-about-section pt-lg-7 pb-lg-7 pt-5 pb-4 text-center">
		<div class="container">
			<h2 class="text-secondary mb-lg-6 mb-5">Business Paperwork &amp; Compliance Made Easy.</h2>
			<div class="row business-about text-left">
				<div class="col-lg-6 col-12 mb-4">
					<h5 class="font-weight-bold mb-2 font-open-sans">Form the Entity You Need in Your State</h5>
					<p>From your C-Corp to your non-profit, our automated online process allows you to form whatever type of entity you need formed in your state.</p>
				</div>
				<div class="col-lg-6 col-12 mb-4">
					<h5 class="font-weight-bold mb-2 font-open-sans">We don’t just form your company, we support you</h5>
					<p>Even after formation, we continue to support your thriving businesses with a number of additional services and reminders to keep you compliant.</p>
				</div>
				<div class="col-lg-6 col-12 mb-4">
					<h5 class="font-weight-bold mb-2 font-open-sans">A Team of Business Formation Professionals</h5>
					<p>We have helped form tens of thousands of companies and know the ins and outs of each state. We can put that experience to help you.</p>
				</div>
				<div class="col-lg-6 col-12 mb-4">
					<h5 class="font-weight-bold mb-2 font-open-sans">Full Service Customer Support</h5>
					<p>If you have any questions before, during or after formation, our customer service team is ready to help via chat, email or phone.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="pricing-section text-center pt-6 pb-6">
		<div class="container">
			<h3 class="text-secondary font-weight-medium font-open-sans mb-6">Straightforward and Transparent Pricing</h3>
			<div class="row pricing-list">
				<div class="col-lg-3 col-12">
					<div class="img-holder mb-4">
						<img src="{{ asset('images/ico16.png') }}" srcset="{{ asset('images/ico16.png 2x') }}" alt="" width="80" height="80">
					</div>
					<h5 class="text-secondary font-weight-medium mb-3">Affordable Packages</h5>
					<p>Our packages start at $49 + government fees. We have the package that is right for you.</p>
				</div>
				<div class="col-lg-3 col-12">
					<div class="img-holder mb-4">
						<img src="{{ asset('images/ico17.png') }}" srcset="{{ asset('images/ico17.png 2x') }}" alt="" width="80" height="80">
					</div>
					<h5 class="text-secondary font-weight-medium mb-3">Secure Online Account</h5>
					<p>Your documents are delivered to you online and always available in your private, secure online account.</p>
				</div>
				<div class="col-lg-3 col-12">
					<div class="img-holder mb-4">
						<img src="{{ asset('images/ico18.png') }}" srcset="{{ asset('images/ico18.png 2x') }}" alt="" width="80" height="80">
					</div>
					<h5 class="text-secondary font-weight-medium mb-3">D/B/A’s, Non-Profits, LLCs and Corps</h5>
					<p>Whatever your business filing need, we can take care of the paperwork so you can focus on the business you love.</p>
				</div>
				<div class="col-lg-3 col-12">
					<div class="img-holder mb-4">
						<img src="{{ asset('images/ico19.png') }}" srcset="{{ asset('images/ico19.png 2x') }}" alt="" width="80" height="80">
					</div>
					<h5 class="text-secondary font-weight-medium mb-3">Library of Resources</h5>
					<p>Swyft Filings has a library of resources at your disposal to assist you as you start and grow your business and we are adding more every day.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="request-section text-center text-white pt-lg-6 pt-5 pb-0">
		<div class="container">
			<h2 class="font-weight-bold mb-lg-6 mb-4">Trusted, Affordable and “Swyft” Filings of All Types</h2>
			<div class="row request-list text-lg-left text-center mb-lg-6 mb-4">
				<div class="col-lg-6 mb-lg-5 mb-3 px-lg-4 px-3">
					<div class="row">
						<div class="col-lg-2 col-12 mb-lg-0 mb-3 img-holder">
							<img src="{{ asset('images/ico20.png') }}" srcset="{{ asset('images/ico20.png 2x') }}" alt="" width="65" height="65">
						</div>
						<div class="col-lg-10">
							<h5 class='font-weight-bold font-open-sans'>Advanced Security</h5>
							<p>We use the highest encryption standards, and we a secure SSL connection throughout our site for our commitment to customer privacy.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3 px-lg-4 px-3">
					<div class="row">
						<div class="col-lg-2 col-12 mb-lg-0 mb-3 img-holder">
							<img src="{{ asset('images/ico21.png') }}" srcset="{{ asset('images/ico21.png 2x') }}" alt="" width="65" height="65">
						</div>
						<div class="col-lg-10">
							<h5 class='font-weight-bold font-open-sans'>Trusted by Tens of Thousands of Thriving Companies</h5>
							<p>We help file and create thousand of companies each month. Let us help you.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3 px-lg-4 px-3">
					<div class="row">
						<div class="col-lg-3 col-12 mb-lg-0 mb-3 img-holder">
							<img src="{{ asset('images/shopper-approver-lg-white.png') }}" srcset="{{ asset('images/shopper-approver-lg-white.png 2x') }}" alt="" width="100" height="34">
						</div>
						<div class="col-lg-9">
							<h5 class='font-weight-bold font-open-sans'>Tap Our Small Business Network</h5>
							<p>As a Swyft Filings customer, you will have exclusive access to deals on everything from credit, to trademarks, to virtual addresses. We team up with others equally as passionate as us about helping small business thrive.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3 px-lg-4 px-3">
					<div class="row">
						<div class="col-lg-2 col-12 mb-lg-0 mb-3 img-holder">
							<img src="{{ asset('images/ico22.png') }}" srcset="{{ asset('images/ico22.png 2x') }}" alt="" width="65" height="65">
						</div>
						<div class="col-lg-10">
							<h5 class='font-weight-bold font-open-sans'>Secure Online Account</h5>
							<p>Your documents, deadlines and other resources will always be at your fingertips on your secure online private account.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/bg05.jpg') }}" srcset="{{ asset('images/bg05.jpg 2x') }}" alt="" width="4000" height="470">
		</div>
		<div class="inner-holder border-top py-lg-5 py-4">
			<div class="container d-flex flex-lg-row flex-column align-items-center justify-content-center">
				<div class="img-holder px-lg-4 px-0 mb-lg-0 mb-3">
					<img src="{{ asset('images/trustpilot2.png') }}" srcset="{{ asset('images/trustpilot2.png 2x') }}" alt="" width="180" height="31">
				</div>
				<ul class="stars d-flex px-lg-4 px-0 mb-lg-0 mb-3">
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
				<span class="rating px-lg-4 px-0 mb-lg-0 mb-3"><strong>9.2</strong> out of <strong>10</strong></span>
				<div class="btn-holder px-lg-4 px-0">
					<a href="#" class="btn btn-green">Read the reviews</a>
				</div>
			</div>
		</div>
	</section>
@stop