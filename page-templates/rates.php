<?php
/**
 * Template name: Rates
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

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					
					<div class="container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Rates & Calculators</li>
							</ol>
						</nav>
					</div>
					
					<section class="white-bg product-img-text img-text img-right pull-img-right has-sidebar">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="sidebar-wrap col-sm-12 col-md-4">

								</div>
																
								<div class="text-wrap col-sm-12 col-md-8">
									<h2 class="display">Lower Rates. Fewer Fees</h2>
									<p>Unlike the big banks, when we make money, it comes back to you through lower loan rates, higher deposit rates, and fewer and lower fees.</p>
								</div>
								
							</div>
						</div>
					</section>	

					<section class="rates-tabs light-gray-bg">
						<div class="container">
							<div class="row">							
								<div class="col-sm-12">
									
									<div class="rate-heading">
										<div class="container">
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<h2>Checking Rates</h2>
												</div>
												<div class="col-sm-12 col-md-6 text-right">
													<p class="mb-0 gray-text">Rates Current as of: February 2, 2021</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="shadow">
										
										<ul class="nav nav-tabs lev-1 justify-content-center" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="home-tab" data-toggle="tab" href="#checking" role="tab" aria-controls="checking" aria-selected="true">Checking</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="profile-tab" data-toggle="tab" href="#savings-money-market" role="tab" aria-controls="savings-money-market" aria-selected="false">Savings & Money Market</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="cd-tab" data-toggle="tab" href="#cd" role="tab" aria-controls="cd" aria-selected="false">Certificate of Deposit (CD)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="ira-tab" data-toggle="tab" href="#ira" role="tab" aria-controls="ira" aria-selected="false">IRA</a>
											</li>									
											<li class="nav-item">
												<a class="nav-link" id="auto-loans-tab" data-toggle="tab" href="#auto-loans" role="tab" aria-controls="auto-loans" aria-selected="false">Auto Loans</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="personal-loans-tab" data-toggle="tab" href="#personal-loans" role="tab" aria-controls="personal-loans" aria-selected="false">Personal Loans</a>
											</li>
										</ul>
										
										<div class="tab-content lev-1" id="myTabContent">
											<div class="tab-pane fade show active" id="checking" role="tabpanel" aria-labelledby="checking-tab">

												<ul class="nav nav-tabs lev-2 justify-content-center" id="myTab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="home-tab" data-toggle="tab" href="#total-bronze" role="tab" aria-controls="checking" aria-selected="true">SECU Total™ – BRONZE</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="profile-tab" data-toggle="tab" href="#total-silver" role="tab" aria-controls="savings-money-market" aria-selected="false">SECU Total™ – SILVER</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="cd-tab" data-toggle="tab" href="#total-gold" role="tab" aria-controls="cd" aria-selected="false">SECU Total™ – GOLD</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="ira-tab" data-toggle="tab" href="#total-platinum" role="tab" aria-controls="ira" aria-selected="false">SECU Total™ – PLATINUM</a>
													</li>									
													<li class="nav-item">
														<a class="nav-link" id="personal-loans-tab" data-toggle="tab" href="#business-checking" role="tab" aria-controls="personal-loans" aria-selected="false">Business Checking</a>
													</li>
												</ul>

												<div class="tab-content lev-2" id="myTabContent2">
													
													<div class="tab-pane fade show active" id="total-bronze" role="tabpanel" aria-labelledby="total-bronze-tab">


														<div class="container">
															<div class="row">
																<div class="col-12">
																	<p><strong>Platinum Rewards Level:</strong> APY applies to the portion of your balance listed for each tier and will be calculated as a blended rate.*</p>
																</div>
															</div>
														
															<div class="row rate-row">
																<div class="left col">
																	<h3>$5,555 or more</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>up to 0.20%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>
															
															<div class="row rate-row">
																<div class="left col">
																	<h3>$2,500 – $15,555</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>up to 0.15%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>

															<div class="row rate-row">
																<div class="left col">
																	<h3>Less than $2,500</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>0.05%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>															
																														
														</div>



													</div>
													
													<div class="tab-pane fade" id="total-silver" role="tabpanel" aria-labelledby="total-silver-tab">
														<div class="container">
															<div class="row">
																<div class="col-12">
																	Total Silver Content
																</div>
															</div>
														</div>
														
													</div>
													
													<div class="tab-pane fade" id="total-gold" role="tabpanel" aria-labelledby="total-gold-tab">
														
														<div class="container">
															<div class="row">
																<div class="col-12">																												Total Gold Content
																</div>
															</div>
														</div>
														
													</div>
													
													<div class="tab-pane fade" id="total-platinum" role="tabpanel" aria-labelledby="total-platinum-tab">

														<div class="container">
															<div class="row">
																<div class="col-12">
																	<p><strong>Platinum Rewards Level:</strong> APY applies to the portion of your balance listed for each tier and will be calculated as a blended rate.*</p>
																</div>
															</div>
														
															<div class="row rate-row">
																<div class="left col">
																	<h3>$5,555 or more</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>up to 0.20%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>
															
															<div class="row rate-row">
																<div class="left col">
																	<h3>$2,500 – $15,555</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>up to 0.15%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>

															<div class="row rate-row">
																<div class="left col">
																	<h3>Less than $2,500</h3>
																	<p>Balance Requirement</p>
																</div>
																
																<div class="right col col-md-auto">
																	<div class="inner">
																		<h3>0.05%*</h3>
																		<p>APY**</p>		
																	</div>														
																</div>
															</div>															
																														
														</div>

													</div>	
																							
													<div class="tab-pane fade" id="business-checking" role="tabpanel" aria-labelledby="business-checking-tab">
														Business Checking Content
													</div>
												</div>
												

											</div>
											
											<div class="tab-pane fade" id="savings-money-market" role="tabpanel" aria-labelledby="savings-money-tab">
												SMM Tab Content
											</div>
											<div class="tab-pane fade" id="cd" role="tabpanel" aria-labelledby="cd-tab">
												CD Tab Content
											</div>
											<div class="tab-pane fade" id="ira" role="tabpanel" aria-labelledby="ira-tab">
												IRA Tab Content
											</div>
											<div class="tab-pane fade" id="auto-loans" role="tabpanel" aria-labelledby="auto-loans-tab">
												Auto Loans Tab Content
											</div>											
											<div class="tab-pane fade" id="personal-loans" role="tabpanel" aria-labelledby="personal-loans-tab">
												Personal Loans Tab Content
											</div>


										</div><!-- tab-content -->

									</div><!-- Shadow -->

									<div class="btn-wrap text-center">
										<a class="btn solid-blue" href="#">Budgeting Calculators</a>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
												
												<p>**APY = Annual Percentage Yield. *You must meet the criteria for each rewards level to receive the APYs shown for that level. Learn more here. APY is calculated based on average daily balance and will be a blended rate. Rates subject to change at any time. Fees may reduce earnings on the account. Membership eligibility required.</p>
												
												<p>12 Month Gold and 12 Month Platinum CDs are only available to members that have a SECU Total Checking & Rewards account that qualified for the Gold or Platinum rewards level in the previous month and must be opened in a branch or via mail. $500 required to open a Savings Certificate. A penalty may be charged for early withdrawal. Other terms may be available, call 410-487-7328 or 800-879-7328 for details.</p>
												
												<p><strong>Blended rate example:</strong> If you are in the Platinum level and have a balance of $50,000, you will receive 0.05% on the first $3,499.99, 0.15% on the portion of your balance between $3,500 and $19,999.99 and 0.20% on the portion of your balance between $20,000 and $50,000. This would result in a blended APY of 0.17%, if you maintain the $50,000 for the entire month.</p>
												<p><strong>Platinum:</strong> For this level, balances less than $3,500 receive 0.05% APY. Balances between $3,500 and $19,999.99 receive an APY of 0.05% - 0.15%. Balances over $20,000 receive an APY of 0.05% - 0.20%.</p>
												
												<p><strong>Gold:</strong> For this level, balances less than $3,500 receive an APY of 0.05%. Balances between $3,500 and 19,999.99 receive an APY of 0.05% - 0.10%. Balances over $20,000 receive an APY of 0.05% - 0.15%.</p>
												
												<p><strong>Silver:</strong> For this level, balances less than $3,500 receive an APY of 0.05%. Balances over $3,500 receive an APY of 0.05% - 0.10%.</p>

												<p><strong>Bronze:</strong> For this level, balances of $1,000 or more receive an APY of 0.05%.</p>
												
											</div>
										</div>									
									</div>

								</div>
							</div>
						</div>
					</section>
					
					<section class="centered-copy white-bg">
						<div class="container">
							<div class="row">	
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">				
									<h2 class="text-center">Calculators</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id malesuada massa. Vivamus tincidunt tellus at vestibulum lobortis. Sed in risus vulputate, finibus enim ac, porttitor nunc.</p>
								</div>
							</div>
						</div>
					</section>
					
					<section class="tabbed-icons-text white-bg">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">									
									<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="featured-tab" data-toggle="tab" href="#auto" role="tab" aria-controls="auto" aria-selected="true">Auto</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="home-tab" data-toggle="tab" href="#home-equity" role="tab" aria-controls="home-equity" aria-selected="false">Home Equity</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="auto-tab" data-toggle="tab" href="#mortgage" role="tab" aria-controls="contact" aria-selected="false">Mortgage</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="savings-tab" data-toggle="tab" href="#savings" role="tab" aria-controls="contact" aria-selected="false">Savings</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="savings-tab" data-toggle="tab" href="#retirement" role="tab" aria-controls="contact" aria-selected="false">Retirement</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="savings-tab" data-toggle="tab" href="#budgeting" role="tab" aria-controls="contact" aria-selected="false">Budgeting</a>
										</li>																				
									</ul>
									
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="auto" role="tabpanel" aria-labelledby="home-tab">
											<div class="container">
												<div class="row">
													
													<div class="tab-card col-sm-12 col-md-6 col-lg-4">
														<div class="row">
															<div class="left col-auto">
																<img src="<?php echo get_template_directory_uri(); ?>/images/calc.svg">
															</div>
															<div class="right col">
																<p>How much will my vehicle payments be?</p>
															</div>
														</div>
													</div>
													
													<div class="tab-card col-sm-12 col-md-6 col-lg-4">
														<div class="row">
															<div class="left col-auto">
																<img src="<?php echo get_template_directory_uri(); ?>/images/calc.svg">
															</div>
															<div class="right col">
																<p>Which is better: a rebate or special dealer financing?</p>
															</div>
														</div>
													</div>
													
													<div class="tab-card col-sm-12 col-md-6 col-lg-4">
														<div class="row">
															<div class="left col-auto">
																<img src="<?php echo get_template_directory_uri(); ?>/images/calc.svg">
															</div>
															<div class="right col">
																<p>What vehicle can I afford?</p>
															</div>
														</div>
													</div>
													
													<div class="tab-card col-sm-12 col-md-6 col-lg-4">
														<div class="row">
															<div class="left col-auto">
																<img src="<?php echo get_template_directory_uri(); ?>/images/calc.svg">
															</div>
															<div class="right col">
																<p>Calculate which is better:<br>A new or used vehicle.</p>
															</div>
														</div>
													</div>
													
													<div class="tab-card col-sm-12 col-md-6 col-lg-4">
														<div class="row">
															<div class="left col-auto">
																<img src="<?php echo get_template_directory_uri(); ?>/images/calc.svg">
															</div>
															<div class="right col">
																<p>How long should I keep a vehicle?</p>
															</div>
														</div>
													</div>																																																				
													
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="home-equity" role="tabpanel" aria-labelledby="profile-tab">
											<div class="container">
												<div class="row">
													<div class="tab-card col-sm-12">
														Home Tab Content
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="mortgage" role="tabpanel" aria-labelledby="contact-tab">
											<div class="container">
												<div class="row">
													<div class="tab-card col-sm-12">											
														Mortgage Tab Content
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="savings" role="tabpanel" aria-labelledby="savings-tab">
											<div class="container">
												<div class="row">
													<div class="tab-card col-sm-12">											
														Savings Tab Content
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="retirement" role="tabpanel" aria-labelledby="retirement-tab">
											<div class="container">
												<div class="row">
													<div class="tab-card col-sm-12">											
														Retirement Tab Content
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="budgeting" role="tabpanel" aria-labelledby="budgeting-tab">
											<div class="container">
												<div class="row">
													<div class="tab-card col-sm-12">											
														Budgeting Tab Content
													</div>
												</div>
											</div>
										</div>																				
									</div>
								
							</div>
						</div>
					</section>	

					
					
					
					
					
					
					<section class="light-gray-bg img-text img-left pull-img-left">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/rates.jpg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>How to Use Your Debit Card Cash Back to the Fullest</h2>
									<p>Ever wish you had more money to play with? More cash to save? Here's how to make the most out of those extra dollars you earn.</p>
									
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Read More</a>
									</div>
									
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