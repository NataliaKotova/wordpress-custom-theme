
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>
<pre><?php  echo get_the_date('l, d/m/Y, h:i:s'); //check php date format ?></pre>
  <h1 class="display-4 "><?php the_title(); ?></h1>
  <div class="row border-bottom p-5">
    <div class="col-lg-3">
      <?php
        // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail-image' ) );
        }
      ?>
    </div> <!-- end of left part -->

    <div class="col-lg-9">
        <?php the_excerpt();?>
        <a class="btn btn-outline-dark btn-sm" href="<?php the_permalink(); ?>" class="text-dark">Read more</a>
    </div>
  </div>


<?php
  endwhile;
 else:
endif;
?>