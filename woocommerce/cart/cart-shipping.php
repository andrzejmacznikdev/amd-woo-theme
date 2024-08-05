<?php
    /**
     * Shipping methods display
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 8.8.0
     * 
     */

    defined('ABSPATH') || exit;

    $formatted_destination    = isset( $formatted_destination ) ? $formatted_destination : WC()->countries->get_formatted_address( $package['destination'], ', ' );
    $has_calculated_shipping  = ! empty( $has_calculated_shipping );
    $show_shipping_calculator = ! empty( $show_shipping_calculator );
    $calculator_text          = '';
    $checkout = wc_get_checkout_url() ;
?>
<div class="review-order__check flex flex-col p-rel gap-30">
    
</div>