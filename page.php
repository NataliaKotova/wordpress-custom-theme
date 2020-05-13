<div class="jumbotron"><?php get_header('secondary'); ?></div>
<section class="page-wrap">
<div class="container">
  <section class="row">
    <div class="col-lg-9">
      <h1> <?php the_title(); ?>   </h1>
      <?php if(has_post_thumbnail()): ?>
          <!-- This has a featured image -->
          <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
          </div>
      <?php endif; ?>
      <?php get_template_part('includes/section','content'); ?>
    </div>
    <div class="col-lg-3 widget">
      <?php if(is_active_sidebar('page-sidebar')) :?>
      <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
    </section>
    </div>
  </section>
<?php get_footer(); ?>