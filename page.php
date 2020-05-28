<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

<div class="jumbotron">
  <h1 class="display-4 text-center font-weight-bold">
    <?php the_title(); ?>
  </h1>
</div>

<section class="page-wrap">
  <section class="row">
    <!-- sidebar -->
    <div class="col-lg-3">
        
        <?php while( have_posts() ) : the_post(); ?>                               
        <?php get_template_part( 'content', 'page' ); ?>
                    <?php
                        //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                        ?>                               
        <?php endwhile; ?>    

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