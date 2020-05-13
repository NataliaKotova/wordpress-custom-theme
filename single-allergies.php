<?php get_header(); ?>

<section class="page-wrap">
<div class="container">

    <?php if(has_post_thumbnail()): ?>
        <!-- This has a featured image -->
        <div>
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        </div>
  <?php endif; ?>

      <h1> <?php the_title(); ?>   </h1>
      <?php get_template_part('includes/section','allergies'); ?>
         <?php wp_link_pages(); ?>
         <!-- wordpress custom field -->
         <ul>
           <li> Category: <?php echo get_post_meta($post->ID, 'Category', true); ?> </li>
           <?php if (get_post_meta($post->ID, 'Allergy Name', true)): ?>
              <li> Name: <?php echo get_post_meta($post->ID, 'Name', true); ?> </li>
           <?php //endif; ?>
         </ul>

         <!-- Plugin : Advanced Custom Field  -->
         <ul>
           <li> Category: <?php the_field('category'); ?> </li>
           <li> Allergy Name: <?php the_field('allergyname'); ?> </li>
         </ul>

</div>
</section>
<?php get_footer(); ?>