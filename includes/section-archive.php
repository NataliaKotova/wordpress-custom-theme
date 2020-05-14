<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>

<div class="jumbotron">
  <div>
    <?php
      // check if the post or page has a Featured Image assigned to it.
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail-image' ) );
      }
    ?>
  </div>
  <h1 class="title"><?php the_title(); ?> </h1>
  <?php
      the_excerpt();
  ?>
  <p class="">
  <?php  echo get_the_date('l, h:i:s d/m/Y'); //check php date format ?>
  </p>
  <a class="text-info font-weight-bold mt-3 mb-3" href="<?php the_permalink(); ?>" class="text-dark">Read more</a>
  </div>
<?php
    // the_content();
  endwhile;
 else:
endif;
?>