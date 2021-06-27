<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<div class="img-wrap">
<!-- 		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> -->
		<img src="<?php echo get_template_directory_uri(); ?>/images/post-img.jpg">
	</div>

	<header class="entry-header">

<!-- 		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->

			<h1 class="entry-title">Money Market vs. CD:<br>Everything You Need to Know</h1>

	</header><!-- .entry-header -->


	<div class="entry-content">
		
		<p>When it comes to saving your money, you have a number of account options. You might first think of a simple savings account that allows your money to grow according to a set interest rate. You also have the options of choosing a money market account or a certificate of deposit (CD). A money market account is like a mix of a savings account and a checking account. A CD on the other hand, doesn’t offer much flexibility in accessing your money with set term and withdrawal limits.</p>
		
		<h2>Pros and Cons of Money Market Accounts</h2>
		
		<p>Money market accounts (MMAs) are useful money management tools. They are best described as a hybrid of a savings account and a checking account. Money market accounts earn interest much like savings accounts do, i.e. according to the interest rate that applies at a given time. Plus, MMAs typically have more favorable rates than a typical savings account. Then like a checking account, money market accounts often include ATM cards and check-writing abilities. You will want to double check with your bank, though, since not all money market accounts offer these perks.</p>

		<p>However, money market accounts don’t have the complete flexibility of checking accounts. MMAs do limit you to six outgoing transactions, like withdrawals and transfers, per statement cycle just like with a savings account.</p>

		<p>You may also want to be wary of MMA minimums. Higher minimum deposits and balances can come as a cost of better interest rates. This usually means minimum deposits of $2,500 or higher, with some even reaching $10,000.</p>
		
		<h2>Pros and Cons of Money Market Accounts</h2>
		
		<p>Certificates of deposit, or CDs for short, are timed deposit accounts. When you open a CD, you choose your term length from the options your bank or credit union give you. These terms usually range from three months to five years. Once you open an account, you have to make a deposit. That deposit will be held for the entire term length, during which you cannot make any withdrawals or additional deposits. This definitely limits how easily and how often you can access that money.</p>

		<p>The whole set up of CDs is to lock away your money for a set amount of time while it earns interest. This allows the issuing bank to use your money during that time for other purposes. Then when your CD reaches maturity, you’ll receive your initial deposit back, plus all the interest it earned over the term. So if you were to try to make a withdrawal during your term, which isn’t how CDs are designed, you’ll face a pretty hefty penalty. This usually deducts days or months of interest earned from your withdrawal depending on your CD term length.</p>

		<p>CDs can also require high minimum deposits, whether $500 or $10,000. This limits potential customers from opening a CD if they can’t safely set that amount of money aside.</p>
		
		<h2>Money Market Accounts vs CDs: Which is Better?</h2>
		
		<p>Comparing money market accounts and CDs overall isn’t entirely fair since they are structured so differently, so let’s break it down.</p>

		<p>Money market accounts are better than CDs if you’re looking for a more accessible account. You can easily deposit and withdraw funds to and from a money market account with an ATM card, personal checks, online or on mobile. Again, also double check whether a bank issues ATM cards or personal checks with their money market accounts. Your main limitation will be the six allowed outgoing transactions per statement cycle.</p>

		<p>CDs, on the other hand, are all about limiting access to your money. Once you open an account and make your initial deposit, you cannot move money in or out of the account without facing a heavy penalty. This may help you though, if you’re prone to spending and not saving. If that’s the case, a money market account may give you too much freedom.</p>

		<p>When it comes to interest rates, money market accounts may be your better bet. MMA rates are typically higher than basic savings accounts and short-term CD rates. CDs can have higher rates than a money market account, but those are often the long-term accounts from two years and upward. That means that to snag a CD rate that’s higher than a money market account rate, you’ll most likely have to wait a couple years to have access to that money.</p>
		
		<h2>The Takeaway</h2>
		
		<p>Both money market accounts and CDs offer useful but different ways to save and access your money. MMAs are good for those who want to keep their money within easy reach, either through an ATM card or a checkbook. You should make sure you can handle that easy access though. On the other hand, CDs offer a great way to set money aside and forget about it for a few months or even years. That way, you can let your money grow undisturbed.</p>
		
		<h2>Tips for Saving Money</h2>
		
			<ul>
				<li>Whether you’re saving for a down payment or just for an emergency fund, it’s always important to have some savings stashed away. This means more than sticking some cash under your mattress, though. Opening a type of savings account keeps your money save and insured. Plus, your money can’t grow on its own under your mattress!</li>
				<li>Often, it’s easiest just to open a savings account with the bank we already work with. But that bank may not offer a great interest rate to grow your money. It helps to shop around for the best savings accounts and even the best checking accounts to find a bank that you’re comfortable with and that has the highest-earning interest rates.</li>
			</ul>

<!--
		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
-->

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<h3 class="black">Share This Article:</h3>
		<div class="social-links a2a_kit a2a_default_style">
		
			<div><a class="a2a_button_facebook" href="#">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M20.155 10.656L18.649 10.657C17.468 10.657 17.239 11.218 17.239 12.041V13.857H20.056L19.689 16.702H17.239V24H14.302V16.702H11.846V13.857H14.302V11.76C14.302 9.325 15.789 8 17.96 8C19 8 19.894 8.077 20.155 8.112V10.656ZM0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#425EAC"/>
					</svg>
			</a></div>
													
			<div><a class="a2a_button_twitter" href="#">
				<svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.696 12.737C22.702 12.878 22.706 13.019 22.706 13.162C22.706 17.499 19.404 22.501 13.366 22.501C11.512 22.501 9.78698 21.958 8.33398 21.027C8.59098 21.057 8.85198 21.072 9.11698 21.072C10.655 21.072 12.07 20.548 13.194 19.667C11.757 19.641 10.545 18.692 10.127 17.388C10.328 17.426 10.533 17.446 10.745 17.446C11.044 17.446 11.334 17.406 11.61 17.331C10.108 17.03 8.97698 15.703 8.97698 14.113C8.97698 14.099 8.97698 14.085 8.97698 14.071C9.41898 14.317 9.92598 14.465 10.464 14.482C9.58298 13.893 9.00298 12.888 9.00298 11.75C9.00298 11.148 9.16498 10.584 9.44798 10.099C11.067 12.085 13.486 13.392 16.214 13.529C16.158 13.289 16.129 13.038 16.129 12.781C16.129 10.968 17.599 9.498 19.411 9.498C20.356 9.498 21.209 9.897 21.807 10.535C22.555 10.388 23.258 10.115 23.892 9.739C23.647 10.505 23.126 11.148 22.449 11.555C23.113 11.475 23.745 11.299 24.334 11.038C23.894 11.696 23.337 12.274 22.696 12.737ZM0.333984 16C0.333984 24.8366 7.49743 32 16.334 32C25.1705 32 32.334 24.8366 32.334 16C32.334 7.16344 25.1705 0 16.334 0C7.49743 0 0.333984 7.16344 0.333984 16Z" fill="#1DADEB"/>
				</svg>
			</a></div>

			<div><a class="a2a_button_linkedin" data-url="<?php echo get_permalink();?>" href="#">
				<svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0.666016 16C0.666016 7.16344 7.82946 0 16.666 0C25.5026 0 32.666 7.16344 32.666 16C32.666 24.8366 25.5026 32 16.666 32C7.82946 32 0.666016 24.8366 0.666016 16Z" fill="#0078B7"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M12.212 9.8818C12.1885 8.8136 11.4246 8 10.1842 8C8.94375 8 8.13281 8.8136 8.13281 9.8818C8.13281 10.9279 8.91978 11.7649 10.1371 11.7649H10.1603C11.4246 11.7649 12.212 10.9279 12.212 9.8818ZM11.9732 13.2519H8.34722V24.1464H11.9732V13.2519ZM20.8749 12.9961C23.2609 12.9961 25.0497 14.5535 25.0497 17.8998L25.0496 24.1464H21.4238V18.3178C21.4238 16.8538 20.8991 15.8548 19.5865 15.8548C18.5847 15.8548 17.9881 16.5283 17.726 17.1788C17.6301 17.4119 17.6066 17.7367 17.6066 18.0623V24.1467H13.9802C13.9802 24.1467 14.028 14.2745 13.9802 13.2522H17.6066V14.7953C18.0878 14.0535 18.9498 12.9961 20.8749 12.9961Z" fill="white"/>
				</svg>
			</a></div>
			
		</div>
		
		<script async src="https://static.addtoany.com/menu/page.js"></script>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
