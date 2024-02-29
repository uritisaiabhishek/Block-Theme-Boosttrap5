<?php

// Enqueue Styles
function enqueue_theme_styles() {
    // Main Stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

// Enqueue Scripts
function enqueue_theme_scripts() {
    // Your Custom JavaScript File
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

// Enqueue Block Editor Styles
function enqueue_block_editor_styles() {
    // Block Editor Styles
    wp_enqueue_style('block-editor-styles', get_template_directory_uri() . '/style-editor.css', array(), '1.0', 'all');
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_styles');

// Enqueue Bootstrap Styles
function enqueue_bootstrap_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.6.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');

// Enqueue Bootstrap Scripts
function enqueue_bootstrap_scripts() {
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.6.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts');


?>