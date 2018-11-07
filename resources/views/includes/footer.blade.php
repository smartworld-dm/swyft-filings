<div class="container pt-2 w-100">
	<div class="footer-row">
		<div class="row d-block d-md-flex pt-4 pt-md-0">
			<div class="col col-md-6 col-lg-3 pb-4 pb-lg-0 mb-2 mb-md-0 px-md-3 order-md-1 order-lg-1">
				<h6 class="text-uppercase mb-3 d-none d-md-flex">Free business name search</h6>
				<form>
					@csrf
					<div class="form-group mr-md-2">
						<small class="d-inline-block mb-3">Fill out the form below and we'll let you know if your company name is available.</small>
						<input type="text" class="form-control d-block" placeholder="Desired Business Name">
						<select name="name-search-location" class="custom-select form-control d-block">
							<option value="" selected="">BUSINESS LOCATION</option>
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
						<input type="text" class="form-control d-block" placeholder="Your Name">
						<input type="email" class="form-control d-block" placeholder="Your Email">
						<button type="submit" class="btn btn-primary btn-block mt-3 py-2">Get my results</button>
					</div>
				</form>
			</div>
			<div class="col col-md-6 col-lg-3 text-center text-md-left pb-5 pb-lg-0 px-md-3 order-md-3 order-lg-2">
				<h6 class="text-uppercase mb-3">Popular services</h6>
				<ul>
					<li class="mb-2"><a href="#!">LLC (Limited Liability Company)</a></li>
					<li class="mb-2"><a href="#!">S Corporation</a></li>
					<li class="mb-2"><a href="#!">Registered Agent Service</a></li>
					<li class="mb-2"><a href="#!">DBA</a></li>
					<li class="mb-2"><a href="#!">EIN Federal Tax ID</a></li>
				</ul>
			</div>
			<div class="col col-md-6 col-lg-3 text-center text-md-left pb-5 pb-lg-0 px-md-3 order-md-4 order-lg-3">
				<h6 class="text-uppercase mb-3">Learn more</h6>
				<ul>
					<li class="mb-2"><a href="#!">LLC vs Corporations</a></li>
					<li class="mb-2"><a href="#!">Reasons to Get a DBA</a></li>
					<li class="mb-2"><a href="#!">Business Licenses and Permits</a></li>
					<li class="mb-2"><a href="#!">Responsibilities of Registered Agent</a></li>
					<li class="mb-2"><a href="#!">Annual Report and Franchise Tax</a></li>
					<li class="mb-2"><a href="#!">Compare Business Types</a></li>
					<li class="mb-2"><a href="#!">Why It is Important to Incorporate</a></li>
				</ul>
			</div>
			<div class="col col-md-6 col-lg-3 text-center text-md-left pb-5 pb-lg-0 px-md-3 order-md-2 order-lg-4">
				<h6 class="text-uppercase mb-3">Get in touch with us</h6>
				<div class="border-bottom border-top py-2 mb-4 d-flex justify-content-center flex-column flex-sm-row align-items-center flex-lg-column align-items-lg-start">
					<a href="tel:&#049;&#056;&#055;&#055;&#055;&#055;&#055;&#048;&#052;&#053;&#048;" class="tel-link pt-1 pt-lg-0">(877) 777-0450</a>
					<div class="schedule d-xl-flex align-items-center pt-1 pt-lg-0">
						<span class="pr-1 d-none d-lg-block">Reach us</span>
						<dl class="d-flex mb-0 pl-3 pl-lg-0">
							<dt>Monday - Friday</dt>
							<dd class="mb-0 pl-1">9am - 6pm</dd>
						</dl>
					</div>
				</div>
				<div class="contact-us">
					<a class="btn btn-primary text-capitalize text-white" href="!#">Chat with us</a>
				</div>
			</div>
		</div>
		<div class="row justify-content-between align-items-center pb-5 pb-lg-6 flex-column flex-lg-row">
			<div class="col-md-6 d-md-flex justify-content-center justify-content-lg-between align-items-center d-block pb-4 pb-sm-2 pb-lg-0">
				<div class="logo d-none d-lg-block">
					<a href="01-index.html">
						<img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png 2x') }}" alt="full logo text" width="200" height="31">
					</a>
				</div>
				<div class="text-center">
					<img class="mx-xl-2 mx-1" src="{{ asset('images/visa.png') }}" srcset="{{ asset('images/visa.png 2x') }}" alt="image description" width="32" height="10">
					<img class="mx-xl-2 mx-1" src="{{ asset('images/discover-card.png') }}" srcset="{{ asset('images/discover-card.png 2x') }}" alt="image description" width="32" height="20">
					<img class="mx-xl-2 mx-1" src="{{ asset('images/american-express.png') }}" srcset="{{ asset('images/american-express.png 2x') }}" alt="image description" width="32" height="16">
					<img class="mx-xl-2 mx-1" src="{{ asset('images/master-card.png') }}" srcset="{{ asset('images/master-card.png 2x') }}" alt="image description" width="32" height="26">
					<i class="mx-xl-2 mx-1 pf pf-paypal align-middle"></i>
				</div>
			</div>
			<div class="col-md-6 d-flex align-items-center flex-column flex-sm-row justify-content-center">
				<div class="image m-2 my-sm-0 px-xl-2">
					<img src="{{ asset('images/shopperapproved.gif') }}" srcset="{{ asset('images/shopperapproved.gif 2x') }}" alt="image description" width="120" height="40">
				</div>
				<div class="image m-2 my-sm-0 px-xl-2">
					<img src="{{ asset('images/norton-small.png') }}" srcset="{{ asset('images/norton-small.png 2x') }}" alt="image description" width="75" height="41">
				</div>
				<div class="image m-2 my-sm-0 px-xl-2">
					<img src="{{ asset('images/trustpilot-logo-color.png') }}" srcset="{{ asset('images/trustpilot-logo-color.png 2x') }}" alt="image description" width="120" height="15">
				</div>
				<div class="image m-2 my-sm-0 px-xl-2">
					<img src="{{ asset('images/guarantee-logo.png') }}" srcset="{{ asset('images/guarantee-logo.png 2x') }}" alt="image description" width="81" height="88">
				</div>
			</div>
		</div>
		<div class="footer-holder">
			<div class="row py-2 px-3">
				<div class="col-12 col-md-9 d-flex align-items-center justify-content-sm-start justify-content-center px-0">
					<div class="pr-2">
						<small class="copyright">&copy; Copyright 2018 - Swyft Filings, LLC</small>
					</div>
					<ul class="nav-footer d-lg-flex justify-content-center d-none">
						<li class="nav-item">
							<a class="nav-link" href="/legal/terms-of-service">Terms of Service</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="!#">Privacy Policy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="!#">Legal Disclaimer</a>
						</li>
					</ul>
					<ul class="d-flex social-networks">
						<li class="px-1">
							<a class="icon-facebook" href="!#" target="_blank">
								<i>
									<img src="{{ asset('images/facebook.png') }}" srcset="{{ asset('images/facebook.png 2x') }}" alt="image description" width="16" height="16">
								</i>
							</a>
						</li>
						<li class="px-1">
							<a class="icon-twitter" href="!#" target="_blank">
								<i>
									<img src="{{ asset('images/twitter.png') }}" srcset="{{ asset('images/twitter.png 2x') }}" alt="image description" width="16" height="16">
								</i>
							</a>
						</li>
						<li class="px-1">
							<a class="icon-linkedin" href="!#" target="_blank">
								<i>
									<img src="{{ asset('images/linkedin.png') }}" srcset="{{ asset('images/linkedin.png 2x') }}" alt="image description" width="16" height="16">
								</i>
							</a>
						</li>
					</ul>
				</div>
				<ul class="nav-footer d-flex flex-column flex-sm-row justify-content-center justify-content-sm-start d-lg-none py-3 py-sm-0 align-items-center w-100">
					<li class="nav-item">
						<a class="nav-link" href="!#">Terms of Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="!#">Privacy Policy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="!#">Legal Disclaimer</a>
					</li>
				</ul>
			</div>
			<div class="row col-xl-9 col-lg-10 col-12 pl-md-0 pr-lg-4 pl-sm-0 pl-3 pb-3 pb-lg-3 m-0">
				<small>Swyft Filings is a document filing service. We are not a law firm and cannot offer legal advice. The information on our website is for general informational purposes only and is not legal advice. Use of the website is subject to our Terms of Service and Privacy Policy.</small>
			</div>
		</div>
	</div>
</div>