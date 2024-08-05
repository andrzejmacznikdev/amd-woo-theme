<?php
    /**
     * Part of Hero one
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    $slider = get_sub_field('slider');

?>

<div class="hero-one p-rel w-full mt-h">
    <div class="container h-full">
        <div class="heroOneSwiper swiper">
            <div class="swiper-wrapper">
                <?php
                    foreach($slider as $slide):
                        $small_header = $slide['small_header'];
                        $header = $slide['header'];
                        $description = $slide['description'];
                        $link_button_one = $slide['link_button_one'];
                        $link_button_two = $slide['link_button_two'];
                        $image = $slide['image'];
                ?>
                    <div class="swiper-slide">
                        <div class="hero-one-slider">
                             <picture>
                                <source media="(max-width: 575px)" srcset="<?=  $image['sizes']['medium'];?>">
                                <source media="(min-width: 576px)" srcset="<?= $image['sizes']['large'];?>">
                                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>" width="100%" height="100%" />
                            </picture>
                        </div>
                    </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</div>