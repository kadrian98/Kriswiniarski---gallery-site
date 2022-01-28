<?php


function styles() {

wp_enqueue_style('style', get_theme_file_uri('/style/index.css'));
wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/app.js', array(), false, true );

}

add_action('wp_enqueue_scripts', 'styles');

function galeria_post_type() {
  
  register_post_type('galeria', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Galeria',
      'add_new_item' => 'Add New Galeria',
      'edit_item' => 'Edit Galeria',
      'all_items' => 'All Galerie',
      'singular_name' => 'galeria'
    ),
    'menu_icon' => 'dashicons-format-gallery'
  ));
}
  add_action('init', 'galeria_post_type');

  function foto_features() {
          add_theme_support('title-tag');
          add_theme_support('post-thumbnails');
          add_image_size('pageBanner', 350, 420, true);
}

add_action('after_setup_theme', 'foto_features');