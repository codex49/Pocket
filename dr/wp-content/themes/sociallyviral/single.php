<?php
/**
 * The template for displaying all single posts.
 *
 * @package SociallyViral
 */

get_header(); ?>

	<div class="single_post">
		<div class="main-container">
			<main id="content_box" class="site-single" role="single">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>
				<?php endwhile; // end of the loop. ?>
				
				<div class="post-tags"><?php the_tags(); ?></div>


				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif; ?>

			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
		<div class="kt-available__card">
			<div class="main-container">
				<div class="kt-portlet__head">
					<h3 class="kt-portlet__head-title">Choose A Free Gift Card</h3>
				</div>
				<div class="kt-portlet__body"> 
					<div class="">
						<a href="#">
							<img alt="free amazon gift card" src="../../assets/media/images/amazon-card.png">
						</a>
					</div>										
					<div class="">
						<a href="#">
							<img alt="free paypal gift card" src="../../assets/media/images/paypal-card.png">
						</a>
					</div>									
					<div class="">
						<a href="#">
							<img alt="free apple gift card" src="../../assets/media/images/apple-card.png">
						</a>
					</div>									
					<div class="">
						<a href="#">
							<img alt="free google play gift card" src="../../assets/media/images/google-play-card.png">
						</a>
					</div>									
					<div class="">
						<a href="#">
							<img alt="free netflix gift card" src="../../assets/media/images/netflix-card.png">
						</a>
					</div>									
					<div class="">
						<a href="#">
							<img alt="free playstation gift card" src="../../assets/media/images/playstation-card.png">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- single_post -->

<?php get_footer(); ?>
