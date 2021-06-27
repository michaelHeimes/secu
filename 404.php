<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="jumbotron">
	<div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/404-banner.png)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="inner">
					<h1>Well...<br>This Is Awkward.</h1>	
					<p>The page you requested is not available, but as always, you have options.</p>
				</div>	
			</div>
		</div>
	</div>	
</div>

<div class="wrapper" id="error-404-wrapper">

	<div id="content">

		<div class="content-area" id="primary">

			<main class="site-main" id="main" role="main">

				<section class="centered-copy">
					<div class="container">
						<div class="row">	
							<div class="col-sm-12">
								<h2 class="display text-center mb-4">We're Here for Whatever You Need. Seriously.</h2>
							</div>				
							<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
								<p>However, we take security very seriously. Already a member and have questions about your account? Please login and send a message via our Message Center in online banking.</p>
								<p>Not a member, choose from one of the options below.</p>
								
								<div class="btn-wrap">
									<a class="btn solid-blue" href="#">Go To Online Banking</a>
								</div>
								
							</div>
						</div>
					</div>
				</section>
				
				<section class="pb-0">
					<div class="row">	
						<div class="col-sm-12">
							<hr>
						</div>
					</div>
				</section>


				<section class="sidebar-content mb-0">
					<div class="container">
						<div class="row">
							<div class="site-main has-sidebar col-sm-12 col-md-9 col-lg-8">
														
								<div class="search-wrap">
									<h2>Search</h2>
									
									<form class="search" method="get" action="/">
										<input type="text" name="s" placeholder="" class="">
										<input type="hidden" name="" value="">
										<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="search-icon">	</button>
			
									</form>
								</div>
								
								<section class="pt-3 pb-2">
									<div class="row">	
										<div class="col-sm-12">
											<hr>
										</div>
									</div>
								</section>
								
								<div class="helpful-links">
									<div class="row">
										<div class="col-sm-12"><h2>Try one of these helpful links:</h2></div>
									</div>
										
									<div class="row links-wrap">
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">Virtual Financial Center</a></div>
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">ATMs and Locations</a></div>
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">Login to Online Banking</a></div>
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">Frequently Asked Questions</a></div>
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">Rates and Calculators</a></div>
										<div class="col-sm-12 col-md-6"><a class="bold" href="#">Financial Wellness</a></div>
										
									</div>
								</div>
								
								<section class="pt-0 pb-0">
									<div class="row">	
										<div class="col-sm-12">
											<hr>
										</div>
									</div>
								</section>
								
								<div class="icons-text contact-404 pb-0 six-cols text-center">										
									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="it-card">
												<div class="icon-wrap">
													<img src="<?php echo get_template_directory_uri(); ?>/images/lock.svg">
												</div>
												<div class="label">Locked<br>Out?</div>
												<div><a class="primary-color bold" href="#">Forgot Password</a></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="it-card">
												<div class="icon-wrap">
													<img src="<?php echo get_template_directory_uri(); ?>/images/cell.svg">
												</div>
												<div class="label">Customer<br>Service</div>
												<div><a class="primary-color bold" href="#">800-879-7328</a></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="it-card">
												<div class="icon-wrap">
													<img src="<?php echo get_template_directory_uri(); ?>/images/schedule.svg">
												</div>
												<div class="label">Schedule<br>Appointment</div>
												<div><a class="primary-color bold" href="#">Click to Schedule</a></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="it-card">									
												<div class="icon-wrap">
													<img src="<?php echo get_template_directory_uri(); ?>/images/question.svg">
												</div>
												<div class="label">Have a<br>Question</div>
												<div><a class="primary-color bold" href="#">View FAQs</a></div>
											</div>
										</div>																																							
									</div>
								</div>
																
							</div>

							<aside class="sidebar-wrap col-sm-12 col-md-3 col-lg-3 offset-lg-1">
								
								<div class="sidebar-card shadow sidebar-element">
									<img src="<?php echo get_template_directory_uri(); ?>/images/ni-sidebar.jpg">
									
									<div class="text-wrap">
										<div class="sidebar-row">
											<h3 class="display">7.99%<span>APR*</span></h3>
											<p>Lifetime Rate</p>
										</div>
										<div class="sidebar-row">
											<h3 class="display">$0</h3>
											<p>Balance Transfer Fees</p>
										</div>
									</div>	
										
									<div class="btn-wrap text-center">
										<a class="btn solid-blue" href="#">Get Started</a>
									</div>
								</div>
								
							</aside>
						</div>
					</div>
				</section>				
				
				<?php get_template_part( 'global-templates/get-started-cta' );?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
