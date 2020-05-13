<?php

//load stylesheets
function load_css(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  //your own css must be last
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');


//load javascript
function load_js()
{
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');


}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )


);

//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');


// custom post type
function my_first_post_type(){
  $args = array(
    'labels' => array(
        'name' => 'Allergies',
        'singular_name' => 'Allergy',
    ),
  'hierarchical' => true, //booleans value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-buddicons-replies',
  'public' => true,
  'has_archive' => true,
  'supports' => array('title', 'editor', 'thumbnail','custom-fields'),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('allergies',$args);
}
add_action('init','my_first_post_type');


// Taxanomy

function my_first_taxonomy(){
  $args = array(
    'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
    ),

    'public' => true,
    'hierarchical' => true,//false works like tags, true like catgories without labels


  );
  register_taxonomy('types', array('allergies'),$args);

}

add_action('init', 'my_first_taxonomy');

function add_google_fonts() {
  wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css?family=Open+Sans:300,400', false );}
  add_action( 'wp_enqueue_scripts', 'add_google_fonts' );