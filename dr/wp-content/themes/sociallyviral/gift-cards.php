<?php /* Template Name: Gift Cards Template */ ?>

<!DOCTYPE html>
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
	<div id="page" class="gift-card hfeed site">
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
			<?php while ( have_posts() ) : the_post(); ?>
<div class="single_post">
    <div class="gift-card_signup">
        <div>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <form class="gift-card_form" action="../../#home-login__form" method="get">
                <input class="gift-card_email" type="text" placeholder="Email Adress" name="email"/>
                <input class="gift-card_button hidden-xs" value="Create account" class="" type="submit"/>				
                <input class="gift-card_button hidden-lg" value="GO!" class="" type="submit"/>
            </form>
        </div>
    </div>
    <main id="content_box" class="site-single" role="single">
		<div class="kt-earn__points main-container">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<h3 class="kt-portlet__head-title text-center">How to Earn Points?</h3>
				</div>
				<div class="kt-portlet__body">                   
					<div class="kt-notes">
						<div class="kt-notes__items"> 
							<div class="kt-notes__item"> 
								<div class="kt-notes__media">
									<span class="kt-notes__icon">
										<img src="../../assets/media/images/icons/user.svg" alt="user" />
									</span>
								</div>                             
								<div class="kt-notes__content"> 
									<div class="kt-notes__section">     
										<div class="kt-notes__info">
											<span class="kt-notes__title">Sign Up</span>
										</div>
										<div class="kt-notes__dropdown"> 
											<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
												<i class="flaticon2-note kt-font-brand"></i>
											</a>
										</div>
									</div>
									<span class="kt-notes__body">
										Quick sign up for your account to start earnings.                                  
									</span>  
								</div>  
							</div> 
							<div class="kt-notes__item"> 
								<div class="kt-notes__media">
									<span class="kt-notes__icon">
										<img src="../../assets/media/images/icons/rewards.svg" alt="user" />
									</span>                                
								</div>                             
								<div class="kt-notes__content"> 
									<div class="kt-notes__section">     
										<div class="kt-notes__info">
											<span class="kt-notes__title">Earn Points</span>
										</div>
										<div class="kt-notes__dropdown"> 
											<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
												<i class="flaticon2-note kt-font-brand"></i>
											</a>
										</div>
									</div>
									<span class="kt-notes__body">
										Daily bonuses, Download apps, Complete simple tasks, Invite a Friend to earn points fast.
									</span>  
								</div>  
							</div> 
							<div class="kt-notes__item"> 
								<div class="kt-notes__media">
									<span class="kt-notes__icon">
										<img src="../../assets/media/images/icons/gift.svg" alt="user" />
									</span>                                
								</div>                             
								<div class="kt-notes__content"> 
									<div class="kt-notes__section">     
										<div class="kt-notes__info">
											<a href="#" class="kt-notes__title">Get Gift Cards</a>
										</div>
										<div class="kt-notes__dropdown"> 
											<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
												<i class="flaticon2-note kt-font-brand"></i>
											</a>
										</div>
									</div>
									<span class="kt-notes__body">
										exchange your points for a free <?php echo get_post_meta( get_the_ID(), 'get_gift_cards', true ); ?>.
									</span>  
								</div>  
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="main-container">
				<header class="entry-header">
					<h2 class="entry-title">
						<?php echo get_post_meta( get_the_ID(), 'sub_title_gift_card', true ); ?>
					</h2>
				</header><!-- .entry-header -->

				<div class="gift-card_article">
					<div class="entry-content">
						<!--<img class="gift-card_image pulse-hover animated img-responsive"
							src="<?php //echo get_post_meta( get_the_ID(), 'url_gift_cards', true ); ?>" 
							alt="<?php //the_title(); ?>" /> -->
							<?php the_post_thumbnail( 'full', [
								'class' => 'gift-card_image pulse-hover animated img-responsive'
							]);?>
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div>
			</div>
		</article><!-- #post-## -->
        <?php endwhile; // end of the loop. ?>

		<div class="kt-available__card">
			<div class="main-container">
				<div class="kt-portlet__head">
					<h3 class="kt-portlet__head-title">Other Free Gift Card Prizes You'll Love</h3>
				</div>
				<div class="kt-portlet__body"> 
					<div class="">
						<a href="<?php the_field('first_url'); ?>">
							<img alt="<?php echo get_field('first_image')['alt']; ?>" 
								src="<?php echo get_field('first_image')['url']; ?>">
						</a>
					</div>										
					<div class="">
						<a href="<?php the_field('second_url'); ?>">
							<img alt="<?php echo get_field('second_image')['alt']; ?>" 
								src="<?php echo get_field('second_image')['url']; ?>">
						</a>
					</div>									
					<div class="">
						<a href="<?php the_field('third_url'); ?>">
							<img alt="<?php echo get_field('third_image')['alt']; ?>" 
								src="<?php echo get_field('third_image')['url']; ?>">
						</a>
					</div>									
					<div class="">
						<a href="<?php the_field('fourth_url'); ?>">
							<img alt="<?php echo get_field('fourth_image')['alt']; ?>" 
								src="<?php echo get_field('fourth_image')['url']; ?>">
						</a>
					</div>									
					<div class="">
						<a href="<?php the_field('fifth_url'); ?>">
							<img alt="<?php echo get_field('fifth_image')['alt']; ?>" 
								src="<?php echo get_field('fifth_image')['url']; ?>">
						</a>
					</div>									
					<div class="">
						<a href="<?php the_field('sixth_url'); ?>">
							<img alt="<?php echo get_field('sixth_image')['alt']; ?>" 
								src="<?php echo get_field('sixth_image')['url']; ?>">
						</a>
					</div>
				</div>
			</div>
		</div>

    </main><!-- #main -->

	<div class="kt-signup">
		<a class="kt-signup_action" href="../../#home-login__form">Signup</a>
	</div>
</div><!-- single_post -->
<style>
	.kt-earn__points {
		margin-top: 80px;
		margin-bottom: 60px
	}

	.kt-earn__points .kt-portlet__head .kt-portlet__head-title {
		padding-top: 15px;
		font-size: 25px;
		text-align: center;
	}

	.kt-earn__points .kt-portlet .kt-portlet__head {
		display: block
	}

	.kt-earn__points .kt-portlet {
		display: flex;
		flex-grow: 1;
		flex-direction: column;
		box-shadow: 0 0 13px 0 rgba(82,63,105,.05);
		background-color: #fff;
		margin-bottom: 20px;
		border-radius: 4px;
	}

	.kt-notes .kt-notes__items .kt-notes__item {
		left: 8px;
    	border-left: 2px solid #ebedf2;
		padding: 0 0 50px 45px;
		position: relative;
		margin: 0 5px 0 17px;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content {
		background-color: #f7f8fc;
		padding: .5rem 1rem 1rem 1.5rem;
		border-radius: 4px;
		position: relative;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content .kt-notes__section {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content:after {
		position: absolute;
		content: '';
		width: 0;
		height: 0;
		top: 10px;
		right: 100%;
		margin-right: 0;
		border-right: solid 10px #f7f8fc;
		border-bottom: solid 17px transparent;
		border-left: solid 17px transparent;
		border-top: solid 17px transparent;
	}

	.kt-portlet .kt-portlet__head {
		display: block;
		align-items: stretch;
		justify-content: space-between;
		position: relative;
		padding: 0 25px;
		border-bottom: 1px solid #ebedf2;
		min-height: 60px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
	}

	.kt-portlet .kt-portlet__body {
		display: flex;
		flex-direction: column;
		padding: 25px 25px 0;
		border-radius: 4px;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content .kt-notes__section .kt-notes__info .kt-notes__title{
		font-size: 1rem;
		color: #595d6e;
		font-weight: 500;
		padding-right: .5rem;
		font-weight: bold;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content .kt-notes__body {
		color: #74788d;
		font-weight: 400;
		padding-right: 3rem;
		padding-top: .5rem;
		display: block;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__media {
		position: absolute;
		top: 0;
		left: -25.5px;
	}

	.kt-notes .kt-notes__items .kt-notes__item .kt-notes__media .kt-notes__icon {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50px;
		height: 50px;
		background-color: #fff;
		border: 2px solid #ebedf2;
		border-radius: 50%;
	}
	.kt-notes .kt-notes__items .kt-notes__item:last-child {
		border-left: 0;
	}
	.kt-notes__icon svg{
		width: 30px;
	}

	.gift-card article{
		background: #fff;
		box-shadow: 0 0 13px 0 rgba(82,63,105,.05);
		padding: 60px 0;
		margin-bottom: 0;
		border-bottom: 1px solid #e7e7e7;
	}

	.kt-available__card {
		background: #ffffff;
		padding: 60px 0;
	}

	.kt-available__card .kt-portlet__body {
		display: flex;
		justify-content: space-between;
		margin-top: 25px;
	}

	.kt-available__card .kt-portlet__head-title {
		text-align: center;
    	font-size: 30px;
		font-weight: bold;
	}

	.hidden-xs {
		display: block !important;
	}

	.hidden-lg {
		display: none !important;
	}

	.kt-signup {
		text-align: center;
    	padding: 80px 0;
		background: #eaeaef;
	}

	.kt-signup_action {
		display: inline-block;
		background: #5867dd;
		color: white;
		padding: 10px 35px;
		border-radius: 8px;
		font-size: 28px;
		font-weight: bold;
	}

	.kt-signup_action:hover {
		background: #2a38a2;
    	color: #ffffff;	
	}

	.gift-card #content_box {
		margin-bottom: 0;
	}

	.gift-card_signup .entry-title {
		width: 422px;
		margin: 0 auto 30px;
		line-height: 55px;
	}

	.kt-available__card img {
		width: 160px;
		height: 233px;
	}

	@media screen and (max-width: 782px) { 
		.hidden-xs {
			display: none !important;
		}

		.hidden-lg {
			display: block !important;
		}

		.kt-notes .kt-notes__items .kt-notes__item .kt-notes__content .kt-notes__body {
			padding-right: 0;
		}

		.kt-earn__points {
			margin-top: 20px;
   			margin-bottom: 40px;
		}

		.kt-available__card .kt-portlet__body {
			justify-content: space-between;
			flex-wrap: wrap;
		}

		.gift-card article {
			padding: 40px 0 30px;
		}

		.kt-portlet .kt-portlet__body {
			padding: 25px 15px 0;
		}

		.kt-earn__points .kt-portlet__head .kt-portlet__head-title {
			font-size: 22px;
		}
	}
	@media screen and (max-width: 430px) { 
		.kt-available__card .kt-portlet__body > div {
			width : 48%;
		}

		.gift-card_signup .entry-title {
			width: 320px;
		}
	}

</style>
<?php get_footer(); ?>
