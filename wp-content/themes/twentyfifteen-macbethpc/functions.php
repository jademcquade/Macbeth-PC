<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function load_child_stylesheet() {
    wp_enqueue_style( 'mystyles', get_stylesheet_directory_uri() . '/prod/css/styles.css' );
    wp_enqueue_style( 'js', get_stylesheet_directory_uri() . '/prod/js/all.js' );
}
add_action( 'wp_enqueue_scripts', 'load_child_stylesheet' );

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'Property',
    array(
      'labels' => array(
        'name' => __( 'Properties' ),
        'singular_name' => __( 'Property' ),
        'all_items' => __( 'All Properties' ),
      ),
      'description'   => 'Holds our properties posts',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
    )
  );
}

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Use larger logo image for non mobile

function logo_select() {
  require_once( get_stylesheet_directory() . '/libs/Mobile_Detect.php');
}
add_action('wp_head','logo_select');