@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="inner-section pt-0 pb-6">
		<div class="bg-wrap">
			<div class="bg-stretch">
				<img src="{{ asset('images/bg03.jpg') }}" srcset="{{ asset('images/bg03.jpg 2x') }}" alt="" width="4000" height="400">
			</div>
		</div>
		<div class="container">
			<ol class="breadcrumb breadcrumb-second-item text-left font-raleway">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Starting Your Business</a></li>
				<li class="breadcrumb-item active">Our Incorporation Process</li>
			</ol>
			<div class="row">
				<aside class="col-xl-2 col-lg-3 col-12 mb-lg-0 mb-4">
					<ul class="group-list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Pricing Overview</a></li>
						<li class="active"><a href="#">Our 5 Step Process</a></li>
						<li><a href="#">Why Incorporate</a></li>
						<li><a href="#">General FAQs</a></li>
						<li><a href="#">Our Guarantee</a></li>
					</ul>
				</aside>
				<div class="col-xl-10 col-lg-9 col-12 pl-xl-4 pl-3">
					<div class="process-holder">
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-12 mb-lg-0 mb-4">
								<h4 class="font-open-sans text-default font-weight-bold mb-4">The Swyft Filings Incorporation Process</h4>
								<p>Our incorporation service is specifically designed to help you get your company up and running as easily, efficiently, and affordably as possible. With a knowledgeable staff comprised of business incorporation specialists, we are capable of helping with every step of the incorparation process no matter where your business is located or what industry it might be in.</p>
								<p class="font-weight-bold text-title">Here is what to expect when incorporating with Swyft Filings:</p>
								<ul class="incorporating-list ml-xl-4 ml-0 mb-xl-5 mb-3">
									<li>
										<span class="num">1</span>
										<span class="title pl-2">A thorough review of the information you provide.</span>
										<p>While we will take care of the administrative work for you, the incorporation process will require you to provide us with information regarding your new company. Once you provide us with this information, we will carefully review it and ask for any necessary corrections or clarifications before we send it to the state for approval.</p>
									</li>
									<li>
										<span class="num">2</span>
										<span class="title pl-2">An in-depth check of the availability of your business name.</span>
										<p>Your new business will require an official name, and there are certain restrictions placed on what you can name your company. Before we send out your incorporation application documents to the state, we will complete an in-depth name check to verify that the name you provided is available in your state.</p>
									</li>
									<li>
										<span class="num">3</span>
										<span class="title pl-2">Document filing and approval notification.</span>
										<p>After we have received and reviewed all of the information you provide us, we will go through and carefully complete the necessary forms that will be required in order for your business to become successfully incorporated, and send them directly to the state on your behalf. We will immediately inform you of your business’s approval as soon as we receive it from the state.</p>
									</li>
									<li>
										<span class="num">4</span>
										<span class="title pl-2">State approval document forwarding.</span>
										<p>We will immediately inform of your business’s successful incorporation, and we will also mail you the original copies of your approved incorporation documents for your records.</p>
									</li>
									<li>
										<span class="num">5</span>
										<span class="title pl-2">Reliable compliance support.</span>
										<p>Upon successful incorporation, there will be steps you will need to take in order to stay compliant. If you ever have questions regarding these compliance requirements, we will be happy to assist you.</p>
									</li>
								</ul>
								<div class="d-flex align-items-center flex-wrap flex-xl-row flex-column join-holder mb-4 pl-xl-5 pl-0">
									<div class="btn-holder mr-xl-2 mr-lg-0 mb-md-2 mb-xl-0 mb-2 mr-0">
										<a href="#" class="btn btn-primary">
											Incorporate Today
											<i class="ti-angle-right"></i>
										</a>
									</div>
									<span>or call <a href="tel:8777770450" class='text-success font-weight-bold ml-2'>(877) 777-0450</a></span>
								</div>
								<span class="note pl-xl-4 pl-0 text-xl-left text-center d-block">Want to compare the different business types? Try our <a href="#" class="text-success font-weight-bold">Business Comparison Chart</a>.</span>
							</div>
							<div class="col-xl-4 col-lg-4 col-12">
								<div class="pricing-holder text-center mb-5">
									<h5 class="text-uppercase mb-4">Committed to you</h5>
									<div class="img-holder mb-3">
										<img src="{{ asset('images/guarantee-logo.png') }}" srcset="{{ asset('images/guarantee-logo.png 2x') }}" alt="" width="81" height="88">
									</div>
									<p>If you're not completely satisfied with our services, we'll give you a full refund.</p>
								</div>
								<form class="search-form-name px-2">
									<h6 class="text-uppercase text-center font-weight-bold">Free business name search</h6>
									<p class="mb-3">Fill out the form below and we'll let you know if your company name is available.</p>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Desired Business Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Business Location (ex: TX)">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email">
									</div>
									<div class="form-group text-center pt-1">
										<button type="submit" class="btn btn-primary w-100">Get My Results</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop