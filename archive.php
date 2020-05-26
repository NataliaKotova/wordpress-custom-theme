<?php get_header(''); ?>
<div class="jumbotron rounded-0"><h1 class="display-4 text-center font-weight-bold"><?php echo single_cat_title(); ?></h1></div>
<section class="page-wrap">
<div class="container">
  <section class="row">
  <div class="col-lg-3">
        <?php if(is_active_sidebar('blog-sidebar')) :?>
          <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-9">
        <?php get_template_part('includes/section','archive'); ?>
        <!-- Pagination Method 1 -->
      <?php previous_posts_link();  ?>
      <?php next_posts_link();  ?>
    </div>
</section>
</div>
</section>
<?php get_footer(); ?>