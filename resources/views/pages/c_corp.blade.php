@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero dba second-bg">
		<div class="container container-dba p-0">
			<div class="text-area py-4 py-sm-5 pb-lg-4 col-lg-8 col-xl-7">
				<h1 class="text-white mb-3 mb-lg-4 pt-1 pt-lg-0 text-center text-lg-left text-shadow-none font-helvetica font-weight-normal">Form Your C Corporation <br> in as little as 10 Minutes</h1>
				<ul class="text-white font-helvetica pl-3 pb-4">
					<li>Minimize your personal liability and shield your personal assets</li>
					<li>We'll prepare and file all required documents with the Secretary of State</li>
				</ul>
				<div class="get start-select-holder col-xl-8 mb-3">
					<select name="custom-select name-search-location" class="form-control py-4 px-3 mb-3 d-block">
						<option value="" selected="">Choose your state of formation</option>
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
				<div class="get col-xl-8 text-center">
					<a class="get-started d-block text-center text-uppercase text-white rounded mb-4" href="#!">Get started</a>
					<a class="d-inline-block text-center text-white mb-4 text-shadow" href="#!">Starting at $49 + state filing fees <i class="fas fa-angle-right"></i></a>
				</div>
				<div class="col-xl-8 d-flex align-items-center justify-content-around pb-2 hero-image-list pl-md-0 pl-3">
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/verisign-logo.png') }}" srcset="{{ asset('images/verisign-logo.png 2x') }}" alt="image description" width="80">
					</div>
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/trustpilot-logo.png') }}" srcset="{{ asset('images/trustpilot-logo.png 2x') }}" alt="image description" width="117">
					</div>
					<div class="img pl-xl-0 pl-2 pr-xl-0 pr-2">
						<img src="{{ asset('images/shopper-approver-lg-white.png') }}" srcset="{{ asset('images/shopper-approver-lg-white.png 2x') }}" alt="image description" width="100">
					</div>
				</div>
			</div>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/img01.jpg') }}" srcset="{{ asset('images/img01.jpg 2x') }}" alt="" width="1920" height="495">
		</div>
	</section>
	<section class="process pt-5">
		<div class="container container-dba">
			<div class="headings text-center mb-6">
				<h2 class="font-lato text-default">Getting Started is Easy</h2>
				<p>Our three step process will have your business up and running <em>Swyftly</em> <sup>TM</sup></p>
			</div>
			<div class="row start-holder block d-flex justify-content-around pb-5">
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2 mb-md-0 mb-5">
					<i class="d-block">
						<img src="{{ asset('images/lulu-building.png') }}" srcset="{{ asset('images/lulu-building.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4 font-weight-light  d-none d-lg-block">Tell us about your business</h4>
					<h4 class="d-block d-lg-none">Provide business details</h4>
					<p>We have taken the complexity out of forming your DBA. Our simple online application can be completed in as little as 10 minutes.</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2 mb-md-0 mb-5">
					<i class="d-block">
						<img src="{{ asset('images/lulu-pencil.png') }}" srcset="{{ asset('images/lulu-pencil.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4 font-weight-light ">We file the paperwork</h4>
					<p>After a comprehensive business name search, we will draft and file your DBA application directly with the Secretary of State or city county.</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 text-center pb-2">
					<i class="d-block">
						<img src="{{ asset('images/lulu-documents.png') }}" srcset="{{ asset('images/lulu-documents.png 2x') }}" alt="image description" width="80" height="80">
					</i>
					<h4 class="mb-4 font-weight-light ">Receive your documents</h4>
					<p>Once your DBA has been approved by the state or county, we will mail your completed DBA package directly to you.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section swyft-section border-bottom pt-5 pb-5">
		<div class="container container-dba">
			<div class="headings head-text-inner text-center pb-4">
				<h2 class="font-lato text-default h2-text">Why Business Owners Choose Swyft Filings</h2>
				<p>Every day businesses from all over the nation choose Swyft Filings to start their DBA. <br>Here are a just a few of the reasons why so many owners choose us to help start their business.</p>
			</div>
			<div class="columns feature-hoolder d-flex flex-column flex-md-row">
				<div class="col-md-4 d-flex flex-column align-items-center px-3 mb-md-0 mb-4">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-medall"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3">Trusted and Experienced</h5>
						<p>Our Business Specialists will form your new DBA the correct way, saving you time and money by avoiding costly errors. Let us handle your business filings while you focus on growing your business.</p>
					</div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center px-3 mb-md-0 mb-4 items-holder">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-comments"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3">Personal Customer Support</h5>
						<p>Each one of our customers is assigned a personal Business Specialist. Have a question? Just call your personal Business Specialist directly. No need to wait in a pool of phone calls.</p>
					</div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center px-3 items-holder">
					<i class="d-flex justify-content-center align-items-center mb-4 icon-feature ti-reload"></i>
					<div class="text-center pt-3 pt-md-0">
						<h5 class="pb-3">Fast Turnaround Time</h5>
						<p>When you place your order through Swyft Filings, we can immediately start the process of forming your DBA. Our processing times are some of the fastest in the industry.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="business-section text-center">
		<div class="container">
			<h2 class="text-default">Choose the Right Business Type</h2>
			<p>Compare the important differences of each business structure to decide <br> which one is right for your company.</p>
			<div class="row">
				<div class="col-xl-4 col-12 mb-xl-0 mb-md-5 mb-0 text-left pl-md-0 pl-3">
					<div class="content">
						<h4>Advantages of forming a C Corp</h4>
						<p>A C Corp is the only type of organization that can "go public" and sell an unlimited number of ownership shares. They do typically get taxed at a higher rate due to taxes being imposed at both a personal and corporate level, however having access to more capital, higher revenue potential, and ultimately profits, often offsets this.</p>
					</div>
					<h4 class="mb-3">Why choose a C Corp?</h4>
					<ul class="corp-list">
						<li>
							<i class="icon ti-shield"></i>
							<span>Personal asset protection</span>
						</li>
						<li>
							<i class="icon ti-stats-up"></i>
							<span>Ability to raise capital</span>
						</li>
						<li>
							<i class="icon ti-infinite"></i>
							<span>Unlimited owners</span>
						</li>
						<li>
							<i class="icon ti-receipt"></i>
							<span>Option to sell shares</span>
						</li>
					</ul>
					<span class="popover-button font-open-sans">
						Plus our
						<button type="button" class="text-success popover-hover" data-container="body" data-toggle="popover" data-placement="bottom" data-content="If you are not 100% satisfied for any reason with any of our services, we will refund you 100% of our service fees, no questions asked.">
							<i class="fa fa-check-circle-o"></i>
							100% Satisfaction Guarantee
						</button>
					</span>
				</div>
				<div class="col-xl-8 col-12">
					<ul class="table-company">
						<li class="head">
							<div class="td col1">&nbsp;</div>
							<div class="td col2"><h4>Llc</h4></div>
							<div class="td col3"><h4>C corp</h4></div>
							<div class="td col4"><h4>S corp</h4></div>
							<div class="td col5"><h4>Dba</h4></div>
						</li>
						<li>
							<div class="td td-head"><strong>Protection</strong></div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group1">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Limited liability protection
								</span>
							</div>
							<div class="td col2">
								<span class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</span>
							</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group1">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>LLCs provide personal asset protection, which shields you from being personally liable for business debts.</p>
							</div>
							<div class="td col3">
								<p>C Corps provide personal asset protection, which shields you from being personally liable for business debts.</p>
							</div>
							<div class="td col4">
								<p>S Corps provide personal asset protection, which shields you from being personally liable for business debts.</p>
							</div>
							<div class="td col5">
								<p>Owners have no personal asset protection, which makes them personally liable for business debts.</p>
							</div>
						</li>
						<li>
							<div class="td td-head"><strong>Managing Your Business</strong></div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group2">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Flexibility in management
								</span>
							</div>
							<div class="td col2">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col3">&nbsp;</div>
							<div class="td col4">&nbsp;</div>
							<div class="td col5">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
						</li>
						<li class="drop-item" data-drop-group="group2">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>LLCs must be member or manager managed according to the terms of the operating agreement. Member managed means the owners of the company manage the company. Manager-managed means the members (or owners) elect one or more managers to manage the company.</p>
							</div>
							<div class="td col3">
								<p>C Corps are required to have shareholder elected directors who oversee and elect officers to run the day-to-day operations of the company. The business owner(s) can be the shareholder(s), the director(s) and officer(s).</p>
							</div>
							<div class="td col4">
								<p>S Corps are required to have shareholder elected directors who oversee and elect officers to run the day-to-day operations of the company. The business owner(s) can be the shareholder(s), the director(s) and officer(s). </p>
							</div>
							<div class="td col5">
								<p>The DBA owner may manage the business without restriction. Nonprofits are managed by their board of directors following the regulations set forth in their Bylaws.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group3">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Ease of ownership changes
								</span>
							</div>
							<div class="td col2">Varies</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group3">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>Changes in ownership of an LLC are dependent on the terms of the operating agreement.</p>
							</div>
							<div class="td col3">
								<p>Ownership changes in a C Corp are easily made through the sell of stock to new or existing shareholders.</p>
							</div>
							<div class="td col4">
								<p>Ownership changes in an S Corp are easily made through the sell of stock to new or existing shareholders.</p>
							</div>
							<div class="td col5">
								<p>DBAs cannot make ownership changes.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group4">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Perpetual existence
								</span>
							</div>
							<div class="td col2">Varies</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group4">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>The life of the LLC is dependent of the terms of the operating agreement. Its existence may be short term or perpetual that survive the death or transfer of the membership interests of the original founders.</p>
							</div>
							<div class="td col3">
								<p>C Corps are separate entities that survive the death or transfer of stock of the owners and/or major shareholders.</p>
							</div>
							<div class="td col4">
								<p>S Corps are separate entities that survive the death or transfer of stock of the owners and/or major shareholders.</p>
							</div>
							<div class="td col5">
								<p>DBAs end upon closure of the company or the death of the owner. Nonprofits are entities that survive any change in their board of directors.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group5">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Ongoing formalities
								</span>
							</div>
							<div class="td col2">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group5">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>Depending on the state of incorporation, an LLC may be required to file an annual report and/or pay franchise fees.</p>
							</div>
							<div class="td col3">
								<p>After formation, C Corps have many ongoing formalities such as writing bylaws, selecting directors, holding initial and annual shareholder meetings, and issuing stock.</p>
							</div>
							<div class="td col4">
								<p>After formation, S Corps have many ongoing formalities such as writing bylaws, selecting directors, holding initial and annual shareholder meetings, and issuing stock.</p>
							</div>
							<div class="td col5">
								<p>There are no ongoing corporate formalities.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group6">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Ability to raise capital
								</span>
							</div>
							<div class="td col2">Varies</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group6">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>LLCs are not allowed to sell stock but may be able to raise capital via bank loans, from its members and various other avenues. Any equity to sales to third parties needs to be done in compliance with SEC regulations.</p>
							</div>
							<div class="td col3">
								<p>C Corps may issue many types of stocks, which may be sold to an unlimited number of shareholders. Any equity sales to third parties needs to be done in compliance with SEC regulations.</p>
							</div>
							<div class="td col4">
								<p>S Corps may issue one type of stock, which may be sold to a maximum of 100 shareholders. Any equity sales to third parties needs to be done in compliance with SEC regulations.</p>
							</div>
							<div class="td col5">
								<p>DBAs are not allowed to sell stock but may be able to obtain bank loans.</p>
							</div>
						</li>
						<li>
							<div class="td td-head"><strong>Tax</strong></div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group7">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Pass-through taxation
								</span>
							</div>
							<div class="td col2">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col3">&nbsp;</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
						</li>
						<li class="drop-item" data-drop-group="group7">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>	LLCs are not taxed at the corporate level. Instead, all profit and losses are reported with the personal income taxes of each member.</p>
							</div>
							<div class="td col3">
								<p>The income of the C Corp is taxed at the corporate level and then again at the shareholder level.</p>
							</div>
							<div class="td col4">
								<p>S Corps are not taxed at the corporate level. Instead, all profit and losses are reported with the personal income taxes of each shareholder (owner).</p>
							</div>
							<div class="td col5">
								<p>DBAs are not taxed at the company level. All profit and losses are reported on the personal income tax return of the owner.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group8">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Double taxation
								</span>
							</div>
							<div class="td col2">&nbsp;</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">&nbsp;</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group8">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>LLCs are not taxed at the corporate level.</p>
							</div>
							<div class="td col3">
								<p>The income of the C Corp is taxed at the corporate level and then again at the shareholder level.</p>
							</div>
							<div class="td col4">
								<p>S Corps are not taxed at the corporate level.</p>
							</div>
							<div class="td col5">
								<p>DBAs are not taxed at the corporate level.</p>
							</div>
						</li>
						<li>
							<div class="td td-head"><strong>State Filing Fees</strong></div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group9">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									State formation fees
								</span>
							</div>
							<div class="td col2">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group9">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>LLCs are required to pay formation fees to the state. Fees will vary based on the state of incorporation.</p>
							</div>
							<div class="td col3">
								<p>C Corps are required to pay formation fees to the state. Fees will vary based on the state of incorporation.</p>
							</div>
							<div class="td col4">
								<p>S Corps are required to pay formation fees to the state. Fees will vary based on the state of incorporation.</p>
							</div>
							<div class="td col5">
								<p>There are required filing fees for DBAs. Fees will vary based on the county and state in which the DBA is filed.</p>
							</div>
						</li>
						<li class="body">
							<div class="td col1">
								<span class="title-drop" data-drop="group10">
									<i class="fa fa-plus-square"></i>
									<i class="fa fa-minus-square"></i>
									Ongoing compliance fees
								</span>
							</div>
							<div class="td col2">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col3">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col4">
								<div class="ico-holder">
									<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
								</div>
							</div>
							<div class="td col5">&nbsp;</div>
						</li>
						<li class="drop-item" data-drop-group="group10">
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<p>Depending on the state of incorporation, reports and fees may be required.</p>
							</div>
							<div class="td col3">
								<p>An annual report and franchise fees are generally due each year along with other reports and fees, which varies depending on the state of incorporation.</p>
							</div>
							<div class="td col4">
								<p>An annual report and franchise fees are generally due each year along with other reports and fees, which varies depending on the state of incorporation.</p>
							</div>
							<div class="td col5">
								<p>There are no ongoing compliance fees.</p>
							</div>
						</li>
						<li>
							<div class="td col1">&nbsp;</div>
							<div class="td col2">
								<div class="btn-holder">
									<a href="#" class="btn btn-green">Get Started</a>
								</div>
							</div>
							<div class="td col3">
								<div class="btn-holder">
									<a href="#" class="btn btn-green">Get Started</a>
								</div>
							</div>
							<div class="td col4">
								<div class="btn-holder">
									<a href="#" class="btn btn-green">Get Started</a>
								</div>
							</div>
							<div class="td col5">
								<div class="btn-holder">
									<a href="#" class="btn btn-green">Get Started</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="begin border-bottom pt-6 pb-4">
		<div class="container container-dba">
			<div class="headings text-center pb-5">
				<h2 class="text-default mb-3">Are You Ready to Begin?</h2>
				<p class="mb-0">Launch your DBA today starting at <strong>$49</strong> + state fees. <a href="#!" class="font-weight-medium">See detailed pricing <i class="fas fa-angle-right"></i></a></p>
				<p>We also offer a 3-Easy Payment Plan to help get your business up and running quickly.</p>
			</div>
			<div class="links text-center pb-5">
				<a class="text-white py-3 px-4" href="#!"> Start My Corporation Today<i class="pl-2 ti-arrow-circle-right"></i></a>
			</div>
			<div class="row orders-link pt-3 ml-xl-3 ml-0 pb-5">
				<h3 class="text-center col-12 mb-3 mr-3">Included in all of our packages</h3>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Verify Company Name Availability</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Preparation of Articles of Organization</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Document Filing with Secretary of State</li>
					</ul>
				</div>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Dedicated Business Specialist</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>100% Satisfaction Guarantee</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Online Access to Your Corp Documents</li>
					</ul>
				</div>
				<div class="col-xl-4 col-lg-4">
					<ul class="pl-xl-3 pl-0 ml-0 ml-xl-1">
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Certificate of Incorporation</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Lifetime Customer Support</li>
						<li class="d-flex align-items-baseline"><i class="fas fa-check pr-2"></i>Delivery of Documents</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="start-questions border-bottom pb-5 pt-5">
		<div class="container container-dba">
			<div class="headings text-center pb-4 mb-2">
				<h2 class="text-default pt-1">Common Questions About Starting a C Corporation</h2>
				<small>If you have more questions, please give us a call at <a href="tel:8777770454" class="tel-link">(877) 777-0454</a>. We love to help!</small>
			</div>
			<div class="d-flex row justify-content-center ">
				<div class="col-xl-6 col-lg-12 border-right">
					<ul class="accordion mr-xl-5 mb-5">
						<li class="py-3 my-2">
							<a class="opener" href="#">What are the primary advantages of a C Corporation?</a>
							<div class="slide pt-4 mt-3">
								<p class="mb-0">The C Corporation is the oldest and one of the most common business structures, and is typically what comes to mind when the average person hears the word "corporation". It provides the greatest level of separation and protection between the company and its owners, and allows the company to raise capital through the issuance of publicly traded stock.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">Are there any restrictions on who can file to form a C Corporation?</a>
							<div class="slide pt-4 mt-3">
								<p class="mb-3 pb-2">One of the C Corporation's greatest strengths as a structure is that it typically has no requirements regarding who can become part of its ownership. However, a few states do require that an individual be at least 18 years of age to officially become an owner.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">What are the tax implications of a C Corporation?</a>
							<div class="slide pt-4 mt-3">
								<p>C Corporations and their owners are taxed separately from one another, which results in "double taxation". This means that the corporation will be taxed on its profits and then each individual owner will be taxed again on the income distributed to them at a personal level. Filing as an S corp can help business owners avoid this, but will also open them up to paying self-employment taxes.</p>
							</div>
						</li>
						<li class="py-3 my-2">
							<a class="opener" href="#">Are there a required number of individuals needed to form a C Corporation?</a>
							<div class="slide pt-4 mt-3">
								<p>Most states only require one director in order to start a C Corporation. However, some states impose a minimum number based on the number of shareholders the company has. This required number is typically never lower than three and there is no maximum limit.</p>
							</div>
						</li>
					</ul>
					<div class="links mr-xl-5 text-center pb-4">
						<a class="text-white py-2 px-4" href="#!"> View All C Corporation FAQs </a>
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
			<h2 class="text-default pt-2 mb-5 text-center">Ready to Incorporate Your Business?</h2>
			<div class="row">
				<div class="col-xl-6 border-right pr-xl-6 pr-3 pb-xl-3 pb-5">
					<div class="box pt-5 pb-2">
						<h3 class="text-center mb-4">Let's Get Started</h3>
						<form>
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
					<h4 class="font-weight-light">Still have questions? We're here to help! Call <a class="text-success font-weight-bold" href="tel:8777770450">(877) 777-0450</a> or <a href="#" class="text-success font-weight-bold" target="_blank">Live Chat</a> with us for real-time support.</h4>
				</div>
			</div>
			<h4 class="text-center m-5 font-weight-light">Incorporate your business starting at <strong class="font-open-sans font-weight-bold">$49</strong></h4>
		</div>
			<div class="img-holder">
				<img src="{{ asset('images/support-staff-michelle.png') }}" srcset="{{ asset('images/support-staff-michelle.png 2x') }}" alt="" width="180" height="334">
			</div>
	</section>
@stop