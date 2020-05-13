<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header class="jumbotron m-0 p-0">

      <div class="container m-0">
      <?php
      wp_nav_menu(
        array(
        'theme_location' => 'top-menu',
       //  'menu' => 'Top Bar',
        'menu_class' => 'top-bar'
        )
      );
      ?>
    </div>
    </header>


