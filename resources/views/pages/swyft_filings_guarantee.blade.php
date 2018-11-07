@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="inner-section pt-0 pb-6">
		<div class="bg-wrap">
			<div class="bg-stretch">
				<img src="{{ asset('images/bg04.jpg" srcset="{{ asset('images/bg04.jpg 2x') }}" alt="" width="4000" height="400">
			</div>
		</div>
		<div class="container">
			<ol class="breadcrumb breadcrumb-second-item text-left font-raleway">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Starting Your Business</a></li>
				<li class="breadcrumb-item active">Our Guarantee</li>
			</ol>
			<div class="row">
				<aside class="col-xl-2 col-lg-3 col-12 mb-lg-0 mb-4">
					<ul class="group-list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Pricing Overview</a></li>
						<li><a href="#">Our 5 Step Process</a></li>
						<li><a href="#">Why Incorporate</a></li>
						<li><a href="#">General FAQs</a></li>
						<li class="active"><a href="#">Our Guarantee</a></li>
					</ul>
				</aside>
				<div class="col-xl-10 col-lg-9 col-12 pl-xl-4 pl-3">
					<div class="process-holder">
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-12 mb-lg-0 mb-4">
								<h4 class="font-lato text-default mb-4">Our 100% Money Back Guarantee</h4>
								<p>Swyft Filings primary goal is to meet the needs of our customers in the most professional and efficient way possible. We want you to be satisfied with our service, so it will be our pleasure to answer any questions you may have or to help you with any filings that may be required to get your business started. Our customer service team is made up of dedicated business representatives with one goal - to meet each client's needs in a friendly, caring, and efficient manner. If we do not meet this goal, we will refund back to you 100% of the Swyft Filings fees that you paid.</p>
								<p>If you feel there was a problem with the service you received, please contact us at <a href="mailto:info@swyftfilings.com" class="text-success font-weight-bold">info@swyftfilings.com</a> or <a href="tel:18777770450" class="text-success font-weight-bold">1-877-777-0450</a>. A customer service representative will be happy to make every effort to resolve the issue to your satisfaction. If the issue should ever involve a filing error made by Swyft Filings, we will be happy to make the needed corrections as quickly as possible at no additional cost to you.</p>
								<p>If for any reason you decide that you want a refund, all such requests must be submitted according to the Swyft Filings Terms of Service. Your refund will be issued in the same form that it was received. <strong>Please note only Swyft Filing fees are refundable; all government, state, and third-party fees involved in your filing services are non-refundable.</strong> We do not take the opportunity to serve you for granted. Thank you for choosing Swyft Filings and allowing us to help you with all of your business filing needs.</p>
							</div>
							<div class="col-xl-4 col-lg-4 col-12">
								<div class="pricing-holder text-center mb-5">
									<h5 class="text-uppercase mb-4">Committed to you</h5>
									<div class="img-holder mb-3">
										<img src="{{ asset('images/guarantee-logo.png') }}" srcset="{{ asset('images/guarantee-logo.png 2x') }}" alt="" width="81" height="88">
									</div>
									<p>If we do not meet this goal, we will refund back to you 100% of the Swyft Filings fees that you paid.</p>
								</div>
								<div class="information-box text-center">
									<h4 class="mb-0">Questions? Call us.</h4>
									<a href="tel:18777770450" class="tel text-success font-weight-bold mb-1">1-877-777-0450</a>
									<div class="btn-holder mb-3">
										<a href="#" class="btn-chat">Chat Now</a>
									</div>
									<small>M - F: 9am - 6pm CST | Se Habla Español</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop