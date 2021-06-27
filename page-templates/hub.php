<?php
/**
 * Template Name: Hub
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
					
					<section class="centered-copy text-center">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
									<h2>How can we help you today?</h2>
									<p>We offer a full set of traditional financial services like checking, savings, credit cards, loans, insurance, and business banking. But unlike the big banks, our responsibility is to you, not the financial industry.</p>
								</div>
							</div>
						</div>
					</section>

					<section class="icons-text six-cols text-center">
						<div class="container">
							
							<div class="row">
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/checking.svg">
										</div>
										<div class="label">Checking</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/piggy-bank.svg">
										</div>
										<div class="label">Savings</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/pie-chart.svg">
										</div>
										<div class="label">Buy<br>A Car</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">									
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/credit.svg">
										</div>
										<div class="label">Renovate<br>Your Home</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/home.svg">
										</div>
										<div class="label">Save<br>More Money</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-2">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/umbrella-icon.svg">
										</div>
										<div class="label">Plan<br>For Retirement</div>
									</div>
								</div>																																								
							</div>
							
						</div>
					</section>
					
					<section class="s2 light-gray-bg img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/bank-go.jpg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>Bank on the Go!</h2>
									<p>We love seeing you at your local SECU Financial Center, but did you know many of your basic services can be done safely from your home?</p>
									
									<ul>
										<li>Set-up Notifications and Reminders for all your accounts</li>
										<li>Schedule recurring payments</li>
										<li>Easily make mobile deposits</li>
										<li>And much more...</li>
									</ul>
									
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Visit The Center</a>
									</div>
									
								</div>
								
							</div>
						</div>
					</section>	

					<section class="s3 white-bg img-text img-left">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/zelle-phone.png" width="399px">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>Send money with Zelle®</h2>
									<p>The world moves fast, and so do you. To go further together, SECU is pleased to introduce a new user-friendly online and mobile banking experience built around your needs.</p>
									
									<ul>
										<li>Cash and Check Deposits</li>
										<li>Withdrawals</li>
										<li>Account Transfers</li>
										<li>Payments for SECU Loans</li>
										<li>And more</li>											
									</ul>
										
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Visit The Center</a>
									</div>
									
								</div>
								
							</div>
						</div>
					</section>													
							
					<section class="s4 recent-news-blogs light-gray-bg">
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