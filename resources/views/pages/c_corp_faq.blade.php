@extends('layouts.default')

@section('title', 'Swyft Fillings')

@section('content')
	<section class="hero bg-overlay pt-4 pb-4 text-white">
		<div class="container">
			<h3 class="font-weight-medium mb-0">Frequently Asked Questions</h3>
		</div>
		<div class="bg-stretch">
			<img src="{{ asset('images/img04.jpg') }}" srcset="{{ asset('images/img04.jpg 2x') }}" alt="" width="4000" height="90">
		</div>
	</section>
	<section class="faq-section pb-6">
		<div class="container">
			<ol class="breadcrumb text-left text-uppercase font-raleway">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">C Corporation (C Corp)</a></li>
				<li class="breadcrumb-item active">FAQs</li>
			</ol>
			<h3 class="text-center mb-1">C Corporation FAQs</h3>
			<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								What formal paperwork must be filed when incorporating as a C Corp?
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<p>The application required for incorporating as a C Corporation is called the Articles of Incorporation (also referred to as a Certificate of Incorporation). This document contains basic information about the company, its owners, and its directors. Depending on your state of incorporation, there may also be state-level fees or taxes that must be paid.</p>
							<p>Swyft Filings can take care of the required filings for a C Corporation. This allows you to focus on developing and growing your new company.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Is an attorney required during the C Corp filing process?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<p>An attorney is typically not required when starting a business. A business filing service such as Swyft Filings can help you streamline the formation process, and save you a great deal of time, effort, and money. However, if you are unsure of which business structure may be right for you, or you have questions regarding specific tax or organizational issues, it may be advisable to speak with an attorney or accountant before starting a new business.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								How should I name my C Corp?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<p>Your company name must be unique and not deceptively similar to any other trademarked name or business. It is also required that your name not intentionally misrepresent the products or services you offer. For C Corps, most states require a signifier of your corporate status, such as “Company”, “Corporation”, “Incorporated”, or a relevant abbreviation to be added to your business name. Choosing a name for your C Corp is an important decision so take time to research and select a name that will accurately represent you and your business.</p>
							<p>If you would like Swyft Filings to check if your business name is available for use, we offer a free Name Availability Search. Just give us a call and we will begin this process for you.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How is stock distribution handled by a C Corp?
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body">
							<p>C Corps are unique in that they are able to sell ownership shares to the general public in order to raise capital through the distribution of stock. In order to do so, the company must list in their Articles of Organization the number of shares, with their par value, that will be initially distributed. Once the number of shares has been recognized by the state, the company will be able to distribute the shares. If needed, the par value and number of shares may be changed in the future by filing a share amendment with the state.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								How is stock “par value” determined by a C Corp?
							</button>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
						<div class="card-body">
							<p>The par value is mainly a formality and is typically $.01, $1, or no value.  This figure is determined by the company and may have some minor tax implications. The par value is not the value of the stock issued by the company. For more information or specific questions regarding par value, it is advisable to speak with an accountant. </p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingSix">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								How are C Corps organized from a structural standpoint? 
							</button>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
						<div class="card-body">
							<p>There are three different formal leadership positions that make up a C Corporation, with each having their own role or responsibilities. An individual is able to, and will often, serve in more than one of these positions. They are as follows:</p>
							<span class="text"><strong>Shareholder</strong> – Shareholders are the owners of the corporation and are able to vote in the election of directors and on other major corporate issues. They are not responsible for the day-to-day operations of the company.</span>
							<span class="text"><strong>Director</strong> – Directors are elected by the shareholders and make major business decisions in a manner that will be in the best interest of the company’s investors. They also supervise the company’s officers.</span>
							<span class="text"><strong>Officer</strong> – Officers are responsible for managing the day-to-day operations of the company.</span>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingSeven">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								Where should I establish my new C Corp? 
							</button>
						</h5>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
						<div class="card-body">
							<p>Some of the most popular states in which companies typically choose to incorporate are Nevada, Delaware, and Wyoming.  Many new C Corp owners do not realize that it is possible to incorporate in a state other than the one in which they live or operate.  However, through a process called “foreign qualification”, it is possible and often advisable. </p>
							<p>If your company operates only in a small area, it may be advisable to file within your state.  The main reason for this is that many states require corporations that foreign qualify to pay additional taxes and fees which can be a financial burden for smaller companies.  There are also some logistical issues that are related to foreign qualification that may cause additional expenses.</p>
							<p>If your company is large, has many shareholders, or operates on a large geographical scale, foreign qualification may be the best option. Each state has different tax and filing requirements so it may be advantageous for your company to foreign qualify.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingEight">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								Do C Corps face any publication requirements?
							</button>
						</h5>
					</div>
					<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
						<div class="card-body">
							<p>There are certain states that will require you to publish a notice of business formation in the local newspaper(s) such as Arizona, New York, Nebraska, and Pennsylvania. The requirement can be easily met by using a filing service such as Swyft Filings.</p>
							<p>It should also be noted that the state of New York requires limited liability companies to comply with an unusually strict set of publication requirements. In addition to publishing notices in two papers in the county in which your business is forming, you will also be required to provide proof of this to New York’s Department of State within 120 days of becoming officially recognized as a business. Failing to do so can result in suspension of your right to conduct business in the state.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingNine">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								Do all C Corps need a Registered Agent?
							</button>
						</h5>
					</div>
					<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
						<div class="card-body">
							<p>All formal business entities, including C Corps, are required to have a Registered Agent on file with the state at all times. The agent may be an individual or company with a physical address located in the state of incorporation. Agents must be available at all times during standard business hours (9 a.m. - 5 p.m. Monday – Friday). The role of a Registered Agent is to receive any and all of communications from the government to the business. The agent’s name and address must be disclosed as part of the company’s public record.</p>
							<p>If you are foreign qualifying your business or wish to keep your contact information private, it may be wise to hire a professional Registered Agent service such as Swyft Filings. Our professional Registered Agent service ensures that your legal requirements will be fulfilled and that all communications will be relayed to your company in a timely manner.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTen">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								Where can I find a reliable Registered Agent?
							</button>
						</h5>
					</div>
					<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
						<div class="card-body">
							<p>Swyft Filings offers a professional Registered Agent service as well business filing services. Regardless of the state in which your business is located, we can provide you with Registered Agent services. Swyft Filings provides companies of all types and sizes an affordable solution that will ensure that they remain compliant with all Registered Agent requirements.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingEleven">
						<h5 class="title mb-0">
							<button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
								What are the general steps for incorporating as a C Corp?
							</button>
						</h5>
					</div>
					<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
						<div class="card-body">
							<p>The first step to incorporate as a C Corp is to file your company’s Articles of Incorporation with the state in which you are establishing your business. Once this has been completed, there will be a set of formal compliance processes that your business must conduct. These processes are as follows:</p>
							<ol>
								<li>Hold a documented organizational meeting with your initial board of directors. During this meeting you will need to adopt a written set of by-laws, approve resolutions establishing the company’s initial financial accounts, and appoint officers.</li>
								<li>Distribute all initial stock and document the distributions in an official ledger. This ledger must be continuously updated to reflect all stock transfers.</li>
							</ol>
							<p>There may be some state specific requirements that you must observe during these processes as well. Also, keep in mind that C Corps have many ongoing compliance requirements that will need to be fulfilled on an annual basis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="blue-gradient text-center pb-5">
		<div class="container">
			<h4 class="font-weight-light">Have a question? Call us at <a href="tel:18777770450" class="text-success font-weight-medium">1-877-777-0450</a></h4>
		</div>
	</section>
@stop