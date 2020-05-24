<?php

//load stylesheets
function load_css(){
  //bootstrap stylesheets
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

// additional theme support options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

 
add_theme_support( 'custom-logo' );


// menus
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

// register sidebars
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

    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
      'name' => __( 'First Footer Widget Area', 'tutsplus' ),
      'id' => 'first-footer-widget-area',
      'description' => __( 'The first footer widget area', 'tutsplus' ),
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name'          => 'Social Media button',
      'id'            => 'smb',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
    ) );

    register_sidebar( array(
      'name'          => 'Link button',
      'id'            => 'lb',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
    ) );

}

add_action('widgets_init', 'my_sidebars');


function arphabet_widgets_init() {

  register_sidebar( array(
      'name'          => 'Social Media button',
      'id'            => 'smb',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
  ) );

  register_sidebar( array(
      'name'          => 'Link button',
      'id'            => 'lb',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
  ) );

  class My_Widget extends WP_Widget {

      public function __construct() {
          $widget_ops = array( 
              'classname' => 'my_widget',
              'description' => 'Adds a new Social Media button',
          );
          parent::__construct( 'my_widget', 'Social Media button', $widget_ops );
      }

  public function widget( $args, $instance ) {
      echo $args['before_widget'];
      if ( ! empty( $instance['title'] ) ) {
          echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }
      echo __( esc_attr( 'Hello, World!' ), 'text_domain' );
      echo $args['after_widget'];
  }

  public function form( $instance ) {
      $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
      ?>
      <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label> 
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
      </p>
      <?php 
  }

  public function update( $new_instance, $old_instance ) {
      $instance = array();
      $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

      return $instance;
  }
  }

  register_widget( 'My_Widget' );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


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

// taxanomy
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

//google fonts
function add_google_fonts() {
  wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css?family=Open+Sans:300,400', false );}  
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


//customize API
require_once get_template_directory() . '/customizer.php';

