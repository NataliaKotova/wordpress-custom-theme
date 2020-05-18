<?php get_header('secondary'); ?>
  <section class="page-wrap">
    <div class="ml-5">
      <section class="row">
        <!-- sidebar -->
        <div class="col-lg-3 widget border border-top-0 border-left-0 border-bottom-0">
          <?php if(get_the_title()!="Checkout"):?>
          <?php if(is_active_sidebar('page-sidebar')) :?>
          <?php dynamic_sidebar('page-sidebar'); ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        <!-- main content -->
        <div class="col-lg-9 mb-5">
          <h1><?php the_title(); ?></h1>
          <?php get_template_part('includes/section','content'); ?>
        </div>
      </section>
    </div>
  </section>
<?php get_footer(); ?>