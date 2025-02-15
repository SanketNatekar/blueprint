<?php

/**
 * Theme bootstrap functions.
 *
 * @package Nexal
 */

if ( ! function_exists( 'nexal_asset_url' ) ) {
    /**
     * Return nexal theme folder asset url
     * 
     * @param mixed $path
     * @return string
     */
    function nexal_asset_url( $path ) {
        return trailingslashit( get_stylesheet_directory_uri() ) . 'assets/' . $path;
    }

}

if ( ! function_exists( 'the_nexal_asset_url' ) ) {
    /**
     * Echo nexal theme folder asset url
     * 
     * @param mixed $path
     * @return void
     */
    function the_nexal_asset_url( $path ) {
        echo esc_url( nexal_asset_url( $path ) );
    }

}

if ( ! function_exists( 'nexal_register_block_pattern_category' ) ) {
    /**
     * Register nexal pattern category
     * 
     * @return void
     */
    function nexal_register_block_pattern_category() {
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category( 'nexal', array(
                'label' => __( 'Nexal', 'nexal' )
            ) );
        }
    }

}

add_action( 'init', 'nexal_register_block_pattern_category' );

//
// Theme dashboard hook
//
if ( ! function_exists( 'nexal_theme_screenshot' ) ) {
    function nexal_theme_screenshot() {
        return trailingslashit( get_stylesheet_directory_uri() ) . 'screenshot.png';
    }

}
add_filter( 'plover_welcome_theme_screenshot', 'nexal_theme_screenshot' );

if ( ! function_exists( 'nexal_support_forum_url' ) ) {
    function nexal_support_forum_url() {
        return 'https://wordpress.org/support/theme/nexal/';
    }

}
add_filter( 'plover_theme_support_forum_url', 'nexal_support_forum_url' );

if ( ! function_exists( 'nexal_rate_us_url' ) ) {
    function nexal_rate_us_url() {
        return 'https://wordpress.org/support/theme/nexal/reviews/?rate=5#new-post';
    }

}
add_filter( 'plover_theme_rate_us_url', 'nexal_rate_us_url' );

if ( ! function_exists( 'nexal_default_color_mode' ) ) {
    function nexal_default_color_mode() {
        return 'dark';
    }

}
add_filter( 'plover_theme_default_color_mode', 'nexal_default_color_mode' );

remove_action('wp_head', 'wp_generator');
