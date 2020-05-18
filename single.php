<?php get_header(''); ?>

<div class="container">
    <h1 class="title"><?php the_title();?></h1>
    <?php get_template_part('includes/section','blogcontent');?>
</div>
<?php get_footer('');?>