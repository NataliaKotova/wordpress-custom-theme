<?php get_header(); ?>
<!-- <div class=""><h1 class="display-4 text-center font-weight-bold"><?php the_title(); ?></h1></div> -->
  <section class="page-wrap">
      <section class="row">
        <!-- sidebar -->
        <div class="col-lg-3">
          <?php if(get_the_title()!="Checkout" && get_the_title()!="Cart" && get_the_title()!="Shop online"):?>
          <?php if(is_active_sidebar('page-sidebar')) :?>
          <?php dynamic_sidebar('page-sidebar'); ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        <!-- main content -->
        <div class="col-lg-6 mb-5">
          <?php get_template_part('includes/section','content'); ?>
        </div>
      </section>
    
  </section>
<?php get_footer(); ?>