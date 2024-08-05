<?php
    /**
     * The template for displaying product content in the single-product.php template
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 3.6.0
     * 
     */

    defined( 'ABSPATH' ) || exit;

    global $product;

    /**
     * Hook: woocommerce_before_single_product.
     *
     * @hooked woocommerce_output_all_notices - 10
     */
        do_action( 'woocommerce_before_single_product' );

    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }

?>