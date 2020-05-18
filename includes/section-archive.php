<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>
<div class="card p-2 m-1">
<h3 class="title ml-4"><?php the_title(); ?> </h3>
  <div class="row">
    <div class="col-lg-3">
      <?php
        // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail-image' ) );
        }
      ?>
    </div> <!-- end of left part -->
    <div class="col-lg-9">
        <?php
            the_excerpt();
        ?>
        <p class="">
        <?php  echo get_the_date('l, h:i:s d/m/Y'); //check php date format ?>
        </p>
        <a class="text-dark font-weight-bold mt-3 mb-3" href="<?php the_permalink(); ?>" class="text-dark">Read more</a>
    </div>
  </div>
</div>
  
<?php
    // the_content();
  endwhile;
 else:
endif;
?>