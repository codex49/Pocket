<?php
	$pagename = 'redeem';
	$container = '';
	
    include_once("includes/user.inc.php");
    
    // Redeem List
    $payouts = new redeem($dbo);
    $payoutList = $payouts->getPayouts();
    $payoutList = $payoutList['payouts'];
    
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
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="redeem" class="kt-subheader__breadcrumbs-link">Redeem</a>
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

								<!--Begin:: Redeem -->
								
								<!--Begin::Row -->
								<div class="row">
								    
								    <?php   foreach($payoutList as $payout){ if($payout['payout_status'] == "Active"){ ?>
								    
                                    <div class="col-xl-3">
                                        <!--Begin:: Redeem Item-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head kt-portlet__head--noborder"></div>
                                            <div class="kt-portlet__body">
                                                <div class="kt-widget kt-widget--user-profile-2">
                                                    <div class="kt-widget__head">
                                                        <span class="kt-media kt-media--lg kt-media--brand kt-margin-r-5 kt-margin-t-5">
                                                            <img class="kt-widget__img" src="admin/images/<?php echo esc_attr($payout['payout_thumbnail']); ?>" alt="<?php echo esc_attr($payout['payout_title']); ?>">
                                                        </span>
                                                        <div class="kt-widget__info">
                                                            <a href="#" class="kt-widget__username"><?php echo esc_attr($payout['payout_title']); ?></a>
                                                            <span class="kt-widget__desc"><?php echo esc_attr($payout['payout_subtitle']); ?></span>
                                                        </div>
                                                    </div><br>
                                                    <div class="kt-widget__body">
                                                        <div class="kt-widget__item">
                                                            <div class="kt-widget__contact">
                                                                <span class="kt-widget__label">Name :</span>
                                                                <span class="kt-widget__data"><?php echo esc_attr($payout['payout_title']); ?></span>
                                                            </div>
                                                            <div class="kt-widget__contact">
                                                                <span class="kt-widget__label">Amount :</span>
                                                                <span class="kt-widget__data"><?php echo esc_attr($payout['payout_amount']); ?></span>
                                                            </div>
                                                            <div class="kt-widget__contact">
                                                                <span class="kt-widget__label">Points Required :</span>
                                                                <span class="kt-widget__data"><?php echo esc_attr($payout['payout_pointsRequired']); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-widget__footer">
                                                        <button type="button" onclick="<?php if($req_user_info['points'] >= $payout['payout_pointsRequired']){ echo "showRedeemAlert('".$payout['payout_id']."', '".$payout['payout_title']."', '".$payout['payout_subtitle']."', '".$payout['payout_message']."')"; }else{ echo 'showNoEnoughPointsAlert()'; } ?>" class="btn btn-label-brand btn-lg btn-upper">Redeem</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End::Redeem Item--> 
                                    </div>
                                    
                                    <?php }} ?>
									
								</div>
								<!--End::Row-->

								<!--End:: Redeem -->
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