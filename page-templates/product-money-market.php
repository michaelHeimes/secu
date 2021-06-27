<?php
/**
 * Template name: Product - Money Market
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
	<div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/The-Directional.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="inner">
					<h1>Money Market</h1>	
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
								<li class="breadcrumb-item active" aria-current="page">Money Market</li>
							</ol>
						</nav>
					</div>
					
					<section class="white-bg product-img-text img-text img-right pull-img-right">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="sidebar-wrap col-sm-12 col-md-4">
									<div class="sidebar testimonial shadow">
										
										<div class="prompt">
											<h3 class="display">Let Me Tell You A Secret...</h3>
										</div>
										
										<div class="prompt-shape-wrap">
											<div class="prompt-shape"></div>
										</div>
																				
										<div class="text-wrap">
											<p>...there is so much competition between credit unions… but in my experience SECU is the BEST!</p>
											
											<div class="author-wrap">
												<div>Sabrina</div>
												<p>member since 1988</p>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<div class="text-wrap col-sm-12 col-md-8">
									<h2 class="display">Save More. Do More.</h2>
									<p>With SECU’s Money Market accounts, you can grow your savings and have the flexibility to take that road trip, hike that trail, cruise that river, or go to that happy place whenever you want.</p>
									
									<ul>
										<li>Deposit, transfer, and withdraw funds anytime without penalty</li>
										<li>Minimum $2,000 deposit</li>
										<li>Watch your savings grow faster</li>
									</ul>
												
									<p>Open an account today and start building your savings for your next adventure.</p>
									<p>It only takes 10 minutes.</p>
									<p>After competing your personal information, choose Money Manager Money Market in the My Offers screen on the application and deposit a minimum of $2,000.</p>
									
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
									<h2 class="text-center">As Always... You Have Options!</h2>
									<p>You can enjoy competitive rates with a lower minimum deposit with our Money Manager account or opt for top rates with our Advantage account.</p>
								</div>
							</div>
						</div>
					</section>

					<section class="shadow-cards light-gray-bg">
						<div class="container">
							<div class="row">							
								<div class="col-sm-12 col-md-6">
									<div class="shadow shadow-card cta">
										<div class="top">
											<h2>Money Manager</h2>
											<p>$2,000 Minimum deposit.</p>
										</div>
										
										<h3 class="display">Grow Your Savings</h3>
										
										<div class="btn-wrap">
											<a class="btn solid solid-blue" href="#">Open Money Manager Account</a>
										</div>
											
									</div>
								</div>

								<div class="col-sm-12 col-md-6">
									<div class="shadow shadow-card cta">
										<div class="top">
											<h2>Money Market Advantage</h2>
											<p>$25,000 Minimum deposit.</p>
										</div>
										
										<h3 class="display">Enjoy Top Rates</h3>
										
										<div class="btn-wrap">
											<a class="btn solid solid-blue" href="#">Read More</a>
										</div>
											
									</div>
								</div>

							</div>
						</div>
					</section>
					
					
					<section class="white-bg img-text img-left pull-img-left">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="img-wrap col-sm-12 col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/mm-vs-cd.jpg">
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