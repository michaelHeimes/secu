<?php
/**
 * Template name: Product - Total Checking Rewards
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

// 	get_template_part( 'global-templates/hero' );

?>

<div class="jumbotron">
	<div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/personal-banking-banner.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="inner">
					<h1>Personal<br>Banking</h1>	
				</div>	
			</div>
		</div>
	</div>	
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					
					<div class="container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Personal</a></li>
								<li class="breadcrumb-item"><a href="#">Savings</a></li>
								<li class="breadcrumb-item active" aria-current="page">Share Savings</li>
							</ol>
						</nav>
					</div>
					
					<section class="s1 white-bg product-img-text img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-4">
									<img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" width="236px">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-8">
									<h2 class="h1 primary-color">One Account. <br>All the Rewards.</h2>
									<p>We're making checking simple by converting all checking accounts held by our members into one program, the new SECU Total™ Checking & Rewards. It's an all-in-one checking account with:</p>
									
									<div class="check-list">										
										<ul>
											<li>Set-up Notifications and Reminders for all your accounts</li>
											<li>Schedule recurring payments</li>
											<li>Easily make mobile deposits</li>
											<li>And much more...</li>
										</ul>
									</div>
																			
								</div>
								
							</div>
						</div>
					</section>	
												
							
					<section class="centered-copy light-gray-bg">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
									<h2 class="text-center">Checking that grows with you.</h2>
									<p>As you grow, so do your financial wellness needs.</p>
									<p>That's why SECU Total™ Checking had four different Rewards Levels that reward you based on your account activity and participation–no matter where you are in life. Learn more about each level below and <a href="#">visit or rates page</a> to view our current rates.</p>
								</div>
							</div>
						</div>
						
						<div class="container-fluid levels-container">
							<div class="row">
								<div class="levels col-sm-12">
									<div class="shadow white-bg">
										<div class="inner flex">
											
											<div class="single-level text-center">
													<div class="coins-wrap">
														<img src="<?php echo get_template_directory_uri(); ?>/images/one-coin.svg">
													</div>
													<div class="level-name">
														<h3>Bronze</h3>
														<img class="lev-chev right" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
													</div>
													<p>Everyone starts here</p>
													<p>$25 minimum deposit to open your account</p>
													<img class="lev-chev down" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
											</div>
		
											<div class="single-level text-center">
													<div class="coins-wrap">
														<img src="<?php echo get_template_directory_uri(); ?>/images/two-coins.svg">
													</div>
													<div class="level-name">
														<h3>Silver</h3>
														<img class="lev-chev right" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
													</div>
													<p>10,000+ combined deposit/loan balance</p>
													<div class="or-wrap">OR</div>
													<p>$3500+ deposit into a checking account</p>
													<img class="lev-chev down" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
											</div>
		
											<div class="single-level text-center">
													<div class="coins-wrap">
														<img src="<?php echo get_template_directory_uri(); ?>/images/three-coins.svg">
													</div>
													<div class="level-name">
														<h3>Gold</h3>
														<img class="lev-chev right" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
													</div>
													<p>$50,000+ combined deposit/loan balance</p>
													<div class="or-wrap">OR</div>
													<p>$10,000+ deposit into a checking account</p>
													<img class="lev-chev down" src="<?php echo get_template_directory_uri(); ?>/images/lev-chev.svg">
											</div>
	
											<div class="single-level text-center">
													<div class="coins-wrap">
														<img src="<?php echo get_template_directory_uri(); ?>/images/four-coins.svg">
													</div>
													<div class="level-name">
														<h3>Platinum</h3>
													</div>
													<p>$100,000+ combined deposit/loan balance</p>
													<div class="or-wrap">OR</div>
													<p>$25,000+ deposit into a checking account</p>
											</div>
											
											<div class="detail">
												<div class="inner">
													<p class="text-center">Silver, Gold and Platinum require e-statements and full check direct deposit of $500/month</p>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="levels-table col-sm-12">
									<div class="shadow white-bg">
										<table>
											<tr>
												<th class="label-cell">Rewards</th>
												<th scope="col">Bronze</th>
												<th scope="col">Silver</th>
												<th scope="col">Gold</th>
												<th scope="col">Platinum</th>
											</tr>
											<tr>
												<th scope="row">Competitive Interest Rates</th>
												<td>up to 0.05%*</td>
												<td>up to 0.10%*</td>
												<td>up to 0.15%*</td>
												<td>up to 0.20%*</td>
											</tr>
											<tr>
												<th scope="row">No monthly maintenance fees</th>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
											<tr>
												<th scope="row">One order of free checks per year</th>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
											<tr>
												<th scope="row">Easy virtual banking</th>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>																					
											<tr>
												<th scope="row">50,000+ Free ATMs nationwide</th>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>	
											<tr>
												<th scope="row">Earn interest on 12 Month CDs</th>
												<td></td>
												<td></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
											<tr>
												<th scope="row">More debit cash back</th>
												<td></td>
												<td></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
											<tr>
												<th scope="row">Mortgage closing costs rebates</th>
												<td></td>
												<td></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
											<tr>
												<th scope="row">Bonus credit cars rewards</th>
												<td></td>
												<td></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
												<td><img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.svg"></td>
											</tr>
										</table>
									</div>
								</div>
								
								<div class="btn-wrap col-sm-12 text-center">
									<a class="btn solid solid-blue" href="#">Open an Account</a>
								</div>
									
							</div>
						</div>
					</section>
					
					
					<section class="s3 faq white-bg">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
									<h2>Have questions? We have answers.</h2>
									
									<div class="accordion" id="faq-accordion">
										
										<div class="card">
											<div class="card-header" id="headingOne">
												<h3 class="mb-0">
													<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</button>
												</h3>
											</div>
										
											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion">
												<div class="card-body">You receive a specific rate that corresponds with your Reward Level, which is determined by account activity.</div>
											</div>
										</div>
									
										<div class="card">
											<div class="card-header" id="headingTwo">
												<h3 class="mb-0">
													<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button>
												</h3>
											</div>
											
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion">
												<div class="card-body">Some placeholder content for the second accordion panel. This panel is hidden by default.</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-header" id="headingThree">
												<h3 class="mb-0">
													<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button>
												</h3>
											</div>
											
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion">
												<div class="card-body">And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header" id="headingFour">
												<h3 class="mb-0">
													<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button>
												</h3>
											</div>
											
											<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq-accordion">
												<div class="card-body">And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.</div>
											</div>
										</div>
									
									</div>
									
								</div>
								
								<div class="btn-wrap col-sm-12 text-center">
									<a class="btn solid solid-blue" href="#">View All FAQS</a>
								</div>
								
							</div>
						</div>
					</section>
					
					
					<section class="s4 body-copy white-bg">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-lg-6">
									<h3>Terms & Conditions</h3>
									<p>*APY = Annual Percentage Yield. APYs current as of 03/24/21. You must meet the criteria for each rewards level to receive the APYs and other rewards shown for that level. See current rates page. APY is calculated based on average daily balance and will be a blended rate. Rates and rewards subject to change at any time. Fees may reduce earnings on the account. Membership eligibility required. Only accounts in good standing are eligible to qualify for rewards.</p>
									<p>Rewards level qualifications and benefits vary by level. At the beginning of each month, your account will reset to Bronze level until the monthly requirements are met. Your actual rewards level will be calculated on the last day of the month and can change monthly based on activity and balances.</p>
									<p>You can view your current activity and rewards level, how to reach the next level and your rewards history at any time in online or mobile banking by clicking the “My Rewards” icon, or reviewing your monthly statement.</p>
									<h3>Level Qualifications</h3>
									<p>Balances: You can qualify for rewards levels in two different ways based on your balances with SECU. The higher of the two will determine your rewards level: 1) Combined Deposit/Loan Balances. On the last day of each month, we add up the average daily balances of SECU accounts for which you are the primary or joint owner: deposit accounts (savings, checking, money market, CDs, IRAs) + loan accounts (mortgages, home equity, personal loans and credit cards) + any investment balances that you maintain with our investment program partner; OR 2) Checking Balance. We use the highest balance of any checking account for which you are the primary owner. E-statements & Direct Deposit: Levels Silver and above also require e-statements and full check Direct Deposit of $500 or more per month. Eligible Direct Deposits must be into one or more checking accounts for which you are the primary owner and include recurring payroll, social security and pensions.</p>
									<h3>Bronze: None, everyone starts here.</h3>
									<p><strong>Silver:</strong> $10,000 in combined deposit and loan balances or $3,500 in one checking account + e-statements + full check Direct Deposit of $500 or more/month.</p>
									<p><strong>Gold:</strong> $50,000 in combined deposit and loan balances or $10,000 in one checking account + e-statements + full check Direct Deposit of $500 or more/month.</p>
									<p><strong>Platinum:</strong> $100,000 in combined deposit and loan balances or $25,000 in one checking account + e-statements + full check Direct Deposit of $500 or more/month.</p>
								</div>
								<div class="col-sm-12 col-lg-6">
									<h3>Rewards Qualifications</h3>
									<p><strong>Interest:</strong> See current rates page for balances required to earn interest for each level. Your interest will be calculated as a blended APY. For example: If you are in the Platinum level and have a balance of $50,000, you will receive 0.05% on the first $3,499.99, 0.15% on the portion of your balance between $3,500 and $19,999.99 and 0.20% on the portion of your balance between $20,000 and $50,000. This would result in a blended APY of 0.17%, if you maintain the $50,000 for the entire month.</p>
									<p><strong>Debit Cash Back:</strong> requires 12 or more debit purchases per month, including Point of Sale and monthly subscription payments using your debit card (i.e. bill pay and gym memberships, etc.). Gold: 1% of your first $1,000 in purchases per month (max of $10/month); Platinum: 2% of your first $1,000 in purchases per month (max of $20/month). The cash back will post to your checking account on the last day of the month and will appear as “Debit Card Cash Back – Interest Adjustment” on your statement. Debit cash back is considered interest and will generate a 1099.</p>
									<p><strong>Higher Interest on 12 Month CDs:</strong> Gold and Platinum offer additional interest on 12 Month CDs. See current rates page. Gold and Platinum CDs are based on the previous month’s rewards level and need to be opened at a branch or via mail. Previously opened CDs are not eligible. We may impose a penalty for early withdrawal on CDs.</p>
									<p><strong>Mortgage Closing Costs Rebates:</strong> Based on qualifying for the highest of Gold or Platinum in at least one month within 90 days of the mortgage disbursement date. Purchases and refinanced mortgages qualify. Will be deposited in the share savings account for the primary owner of the mortgage within 90 days of the disbursement date. Rebate may be subject to IRS tax reporting.</p>
									<p><strong>Bonus Credit Card Rewards:</strong> Platinum offers bonus credit card rewards when you make at least 12 credit card purchases per month with a SECU Visa® credit card. Points-eligible cards will receive 1,000 bonus points per month. Cash back cards will receive $10 per month. Bonus rewards will appear in your ScoreCard account in the following month.</p>
									<p><strong>Free checks:</strong> each account (at any level) can order 1 free box of SECU style checks per calendar year.</p>
								</div>								
							</div>
						</div>
					</section>
					
					<section class="s5 light-gray-bg img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">

								<div class="img-wrap col-sm-12 col-md-6">
									<img src="https://secu.local/wp-content/themes/secu/images/pick-account@2x.jpg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>What You Need to Know to Pick a New Checking Account</h2>
									<p>Does your checking account still match your lifestyle?<br>Here's how to find out.</p>
									
									<a class="btn solid-blue" href="#">Read More</a>
									
								</div>
								
							</div>
						</div>
					</section>
					
					<?php get_template_part( 'global-templates/get-started-cta' );?>
		

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();