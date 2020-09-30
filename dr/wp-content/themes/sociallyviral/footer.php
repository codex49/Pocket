<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SociallyViral
 */
?>

	</div><!-- #content -->
</div><!-- .main-container -->
	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="copyrights">
				<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'sociallyviral' ) ); ?>">
				<?php //printf( __( 'Proudly powered by %s', 'sociallyviral' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php //printf( __( '%1$s Theme by %2$s.', 'sociallyviral' ), 'SociallyViral', '<a href="https://mythemeshop.com" rel="designer">MyThemeShop</a>' ); ?>
			</div>
			<a href="#blog" class="toplink" rel="nofollow"><i class="icon-angle-up"></i></a>
			<nav id="navigation" class="footer-navigation" role="navigation">
				<?php //wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav>
		</div>
	</footer> -->


	<div class="footer kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
		<div class="kt-footer__bottom">
			<div class="main-container">
				<div class="kt-footer__wrapper">
					<div class="kt-footer__logo">
						<div class="kt-footer__copyright">
							© &nbsp; 2020 &nbsp;  - &nbsp; <a href="../../">DominoRewards</a>
						</div>
					</div>
					<div class="kt-footer__menu">
						<a href="../../about-us" target="_blank">About Us</a>
						<a href="../../terms" target="_blank">Terms &amp; Conditions</a>
						<a href="../../privacy" target="_blank">Privacy Policy</a>
						<a href="../../contact" target="_blank">Contact</a>
					</div>
				</div>
		</div>
	</div>
</div><!-- #page -->

<style>
	.kt-container {
		width: 1170px;
		margin: 0 auto;
	}

	.kt-footer .kt-footer__bottom {
		padding: 2rem 0;
	}

	.kt-footer {
		padding: 0;
		margin: 0;
		background-size: cover;
		background-position: center center;
		background-color: #1e1e2d;
	}

	.kt-footer .kt-footer__bottom .kt-footer__logo {
		margin: 0;
		font-size: 1rem;
		font-weight: 400;
		color: #6f7286;
	}

	.kt-footer .kt-footer__bottom .kt-footer__wrapper {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.kt-footer .kt-footer__bottom .kt-footer__menu a {
		margin-left: 1rem;
		padding: 0;
		font-size: 14px;
		font-weight: 400;
		color: #a9a7bc;
		transition: color .3s ease;
		margin-bottom: 0;
	}

	.kt-footer .kt-footer__bottom .kt-footer__menu a:hover {
		transition: color .3s ease;
    	color: #366cf3;
	}

	@media screen and (max-width: 782px) {
		.kt-container {
			width: auto;
			padding: 0 30px;
		}

		.kt-footer .kt-footer__bottom .kt-footer__wrapper {
			display: block;
		}

		.kt-footer__menu {
			margin-top: 30px;
		}

		.kt-footer .kt-footer__bottom .kt-footer__menu a {
			font-size: 16px;
			display: block;
			margin-bottom: 8px;
			margin-left: 0;
		}
	}
</style>

<?php wp_footer(); ?>

</body>
</html>