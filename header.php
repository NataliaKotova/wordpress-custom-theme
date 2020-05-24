<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header>

      <div class="container ">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php
            $menuItems = wp_get_nav_menu_items(16);
              foreach ($menuItems as &$menu_item) {
                $current = ( $menu_item->object_id == get_queried_object_id() ) ? 'active' : '';
                ?>
                  <li class="nav-item <?php echo $current?>">
                    <a class="nav-link" href="<?php echo $menu_item->url?>" ><?php echo $menu_item->title?></a>
                  </li>
            <?php
                  }
                ?>
        </ul>
      </div>
    </nav>
    </header>