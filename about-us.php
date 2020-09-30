<?php
	include_once("admin/core/init.inc.php");

	function esc_attr($attr){ return htmlspecialchars($attr, ENT_COMPAT, 'UTF-8'); }
		
	$configs = new functions($dbo);
	
	$APP_NAME = $configs->getConfig('APP_NAME');

?><!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <!-- Favicon -->
		<link rel="shortcut icon" href="admin/assets/images/favicon.ico" />

		<meta charset="utf-8" />
		<title>About Us, Our Vision And History - DominoRewards</title>
		<meta name="description" content="Our company started in 2020, with a mission of providing you with our best service and help you earn your favorite gift cards, while protecting you from any scam that may occur">

	    <?php include_once 'includes/global_header_scripts.php'; ?>
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-home kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin:: Page -->
		
		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="./">
					<img alt="Logo" src="admin/images/<?php echo esc_attr($configs->getConfig('SITE_LOGO_DARK')); ?>" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
			</div>
		</div>
	    
	    <!-- end:: Header Mobile -->
	    
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				    
					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container ">

							<!-- begin:: Branding -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<a class="kt-header__brand-logo" href="./">
									<img alt="Logo" src="admin/images/<?php echo esc_attr($configs->getConfig('SITE_LOGO_LIGHT')); ?>" class="kt-header__brand-logo-default" />
									<img alt="Logo" src="admin/images/<?php echo esc_attr($configs->getConfig('SITE_LOGO_DARK')); ?>" class="kt-header__brand-logo-sticky" />
								</a>
							</div>
							<!-- end:: Branding -->

							<!-- begin: Header Menu -->
							<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
									<ul class="kt-menu__nav ">
									</ul>
								</div>
							</div>
							<!-- end: Header Menu -->

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">
								<a href="login" class="topbar-icon kt-header__topbar-icon">Log In</a>
							</div>
							<!-- end:: Header Topbar -->
						</div>
					</div>
					<!-- end:: Header -->
					
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


							<!-- begin:: Content -->
							<div class="kt-grid__item kt-grid__item--fluid">
								
								<!--Begin::Notices -->
								<?php include_once("admin/controller/notices.php"); ?>
								<!--End::Notices -->	
								
                                <div class="kt-page__info kt-container">
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<h1 class="kt-portlet__head-title text-center">About us</h1>
										</div>
										<div class="kt-portlet__body">                   
    <div class="kt-page__info-item">
        <h3>WHO WE ARE</h3>
        <p>
            Our company started in 2020, with a mission of providing you with our best service and help you earn your favorite gift cards, while protecting you from any scam that may occur.<br />
             We are designed to protect our users from any harms and risks by believing in clarity and clearness. 
        </p>
    </div>
    <div class="kt-page__info-item">
        <h3>OUR TEAM</h3>
        <p>
            We are a passionate team that is filled with talented professionals dedicated to come up with inspired solutions that will help you earn gift cards.<br />
            We use our creativity and diversity to drive your goal forward. So that your journey to earn the cards will be faster and better. 
        </p>
    </div>
    <div class="kt-page__info-item">
        <h3>OUR VISION</h3>
        <p>
            Our Website promote the idea that gaining your gift card in today's world that is full of scammers starts with a safe website. We can provide you the protection needed and guarantee you the safety of your information.<br />
            We have established a custom roadmap to meet the expectations of each of our customers and guide them through a safe path.
        </p>
    </div>
    <div class="kt-page__info-item">
        <h3>What WE DO ?</h3>
        <p>    
            Our ambition is to accompany you and make sure that our users are protected. By facilitating the process that will lead you to earn some exciting prizes and without paying anything. The only thing you have to do is complete the tasks.<br />
            Our team have the ability to navigate complexity to make it easier and risk-free for you to use our website and earn points.
        </p>
    </div>
    <div class="kt-page__info-item">
        <h3>WHY WE DO IT</h3>
        <p>        
            Since day one, DominoRewards.com primary committed to protecting  our website's users in everything it does by limiting the amount of data we ask for to provide you with our service, to encrypting it and implement features to keep your information from exposing.<br />
            We are here to give you gift cards in exchange for investing your 10 minutes into every day's tasks that you do online. <br />
            Earn these points through answering surveys and playing games...
        </p>
    </div>
    <div class="kt-page__info-item">
        <h3>OUR ADVERTISERS</h3>
        <p>        
            As we provide top quality service to our advertisers as well as to our users across the world. <br />
            This make us becoming experts in our field. Our website promotes the idea that growing a brand in today's start with trust and professionalism. <br />
             We will be so fortunate to work with you and be sure to attain the given tasks. Feel free to contact us. We will be happy to collaborate.
        </p>
    </div>
										</div>
									</div>
								</div>
											
							</div>

							<!-- end:: Content -->
						</div>
					</div>
                    
                    <?php include_once 'includes/dashboard_footer.php'; ?>
                    
				</div>
			</div>
		</div>

		<!-- end:: Page -->
		
	    <?php include_once 'includes/dashboard_scroll_to_top.php'; ?>
		
	    <?php include_once 'includes/global_footer_scripts.php'; ?>
	    

		<!--begin::Page Vendors(used by this page) -->
		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>