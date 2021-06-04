<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">


	<footer class="site-footer" id="colophon">
		<div class="top max-1240">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="logo-wrap col-sm-12 col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/secu-logo.svg">
					</div>
					<div class="col-sm-12 col-md-6">
						<nav class="social-links text-right">
	
							<a href="#"><svg width="13" height="27" viewBox="0 0 13 27" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M8.70153 26.3117V13.2544H12.3059L12.7836 8.7548H8.70153L8.70765 6.5027C8.70765 5.32913 8.81916 4.70031 10.5047 4.70031H12.758V0.200195H9.15316C4.82311 0.200195 3.29905 2.38299 3.29905 6.05376V8.75531H0.599976V13.2549H3.29905V26.3117H8.70153Z" fill="#00BC70"/>
	</svg></a>
	
							<a href="#"><svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M11.5312 5.5074L11.5816 6.33786L10.7422 6.23617C7.68686 5.84636 5.01765 4.52442 2.75134 2.30422L1.64336 1.2026L1.35798 2.01611C0.753625 3.82955 1.13974 5.74468 2.3988 7.03273C3.0703 7.74454 2.91921 7.84623 1.76088 7.42253C1.35798 7.28695 1.00544 7.18526 0.971863 7.2361C0.85435 7.35474 1.25725 8.89701 1.57621 9.50714C2.01269 10.3545 2.90243 11.185 3.8761 11.6765L4.69869 12.0663L3.72501 12.0832C2.78491 12.0832 2.75134 12.1002 2.85206 12.4561C3.18781 13.5577 4.51403 14.7271 5.99133 15.2356L7.03215 15.5915L6.12563 16.1338C4.78263 16.9134 3.2046 17.3541 1.62658 17.388C0.871138 17.4049 0.25 17.4727 0.25 17.5236C0.25 17.693 2.29808 18.6421 3.48999 19.015C7.06573 20.1166 11.313 19.6421 14.5026 17.7608C16.7689 16.4219 19.0352 13.7611 20.0928 11.185C20.6636 9.81221 21.2344 7.3039 21.2344 6.10058C21.2344 5.32097 21.2847 5.21929 22.2248 4.28714C22.7788 3.74481 23.2992 3.15162 23.4 2.98214C23.5678 2.66013 23.5511 2.66013 22.6949 2.94825C21.268 3.45669 21.0665 3.3889 21.7716 2.62624C22.292 2.0839 22.9131 1.10091 22.9131 0.812795C22.9131 0.761951 22.6613 0.846691 22.3759 0.999223C22.0738 1.1687 21.4023 1.42292 20.8986 1.57546L19.9921 1.86357L19.1695 1.30429C18.7163 0.999223 18.0783 0.660262 17.7426 0.558574C16.8864 0.321302 15.577 0.355198 14.8048 0.626366C12.7063 1.38903 11.3801 3.355 11.5312 5.5074Z" fill="#00BC70"/>
	</svg>
	</a>
	
							<a href="#"><svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5012 0.200195C10.0248 0.200195 9.58858 0.215395 8.22323 0.277529C6.86055 0.33993 5.93041 0.555666 5.11653 0.872202C4.27465 1.19914 3.56051 1.63648 2.84904 2.34822C2.13703 3.05969 1.69969 3.77383 1.37169 4.61544C1.05435 5.42958 0.838353 6.35999 0.777019 7.72214C0.715951 9.08749 0.699951 9.52403 0.699951 13.0003C0.699951 16.4766 0.715418 16.9116 0.777285 18.2769C0.839953 19.6396 1.05569 20.5697 1.37196 21.3836C1.69916 22.2255 2.1365 22.9396 2.84824 23.6511C3.55945 24.3631 4.27359 24.8015 5.11493 25.1285C5.92934 25.445 6.85975 25.6607 8.22216 25.7231C9.58751 25.7853 10.0235 25.8005 13.4996 25.8005C16.9761 25.8005 17.4111 25.7853 18.7764 25.7231C20.1391 25.6607 21.0703 25.445 21.8847 25.1285C22.7263 24.8015 23.4394 24.3631 24.1506 23.6511C24.8626 22.9396 25.2999 22.2255 25.6279 21.3839C25.9426 20.5697 26.1586 19.6393 26.2226 18.2772C26.284 16.9118 26.3 16.4766 26.3 13.0003C26.3 9.52403 26.284 9.08775 26.2226 7.72241C26.1586 6.35973 25.9426 5.42958 25.6279 4.61571C25.2999 3.77383 24.8626 3.05969 24.1506 2.34822C23.4386 1.63621 22.7266 1.19887 21.8839 0.872202C21.0679 0.555666 20.1372 0.33993 18.7745 0.277529C17.4092 0.215395 16.9745 0.200195 13.4972 0.200195H13.5012ZM12.3529 2.50689C12.6937 2.50635 13.0739 2.50689 13.5012 2.50689C16.9188 2.50689 17.3239 2.51915 18.6735 2.58049C19.9215 2.63755 20.5988 2.84609 21.05 3.02129C21.6474 3.25329 22.0732 3.53063 22.521 3.97863C22.969 4.42664 23.2463 4.85331 23.4789 5.45065C23.6541 5.90132 23.8629 6.57866 23.9197 7.82667C23.981 9.17602 23.9943 9.58136 23.9943 12.9974C23.9943 16.4134 23.981 16.8188 23.9197 18.1681C23.8626 19.4161 23.6541 20.0935 23.4789 20.5441C23.2469 21.1415 22.969 21.5668 22.521 22.0146C22.073 22.4626 21.6476 22.7399 21.05 22.9719C20.5994 23.1479 19.9215 23.3559 18.6735 23.413C17.3241 23.4743 16.9188 23.4876 13.5012 23.4876C10.0832 23.4876 9.67818 23.4743 8.32883 23.413C7.08082 23.3554 6.40348 23.1468 5.95201 22.9716C5.35467 22.7396 4.928 22.4623 4.47999 22.0143C4.03199 21.5663 3.75465 21.1407 3.52211 20.5431C3.34691 20.0924 3.13811 19.4151 3.08131 18.167C3.01998 16.8177 3.00771 16.4124 3.00771 12.9942C3.00771 9.57603 3.01998 9.17282 3.08131 7.82347C3.13838 6.57546 3.34691 5.89812 3.52211 5.44692C3.75412 4.84958 4.03199 4.42291 4.47999 3.9749C4.928 3.5269 5.35467 3.24956 5.95201 3.01702C6.40321 2.84102 7.08082 2.63302 8.32883 2.57569C9.50964 2.52235 9.96725 2.50635 12.3529 2.50369V2.50689ZM20.3338 4.63224C19.4857 4.63224 18.7977 5.31945 18.7977 6.16772C18.7977 7.01573 19.4857 7.70374 20.3338 7.70374C21.1818 7.70374 21.8698 7.01573 21.8698 6.16772C21.8698 5.31972 21.1818 4.63171 20.3338 4.63171V4.63224ZM13.5012 6.42693C9.87098 6.42693 6.92775 9.37016 6.92775 13.0003C6.92775 16.6305 9.87098 19.5724 13.5012 19.5724C17.1313 19.5724 20.0735 16.6305 20.0735 13.0003C20.0735 9.37016 17.1311 6.42693 13.5009 6.42693H13.5012ZM13.5012 8.73362C15.8574 8.73362 17.7679 10.6438 17.7679 13.0003C17.7679 15.3566 15.8574 17.267 13.5012 17.267C11.1446 17.267 9.23444 15.3566 9.23444 13.0003C9.23444 10.6438 11.1446 8.73362 13.5012 8.73362Z" fill="#00BC70"/>
	</svg></a>
	
							<a href="#"><svg width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M7.06871 2.8227C7.03341 1.2204 5.88761 0 4.02698 0C2.16636 0 0.949951 1.2204 0.949951 2.8227C0.949951 4.3918 2.13041 5.64735 3.95638 5.64735H3.99114C5.88761 5.64735 7.06871 4.3918 7.06871 2.8227ZM6.71049 7.87785H1.27157V24.2196H6.71049V7.87785ZM20.0631 7.49411C23.6422 7.49411 26.3253 9.83026 26.3253 14.8497L26.3251 24.2196H20.8864V15.4767C20.8864 13.2807 20.0994 11.7822 18.1305 11.7822C16.6278 11.7822 15.7328 12.7924 15.3397 13.7681C15.1959 14.1178 15.1606 14.605 15.1606 15.0934V24.22H9.72105C9.72105 24.22 9.79274 9.4117 9.72105 7.87828H15.1606V10.1929C15.8825 9.08025 17.1754 7.49411 20.0631 7.49411Z" fill="#00BC70"/>
	</svg></a>
							
							<a href="#"><svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M25.298 0.325652C25.9318 0.388199 27.0556 0.499082 28.0689 1.58397C28.9542 2.49991 29.2431 4.57987 29.2431 4.57987C29.2431 4.57987 29.5385 7.02301 29.5385 9.46521V11.7555C29.5385 14.1987 29.2431 16.6409 29.2431 16.6409C29.2431 16.6409 28.9542 18.7208 28.0689 19.6368C27.0568 20.7203 25.9346 20.8323 25.3003 20.8955C25.2306 20.9025 25.1667 20.9089 25.1095 20.9159C20.976 21.2215 14.7692 21.2309 14.7692 21.2309C14.7692 21.2309 7.08923 21.1593 4.72615 20.9272C4.61419 20.9058 4.47847 20.8892 4.32478 20.8704C3.57625 20.7786 2.40139 20.6346 1.46862 19.6368C0.583385 18.7208 0.295385 16.6409 0.295385 16.6409C0.295385 16.6409 0 14.1987 0 11.7555V9.46521C0 7.02301 0.295385 4.57987 0.295385 4.57987C0.295385 4.57987 0.583385 2.49991 1.46862 1.58397C2.48295 0.498905 3.60622 0.388163 4.24059 0.325622C4.30937 0.318841 4.3724 0.312627 4.42892 0.305799C8.56246 0.000170703 14.7628 0.000170703 14.7628 0.000170703H14.7757C14.7757 0.000170703 20.976 0.000170703 25.1095 0.305799C25.1661 0.312637 25.2291 0.318859 25.298 0.325652ZM11.7185 6.04953L11.7194 14.5307L19.6994 10.3047L11.7185 6.04953Z" fill="#00BC70"/>
	</svg></a>
	
						</nav>
					</div>
				</div>
			</div>
		</div><!-- top -->
		
		<div class="break"></div>
		
		<div class="middle max-1240">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h6>Why SECU?</h6>
						<p>SECU is Maryland’s largest credit union with 22 branches throughout Maryland and 10,000+ free ATMs. Plus, you’ll have full access to your accounts through mobile and online banking.</p>
					</div>
					
					<div class="col-sm-12 col-md-6 col-lg-2">
						<h6>About</h6>
						<nav>
							<ul class="list-unstyled">
								<li><a href="#">About SECU</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Investor Relations</a></li>
								<li><a href="#">Security</a></li>
							</ul>
						</nav>
					</div>

					<div class="has-tb col-sm-12 col-md-6 col-lg-2">
						<h6>Resources</h6>
						<nav>
							<ul class="list-unstyled">
								<li><a href="#">Rates</a></li>
								<li><a href="#">Calculators</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Coronavirus Updates</a></li>
							</ul>
						</nav>						
					</div>
					
					<div class="has-tb footer-contact col-sm-12 col-md-6 col-lg-2 ">
						<h6>Contact</h6>
						<div>Customer Service</div>
						<a class="big-green" href="tel:800-879-7328">800-879-7328</a>
						<div>Routing Number</div>
						<div class="big-green">255076753</div>
					</div>
					
					<div class="has-tb mobile col-sm-12 col-md-6 col-lg-2">
						<h6>Mobile Banking</h6>
						<div><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google-play.svg"></a></div>
						<div><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/app-store.svg"></a></div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="bottom light-gray-bg">
			<div class="max-1240">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							
							<div class="row">
								<div class="col-sm-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/ehl-ncua.svg"></div>
							</div>
							<div class="row">
								<div class="col-sm-6 text-right"><sub>2</sub>APY = Annual Percentage Yield.</div>
								<div class="col-sm-6 text-left"><sub>1</sub>APR = Annual Percentage Rate.</div>
							</div>
							<div class="row text-center">
								<div class="col-sm-12">
									If you are using a screen reader for the visually impaired and are having problems using any part of this website, please call 888-974-8343 for assistance. For more information please see our website accessibility statement. For all other general inquiries, please call 888-643-9777.
								</div>
							</div>
							<div class="row text-center">
								<div class="col-sm-12">
									SECU, PO Box 23896, Baltimore, MD 21298
								</div>
							</div>
							<div class="row info-policy">
								<div class="col-sm-12 col-md-6">
									&copy; <strong><?php $year = date("Y"); echo $year;?> SECU. All Rights Reserved.</strong>
								</div>
								<div class="col-sm-12 col-md-6">
									&copy; <strong><a href="#">Privacy Policy</a> <a href="#">Terms of Service</a></strong>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

