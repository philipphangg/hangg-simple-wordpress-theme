<?php
/**
 * The template for displaying a single article
 *
 * 
 * 
 */
?>
    
<?php get_header(); ?>

<!-- content -->
<div id="content">
    
    <?php while(have_posts()) : the_post(); ?>
        <article class="post singlepost" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <h2 class="post_titel"><?php the_title(); ?></h2>
            <p class="post_meta">Von <a href="#"><?php the_author_posts_link(); ?></a> am <?php the_time('j.m.Y'); ?>
                &nbsp;&bull;&nbsp; <a href="<?php comments_link(); ?>" class="comments_link"><?php comments_number('Keine Kommentare', '1 Kommentar', '% Kommentare'); 
                ?></a>&nbsp;&bull;&nbsp;<?php the_tags( 'tags: ', '-'); ?></p>
            
            <div class="post_content">
                <div id="post_thumbnail">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <?php the_content('Read More'); ?>
            </div>
        </article>
    <?php endwhile; ?>
    <?php comments_template(); ?>
    
</div>
<!-- end #content --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>