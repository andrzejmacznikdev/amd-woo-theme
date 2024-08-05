<?php
    /**
     * Template part for displaying search-results
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

    $idp = get_the_ID();

    $s = $_GET['s'];

    global $wp_query;

    $total_results = $wp_query->found_posts;
?>

<div class="search-results mt-h">
    <div class="container">
        
    </div>
</div>
