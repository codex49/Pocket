<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

    
	$pagename = 'home';
	$container = '';
    
    include_once("admin/core/init.inc.php");
	include_once("admin/controller/controller-signup.php");

?><!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <?php include_once 'includes/dashboard_title.php'; ?>	    
	    <?php include_once 'includes/global_header_scripts.php'; ?>
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-home kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin:: Page -->
		
		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.php">
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
								<a class="kt-header__brand-logo" href="index.php">
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
							<div class="kt-header__topbar kt-grid__item">
								<a href="./dr" class="topbar-icon kt-header__topbar-icon blog">BLOG</a>
							</div>

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">
								<a href="login" class="topbar-icon kt-header__topbar-icon">LOGIN</a>
							</div>
							<!-- end:: Header Topbar -->
						</div>
					</div>
					<!-- end:: Header -->
					
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Home Header -->
							<?php include_once 'includes/home_header.php'; ?>
							<!-- end:: Home Header -->

							<!-- begin:: Content -->
							<div class="kt-grid__item kt-grid__item--fluid">
								
								<!--Begin::Notices -->
								<?php include_once("admin/controller/notices.php"); ?>
								<!--End::Notices -->	
								
								<!--Begin:: Widgets/How to earn-->
									<?php include_once 'includes/home_how_to_earn.php'; ?>
								<!--End:: Widgets/How to earn-->


								<!--Begin:: Widgets/How it Works?-->
									<?php include_once 'includes/home_how_it_work.php'; ?>
								<!--End:: Widgets/How it Works?-->	


								<!--Begin:: Widgets/Available Gift Cards-->
									<?php include_once 'includes/home_available_gift_cards.php'; ?>
								<!--End:: Available Gift Cards-->							
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
		
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDG4B3M"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script type="text/javascript">
            $( document ).ready(function() {
				const $msgError = $('.kt-signup__error').text().trim();
				const $email =  $('.signup_email input');

                $(window).scroll(function(){
					if ($(window).scrollTop() >= 150) {
						$('body').addClass('kt-header--minimize');
					}
					else {
						$('body').removeClass('kt-header--minimize');
					}
				});

				//Tab Available Gift Cards
				$('.available__card-filter').on('click', function () {
					var currentClass = $(this).text().trim();
					$(this).addClass('active').siblings().removeClass('active');
					$('.gift-card').removeClass('kt-hidden').not( '.' + currentClass ).addClass('kt-hidden');
				})

				$('.available__card-reset').on('click', function (event) {
					event.stopPropagation();
					$('.gift-card').removeClass('kt-hidden');
				})

				if ($msgError == 'Empty user full name') {
					$('.signup_name').addClass('error-input');
				} else if ($msgError == 'Wrong Email' || $msgError == 'Username already taken' || $msgError == 'Email is already registered') {
					$('.signup_email').addClass('error-input');
				} else if ($msgError == 'Incorrect password') {
					$('.signup_password').addClass('error-input');
				}
				
				$email.keypress(function(){
					$('.signup_email').removeClass('error-input');
				});
            });
        </script>
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>