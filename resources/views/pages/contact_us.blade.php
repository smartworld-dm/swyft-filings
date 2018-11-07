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
	<section class="inner-section contact-section pb-8">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-7 col-12 contact-wrap mb-xl-0 mb-lg-0 mb-5">
					<div class="content mb-xl-6 mb-lg-6 mb-5">
						<h5 class="font-weight-bold mb-3">Contact Swyft Filings</h5>
						<p>Swyft Filings is here to help you launch and run your business in anyway that we can. We love helping small and medium sized business owners on a daily basis. Get in touch with us to see how we can help you start or grow your company today.</p>
					</div>
					<div class="content">
						<h5 class="font-weight-bold mb-3">How can we help you?</h5>
						<div class="contact-tabs-form">
							<div class="nav flex-row justify-content-between align-items-center nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active w-50 text-center" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">I’m not a Swyft Filings customer</a>
								<a class="nav-link w-50 text-center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">I’m a Swyft Filings customer</a>
							</div>
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
									<form action="#" class="contact-form">
										@csrf
										<div class="form-group row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="text" class="form-control" placeholder="First name">
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="text" class="form-control" placeholder="Last name">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="email" class="form-control" placeholder="Email address">
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="tel" class="form-control" placeholder="Phone #">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Enter your message details here"></textarea>
										</div>
										<div class="submit-row text-right pt-xl-2 pt-lg-2 pt-md-2 pt-sm-2 pt-3">
											<button class="btn btn-default">Send message</button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
									<form action="#" class="contact-form">
										<div class="form-group row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="text" class="form-control" placeholder="First name">
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="text" class="form-control" placeholder="Last name">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="email" class="form-control" placeholder="Email address">
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-3">
												<input type="text" class="form-control" placeholder="Order ID #">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Enter your message details here"></textarea>
										</div>
										<div class="submit-row text-right pt-xl-2 pt-lg-2 pt-md-2 pt-sm-2 pt-3">
											<button class="btn btn-default">Send message</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5 col-12 pl-xl-5 pl-lg-5 pl-2=3">
					<div class="contact-info">
						<div class="account-inner item-holder">
							<h5 class="font-weight-bold font-open-sans mb-0">Need help with your current account?</h5>
							<p>Visit your <a href="#" class="text-success font-weight-bold">Swyft Filings account <i class="icon ti-angle-double-right align-middle"></i></a> for support</p>
						</div>
						<div class="item-holder">
							<h5 class="font-weight-bold font-open-sans mb-4">Support Contact Info &amp; Hours</h5>
							<ul>
								<li class="d-flex justify-content-between">
									<span class="text-black font-weight-bold">U.S. &amp; Canada</span>
									<a href="tel:8777770450" class="text-black font-weight-bold">(877) 777-0450</a>
								</li>
								<li class="d-flex justify-content-between">
									<span class="text-black font-weight-bold">Monday - Friday</span>
									<span>9am - 6pm CST</span>
								</li>
							</ul>
						</div>
						<div class="item-holder">
							<h5 class="font-weight-bold font-open-sans mb-4">Want to learn more about becoming a Swyft Filings customer?</h5>
							<p>To chat with a Business Specialist, give us a call. We’re available Monday - Friday from 9am to 6pm Central Standard Time.</p>
							<ul class="contact-list">
								<li>
									<span>Email:</span>
									<a href="mailto:info@swyftfilings.com" class="text-blue font-weight-bold">info@swyftfilings.com</a>
								</li>
								<li>
									<span>Phone:</span>
									<a href="tel:18777770450" class="text-black font-weight-bold">1 (877) 777-0450</a>
								</li>
								<li>
									<span>Fax:</span>
									<a href="#" class="text-black font-weight-bold">1 (877) 669-8624</a>
								</li>
							</ul>
						</div>
						<div>
							<h5 class="font-weight-bold font-open-sans mb-4">Want to work with us?</h5>
							<p>Awesome. You can find out more about our <a href="#" class="text-success font-weight-bold">partnerships opportunities here</a> and <a href="#" class="text-success font-weight-bold">press inquiries.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop