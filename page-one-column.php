<?php
/**
 * Template Name: Single Column
 * 
 * Description: Page with single column and without sidebar
 *
 */
?>

<?php get_header(); ?>

<!-- content -->
<div id="wide_content">
    
    <?php while(have_posts()) : the_post(); ?>
        <article class="post post_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            
            
            <?php the_content('Read More'); ?>

        </article>
    <?php endwhile; ?>
    
</div>
<!-- end #content --> 

<?php get_footer(); ?>