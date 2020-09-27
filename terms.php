<?php
	include_once("admin/core/init.inc.php");

	function esc_attr($attr){ return htmlspecialchars($attr, ENT_COMPAT, 'UTF-8'); }
		
	$configs = new functions($dbo);
	
	$APP_NAME = $configs->getConfig('APP_NAME');

?><!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico<?php //echo $configs->getConfig('SITE_FAVICON'); ?>" />

        <meta charset="utf-8" />
        <title><?php echo $APP_NAME; ?> - Terms </title>
        <meta name="description" content="This terms reflect how our website works. This help defines the relationship between our service and you.">
            
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
								
                                <div class="kt-page__info kt-terms kt-container">
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<h1 class="kt-portlet__head-title text-center">Terms of Service</h1>
										</div>
										<div class="kt-portlet__body">                  
                                            <div class="kt-terms_first-paragh">
                                                <p>
                                                    This terms reflect how our website works. This help defines the relationship between our service and you.<br/>
                                                    The dominoRewards.com website, is a company that is located in USA. 
                                                    By accessing to our website information services and using their content, 
                                                    we assume that you acknowledge and fully agree that you have read and understood the following terms of service 
                                                    and agree to be bound by them. <br/>
                                                    Please do not use the dominoRewards.com website if you do not agree with these terms of service.
                                                    The terms 'us', 'website', 'company', 'we', 'our' refer to dominoRewards.com website.
                                                </p>
                                            </div>                  
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Cookies</button>
                                                <p class="show">
                                                    By using our website you agree to the use of cookies to allow us remember your 
                                                    device in accordance with our privacy policy.
                                                    The use of cookies is essential to offer you the services you have requested and we will be able to remember your settings when you return to our website.  
                                                </p>
                                            </div>
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Licence</button>
                                                <p>
                                                    We and/or its licensors keep and reserve any intellectual property rights for all materials that we have on name.
                                                    You must not reprint, duplicate, or sell any material from link. Except where otherwise stated.
                                                </p>
                                            </div>
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">User comments</button>
                                                <p>
                                                    Our website may include communication channels to enable you comment, post, exchange opinions and information. It does not represent our view nor our opinion. As well as they are neither endorsed nor controlled by us, and these comments should not be considered reviewed or approved by the us.  
                                                    Name has the right to edit or remove any comment that can be offensive, harmful or inappropriate to these terms and services.
                                                </p>
                                            </div>
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Hyperlinking to our content</button>
                                                <p>
                                                    Some hyperlinks or referenced websites in the dominorewards.com information services may take you to third party websites.<br/>
                                                    The following organizations may be linked to our website without prior written approval:<br/>
                                                    <span class="ml-4">
                                                        1. Government agencies<br/>
                                                    </span>
                                                    <span class="ml-4">
                                                        2. Search engines<br/>
                                                    </span>
                                                    <span class="ml-4">
                                                        3. News organizations<br/>
                                                    </span>
                                                    <span class="ml-4">
                                                        4. Online directory distributors when they list us in the directory may link to our web site in the same manner as they hyperlink to the web sites of other listed businesses<br/>
                                                    </span>  
                                                    <span class="ml-4">
                                                        5. Systemwide accredited businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our web site.<br/>
                                                    </span><br/>
                                                    We may approve some requested links from these type of companies as long as the link will not harm our business or it does not have an unacceptable register or history with us.<br/>
                                                    These organizations are : <br/>
                                                    Commonly known consumer and/or business information sources such as chambers of commerce, American automobile association, AARP and consumers union. Com community websites. <br/>
                                                    Associations or other groups representing charities. Accounting, law and consulting firms whose primary clients are companies. Educational institutions and trade associations.<br/>
                                                    If you are interested in hyperlinking and you are among the organizations listed above you can email us. <br/>
                                                    We would like you to include your name, the organization's name, contact information, the URL of your website, and a list of the URLs that you intend to link to our website. <br/>
                                                    Please note that it can take up to 2-3 weeks to hear back from us.
                                                    if you get approved to hyperlink you may use the name of our company, the uniform resource locator but not any of our logos, designs, or slogans. 

                                                </p>
                                            </div>                                            
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Iframes</button>
                                                <p>
                                                    You cannot modify or create frames on our website that can affect the appearance of the website. Also, If we reasonably believe that any of your links breaches the terms. We reserve the right to take down some or all the links from our website or ask you to do so. 
                                                    We may change the linking terms, for any reason at any time. <br/>
                                                    Please review these terms periodically for any change may occur. You fully agree to be bound by these Terms by continuing using our website.
                                                </p>
                                            </div>                                         
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Removal of links from our website</button>
                                                <p>
                                                    Please do not hesitate to get in touch with us about any question regarding some links on our website that is objectionable or about these terms. <br/>
                                                    We will take your request and your questions into consideration.
                                                    We try to make sure that all the terms and information on our website is up to date and correct, But take into account that we cannot ensure its preciseness to its fullest, and we make no representation or warranty of any kind about the accuracy or completeness of any information on our website.
                                                </p>
                                            </div>                                    
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Content liability</button>
                                                <p>
                                                    We have no liability and we are not responsible for any content of any information may appear on our website. 
                                                    In addition to that, we will not be liable for any damages suffered by you or any third party, including direct or indirect, incidental, punitive, particular or significant damages.
                                                </p>
                                            </div>                                
                                            <div class="kt-page__info-item">
                                                <button class="kt-terms_item">Disclaimer</button>
                                                <p>
                                                    You agree that your use of our website and our services and our information is solely at your own risk.<br/>
                                                    We assume no liability or responsibility for :<br/>
                                                    <span class="ml-4">1. any personal injury, property damage, or death resulting from your use of our website in general.</span> <br/>
                                                    <span class="ml-4">2. Inaccuracies of the content.</span><br/>
                                                    <span class="ml-4">3. Unapproved access to use any personal or financial information.</span><br/>
                                                    <span class="ml-4">4. Any viruses or trojan that may be transmitted by any third-party.</span><br/>
                                                    Please note that at any time, we may, in our sole discretion, end our legal agreement with you. <br/>
                                                    Additionally, we provide a free of charge service as a result we will not be responsible for any loss.

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
        <script type="text/javascript">
            $( document ).ready(function() {
                $('.kt-terms_item').on("click", function() {
                    $(this).next().slideToggle();
                });
            });
        </script>
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>