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
		<link rel="shortcut icon" href="admin/assets/images/favicon.ico<?php //echo $configs->getConfig('SITE_FAVICON'); ?>" />

		<meta charset="utf-8" />
		<title><?php echo $APP_NAME; ?> - Contact us</title>
		<meta name="description" content="Feel free to contact us, if you are looking for help or have any suggestions or complaints">    
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
											<h1 class="kt-portlet__head-title text-center">Contact us</h1>
										</div>
										<div class="kt-portlet__body">                   
                                        <div class="kt-page__info-item">
                                            <h3>For advertisers</h3>
                                            <p>
                                                We would like to ensure you that we are among the best in advertising. If you would like to promote your products or services, we are employing our website as a platform to help you reach a wider public to achieve your desired result. 
                                                Our platform is custom-built and we can happily adjust our website to work with your system and integrations that you have from your side.
                                                Thank you for your interest in our website. Please email us or contact us by filling the form below to help us understand your need.
                                            </p>
                                        </div>
                                        <div class="kt-page__info-item">
                                            <h3>For users</h3>
                                            <p>
                                                If you are our user, we would like to thank you for the trust you have placed in us. However, we would like also to apologize for any inconvenience may be caused while using our website.  
                                                Feel free to contact us, if you are looking for help or have any suggestions or complaints. We will get back to you as fast as possible.
                                            </p>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <hr>
                                                <h4>Contact Form</h4>
                                            <hr>
                                            <br>
                                        </div>

                                        <div class="col-md-12 text-center mb-4">
                                            <i class="ion-ios-email-outline" style="font-size: 30px;"></i>
                                            <p>admin@dominorewards.com</p>
                                        </div>

                                        <form class="contactForm" id="contactForm" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label for="name">Name:</label>
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    <div class="validation"></div>
                                                    <input type="hidden" name="contactUsForm" value="1">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">Subject:</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea id="message" class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                <div class="validation"></div>
                                            </div>
                                            <div id="loader" class="text-center" style="display: none;">
                                                <div class="spinner-grow spinner-grow-sm"></div>
                                                <div class="spinner-grow spinner-grow-sm"></div>
                                                <div class="spinner-grow spinner-grow-sm"></div>
                                                <div class="spinner-grow spinner-grow-sm"></div>
                                                <div class="spinner-grow spinner-grow-sm"></div><br>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary btn-elevate kt-login__btn-primary" type="submit" title="Send Message">Send Message</button>
                                            </div>
                                        </form>


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