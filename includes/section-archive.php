<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>
<h1 class="title"><?php the_title(); ?> </h1>
<?php
    the_excerpt();
?>
<a href="<?php the_permalink(); ?>" class="text-dark">Read more</a>
<?php
    the_content();
  endwhile;
 else:
endif;
?>