<?php get_header(''); ?>
   <div class="jumbotron rounded-0"><h1 class="display-4 text-center font-weight-bold"><?php echo single_cat_title(); ?></h1></div>
      <section class="page-wrap">
         <section class="row m-3">
            <div class="col-lg-2 ">
               <?php if(is_active_sidebar('blog-sidebar')) :?>
               <?php dynamic_sidebar('blog-sidebar'); ?>
               <?php endif; ?>
            </div>

            <div class="col-lg-6 m-auto">
               <?php get_template_part('includes/section','archive'); ?>
               <!-- Pagination Method 1 -->
               <button class="btn btn-dark btn-sm text-dark"><?php previous_posts_link(); ?></button>
               <?php next_posts_link();  ?>
               <!-- Pagination Method 2 -->
               <?php
                  // global $wp_query;
                  // $big = 99999999999;
                  // echo paginate_links(array(
                  //   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                  //   'format'=>'?paged-%#%',
                  //   'current' => max(1, get_query_var('paged')),
                  //   'total' => $wp_query -> max_num_pages
                  // ));
               ?> 
      </section>
   </div>
</section>
<?php get_footer(); ?>

