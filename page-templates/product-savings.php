<?php
/**
 * Template name: Product - Savings
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
	<div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/savings-banner.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="inner">
					<h1>Savings</h1>	
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
							</ol>
						</nav>
					</div>
					
					<section class="white-bg product-img-text img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="sidebar-wrap col-sm-12 col-md-4">
									<div class="sidebar shadow">
										<img src="<?php echo get_template_directory_uri(); ?>/images/crunch.jpg">
										
										<div class="text-wrap">
											<h3 class="display">Crunch The Numbers</h3>
											<p>Use our calculator to see how much your savings can grow.</p>
											
											<div class="link-wrap">
												<a class="blue-link" href="#">Check out the calculator!</a>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<div class="text-wrap col-sm-12 col-md-8">
									<h2 class="display">Reach Your Savings<br>Goals Faster</h2>
									<p>A SECU savings account is a great way to reach your savings goals while enjoying the benefits of SECU membership.</p>
									
									<div class="check-list">										
										<ul>
											<li>Online and Mobile banking</li>
											<li>Digital wallet (Apple Pay, Google Pay, etc.)</li>
											<li>A comprehensive rewards program</li>
										</ul>
									</div>
												
									<p>Open an account today and start building your suite of banking tools.</p>
									<p>It only takes 10 minutes.</p>
									
									<div class="btn-wrap col-sm-12">
										<a class="btn solid solid-blue" href="#">Open an Account</a>
									</div>
																			
								</div>
								
							</div>
						</div>
					</section>	

					<section class="centered-copy light-gray-bg">
						<div class="container">
							<div class="row">					
								<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
									<h2 class="text-center">We Need a Title for this!</h2>
									<p>We need copy for this little intro as well! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae mi viverra, tincidunt velit pharetra, fermentum augue.</p>
								</div>
							</div>
						</div>
					</section>
					
					<section class="light-gray-bg icons-text three-cols">
						<div class="container">
								
							<div class="text-center row">
								<div class="col-sm-6 col-md-3 col-lg-4">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/home.svg">
										</div>
										<h3>Share Savings</h3>
										<p>Our traditional savings account. Earn higher interest than checking with unlimited deposits and withdrawals. $10 minimum deposit.</p>
										<a class="primary-color bold" href="#">Get Started with Share Savings</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-4">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/credit.svg">
										</div>
										<h3>Share Savings</h3>
										<p>Higher interest rates than a traditional savings account and greater flexibility than a CD. Enjoy easy access to funds with greater rates of return.</p>
										<a class="primary-color bold" href="#">Get Started with Money Market</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 col-lg-4">
									<div class="it-card">
										<div class="icon-wrap">
											<img src="<?php echo get_template_directory_uri(); ?>/images/car.svg">
										</div>
										<h3>Share Savings</h3>
										<p>Earn top interest rates on CDs with terms from 3 months to 5 years. Lock in a great rate with a low $500 minimum deposit.</p>
										<a class="primary-color bold" href="#">Learn About CDs</a>
									</div>
								</div>																																	
							</div>
							
						</div>
					</section>								
							</div>
						</div>
					</section>
					
					<section class="img-text img-right pull-img-right">
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
					
					
					<section class="light-gray-bg img-text img-left pull-img-left">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/savings.jpg">
								</div>
								
								<div class="text-wrap col-sm-12 col-md-6">
									<h2>Money market vs. CD:<br>Everything you Need to Know</h2>
									<p>Money market accounts and CDs are types of federally insured savings account that earn interest. But their rates and ease of access differ.</p>
									
									<div class="btn-wrap">
										<a class="btn solid-blue" href="#">Visit The Center</a>
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