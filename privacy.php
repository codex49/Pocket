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
		<title><?php echo $APP_NAME; ?> - Privacy Policy</title>
		<meta name="description" content="DominoRewards is committed to maintaining the privacy of your personal information when you visit our website. This Privacy Policy describes how we treat the information collected from you in connection with your use of our Site">    
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
											<h1 class="kt-portlet__head-title text-center">Privacy Policy</h1>
										</div>

    <div class="kt-pricacy kt-portlet__body">                   
        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>No Selling Of Personal Data</h3>
                    <p>
                        We assure you that we care about your personal data and that this privacy notice applies to any information obtained through your use of our website.
                        Any personal information that is provided by the user is kept safe and treated as confidential information.
                        We make sure that your personal data are not being sold nor promoted by our website. 
                        Furthermore, we are not retaining your personal data for longer than is necessary and we hold it only for the purposes for which it was first obtained.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Password</h3>
                    <p>
                        During registration you may be required to provide some of your information and to use a password to protect your information from other users.
                        The access to and the use of password is restricted to authorized users only. Plus, it is decoded and converted into a hashed password and stored cryptographically.
                    </p>
                </div>
            </div>
        </div>              
        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Surveys and Offers</h3>
                    <p>
                        Sometimes, personal information may be requested while taking up some surveys. We guarantee you that no personal information is divulged. And we only receive a notification of the termination of the survey.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>General Data Protection Regulation (GDPR)</h3>
                    <p>
                        We are strictly respecting the principles of the General Data Protection Regulation (GDPR).
                        This privacy notice explains your rights in this matter on how we use your data that is collected during and following your visits to our website.
                    </p>
                </div>
            </div>
        </div>     

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Responsible Parties</h3>
                    <p>
                        We may share any personal information with our reliable third parties, but we prohibit them from using your personal data for their own aims and goals.
                        We may also expose your information as required by law, when necessary, to guarantee our tax assessment or when it is important to protect our legal rights.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>No Email Spams</h3>
                    <p>
                        We strictly abide by the anti-spam regulations. No mail is sent to you without your permission.
                        You may choose the type of email you want to receive while signing up on the website.
                        Also, you are bound to no contract, and you can unsubscribe the email anytime you want.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="kt-pricacy_item">
                    <h3>Cookie Policy</h3>
                    <p>
                        Cookies are essential today in any online company. They are necessary for technical reasons. And the use of the cookies have been limited to the capacities that are significant to the action of our company.
                        We also allow trustworthy third parties to get access to cookies including embedded scripts for purposes of sending more appropriate offers to you. For this reason, you give your consent as soon as you enable the cookie option over the website.
                    </p>
                </div>
            </div>
        </div>  

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Email Address</h3>
                    <p>
                        Your email address is used to send welcoming email and to verify the password and username.
                        It is essential that you give us a working email address since that is where we will send your purchase confirmation, download links, support and product notices.
                        We may share your email with trusted platforms like Facebook or Google for future advertisements purposes.
                        Please note that you can unsubscribe at any time you want.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>IP Address</h3>
                    <p>
                        All devices that are connected to the internet are given special Internet Protocol (IP) address that differs from any another device. We may keep a record of the IP addresses that visited our website although we may never use them. 
                        We may utilize the information provided by your IP for variety of purposes such us detecting unauthorized activities, learning from your behavior to improve our features and services for you. 
                        We may not use and share your location information with our third-party organizations.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Password</h3>
                    <p>
                        Passwords are generally set to prevent other users from accessing your personal details.
                        We never store your password in raw form. As soon as you update your password with us, we convert into a hashed password. Such cryptographically converted passwords are extremely hard to break down again to raw form.
                        We do not share your password to any third party organization.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Device ID</h3>
                    <p>
                        Each mobile device has its own string of numbers and letters that identifies it. We also collect your Device ID when you visit our website to detect any suspicious and fraudulent activity that may harm both our users and us. 
                        We may use this information and share it with trusted individuals or associate organizations to measure the effectiveness of our services, to observe and to track conversions.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>User Agents</h3>
                    <p>
                        We do not share any information regarding your user agent to third-party organizations, also we may store and detect information from User Agent to prohibit any kind of unauthorized activities.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Account IDs</h3>
                    <p>
                        The account ID acts as a unique identifier for each account that you set up. We may use this Account IDs to identify your account to associate websites.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Right To View Personal Data</h3>
                    <p>
                        You have the right to get access to your personal data we held about you, as well as to ask and/or obtain any details about your personal information.
                        If you have queries about your personal data, you can contact us using the same email that you have used the first day to register. We will email you your personal data as soon as possible.
                        Please understand before we can process your request we may have to verify your identity. 
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Right To Control Your Data</h3>
                    <p>
                        We respect individual privacy rights such as control, update and correct your personal data.
                        You have the right to object to us or tell us to stop processing your personal data, also to request the deletion of your information.
                        It should be pointed out that we cannot allow fraudulent activities. As a result we cannot block the entire process but if you want to practice your entire right of making changes in your data you may close your account permanently.
                        If you have any questions about controlling, updating, blocking your information please visit the "Contact Us" for more information and instructions to contact us.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Your Consent</h3>
                    <p>
                        Any information that can reveal your political views, sexual orientation, ethnic origin... It is considered sensitive personal information. if we ask for this kind of information you will be considered to have explicitly consented to us processing that sensitive personal information as it is stated in The General Data Protection Regulation.
                        We may share personal information with third parties. However, we are not responsible for the privacy of practices employed by other websites. we ask you to kindly go through the policies of third parties as well. 
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="kt-pricacy_item">
                    <h3>Right To Be Forgotten</h3>
                    <p>
                        You have the right to ask us to delete your personal data from our website if it is no longer needed for the purposes we originally indicated, collected or processed it. As well as if id does not enable us to detect or avoid any kind certain kinds of fraud.
                        You can delete your account permanently anytime you would like to. Also your account can be deleted automatically if it remains inactive for more than three months along with your personal data.
                        Take into consideration that you will lose your points if you deleted your account.
                    </p>
                </div>
            </div>
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