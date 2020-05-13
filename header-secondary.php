<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  
  <body <?php body_class(); ?>>
  <header>
  <div class="container">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'top-menu', 
      'container_class' => 'custom-menu-class'
      )
  );
  ?>
</div>
</header>


