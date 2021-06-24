<?php
/**
 * Template name: Product - Share Savings
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
	<div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/share-savings-banner.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="inner">
					<h1>Share Savings</h1>	
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
									<h2 class="display">Easily Grow Your Savings!</h2>
									<p>A feature-rich savings account is a great way to start enjoying the benefits of SECU membership!</p>
									
									<div class="check-list">										
										<ul>
											<li>Establishes your SECU membership</li>
											<li>Pays interest above the Maryland Average*</li>
											<li>Great account to build savings: Set up automatic transfers to quickly and easily grow your savings over time.</li>
											<li>Withdraw or transfer funds to/from other SECU accounts at any time without penalty**</li>
											<li>Hold multiple Savings Accounts—open a different account for each of your savings goals. As many as you want.</li>
											<li>Custodial accounts available at a SECU branch.</li>
										</ul>
									</div>
												
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
					
					<?php get_template_part( 'global-templates/get-started-cta' );?>
		

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();