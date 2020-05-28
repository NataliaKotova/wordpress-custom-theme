<?php get_header(''); ?>
<!-- <div class="jumbotron rounded-0"><h1 class="display-4 text-center font-weight-bold"><?php the_title(); ?></h1></div> -->
<section class="col page-wrap">
      <div class="ml-5 mr-5">
            <section class="row">
                  <div class="col-lg-3 sidenav">
                              <?php if(is_active_sidebar('page-sidebar')) :?>
                              <?php dynamic_sidebar('page-sidebar'); ?>
                              <?php endif; ?>
                  </div>
                  <div class="col-lg-6">
                        <?php get_template_part('includes/section','content'); ?>
                        <h1> <?php echo single_cat_title(); ?> </h1>
                        <?php get_template_part('includes/section','allergies'); ?>
                  </div>
                  
            </section>
      </div>
</section>

<?php get_footer(); ?>

