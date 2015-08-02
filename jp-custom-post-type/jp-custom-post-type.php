<?php
/**
 * @package Wordpress
 */
/*
Plugin Name: JP Custom Post Type
Plugin URI: http://akismet.com/
Description: Custom Post Type Example
Version: 3.1.1
Author: Automattic
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/
// Creates Movie Reviews Custom Post Type
function movie_reviews_init() {
	$labels = array(
    'name'               => _x( 'Movie-reviews', 'post type general name' ),
    'singular_name'      => _x( 'Movie-review', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'review' ),
    'add_new_item'       => __( 'Add New Movie-review' ),
    'edit_item'          => __( 'Edit Movie-review' ),
    'new_item'           => __( 'New Movie-review' ),
    'all_items'          => __( 'All Movie-reviews' ),
    'view_item'          => __( 'View Movie-review' ),
    'search_items'       => __( 'Search Movie-reviews' ),
    'not_found'          => __( 'No Movie-reviews found' ),
    'not_found_in_trash' => __( 'No Movie-reviewsx found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Movie-reviews'
  );
	
    $args = array(
    	'labels'        => $labels,
      	'label' => 'Movie Reviews',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'movie-reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'movie_reviews', $args );
}
add_action( 'init', 'movie_reviews_init' );

