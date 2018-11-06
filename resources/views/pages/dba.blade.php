@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero dba">
		<div class="container container-dba p-0">
			<div class="text-area py-4 py-sm-5 pb-lg-4 col-lg-8 col-xl-7">
				<h1 class="text-white mb-3 mb-lg-4 pt-1 pt-lg-0 text-center text-lg-left font-weight-normal text-shadow-none font-helvetica">Form Your DBA Online <br>in as Few as 10 Minutes</h1>
				<h6 class="text-white text-uppercase pt-1 pt-lg-0 mb-4 text-center text-lg-left">Start your business with confidence. Affordable. Fast. Simple.</h6>
				<ul class="text-white font-helveticapl-3 pb-4 pl-3">
					<li>DBA is an abbreviation for "doing business as."</li>
					<li>If you're a sole proprietor, you need a DBA to register your business name</li>
					<li>We'll prepare and file all required documents to start your DBA</li>
				</ul>
				<div class="get col-xl-9 text-center">
					<a class="get-started d-block text-center text-uppercase text-white p-3 rounded mb-4" href="#!">Get started</a>
					<a class="d-inline-block text-center text-white mb-4" href="#!">Starting at $99 + state filing fees <i class="fas fa-angle-right"></i></a>
				</div>
				<div class="col-xl-9 d-flex align-items-center justify-content-around pb-2 hero-image-list">
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/verisign-logo.png') }}" srcset="{{ asset('images/verisign-logo.png 2x" alt="image description') }}" width="80">
					</div>
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/trustpilot-logo.png') }}" srcset="{{ asset('images/trustpilot-logo.png 2x') }}" alt="image description') }}" width="117">
					</div>
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/shopper-approver-lg-white.png') }}" srcset="{{ asset('images/shopper-approver-lg-white.png 2x') }}" alt="image description" width="100">
					</div>
				</div>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/hero-consultation.jpg') }}" srcset="{{ asset('images/hero-consultation.jpg 2x') }}" alt="" width="4000" height="986">
		</div>
	</section>
	<section class="process pt-5">
		<div class="container container-dba">
			<div class="headings text-center pb-6 mb-2">
				<h2 class="font-lato text-default">Getting Started is Easy</h2>
				<p>Our three step process will have your business up and running <em>Swyftly</em> <sup>TM</sup></p>
			</div>
			<div class="row start-holder block d-flex justify-content-around pb-5">
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2 mb-md-5 mb-5">
					<i class="d-block">
						<img src="{{ asset('images/lulu-building.png') }}" srcset="{{ asset('images/lulu-building.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4 d-none d-lg-block">Tell us about your business</h4>
					<h4 class="d-block d-lg-none">Provide business details</h4>
					<p>We have taken the complexity out of forming your DBA. Our simple online application can be completed in as little as 10 minutes.</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2 mb-md-5 mb-5">
					<i class="d-block">
						<img src="{{ asset('images/lulu-pencil.png') }}" srcset="{{ asset('images/lulu-pencil.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4">We file the paperwork</h4>
					<p>After a comprehensive business name search, we will draft and file your DBA application directly with the Secretary of State or city county.</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2">
					<i class="d-block">
						<img src="{{ asset('images/lulu-documents.png') }}" srcset="{{ asset('images/lulu-documents.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4">Receive your documents</h4>
					<p>Once your DBA has been approved by the state or county, we will mail your completed DBA package directly to you.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section swyft-section border-bottom pt-5 mb-5">
		<div class="container container-dba">
			<div class="headings text-center pb-4">
				<h2 class="text-default">Why Business Owners Choose Swyft Filings</h2>
				<p class="lead">Every day businesses from all over the nation choose Swyft Filings to start their DBA. <br>Here are a just a few of the reasons why so many owners choose us to help start their business.</p>
			</div>
			<div class="columns feature-hoolder d-flex flex-column flex-md-row pb-5">
				<div class="col-md-4 d-flex flex-column align-items-center px-3 pb-2">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-medall"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3 font-weight-medium">Trusted and Experienced</h5>
						<p>Our Business Specialists will form your new DBA the correct way, saving you time and money by avoiding costly errors. Let us handle your business filings while you focus on growing your business.</p>
					</div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center px-3 pb-2 items-holder">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-comments"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3 font-weight-medium">Personal Customer Support</h5>
						<p>Each one of our customers is assigned a personal Business Specialist. Have a question? Just call your personal Business Specialist directly. No need to wait in a pool of phone calls.</p>
					</div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center px-3 pb-2 items-holder">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-reload"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3 font-weight-medium">Fast Turnaround Time</h5>
						<p>When you place your order through Swyft Filings, we can immediately start the process of forming your DBA. Our processing times are some of the fastest in the industry.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="advantages border-bottom pb-2">
		<div class="container container-dba">
			<div class="headings text-center pb-5">
				<h3>Advantages of forming a DBA</h3>
				<small>Your business name is how customers find and recognize you, so a unique <br>DBA name can have a positive impact for your company</small>
			</div>
			<div class="row">
				<div class="col-xl-6 col-md-12 pt-2 pb-5">
					<div class="item pr-3 pl-5">
						<i class="ti-shield"></i>
						<h4 class="mb-3">Increased Credibility</h4>
						<p>A well-chosen name can enhance the credibility of a business, especially for sole proprietors and general partnerships.</p>
					</div>
				</div>
				<div class="col-xl-6 col-md-12 pt-2 pb-5">
					<div class="item pr-3 pl-5">
						<i class="ti-control-shuffle"></i>
						<h4 class="mb-3">Open Financial Accounts</h4>
						<p>Many banks require sole proprietorships and general partnerships to take on a DBA before opening an account.</p>
					</div>
				</div>
				<div class="col-xl-6 col-md-12 pt-2 pb-5">
					<div class="item pr-3 pl-5">
						<i class="ti-files"></i>
						<h4 class="mb-3">Branding Purposes</h4>
						<p>There are numerous ways that a DBA can assist a company's branding efforts such as expanding and growing your business.</p>
					</div>
				</div>
				<div class="col-xl-6 col-md-12 pt-2 pb-5">
					<div class="item pr-3 pl-5">
						<i class="ti-id-badge"></i>
						<h4 class="mb-3">Multiple Names</h4>
						<p>A DBA allows companies to effectively run multiple branding campaigns, or even separate businesses.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="begin border-bottom pt-6 pb-4">
		<div class="container container-dba">
			<div class="headings text-center pb-5">
				<h2 class="mb-3 text-default">Are You Ready to Begin?</h2>
				<p>Launch your DBA today starting at <strong>$99</strong> + state fees. <a href="#!">See detailed pricing <i class="fas fa-angle-right"></i></a></p>
			</div>
			<div class="links text-center pb-5">
				<a class="text-white py-3 px-4" href="#!">Start My DBA Today <i class="pl-1 ti-arrow-circle-right"></i></a>
			</div>
			<div class="row orders-link pt-3 ml-xl-3 ml-0 pb-5">
				<h3 class="text-center col-12 mb-3 mr-3">Included in all DBA Orders</h3>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Verify Company Name Availability</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Preparation of Required Paperwork</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Filing with Appropriate Government Agency</li>
					</ul>
				</div>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Dedicated Business Specialist</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>100% Satisfaction Guarantee</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Online Access to Your DBA Documents</li>
					</ul>
				</div>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Certificate of Approved DBA</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Lifetime Customer Support</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Delivery of DBA Documents</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="start-questions border-bottom pb-5 pt-5">
		<div class="container container-dba">
			<div class="headings text-center pb-4 mb-2">
				<h2 class="text-capitalize pt-1 text-default">Common Questions About Starting a DBA</h2>
				<small>If you have more questions, please give us a call at <a href="tel:&#049;&#056;&#055;&#055;&#055;&#055;&#055;&#048;&#052;&#053;&#048;" class="tel-link">(877) 777-0450</a>. We love to help!</small>
			</div>
			<div class="d-flex row justify-content-center ">
				<div class="col-xl-6 col-lg-12 border-right">
					<ul class="accordion mr-xl-5 mb-5">
						<li class="py-3 my-2">
							<a class="opener" href="#">What benefits does filing a DBA provide?</a>
							<div class="slide pt-4 mt-3">
								<p class="mb-0">There are numerous reasons to file for a DBA. The most common are:</p>
								<p class="pl-3 mb-2"><strong>Increased credibility –</strong> A well-chosen name can enhance the credibility of a business, especially for sole proprietors and general partnerships.</p>
								<p class="pl-3 mb-2"><strong>The ability to open financial accounts – </strong> Many banks require sole proprietorships and general partnerships to take on a DBA before opening an account.</p>
								<p class="pl-3 mb-2"><strong>Branding purposes – </strong>There are numerous ways that a DBA can assist a company's branding efforts. Some of the most common are to integrate a company's name with their online properties (domain names, social media profiles, etc.), or to position themselves differently to multiple demographics.</p>
								<p class="pl-3 mb-0"><strong>Multiple Names – </strong> A DBA allows companies to effectively run multiple branding campaigns, or even separate businesses, under one legal entity. As long as the chosen names are not misleading to consumers, and reflect the company's products or services, there is no limit to the number of DBAs that a business can have.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">Is acquiring a DBA ever mandatory?</a>
							<div class="slide pt-4 mt-3">
								<p class="mb-3 pb-2">A DBA is mandatory any time that an organization wishes to transact business under a name other than their incorporated name.</p>
								<p class="mb-0">While it isn't mandatory for sole proprietorships and general partnerships to acquire DBAs, there are some severe limitations placed on them if they do not have one. Without a DBA, these types of business cannot typically open a bank account with most institutions, and must represent themselves strictly as the owner's personal name(s).</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">How long does the DBA filing process take?</a>
							<div class="slide pt-4 mt-3">
								<p>Swyft Filings DBA service takes approximately 2 weeks to complete from start to finish.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">Is there any way to speed up the DBA filing process?</a>
							<div class="slide pt-4 mt-3">
								<p>Yes. While Swyft Filings cannot control how long it takes for your local jurisdiction to handle your DBA application, we do offer a DBA filing option that relies on the expedited shipping of documents in order to ensure that the process is a fast as possible. If you elect to choose our expedited filing option, the whole process will typically take 1 week to complete from start to finish.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">Are there any publication requirements involved with DBAs?</a>
							<div class="slide pt-4 mt-3">
								<p>Some states require that any business that acquires a DBA run a public notice in a local newspaper. Depending on where you are located, the exact details will vary. Swyft Filings DBA service DOES NOT include the fulfillment of any publications that your local jurisdiction requires.</p>
							</div>
						</li>
					</ul>
					<div class="links mr-xl-5 text-center pb-4">
						<a class="text-white py-2 px-4 font-lato font-weight-bold" href="#!">View All DBA FAQs</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12">
					<div class="compare d-flex position-relative ml-xl-5 p-4">
						<div class="col-xl-3 col-md-3 pt-2 text-xl-right d-none d-sm-block">
							<i class="ti-layers-alt"></i>
						</div>
						<div class="col-xl-9 col-md-9 pt-2 mt-1 text-center">
							<h4 class="text-uppercase mb-3">
								<strong><span>Biz</span>Compare<sup>TM</sup></strong>
							</h4>
							<p class="mb-2">View and compare the different types of business structures to help you understand the benefits of each.</p>
						</div>
						<a class="position-absolute w-100 h-100" href="#!"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="start-dba">
		<div class="container container-dba pt-5">
			<h2 class="pt-2 mb-5 text-center text-default">Ready to Start Your DBA?</h2>
			<div class="row">
				<div class="col-xl-6 border-right pr-xl-6 pr-3 pb-xl-3 pb-5">
					<div class="box pt-5 pb-2">
						<h3 class="text-center mb-4">Let's Get Started</h3>
						<form>
							@csrf
							<div class="form-group mx-xl-5 mx-3 d-flex flex-column">
								<select name="name-search-location" class="custom-select form-control d-block">
									<option value="" selected="">CHOOSE YOUR STATE OF FORMATION</option>
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
								<select class="custom-select">
									<option selected>DBA</option>
									<option value="LLC">LLC</option>
									<option value="C Corp">C Corporation</option>
									<option value="S Corp">S Corporation</option>
									<option value="Nonprofit">Nonprofit</option>
								</select>
								<button type="submit" class="btn btn-primary d-flex align-items-center align-self-end">Next step <i class="ti-arrow-circle-right ml-4"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-xl-6 text-center pl-xl-6 pl-3">
					<h4>Still have questions? We're here to help! Call <a class="text-success font-weight-bold" href="tel:8777770450">(877) 777-0450</a> or <a href="#" class="text-success font-weight-bold" target="_blank">Live Chat</a> with us for real-time support.</h4>
				</div>
			</div>
			<h4 class="text-center m-5">Form your DBA today starting at <strong class="font-open-sans font-weight-bold">$99</strong></h4>
		</div>
			<div class="img-holder">
				<img src="{{ asset('images/support-staff-michelle.png') }}" srcset="{{ asset('images/support-staff-michelle.png 2x') }}" alt="" width="222" height="334">
			</div>
	</section>
@stop