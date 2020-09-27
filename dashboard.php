<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

     // Install Handler
	if (!file_exists('admin')) {
	    
	    include_once("includes/notice-admin-not-installed.php");
	    
		exit;
		
	}
    
	$pagename = 'dashboard';
	$container = '';

    include_once("includes/user.inc.php");
	
	$configs->updateAnalyticsSessions();
	
    // User Points
	$userCurrentPoints = $req_user_info['points'];
	$userRedeemedPoints = $configs->getUserRedeemedPoints($req_user_info['login']);
	$userTotalPoints = $userCurrentPoints+$userRedeemedPoints;
	
	// User's Referred Members
	$userreferredMembers = $configs->getUserReferredMembers($req_user_info['refer']);

?><!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <?php include_once 'includes/dashboard_title.php'; ?>
	    
	    <?php include_once 'includes/global_header_scripts.php'; ?>
	    
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

	    <?php include_once 'includes/dashboard_page_loader.php'; ?>

		<!-- begin:: Page -->
		
		<!-- begin:: Header Mobile -->
	    <?php include_once 'includes/dashboard_header_mobile.php'; ?>
	    <!-- end:: Header Mobile -->
	    
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				    
					<!-- begin:: Header -->
				    <?php include_once 'includes/dashboard_header.php'; ?>
					<!-- end:: Header -->
					
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Subheader -->
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container ">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">
											Dashboard </h3>
										<div class="kt-subheader__breadcrumbs">
											<a href="./" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="./" class="kt-subheader__breadcrumbs-link">Dashboard</a>
										</div>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="redeem" class="btn kt-subheader__btn-secondary">
												Redeem
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end:: Subheader -->

							<!-- begin:: Content -->
							<div class="kt-container  kt-grid__item kt-grid__item--fluid">
								
								<!--Begin::Notices -->
								<?php include_once("admin/controller/notices.php"); ?>
								<!--End::Notices -->

								<!--Begin::Dashboard -->
								
								<!--Begin::Row-->
								<div class="row">
                                    
                                    <div class="col-xl-12 order-md-1 order-lg-1 order-xl-1">
                                        
                                        <!--begin:: Widgets/Quick Stats-->
                                        <?php include_once 'includes/dashboard_stats_home.php'; ?>
                                        <!--end:: Widgets/Quick Stats-->
                                    </div>
                                    
									<div class="col-lg-12 order-md-2 order-lg-2 order-xl-2">
									    
										<!--begin:: Widgets/Offer Walls-->
										<?php include_once 'includes/dashboard_offerwalls.php'; ?>
										<!--end:: Widgets/Offer Walls-->
										
									</div>
                                    
									<!-- <div class="col-xl-4 col-lg-6 order-md-3 order-lg-3 order-xl-3"> -->
									<div class="kt-hidden">  
                                        <!--begin:: Widgets/Daily Checkin -->
										<?php if($configs->getConfig('DAILY_ACTIVE')){ include_once 'includes/dashboard_daily_checkin.php'; } ?>
                                        <!--end:: Widgets/Daily Checkin -->
									    
                                        <!--begin:: Widgets/New Feature -->
										<?php //if($configs->getConfig('WEB_SHOW_NEW_FEATURE_NOTICE')){ include_once 'includes/dashboard_new_feature.php'; } ?>
                                        <!--end:: Widgets/New Feature -->
                                        
                                        <!--begin:: Widgets/Announcements -->
										<?php //if($configs->getConfig('WEB_SHOW_ANNOUNCEMENT')){ include_once 'includes/dashboard_announcement.php'; } ?>
                                        <!--end:: Widgets/Announcements -->

                                        <!--begin:: Widgets/Recent Payouts -->
										<?php //if($configs->getConfig('WEB_SHOW_RECENT_PAYOUTS')){ include_once 'includes/dashboard_recent_payouts.php'; } ?>
                                        <!--end:: Widgets/Recent Payouts -->
									</div>
								</div>

								<!--End::Row-->

								<!--End:: Dashboard -->
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

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
		<script src="assets/js/daily-checkin.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>