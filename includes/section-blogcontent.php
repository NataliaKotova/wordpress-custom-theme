<?php
/**
 * @package Charity theme by Natalia Kotova
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <pre class="postmeta">
            <div class="post-date"><?php the_date(); ?></div>
            <div class="post-tags"><?php the_tags(); ?> </div>
            <div class="post-comment"> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>            -
    </pre><!-- postmeta -->  
    <?php 
        if (has_post_thumbnail() ){
            echo '<div class="post-thumb">';
                  the_post_thumbnail();
            echo '</div>';
		    }
    ?> 

    <div class="entry-content">		
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'charity' ),
            'after'  => '</div>',
        ) );
        ?>

   
    
</article>