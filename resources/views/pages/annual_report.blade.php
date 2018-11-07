@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero annual-report text-white pt-5 pb-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8 col-lg-7 col-12 pr-lg-10 pr-3 mb-lg-0 mb-4">
					<h1 class="mb-3">Annual Report</h1>
					<h6 class="mb-4">Need help filing your annual report to stay in<br> compliance. let us handle the paperwork!</h6>
					<p class="mb-0 font-open-sans">Most states require you to file reports annually confirming your continued existence. They usually consist of your corporate information, ownership information, cap tables and sometimes require sales or revenue information. We have filed thousands of annual reports in each state and can help you take care of your annual report filing, too. We know exactly what information is needed and what to do with it. By answering a few quick questions, we can take care of your annual report so you can get back to business.</p>
				</div>
				<div class="col-xl-4 col-lg-5 col-12 px-lg-5 px-3">
					<div class="get-started-block d-flex flex-column">
						<h4 class="text-uppercase">Get started today</h4>
						<span class="font-open-sans price">
							$99
						</span>
						<span class="text-fees pb-3 mb-4">+ state fees</span>
						<div class="btn-holder mb-3">
							<a href="#" class="btn btn-green">order now</a>
						</div>
						<div class="row d-flex justify-content-between align-items-center">
							<div class="col-xl-8 col-6 pr-0">
								<span class="d-block mb-3 text">Or Call To Order</span>
								<span class="tel text-dark">
									<i class="fa fa-phone" aria-hidden="true"></i>
									1-877-777-0450
								</span>
							</div>
							<div class="col-xl-4 col-6 p-0">
								<div class="img-holder">
									<img src="{{ asset('images/guarantee-logo.png') }}" srcset="{{ asset('images/guarantee-logo.png 2x') }}" alt="" width="73" height="80">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/img05.jpg') }}" srcset="{{ asset('images/img05.jpg 2x') }}" alt="" width="4000" height="470">
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
					<h6>Professional Service</h6>
					<p class="mb-2">Easy going filing with the state, always with the pros!</p>
					<strong class="mr-2">Jaime H</strong>
					<i class="fas fa-check-circle"></i>
					<span>Verified Order</span>
				</div>
			</div>
		</div>
	</section>
	<section class="works-section text-center pt-5 pb-7 pb-lg-8">
		<div class="container">
			<h2 class="font-weight-light">How It Works</h2>
			<p class="mb-6">With a few clicks, stay compliant and get back to work.</p>
			<div class="row about-block">
				<div class="col-md-4 item-block text-center pt-3">
					<i class="d-block pb-4 pb-md-5">
						<img src="{{ asset('images/ico01.png') }}" srcset="{{ asset('images/ico01.png 2x') }}" alt="image description" width="96" height="68">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase font-weight-bold text-info pb-3">Seamless process</h5>
						<p>We have most of the information already so with a few clicks we can take care of your annual report for you.</p>
					</div>
				</div>
				<div class="col-md-4 item-block text-center pt-3">
					<i class="d-block pb-4 pb-md-5">
						<img src="{{ asset('images/ico11.png') }}" srcset="{{ asset('images/ico11.png 2x') }}" alt="image description" width="82" height="68">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase font-weight-bold text-info pb-3">Stress free compliance</h5>
						<p>With timely reminders, we make sure you stay in compliance and that all of your annual report filings are done on time and done correctly.</p>
					</div>
				</div>
				<div class="col-md-4 item-block text-center pt-3">
					<i class="d-block pb-4 pb-md-5">
						<img src="{{ asset('images/ico12.png') }}" srcset="{{ asset('images/ico12.png 2x') }}" alt="image description" width="85" height="68">
					</i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="text-uppercase font-weight-bold text-info pb-3">One Click. One Payment.</h5>
						<p>With our transparent fees, you make one payment and know that the right amount is delivered to the right place at the right time.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="service-section pt-5 pb-4 text-center text-white">
		<div class="container">
			<h2 class="mb-4 font-weight-bold">Why You Should Let Swyft Filings Do Your Annual Report</h2>
			<span class="sub-title font-weight-bold mb-lg-6 mb-5">Our knowledgeable staff has years of experience handling every type of filing for customers of all sizes.<br>Do what you love, let us handle the paperwork‎.</span>
			<div class="row service-holder text-lg-left text-center">
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico07.png') }}" srcset="{{ asset('images/ico07.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Experienced Professionals</h5>
							<p>Swyft Filings has filed thousands of annual reports. We can put all of that expertise and knowledge to work for you so you can get back to focusing on your business.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico08.png') }}" srcset="{{ asset('images/ico08.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Fast &amp; reliable service</h5>
							<p>Through your secure online account, you can complete the process often with a few clicks of the mouse and then let our business professionals take over.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico09.png') }}" srcset="{{ asset('images/ico09.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Avoid the Headaches</h5>
							<p>Each state has slightly different annual report or franchise reporting requirements. Some states only require filings every other year. While the purpose for most states is to update information on your business, some states also require revenue information. Rather than research and figure out exactly what you need, let our professionals handle it for you.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-5 mb-3">
					<div class="row">
						<div class="col-lg-2 mb-lg-0 mb-3">
							<img src="{{ asset('images/ico10.png') }}" srcset="{{ asset('images/ico10.png 2x') }}" alt="" width="55" height="60">
						</div>
						<div class="col-lg-10">
							<h5>Stay in Compliance</h5>
							<p>Messing up these annoying administrative tasks can be the death knell for your company. At best, forgetting to file or filing improperly can result in additional fines and fees. At worst, it can be the reason your business gets shut down.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="inner-section client-reviews text-center">
		<div class="container">
			<h4 class="text-secondary font-weight-bold">We Take Care of Business, Your Business</h4>
			<p class="mb-5">Thousands of customers nationwide rely on Swyft Filings to take care of their business tasks</p>
			<div class="row text-lg-left text-center align-items-center">
				<div class="col-lg-6 mb-lg-0 mb-3">
					<div class="customer-reviews d-flex flex-lg-row flex-column border px-lg-4 py-lg-4 px-3 py-3">
						<div class="img-holder mr-lg-4 mr-0 mb-2">
							<img src="{{ asset('images/img18.png') }}" srcset="{{ asset('images/img18.png 2x') }}" alt="" width="61" height="61">
						</div>
						<div class="content">
							<h5 class="text-secondary font-weight-bold">Very Helpful</h5>
							<p>Did a great job and stayed on top of my order all the way through the process.</p>
							<div class="d-flex align-items-center justify-content-between flex-lg-row flex-column">
								<ul class="stars d-flex mb-lg-0 mb-2">
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
								<span class="verify">
									<strong class="mr-2">Sean</strong>
									<i class="fas fa-check-circle"></i>
									<span>Verified Order</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="customer-reviews d-flex flex-lg-row flex-column border px-lg-4 py-lg-4 px-3 py-3">
						<div class="img-holder mr-lg-4 mr-0 mb-2">
							<img src="{{ asset('images/img18.png') }}" srcset="{{ asset('images/img18.png 2x') }}" alt="" width="61" height="61">
						</div>
						<div class="content">
							<h5 class="text-secondary font-weight-bold">Very Helpful</h5>
							<p>Did a great job and stayed on top of my order all the way through the process.</p>
							<div class="d-flex align-items-center justify-content-between flex-lg-row flex-column">
								<ul class="stars d-flex mb-lg-0 mb-2">
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
								<span class="verify">
									<strong class="mr-2">Sean</strong>
									<i class="fas fa-check-circle"></i>
									<span>Verified Order</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="faq-section faq-holder pt-5 pb-8">
		<div class="container">
			<div class="row mb-5">
				<div class="col-xl-2 col-md-12 text-xl-left text-center">
					<div class="img-holder">
						<img src="{{ asset('images/customerreport.png') }}" srcset="{{ asset('images/customerreport.png 2x') }}" alt="image description" width="120" height="98">
					</div>
				</div>
				<div class="col-xl-10 col-md-12 pt-4 text-xl-left text-center">
					<h4 class="text-info">Free Business Name Search FAQs</h4>
					<p>Still have questions? Call <a class="font-weight-bold text-success" href="tel:877-777-0450">877-777-0450</a> or <a href="#" class="font-weight-bold text-success">Live Chat</a> with us for real-time support</p>
				</div>
			</div>
			<div id="accordion">
				<div class="card border-card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is the annual report?
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							The annual report is a filing that most states require from companies on an annual or other periodic basis that keeps the company information current with the state.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								I am not publicly-traded, do I still need to do an annual report?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							Companies on the stock exchange like NASDAQ and the NYSE do have to file annual reports with the SEC that become public. These are very different and much more comprehensive from the annual statements that have to be filed with the states where you are doing business. While less comprehensive, state annual reports can still be complex and confusing.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								What is included in the annual report?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							The complexity of the annual report varies by state. Generally speaking, you must usually provide updated information regarding location, owners, revenues and employees. Our specialists know exactly what information you will need.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Are the annual reports available to the public?
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body">
							This, too, varies by states. Rarely do the states disclose any financial information provided to them. Some states, however, do disclose ownership or other basic information. If you are concerned about that, you can visit with one of our business specialists who may help you convert your entity to a state where there are less disclosures.
						</div>
					</div>
				</div>
				<div class="card border-card">
					<div class="card-header" id="headingFive">
						<h5 class="mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								What happens if I don’t timely file my annual report?
							</button>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
						<div class="card-body">
							States impose fines and penalties if you fail to file your annual report or file it late. More importantly, many states will suspend or terminate your entity if you fail to make the proper filings.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="support-section blue-gradient text-center pb-5">
		<div class="container">
			<div class="btn-holder mb-4">
				<a href="#" class="btn btn-green">Get started</a>
			</div>
			<h4 class="font-weight-light">We're here to help.<br> Call <a href="tel:18777770450" class="font-open-sans text-success font-weight-medium">1-877-777-0450</a> to speak with a Business Specialist</h4>
		</div>
	</section>
@stop