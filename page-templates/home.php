<?php
/**
 * Template Name: Home Page
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
	<div class="bg d-none d-sm-none d-md-block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-banner.png)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
		
				<h1>Banking For All That You Seek</h1>
				<p>At SECU, we treat you as someone who deserves to feel secure in your decisions and your future.</p>
				<div class="btn-wrap"><a class="btn btn-outline-white btn-lg" href="#" role="button">Learn more</a></div>
		
			</div>
		</div>
	</div>
	
	<img class="d-sm-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/images/home-banner-mobile.png)">
	
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section class="centered-copy text-center">
						<div class="row">
							<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<h2>How can we help you today?</h2>
								<p>We offer a full set of traditional financial services like checking, savings, credit cards, loans, insurance, and business banking. But unlike the big banks, our responsibility is to you, not the financial industry.</p>
							</div>
						</div>
					</section>

					<section class="icons-text six-cols text-center">
						<div class="container">
							
							<div class="row">
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/home.svg">
										</div>
										<div class="label">Buy<br>A Home</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/credit.svg">
										</div>
										<div class="label">Get<br>A Credit Card</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/car.svg">
										</div>
										<div class="label">Buy<br>A Car</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">									
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/coins.svg">
										</div>
										<div class="label">Renovate<br>Your Home</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/piggy-bank.svg">
										</div>
										<div class="label">Save<br>More Money</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/pie-chart.svg">
										</div>
										<div class="label">Plan<br>For Retirement</div>
									</div>
								</div>																																								
							</div>
							
						</div>
					</section>
					
					<section class="centered-copy light-gray-bg">
						<div class="container">
							<div class="row">	
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">				
									<h2 class="text-center">Our Rates</h2>
								</div>
							</div>
						</div>
					</section>
					
					<section class="tabbed-cards light-gray-bg">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									
									<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="home" aria-selected="true">Featured</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="false">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="auto-tab" data-toggle="tab" href="#auto" role="tab" aria-controls="contact" aria-selected="false">Auto</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="savings-tab" data-toggle="tab" href="#savings" role="tab" aria-controls="contact" aria-selected="false">Savings</a>
										</li>
									</ul>
									
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="home-tab">
											<div class="row">
												<div class="tab-card col-sm-12 col-md-6">
													<div class="inner white-bg shadow shadow-card">
														<div class="top">
															<div class="name">CD</div>
															<div class="details">5 Year, $500 Minimum</div>
														</div>
														<div class="bottom">
															<div class="rate">0.70<span>%</span> APY<sup>1</sup></div>
															<div class="link-wrap">
																<a class="blue-link" href="#">View More CD Rates</a>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-card col-sm-12 col-md-6">
													<div class="inner white-bg shadow shadow-card">
														<div class="top">
															<div class="name">Auto</div>
															<div class="details">36 MONTH New Auto Purchase/Refinance</div>
														</div>
														<div class="bottom">
															<div class="rate">2.49<span>%</span> APR<sup>2</sup></div>
															<div class="link-wrap">
																<a class="blue-link" href="#">View More Auto Rates</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="profile-tab">
											Home Tab Content
										</div>
										<div class="tab-pane fade" id="auto" role="tabpanel" aria-labelledby="contact-tab">
											Auto Tab Content
										</div>
										<div class="tab-pane fade" id="savings" role="tabpanel" aria-labelledby="savings-tab">
											Savings Tab Content
										</div>
									</div>
									
									<div class="btn-wrap text-center">
										<a class="btn solid solid-blue" href="#">View All Rates</a>
									</div>
									
									<div class="rate-expiration text-center">Rates current as of February 2, 2021</div>
								
							</div>
						</div>
					</section>	
					

					<section class="img-text img-left pull-img-left">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/handshake.svg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>Visit the SECU<br>Virtual Financial Center</h2>
									<p>We love seeing you at your local SECU Financial Center, but did you know many of your basic services can be done safely from your home?</p>
									
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Visit The Center</a>
									</div>
									
								</div>
								
							</div>
						</div>
					</section>			
					
					<section class="centered-copy">
						<div class="container">
							<div class="row">	
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">				
									<h2 class="text-center">Member Resources</h2>
								</div>
							</div>
						</div>
					</section>
					
					<section class="shadow-cards">
						<div class="container">
							<div class="row">

								<div class="col-sm-12 col-md-6">
									<div class="shadow shadow-card">
										<div class="top">
											<h3 class="primary-color">Drive-up Services</h3>
											<p>Skip the wait and use our drive-up services, available via our Tellers and self-service ATMs!</p>
											
											<ul>
												<li>Cash and Check Deposits</li>
												<li>Withdrawals</li>
												<li>Account Transfers</li>
												<li>Payments for SECU Loans</li>
												<li>And more</li>											
											</ul>
										</div>
										
										<a class="primary-color bold" href="#">Learn More</a>
										
									</div>
								</div>

								<div class="col-sm-12 col-md-6">
									<div class="shadow shadow-card">
										<div class="top">
											<h3>Drive-up Services</h3>
											<p>Skip the wait and use our drive-up services, available via our Tellers and self-service ATMs!</p>
											
											<ul>
												<li>Cash and Check Deposits</li>
												<li>Withdrawals</li>
												<li>Account Transfers</li>
												<li>Payments for SECU Loans</li>
												<li>And more</li>											
											</ul>
										</div>
										
										<a class="primary-color bold" href="#">Learn More</a>
										
									</div>
								</div>
								
								<div class="bottom col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 large-text text-center">
									<p>Find more self-service tools and the latest financial relief information in our Member Recourse Center.</p>
									<a class="btn solid-blue" href="#">Explore Now</a>
								</div>


							</div>
						</div>
					</section>	
					
					
					<section class="light-gray-bg img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">

								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/new-ride@2x.jpg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>Visit the SECU<br>Virtual Financial Center</h2>
									<p>We love seeing you at your local SECU Financial Center, but did you know many of your basic services can be done safely from your home?</p>
									
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Visit The Center</a>
									</div>
									
								</div>
								
							</div>
						</div>
					</section>	
					
					
					<section class="copy-twocols-img">
						<div class="container">
							<div class="direction row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-4">
									<img src="<?php echo get_template_directory_uri(); ?>/images/crab.svg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-8">
									<div class="heading-intro">
										<h2>We're here for whatever you need. Seriously.</h2>
										<p>We show up every day to learn about our members and offer solutions that help them achieve financial well-being. That means connecting in a real way that grows and rewards trust.</p>
									</div>
									<div class="row">
										
										<div class="single-card col-sm-12 col-md-6">
											<h3>Welcome to the SECU family</h3>
											<p>Once you join SECU, you can stay for life (even if you change jobs or move away), so long as you maintain at least a $10 balance in your Share Savings Account</p>
										</div>
										<div class="single-card col-sm-12 col-md-6">
											<h3>We lead with our hearts</h3>
											<p>Credit union employees are consistently trusted to provide better service than banks. Our relationship bankers know the ins and outs of every product and are invested in your financial well-being</p>
										</div>
										<div class="single-card col-sm-12 col-md-6">
											<h3>Seek better</h3>
											<p>Unlike the big banks, when we make money, it comes back to you through lower rates, higher deposit rates, and few and lower fees.</p>
										</div>
										<div class="single-card col-sm-12 col-md-6">
											<h3>Here for you and our community</h3>
											<p>Because SECU is locally owned, you can rely on us to do business and give back in ways that enrich the lives of the people who live and work our community.</p>
										</div>										
									</div>

									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">View More Perks</a>
									</div>
									
								</div>
								
							</div>
						</div>						
					</section>
							
							
					<section class="recent-news-blogs light-gray-bg">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h2 class="text-center">News & Blogs</h2>
								</div>
								
								<div class="blog-card col-sm-12 col-md-6 col-lg-4">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/photo-1.jpg">
										<h3>How CDs Work and How You Can Grow Your Savings</h3>
										<p>If you're looking for predictable returns at rates that tend to exceed those of savings accounts, then it's time to find out what CDs are.</p>
									</a>
								</div>
								<div class="blog-card col-sm-12 col-md-6 col-lg-4">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/photo-2.jpg">
										<h3>What You Need to Know to Pick a New Checking Account</h3>
										<p>Does our checking account still match your lifestyle. Here's how to find out..</p>
									</a>
								</div>
								<div class="blog-card col-sm-12 col-md-6 col-lg-4">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/photo-3.jpg">									
										<h3>How to Use Your Debit Card Cash Back to the Fullest</h3>
										<p>Ever wish you had money to play with? More cash to save? Here's how to make the most out of those extra dollars you earn.</p>
									</a>
								</div>		
								
								<div class="col-sm-12 text-center">
									<a class="btn solid-blue" href="#">View More</a>
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