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