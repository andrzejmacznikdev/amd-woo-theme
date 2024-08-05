<?php
    /**
     * The template for displaying all default pages
     * 
     * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
     * 
     * @author amd
     * 
     * @package amdwootheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    get_header();

    $id = get_the_ID();

    while(have_rows('choose-hero', $id)):the_row();
        $layout_hero = get_row_layout();
        get_template_part('parts/hero/' . $layout_hero);
    endwhile;

    while(have_rows('choose-section', $id)):the_row();
        $layout = get_row_layout();
        get_template_part('parts/sections/' . $layout);
    endwhile;

    get_footer();