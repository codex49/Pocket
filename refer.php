<?php
	$pagename = 'refer';
	$container = '';
    
    include_once("includes/user.inc.php");
    
    // User Refer Code
	$userReferCode = $req_user_info['refer'];
	
	// User Refer URL
	$webRoot = $configs->getConfig('WEB_ROOT');
	$userReferURL = $webRoot.'/refer/?refer='.$userReferCode;
	if(substr($webRoot, -1) == "/"){ $userReferURL = substr($webRoot, 0, -1).'?refer='.$userReferCode; }
	
	// User's Referred Members
	$userreferredMembers = $configs->getUserReferredMembers($req_user_info['refer']);
	
	// User's Income from Referred Members
	$userIncomeFromReferredMembers = $configs->getUserReferIncome($req_user_info['login']);
	
	// defined refer reward
	$referReward = $configs->getConfig('REFER_REWARD');
    

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
											<a href="refer" class="kt-subheader__breadcrumbs-link">Refer & Earn</a>
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
								<div class="kt-hidden">
									<?php include_once("admin/controller/notices.php"); ?>
								</div>
								<!--End::Notices -->

								<!--Begin:: Refer & Earn -->
								
								<!--Begin::Row-->
								<div class="row">
								    
                                    <div class="col-lg-4">
                                        
                                        <!--begin:: Widgets/Quick Stats-->
                                        <?php include_once 'includes/dashboard_stats_refer.php'; ?>
                                        <!--end:: Widgets/Quick Stats-->
                                        
                                    </div>
                                    
                                    <div class="col-lg-8">
                                        
                                        <!--begin:: Widgets/Refer URL & Code-->
                                        <div class="kt-portlet kt-portlet--mobile">
                                			<div class="kt-portlet__head">
                                				<div class="kt-portlet__head-label">
                                					<h3 class="kt-portlet__head-title">Refer & Earn</h3>
                                				</div>
                                			</div>
                                			<div class="kt-portlet__body center">
                                			    <p class="refer-text">Earn unlimited rewards by referring your friends, family and followers. You'll earn <?php echo esc_attr($referReward); ?> points for every user you refer and your referal gets <?php echo esc_attr($referReward); ?> Points too.. Keep referring more friends and watch your earnings grow up !</p>
                                			    <div class="input-group input-group-lg refer-url">
                                			        <input type="text" class="form-control" value="<?php echo esc_attr($userReferURL); ?>" disabled="disabled">
                                			        <div class="input-group-append"><a href="#" class="btn btn-secondary" id="sweetalert_refer_url_copy" onclick="copyReferURLToClipboard('<?php echo esc_attr($userReferURL); ?>')"><i class="fas fa-copy"></i></a></div>
                                        		</div>
                                        		<br><br>
                                        		<p class="refer-text">Share above Referral Link or unique Referral Code <code><a href="#" id="sweetalert_refer_code_copy" onclick="copyReferCodeToClipboard('<?php echo esc_attr($userReferCode); ?>')"><?php echo esc_attr($userReferCode); ?></a></code> to your Friends & Family.</p>
                                        		<br><br>
                                        		<div class="refer-share">
                                        		    <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_attr($userReferURL); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
														<button type="button" class="btn btn-facebook">
															<i class="socicon-facebook"></i>
															Share on Facebook
														</button>
                                        			</a>
                                        			<a class="share-twitter" href="http://twitter.com/share?text=Earn free rewards and gift cards with @<?php echo esc_attr($configs->getConfig('APP_NAME')); ?>. Join me today : &amp;url=<?php echo esc_attr($userReferURL); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
                                        			    <button type="button" class="btn btn-twitter">
															<i class="socicon-twitter"></i>
															Share on Twitter
														</button>
                                        			</a>
                                        		</div>
                                			</div>
                                		</div>
                                        <!--end:: Widgets/Refer URL & Code-->
                            		
                                    </div>
                                    
								</div>
								<!--End::Row-->
								
								<!--Begin:: Widgets/How to Refer-->
								<?php include_once 'includes/dashboard_how_to_refer.php'; ?>
								<!--End:: Widgets/How to Refer-->

								<!--End:: Refer & Earn -->
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