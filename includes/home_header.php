<?php
	if (isset($_GET["email"])) {
		$email = $_GET["email"];
	}
?>
							<!-- begin:: Subheader -->
							<div class="kt-container home-header" id="kt_subheader">
								<div class="row">
									<div class="col-sm-12 col-lg-6 kt-subheader__main text-center">                                        
                                        <h1 class="home-header_title">
                                            Earn Points,</br>
											Get Free Gift Cards!
										</h1>
										<img class="home-header_image" src="assets/media/images/gift-cards.png" alt="free gift cards"/>
									</div>
									<div class="col-sm-12 col-lg-6 kt-subheader_f_toolbar">
									<!--begin::Signin-->
									<div class="kt-login__form" id="home-login__form">
										<div class="kt-login__title">
											<h3 class="kt-signup__title">Start Today - it's Free!</h3>
										</div>
										<?php if ($error){ ?>
											<div class="alert alert-danger kt-signup__error">
												<?php echo esc_attr($error_message); ?>
											</div>
											<?php } ?>
												<?php if ($success){ ?>
													<!-- <div class="alert alert-success">
														<?php // echo esc_attr($success_message); ?>
													</div>
													<div class="signup-sucess-msg">
														<span class="kt-login__signup-label">You can now SignIn here : </span>&nbsp;&nbsp;
														<a href="login.php" class="kt-link kt-login__signup-link">Sign In!</a>
													</div> -->

													<?php }else{ ?>

														<div id="signin_process"></div>
														<div id="signin_layout">

															<!--begin::Form-->
															<form class="kt-form m-0" name="signin_form" action="./" method="post" novalidate="novalidate" id="needs-validation kt_login_form">
																<input autocomplete="off" type="hidden" id="authenticity_token" name="authenticity_token" value="<?php echo helper::getAuthenticityToken(); ?>">
																<div class="form-group signup_name">
																	<input class="form-control" placeholder="Full Name" autocomplete="off" maxlength="30" id="fullname" name="fullname" type="text" value="<?php echo esc_attr($fullname); ?>" required="">
																</div>
																<div class="form-group signup_email">
																	<input class="form-control" placeholder="Email Address" autocomplete="off" maxlength="50" id="email" name="email" type="email" value="<?php echo esc_attr($email); ?>" required="">
																</div>
																<div class="form-group signup_password">
																	<input class="form-control" placeholder="Password" autocomplete="off" type="password" id="password" maxlength="20" name="password" required="">
																</div>
																<div class="form-group">
																	<input class="form-control" placeholder="Invitation code (optional)" autocomplete="off" maxlength="10" id="referer" name="referer" type="text" 
																														
																	<?php if($_SESSION[ "refererCode"] !=='' ){ echo 'readonly'; } ?> 
																		value="<?php if(isset($_REQUEST['refer'])){ 
																			echo esc_attr($_REQUEST['refer']); 
																		}else{
																			echo esc_attr($referer); } 
																		?>">
																</div>

																<!--begin::Action  -->
																<div class="kt-login__actions mb-2">
																	<button type="submit" id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary col-sm-12">Sign Up</button>
																</div>

																<!--end::Action-->
															</form>
															<!--end::Form-->

															<!--begin::Divider-->
															<div class="kt-login__divider">
																<div class="kt-divider">
																	<span></span><span>OR</span><span></span>
																</div>
															</div>
															<!--end::Divider-->

															<!--begin::Options-->
															<div class="kt-login__options mt-3">
																
																<?php if($configs->getConfig('FACEBOOK_LOGIN_WEB')){ ?>
																
																<a href="includes/oauth.php?provider=Facebook" class="btn btn-facebook kt-btn">
																	<i class="fab fa-facebook-f"></i>Facebook
																</a>
																
																<?php }
																if($configs->getConfig('GOOGLE_LOGIN_WEB')){ ?>
																
																<a href="includes/oauth.php?provider=Google" class="btn btn-google kt-btn">
																	<i class="fab fa-google"></i>Google
																</a>
																
																<?php } ?>
																
															</div>
															<!--end::Options-->
															
														</div>

														<?php } ?>

													</div>

												<!--end::Signin-->
									    </div>
								</div>
							</div>
							<!-- end:: Subheader -->