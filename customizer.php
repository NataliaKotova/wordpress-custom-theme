<?php

function mytheme_customize_register( $wp_customize ) {
  //All sections, settings, and controls will be added here

  //header color
  $wp_customize->add_setting( 'header_color' , array(
      'default'   => '#e9ecef',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_section( 'C' , array(
    'title'      => __( 'Header background color', 'Charity Theme' ),
    'priority'   => 30,
  ) );
  
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
    'label'      => __( 'Header Color', 'Charity Theme' ),
    'section'    => 'C',
    'settings'   => 'header_color',
  ) ) );
  
  //footer color
  $wp_customize->add_setting( 'footer_color' , array(
    'default'   => '#e9ecef',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_section( 'F' , array(
    'title'      => __( 'Footer background color', 'Charity Theme' ),
    'priority'   => 30,
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
    'label'      => __( 'Footer Background Color', 'Charity Theme' ),
    'section'    => 'F',
    'settings'   => 'footer_color',
  ) ) );
}

add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css_header()
{
    ?>
         <style type="text/css">
              header { background-color: <?php echo get_theme_mod('header_color', '#ffffff'); ?>; }
         </style>
    <?php
}

function mytheme_customize_css_footer()
{
    ?>
        <style type="text/css">
              footer { background-color: <?php echo get_theme_mod('footer_color', '#ffffff'); ?>; }
         </style>
    <?php
}


add_action( 'wp_head', 'mytheme_customize_css_header');

add_action( 'wp_footer', 'mytheme_customize_css_footer');