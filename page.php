<?php
/**
 * The template for displaying a simple page without articles
 *
 * 
 * 
 */
?>
    
<?php get_header(); ?>

<!-- content -->
<div id="content">
    
    <?php while(have_posts()) : the_post(); ?>
        <article class="post post_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >            
            
            <?php the_content('Read More'); ?>

        </article>
    <?php endwhile; ?>
    
</div>
<!-- end #content --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>