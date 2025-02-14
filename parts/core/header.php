<?php
    /**
     * Part of header
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;
    $mainLogo = get_field('main-logo','options');
    $banner_top_active = get_field('banner_top_active', 'options');
?>

<header class="site-header p-fix left-0 top-0 w-full zi-100" id="header">
    <div class="site-header_top">
        <div class="container">
            <div class="grid-columns">
                <div class="grid col-1-6">

                </div>
                <div class="grid col-7-12">

                </div>
            </div>
        </div>
    </div>
    <div class="site-header_bottom">
        <div class="container">
            <div class="grid-columns">
                <div class="grid col-1-2 col-md-1-3 site-header-logo h-full">
                    <div class="logo-link flex ai-c h-full p-rel">
                        <a href="<?= esc_url(home_url('/'));?>" rel="home">
                            <div class="logo-link-img flex">
                                
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end logo -->
                <!-- menu -->
                <div class="grid col-3-8 col-lg-2-6 h-full main-menu md-hide">
                    <?php 
                        wp_nav_menu(
                            [
                                'container'         =>  '',
                                'depth'             =>  3,
                                'fallback_cp'       =>  false,
                                'items_wrap'        =>  '<ul class="flex ai-c h-full menu-navigation flex-row gap-20">%3$s</ul>',
                                'theme_location'    =>  'primary_menu',
                                'walker'            =>  new Walker_Header_Menu(),
                            ]
                        );
                    ?>
                </div>
                <!-- end menu -->
                <!-- informations block -->
                <div class="grid col-9-12 col-lg-7-10 h-full md-hide jc-fe">
                    <div class="flex flex-row p-rel h-full">

                    </div>
                </div>
                <div class="md-grid-show col-md-6-8 col-sm-4-6 jc-fe h-full ai-c">
                    <div class="hamburger">
                        <div class="menu-bar menu-bar-top"></div>
                        <div class="menu-bar menu-bar-middle"></div>
                        <div class="menu-bar menu-bar-bottom"></div>
                    </div>
                </div>
                <!-- end informations -->
            </div>
        </div>
    </div>
</header>

<!-- mobile menu -->
<div class="mobileMenu top-0">
    <div class="mobileMenu__top">
        <div class="mobileMenu__top-logo">
           
        </div>
        <div class="mobileMenu__top-close" id="closeMobileMenu">
            
        </div>
    </div>
    <div class="mobileMenu__middle">
        <?php
            wp_nav_menu(
                [
                    'container'         =>      '',
                    'depth'             =>      3,
                    'fallback_cb'       =>      false,
                    'items_wrap'        =>      '<ul class="flex flex-column navigationMobile">%3$s</ul>',
                    'theme_location'    =>      'primary_menu',
                    'walker'            =>      new Walker_Header_Menu(),
                ]
            );
        ?>
    </div>
    <div class="mobileMenu__bottom">

    </div>
</div>