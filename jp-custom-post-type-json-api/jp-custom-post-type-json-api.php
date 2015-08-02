<?php

/**
 * @package Wordpress
 */
/*
Plugin Name: JP Custom Post Type JSON API
Plugin URI: http://akismet.com/
Description: Custom Post Type JSON API Example
Version: 3.1.1
Author: Automattic
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
*/
// Creates Movie Reviews Custom Post Type

function add_moviereview_controller($controllers) {
  $controllers[] = 'moviereview';
  return $controllers;
}
add_filter('json_api_controllers', 'add_moviereview_controller');

function set_moviereview_controller_path() {
  return plugin_dir_path( __FILE__ ) ."/jsonapi/moviereview.php"; 
}

add_filter('json_api_moviereview_controller_path', 'set_moviereview_controller_path');