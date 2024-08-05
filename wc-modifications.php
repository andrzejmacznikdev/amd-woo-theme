<?php
    /**
     * WooCommerce modifications
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     */

    function wc_modify()
    {
        // Remove Woo Styles
            add_filter('woocommerce_enqueue_styles', '__return_empty_array');
        
        // Product box in loop
            // Product link open
                remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 10);
                add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open_custom', 10);
            // Thumbnail
                remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
                add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail_custom', 10);
            // Product title
                remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
                add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_custom', 10);
            // Product link closed
                add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);
            // Product Price variants and add to cart

            // Add product author

            // Add to basket

        // FUNCTIONS
            // Link open in loop
                if(! function_exists('woocommerce_template_loop_product_link_open_custom')) {
                    /**
                     * Insert the opening anchor tag for products in the loop
                     */
                    function woocommerce_template_loop_product_link_open_custom() {
                        global $product;
                        $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
                        echo '<a href="'. esc_url($link) . '" class=" flex flex-col p-rel loop-product-link woocommerce-LoopProduct-link woocommerce-loop-product__link gap-20">';
                    }
                }

            // Thumbnail
                if(! function_exists('woocommerce_template_loop_product_thumbnail_custom')) {
                    /**
                     * Product thumbnail for the loop
                     */
                    function woocommerce_template_loop_product_thumbnail_custom() {
                        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        echo '<div class="product-box-img">';
                        echo woocommerce_get_product_thumbnail();
                        echo '</div>';
                    }
                }

            // Product title
                if(! function_exists('woocommerce_template_loop_product_title_custom')) {
                    /**
                     * Show product title in loop.
                     */
                    function woocommerce_template_loop_product_title_custom() {
                        echo '<div class="product-box-title main-header h5">';
                        $title = get_the_title();
                        $newTItle = wp_trim_words($title, 10);
                        echo $newTItle;
                        echo'</div>';
                    }
                }
            // Product link close
                if( ! function_exists('woocommerce_template_loop_product_link_close')) {
                    /**
                     * product link close
                     */
                    function woocommerce_template_loop_product_link_close() {
                        echo '</a>';
                    }
                }
    }

    add_action('wp', 'wc_modify');