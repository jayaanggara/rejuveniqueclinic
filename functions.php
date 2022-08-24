<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
require get_template_directory() . '/inc/services_cpt.php';
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/inc/cleanup_wp.php';
require get_template_directory() . '/inc/nav-walker.php';

register_nav_menus(
	array(
		'primary'	=>'Primary Menu',
		'footer'	=>'Footer Menu',
	)
);

add_image_size( 'news-thumb', 500, 575, true );

// acf
add_filter('acf/format_value_for_api', 'theme_format_value_for_api');
    function theme_format_value_for_api($value) {
    return is_string($value) ? __($value) : $value;
}
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
	$path = get_stylesheet_directory() . '/inc/acf/';
	return $path;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {
	$dir = get_stylesheet_directory_uri() . '/inc/acf/';
	return $dir;
}
include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

// custom menu admin
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'	=> __('Theme General Settings'),
            'menu_title'	=> __('Theme Settings'),
            'menu_slug'		=> 'theme-general-settings',
            'redirect'		=> false,
            'position'		=> 1,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Home Settings'),
            'menu_title'  => __('Home'),
            'menu_slug'		=> 'theme-home-settings',
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

//enable upload for webp image files.
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//enable preview / thumbnail for webp image files.
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);