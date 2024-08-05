<?php
    /**
     * Template Name: Strona główna
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

        $idPost = get_the_ID();

        while(have_rows('choose_hero', $idPost)):the_row();
            $layout_hero = get_row_layout();
            get_template_part('parts/hero/' . $layout_hero);
        endwhile;

        while(have_rows('choose_section', $idPost)):the_row();
            $layout = get_row_layout();
            get_template_part('parts/sections/' . $layout);
        endwhile;
    
    get_footer();