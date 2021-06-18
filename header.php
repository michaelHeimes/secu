<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		
		<nav class="top-nav navbar navbar-expand-md navbar-light bg-white d-none d-sm-none d-md-block" aria-labelledby="top-nav-label">
			<div class="container-fluid">


				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'header-top',
						'container_class' => 'header-top',
						'container_id'    => 'header-top',
						'menu_class'      => 'header-top-nav navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'top-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				
<!--
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'header-top',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'top-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
-->
				
				<div class="routing d-none d-sm-none d-md-block">Routing #: 255076753</div>				
				
				<div class="search-button d-none d-sm-none d-md-block" type="button" aria-controls="search" aria-expanded="false" aria-label="Toggle search">
					<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="16.1213" y="1.97918" width="14" height="14" rx="7" transform="rotate(45 16.1213 1.97918)" stroke="#00833F" stroke-width="2"/>
					<path d="M10.818 17.8891L6.57539 22.1317" stroke="#00833F" stroke-width="2" stroke-linecap="square"/>
					</svg>
				</div>
				
			</div>
		</nav>
		
		<nav id="middle-nav" class="middle-nav navbar navbar-expand-md navbar-light bg-white" aria-labelledby="middle-nav-label">

			<div class="container-fluid">
			
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
							<img src="<?php echo get_template_directory_uri(); ?>/images/secu-logo.svg">
						</a>

<!-- 							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1> -->

					<?php else : ?>
					
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
							<img src="<?php echo get_template_directory_uri(); ?>/images/secu-logo.svg">
						</a>

<!-- 							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a> -->

					<?php endif; ?>

					<?php
				} else {
					the_custom_logo();?>
											
				<?php }
				?>
				<!-- end custom logo -->
				
				<div class="middle-menu d-none d-sm-none d-md-block">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header-middle',
							'container_class' => 'header-middle',
							'container_id'    => 'header-middle',
							'menu_class'      => 'header-middle-nav navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'middle-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

<!--
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header-middle',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'middle-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
-->				
				</div>
	
<!--
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
-->

				<button class="mobile-nav-toggle d-md-none" aria-controls="mobile-navigation" aria-expanded="false" aria-label="Toggle mobile navigation">
				
					<div class="open-wrap">
						<span></span>
						<span></span>
						<span></span>
					</div>
					
					<div class="close-wrap">
						<span></span>
						<span></span>
					</div>
					
				</button>
			
			</div><!-- .container -->
			
		</nav>

		<nav id="main-nav" class="main-nav navbar navbar-expand-md navbar-light bg-white" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container-fluid">				

				<div class="bottom-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header-bottom',
							'container_class' => 'header-bottom d-none d-sm-none d-md-block',
							'container_id'    => 'header-bottom',
							'menu_class'      => 'header-bottom-nav navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'bottom-menu',
							'depth'           => 3,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
					
<!--
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header-bottom',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'bottom-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
-->
					
				</div>				
				
			</div><!-- .container -->
			
			<div class="mobile-nav" style="display: none;">
			
				<div class="search-wrap">
					<div class="container">
						<div class="row">
							<div class="col">
								<form method="get" action="/" _lpchecked="1">
									<input type="text" name="s" placeholder="" class="">
									<input type="hidden" name="" value="">
									<button type="submit"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="16.1213" y="1.97918" width="14" height="14" rx="7" transform="rotate(45 16.1213 1.97918)" stroke="#00833F" stroke-width="2"/>
<path d="M10.818 17.8891L6.57539 22.1317" stroke="#00833F" stroke-width="2" stroke-linecap="square"/>
</svg></button>
								</form>
							</div>
						</div>
					</div>
				</div>	
			
				<div class="container">
					<div class="row">
						<div class="col">
							
							
												<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'header-bottom',
										'container_class' => '',
										'container_id'    => 'mobile-navigation',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'bottom-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
								
						</div>
					</div>
				</div>
			</div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	
	
	
	
