<?php 
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charity theme by Natalia Kotova
 */

get_header(''); ?>

<div class="jumbotron rounded-0">
  <h1 class="display-4 text-center font-weight-bold">
    <?php echo single_cat_title(); ?>
  </h1>
</div>

<section class="page-wrap">
  <section class="row">
      <div class="col-lg-3">
          <?php if(get_the_title()!="Checkout" && get_the_title()!="Cart" && get_the_title()!="Shop online"):?>
          <?php if(is_active_sidebar('page-sidebar')) :?>
          <?php dynamic_sidebar('page-sidebar'); ?>
          <?php endif; ?>
          <?php endif; ?>
      </div>

      <div class="col-lg-6">
          <?php get_template_part('includes/section','archive'); ?>
          <!-- Pagination Method 1 -->
          <?php previous_posts_link();  ?>
          <kbd><?php next_posts_link();  ?></kbd>
      </div>
  </section>
</section>
<?php get_footer(); ?>