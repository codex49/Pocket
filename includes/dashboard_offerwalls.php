<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */
	 
	 // READ ME
	 // Wondering How to add new or custom offerwall ? Well, You can Add Custom Offerwall from Admin Panel itself <3
	 
	 
	 include_once("admin/controller/offerwalls-controller.php");
	 
?>
                                        <div class="offer-walls coupons kt-portlet kt-portlet--tabs">
                                            <h2 class="kt-portlet__title">Apply Coupons to Earn Points</h2>
                                            <div class="kt-portlet__head">
                                                <form class="coupons-redeem" name="signin_form" action="./" method="post">																
                                                    <div class="form-group flex">
                                                        <input class="form-control coupons-redeem_input" placeholder="Enter Coupon" autocomplete="off" maxlength="30" id="fullname" name="fullname" type="text" value="" required="">
                                                        <button type="submit" class="btn btn-primary btn-elevate">Redeem</button>
                                                    </div>
                                                </form>
                                                <div class="coupons-unlock">
                                                    <!-- <h3 class="text-center">Unlock Coupons</h3> -->
                                                    <div class="coupons-items">
                                                        <h3 class="coupons-items-title">
                                                            Unlock Coupons
                                                        </h3>
                                                        <div class="coupons-list">
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">50 POINTS</p>

                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 50 points.
                                                                    </p>
                                                                </div>

                                                                <button class="coupons-item_action coupon-unlock coupon-first">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">REDEEM</button>
                                                            </div>
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">150 POINTS</p>

                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 150 points.
                                                                    </p>
                                                                </div>

                                                                <button class="coupons-item_action coupon-unlock">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">UNLOCKED</button>
                                                            </div>
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">300 POINTS</p>

                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 300 points.
                                                                    </p>
                                                                </div>
                                                                
                                                                <button class="coupons-item_action coupon-unlock">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">REDEEM</button>
                                                            </div>
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">500 POINTS</p>
                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 500 points.
                                                                    </p>
                                                                </div>
                                                                
                                                                <button class="coupons-item_action coupon-unlock">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">REDEEM</button>
                                                            </div>
                                                            
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">700 POINTS</p>
                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 700 points.
                                                                    </p>
                                                                </div>
                                                                
                                                                <button class="coupons-item_action coupon-unlock">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">REDEEM</button>
                                                            </div>
                                                            
                                                            <div class="coupons-item">
                                                                <p class="coupons-item_title">1000 POINTS</p>
                                                                <div class="coupons-item_descrption">
                                                                    <p class="coupons-item_lock">PAYPRIZES50</p>
                                                                    <p class="coupons-item_unlock">
                                                                        Unlock this coupon to earn 1000 points.
                                                                    </p>
                                                                </div>
                                                                
                                                                <button class="coupons-item_action coupon-unlock">UNLOCK NOW</button>
                                                                <button class="coupons-item_action coupon-lock">REDEEM</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="offer-walls" class="offer-walls kt-portlet kt-portlet--tabs">
                                            <h2 class="kt-portlet__title">Earn points from our trusted partners offers</h2>
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-toolbar">
                                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right" role="tablist">
                                                        
                                                        <?php
                                                        foreach($active_offerwalls as $offerwall){
                                                            
                                                            $offerwall_type = $offerwall['offer_type'];
                                                            $offerwall_name = $offerwall['offer_title'];
                                                            $offerwall_image = esc_attr($offerwall['offer_thumbnail']);
                                                            $offerwall_show = "show_offerwall('".$offerwall_type."')";
                                                            $offerwall_active = isset($offerwall_active[$offerwall_type]) ? $offerwall_active[$offerwall_type] : '';
                                                            $point = rand(30, 100) * 100;
                                                            
                        echo '<li class="nav-item">'.                                                                 
                                    '<a class="nav-link" onclick="'.$offerwall_show.'" data-toggle="tab" href="#" role="tab" aria-selected="true">'.
                                    '<div class="nav-link_brand '.$offerwall_type.'">'.
                                        "<img src='admin/images/$offerwall_image' alt='$offerwall_name' />".
                                    '</div>'.
                                    '<div class="description">'.
                                        '<span class="nav-link_name">'.$offerwall_name.'</span>'.
                                        '<span class="nav-link_earn">Earn up to '.$point.' Points</span>'.
                                    '</div>'.
                                '</a></li>';                                                            
                                                            
                                                        } ?>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="kt-portlet__body kt-hidden">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="offerwall" role="tabpanel">
                                                        
                                                        <iframe src="<?php echo isset($initial_offerwall) ? $initial_offerwall : ''; ?>" frameborder="0" width="100%" height="2400" ></iframe>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
