<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SociallyViral
 */

get_header(); ?>
<div class="container">
	<a href="#" id="pull" class="toggle-mobile-menu"><?php _e('Menu', 'sociallyviral'); ?></a>
	<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
		<?php if ( has_nav_menu( 'primary' ) ) { ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
		<?php } else { ?>
			<ul class="menu clearfix">
				<?php wp_list_categories('title_li='); ?>
			</ul>
		<?php } ?>
	</nav><!-- #site-navigation -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : 
				$j = 0; // counter
				while ( have_posts() ) : the_post();
				$j++;
                $image_size = 'sociallyviral_featured';
                $post_class = '';

                if ( $j == 1 && !is_paged() ) { // ($featured && $j % 3 != 0) {
                    $j++; // count +1
                    $image_size = 'sociallyviral_featuredbig';
                    $post_class = 'featuredpost';
            	}
            ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('latestpost '.$post_class); ?>>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
    				    <?php echo '<div class="featured-thumbnail">';
    				    if ( has_post_thumbnail() ) {
							the_post_thumbnail($image_size, array('title' => ''));
						} else { ?>
							<img src="<?php echo sociallyviral_get_thumbnail_url($image_size == 'sociallyviral_featuredbig' ? 'sociallyviral_featuredbig' : 'sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
						<?php }
    				    echo '</div>'; ?>
    				    <?php if($image_size == 'sociallyviral_featuredbig'){ ?>
							<div class="post-label"><i class="icon-star"></i><span><?php _e('Featured','sociallyviral'); ?></span></div>
						<?php } ?>
    				</a>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<div class="entry-meta post-info">
                            <span class="thetime updated"><i class="icon-calendar"></i> <span itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></span></span>
                            <span class="thecategory"><i class="icon-tags"></i> <?php the_category(', ') ?></span>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
				</article><!-- #post-## -->
			<?php endwhile; ?>
			<?php sociallyviral_post_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
