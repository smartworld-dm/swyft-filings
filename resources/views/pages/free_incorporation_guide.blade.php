@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<div class="secondary-nav">
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
	<section class="download-section pt-5 pb-6">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
					<h3 class="text-xl-left text-lg-left text-center">Free Download: The Ultimate Guide to Starting Your <br> Business</h3>
					<div class="row mb-5 content">
						<div class="col-xl-4 col-lg-4 col-12 img-holder">
							<img src="{{ asset('images/img03.png') }}" srcset="{{ asset('images/img03.png 2x') }}" alt="" width="242" height="343">
						</div>
						<div class="col-xl-8 col-lg-8 col-12 pl-xl-4 pt-xl-3 pl-lg-4 pt-lg-3 pt-3">
							<p>Starting a new business does not have to be stressful. We understand you may have questions and we hope we have the answers. This comprehensive guide walks you through the process from beginning to end and beyond the mere corporate filing to help your new business thrive.</p>
							<p>Our comprehensive Guide to Starting Your Business includes tips on:</p>
							<ul class="item-list">
								<li>Choosing the right entity in the right state</li>
								<li>What you will need before you file</li>
								<li>What you will need to keep your company in compliance</li>
								<li>The steps to help your new business take off and succeed</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-12 mb-xl- mb-lg-0 mb-4">
					<div class="guide-form-holder">
						<form class="guide-form">
							@csrf
							<p>Enter your information here to receive your free comprehensive guide today.</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email address">
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Phone #">
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary">Download free guide</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<span class="note">Swyft Filings is a document filing service. We are not a law firm and cannot offer legal, tax or accounting advice. The information on our website and made available to you in our guides is for general informational purposes only and is not legal, tax or accounting advice. Use of the website is subject to our Terms of Service and Privacy Policy.</span>
		</div>
	</section>
@stop