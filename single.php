<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper content-sidebar" id="full-width-page-wrapper">

	<div class="container" id="content">
		
		<div class="row">
			<div class="col-sm-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">News & Insights</li>
					</ol>
				</nav>
			</div>
		</div>

		<div class="row">

			<main class="site-main has-sidebar col-sm-12 col-md-9 col-lg-8" id="main" role="main">
			
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
// 					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
/*
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
*/
				}
				?>

			</main><!-- #main -->
				
			<aside class="sidebar-wrap col-sm-12 col-md-3 col-lg-3 offset-lg-1">
				<div class="inner">
				
					<div class="search-wrap">
						<h3>Search News & Insights</h3>
						
						<form class="search" method="get" action="/">
							<input type="text" name="s" placeholder="" class="">
							<input type="hidden" name="" value="">
							<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="search-icon">	</button>

						</form>
						
						
					</div>
					
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
					
					<div class="cats-wrap sidebar-element">
						<h3>Topics & Categories</h3>
						<div><a href="#">Budgeting</a></div>
						<div><a href="#">Spend Less, Gain More</a></div>
						<div><a href="#">Spending Strategies</a></div>
						<div><a href="#">Building Wealth</a></div>
						<div><a href="#">Auto Loans</a></div>
						<div><a href="#">College Fund</a></div>
						<div><a href="#">Roth IRAs</a></div>										
					</div>
					
					<div class="sidebar-card green shadow sidebar-element">		
						<div class="text-wrap">
							<h3 class="display">Banking For All That You Seek</h3>
						</div>	
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-green.png">
							
						<div class="btn-wrap text-center">
							<a class="btn btn-outline-white" href="#">Get Started</a>
						</div>
					</div>
					
				</div>
			</aside>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->


<?php
get_footer();
