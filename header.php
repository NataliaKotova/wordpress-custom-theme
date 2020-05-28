<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header> 
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <img src="<?php echo $image[0]; ?>" alt="logo">
          </a>
          <button class="navbar-toggler navbar-light bg-light .navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-auto">
              <?php
                $menuItems = wp_get_nav_menu_items(16);
                echo is_single();
                  foreach ($menuItems as &$menu_item) {
                    
                    $current = ( $menu_item->object_id == get_queried_object_id() ) ? 'active' : '';
                    if(is_blog() && $menu_item->object_id == 17){
                      $current = 'active';
                    }
                    ?>
                      <li class="nav-item <?php echo $current?>">
                        <a class="nav-link font-weight-bold" href="<?php echo $menu_item->url?>" ><?php echo $menu_item->title?></a>
                      </li>
                  <?php
                      }
                  ?>
            </ul>
            <div>
            <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo wp_logout_url(); ?>" class="btn btn-outline-dark btn-lg">Logout</a>
            <?php } else { ?>
                <a href="http://localhost/wordpress-allergynz/login/" class="btn btn-outline-dark rounded-0 btn-lg m-2">Login</a>
                <a href="" class="btn btn-dark rounded-0 btn-lg m-2">Signup</a>
                <?php } ?>
            </div>
          </div>
          
        </nav>
    </header>

    