@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="parallax-section">
		<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/hero-compare-biz-types.jpg') }}">
			<div class="container pt-md-6 pb-md-6 pt-4 pb-4 text-center text-white">
				<h1>Choosing the Right Business Type</h1>
				<p>Compare the important differences of each business structure to decide<br>which one is right for your company</p>
			</div>
		</div>
	</section>
	<section class="compare-section">
		<div class="table-holder">
			<div class="compare-table-holder">
				<ul class="table-company compare-table">
					<li class="head">
						<div class="td col1">
							<h4 class="logo-title">
								<span>Biz</span>Compare<sup>TM</sup>
							</h4>
						</div>
						<div class="td col2"><h4>Llc</h4></div>
						<div class="td col3"><h4>C corp</h4></div>
						<div class="td col4"><h4>S corp</h4></div>
						<div class="td col5"><h4>Dba</h4></div>
						<div class="td col6"><h4>Nonprofit</h4></div>
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
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
						<div class="td col6">
							<p>Nonprofits provide personal asset protection, which shields you from being personally liable for business debts.</p>
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
						<div class="td col6">&nbsp;</div>
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
							<p>The DBA owner may manage the business without restriction.</p>
						</div>
						<div class="td col6">
							<p>Nonprofits are managed by their board of directors following the regulations set forth in their Bylaws.</p>
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
						<div class="td col6">Varies</div>
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
						<div class="td col6">
							<p>Nonprofits have no owners.</p>
						</div>
					</li>
					<li class="body">
						<div class="td col1">
							<span class="title-drop" data-drop="group4">
								<i class="fa fa-plus-square"></i>
								<i class="fa fa-minus-square"></i>
								Business perpetual existence
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
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
							<p>DBAs end upon closure of the company or the death of the owner.</p>
						</div>
						<div class="td col6">
							<p>Nonprofits are entities that survive any change in their board of directors.</p>
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
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
						<div class="td col6">
							<p>After formation, Nonprofits have many ongoing formalities such as writing bylaws, selecting directors, and seeking tax exempt status.</p>
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
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
						<div class="td col6">
							<p>Nonprofits may obtain bank loans, grants, venture capital, and tax-exempt donations. In some states, Nonprofits may sell stock.</p>
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
						<div class="td col6">
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
						<div class="td col6">
							<p>The income of Nonprofits is taxed at the corporate level unless they apply for and are granted tax-exempt status.</p>
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
						<div class="td col6">&nbsp;</div>
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
						<div class="td col6">
							<p>The income of Nonprofits is taxed at the corporate level unless they apply for and are granted tax-exempt status.</p>
						</div>
					</li>
					<li class="body">
						<div class="td col1">
							<span class="title-drop" data-drop="group9">
								<i class="fa fa-plus-square"></i>
								<i class="fa fa-minus-square"></i>
								Tax Exempt
							</span>
						</div>
						<div class="td col2">&nbsp;</div>
						<div class="td col3">&nbsp;</div>
						<div class="td col4">&nbsp;</div>
						<div class="td col5">&nbsp;</div>
						<div class="td col6">&nbsp;</div>
					</li>
					<li class="drop-item" data-drop-group="group9">
						<div class="td col1">&nbsp;</div>
						<div class="td col2">
							<p>LLCs are not eligible for tax-exempt status.</p>
						</div>
						<div class="td col3">
							<p>C Corps are not eligible for tax-exempt status.</p>
						</div>
						<div class="td col4">
							<p>S Corps are not eligible for tax-exempt status.</p>
						</div>
						<div class="td col5">
							<p>DBAs are not eligible for tax-exempt status.</p>
						</div>
						<div class="td col6">
							<p>The income of Nonprofits is taxed at the corporate level unless they apply for and are granted tax-exempt status.</p>
						</div>
					</li>
					<li>
						<div class="td td-head"><strong>State Filing Fees</strong></div>
					</li>
					<li class="body">
						<div class="td col1">
							<span class="title-drop" data-drop="group10">
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
					</li>
					<li class="drop-item" data-drop-group="group10">
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
						<div class="td col6">
							<p>Nonprofits are required to pay formation fees to the state. Fees will vary based on the state of incorporation</p>
						</div>
					</li>
					<li class="body">
						<div class="td col1">
							<span class="title-drop" data-drop="group11">
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
						<div class="td col6">
							<div class="ico-holder">
								<img src="{{ asset('images/ico23.png') }}" srcset="{{ asset('images/ico23.png 2x') }}" alt="image description" width="14" height="13">
							</div>
						</div>
					</li>
					<li class="drop-item" data-drop-group="group11">
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
						<div class="td col6">
							<p>For Nonprofits this varies from state to state.</p>
						</div>
					</li>
					<li>
						<div class="td col1">&nbsp;</div>
						<div class="td col2">
							<div class="btn-holder text-center">
								<a href="#" class="btn btn-green">Get Started</a><br>
								or
								<a href="#" class="text-success font-weight-bold d-block">Learn more</a>
							</div>
						</div>
						<div class="td col3">
							<div class="btn-holder text-center">
								<a href="#" class="btn btn-green">Get Started</a><br>
								or
								<a href="#" class="text-success font-weight-bold d-block">Learn more</a>
							</div>
						</div>
						<div class="td col4">
							<div class="btn-holder text-center">
								<a href="#" class="btn btn-green">Get Started</a><br>
								or
								<a href="#" class="text-success font-weight-bold d-block">Learn more</a>
							</div>
						</div>
						<div class="td col5">
							<div class="btn-holder text-center">
								<a href="#" class="btn btn-green">Get Started</a><br>
								or
								<a href="#" class="text-success font-weight-bold d-block">Learn more</a>
							</div>
						</div>
						<div class="td col6">
							<div class="btn-holder text-center">
								<a href="#" class="btn btn-green">Get Started</a><br>
								or
								<a href="#" class="text-success font-weight-bold d-block">Learn more</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="support pt-5 pt-lg-5">
		<div class="container pt-2 pt-md-0">
			<div class="headings text-center pb-sm-4">
				<h3 class="text-capitalize">How can we help?</h3>
				<p>Our Business Specialists are standing by. Call us at <a href="tel:18777770450" class="text-success">1-877-777-0450</a></p>
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