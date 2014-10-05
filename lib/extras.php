<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/* Register a Custom Post Type (Slide) */
add_action('init', 'slide_init');
function slide_init() {
  $labels = array(
    'name' => _x('Slides', 'post type general name'),
    'singular_name' => _x('Slide', 'post type singular name'),
    'add_new' => _x('Add New', 'slide'),
    'add_new_item' => __('Add New Slide'),
    'edit_item' => __('Edit Slide'),
    'new_item' => __('New Slide'),
    'view_item' => __('View Slide'),
    'search_items' => __('Search Slides'),
    'not_found' => __('No slides found'),
    'not_found_in_trash' => __('No slides found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Slides'
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'description' => 'Home Page Slider',
    'supports' => array('title', 'thumbnail', 'page-attributes'),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 100,

    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );
  register_post_type('slides', $args);
}
