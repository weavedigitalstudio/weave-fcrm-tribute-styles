<?php
/*
Plugin Name: Weave / FireHawk CRM Tributes - Site Specific CSS
Description: Site Specific css styles for the FireHawk CRM Tributes Plugin.
Version: 1.0
Author: Your Name
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue the custom stylesheet
function weave_firehawk_crm_tributes_styles() {
    // Ensure the plugin's stylesheet is loaded after the main plugin's styles
    wp_enqueue_style(
        'weave-firehawk-crm-tributes-styles', 
        plugin_dir_url(__FILE__) . 'css/weave-fcrm-tributes.css', 
        array(), // No dependencies
        '1.0',
        'all' // Ensure it is loaded for all media types
    );
}
add_action('wp_enqueue_scripts', 'weave_firehawk_crm_tributes_styles', 99); // High priority to load after other styles
