<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SociallyViral
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--iOS/android/handheld specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>" />
	<meta itemprop="url" content="<?php echo site_url(); ?>" />
	<?php if ( is_singular() ) { ?>
	<meta itemprop="creator accountablePerson" content="<?php $user_info = get_userdata($post->post_author); echo $user_info->first_name.' '.$user_info->last_name; ?>" />
	<?php }
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="">
		<header id="masthead" class="site-header" role="banner">
				<div class="container">				
					<div class="kt-header__brand kt-grid__item" id="kt_header_brand">
						<a class="kt-header__brand-logo" href="../../">
							<img alt="Logo" src="../../admin/images/logo_light_B3HCM.png" class="kt-header__brand-logo-default" />
							<img alt="Logo" src="../../admin/images/logo_dark_URH3W.png" class="kt-header__brand-logo-sticky" />
						</a>
					</div>

					<div class="kt-header__topbar kt-grid__item">
						<a href="../../" class="topbar-icon kt-header__topbar-icon">Register</a>
					</div>
				</div>


			</header><!-- #masthead -->

			<div id="content" class="site-content">
	<div class="gift-card_signup">
        <div>
            <h1 class>Earn Free Gift Cards!</h1>
            <form class="gift-card_form" action="../../#home-login__form" method="get">
                <input class="gift-card_email" type="text" placeholder="Email Adress" name="email"/>
                <input class="gift-card_button hidden-xs" value="Create account" class="" type="submit"/>				
                <input class="gift-card_button hidden-lg" value="GO!" class="" type="submit"/>
            </form>
        </div>
    </div>