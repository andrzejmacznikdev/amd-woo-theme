<?php
    /**
     * Template part for displaying s-products
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    
    
    defined('ABSPATH') || exit;

    use AMDWooTheme\Buttons;

    $small_header = get_sub_field('small_header');
    $header = get_sub_field('header');
    $link_button = get_sub_field('link_button');
    $choose_products = get_sub_field('choose_products');
    $separator_top = get_sub_field('separator_top');
    $separator_bottom = get_sub_field('separator_top');

    if($separator_top === 'yes') echo '<div class="sp"></div>';
?>

<div class="s-products">
    <div class="container">
        <div class="flex flex-col p-rel gap-30">
            <div class="flex flex-col p-rel gap-20">
                <div class="small-header">
                    <?= $small_header;?>
                </div>
                <div class="flex flex-row jc-sb">
                    <div class="main-header h2">
                        <?= $header;?>
                    </div>
                    <?php if(!empty($link_button['url'])):?>
                        <div class="button flex">
                            <?php Buttons::btnPrimary($link_button);?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="flex flex-row p-rel gap-20 flex-wrap">
                <?php
                    foreach($choose_products as $post):
                        setup_postdata($post);
                        wc_get_template_part('content', 'product');
                    endforeach;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php if($separator_bottom === 'yes') echo '<div class="sp"></div>';?>