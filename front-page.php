<?php get_header('secondary'); ?>

<section class="col page-wrap">
      <div class="ml-5">
            <section class="row">
            <div class="col-lg-3 widget">
                        <?php if(is_active_sidebar('page-sidebar')) :?>
                        <?php dynamic_sidebar('page-sidebar'); ?>
                        <?php endif; ?>
                  </div>
                  <div class="col-lg-8">
                        <h1 class="text-info"> <?php the_title(); ?>   </h1>
                        <?php get_template_part('includes/section','content'); ?>
                  </div>
            </section>
      </div>
</section>

<?php get_footer(); ?>

