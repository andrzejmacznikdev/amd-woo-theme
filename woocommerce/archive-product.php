<?php
    /**
     * The Template for displaying product archives, including the main shop page which is a post type archive
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 8.6.0
     * 
     */

    defined( 'ABSPATH' ) || exit;

    get_header( 'shop' );

?>
<section class="mt-h p-rel shop-page">
    <div class="container">
        <div class="grid-columns p-rel">
            <div class="grid col-1-3 md-hide">
                <div class="flex flex-row prel shop-page-sidebar">

                </div>
            </div>
            <div class="grid col-4-12 col-md-1-8 col-sm-1-6">
                <div class="flex flex-col p-rel gap-30">
                    <div class="flex flex-row p-rel jc-sb sm-flex-col gap-20 sm-gap-20">
                        <div class="main-header h1">
                           <h1>
                                <?php
                                    if(function_exists('is_shop') && is_shop()) {
                                        echo pll_e('Sklep', 'AMD Woo Theme');
                                    } else {
                                        single_cat_title();
                                    }
                                ?>
                           </h1>
                        </div>
                        <div class="flex flex-row p-rel shop-page-content">
                            <div class="flex p-rel shop-page-content-orderby md-hide">
                                <?php
                                    do_action('woocommerce_before_shop_loop');
                                ?>
                            </div>
                            <div class="shop-page-content-filters md-show flex flex-row ai-c gap-10" id="filters-mobile-title">
                                <div class="main-header h5">
                                    <?= pll_e('Kategorie', 'AMD Woo Theme');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-page-content-list flex flex-row flex-wrap p-rel gap-x-20 gap-y-50">
                        <?php
                            if(woocommerce_product_loop()) {
                                woocommerce_product_loop_start();
                                if(wc_get_loop_prop('total')) {
                                    while(have_posts()) {
                                        the_post();
                                        /**
                                         * Hook: woocommerce_shop_loop.
                                         */
                                        do_action('woocommerce_shop_loop');
                                        wc_get_template_part('content', 'product');
                                    }
                                }
                                woocommerce_product_loop_end();
                                /**
                                 * Hook: woocommerce_after_shop_loop.
                                 * 
                                 * @hooked woocommerce_pagination - 10
                                 */
                                do_action('woocommerce_after_shop_loop');
                            } else {

                            }
                        ?>
                    </div>
                    <div class="shop-page-description flex flex-col p-rel gap-30">
                        <?php
                            /**
                             * Hoowk: woocommerce_archive_description.
                             * 
                             * @hooked woocommerce_taxonomy_archive_description - 10
                             * @hooked woocommerce_product_archive_description - 10
                             */
                            do_action('woocommerce_archive_description');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer('shop');