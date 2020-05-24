<?php get_header(''); ?>
<section class="page-wrap">
<div class="ml-3">
  <section class="row">
  <div class="col-lg-3 widget">
        <?php if(is_active_sidebar('blog-sidebar')) :?>
          <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-9">
        <h1> <?php echo single_cat_title(); ?> </h1>
        <?php get_template_part('includes/section','archive'); ?>
        <!-- Pagination Method 1 -->
      <?php previous_posts_link();  ?>
      <?php next_posts_link();  ?>
    </div>
</section>
</div>
</section>
<?php get_footer(); ?>