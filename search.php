<?php
/**
 * The template for displaying search results
 *
 * 
 * 
 */
?>

<?php get_header(); ?>

<!-- content -->
<div id="content">
    
    <div class="post">
    <h2 id="search_heading">Ergebnis der Suche nach  "<?php echo $s ?>"</h2>
    </div>
    <?php while(have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <h2 class="post_titel"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post_meta">Von <a href="#"><?php the_author_posts_link(); ?></a> am <?php the_time('j.m.Y'); ?>
                &nbsp;&bull;&nbsp; <a href="<?php comments_link(); ?>" class="comments_link"><?php comments_number('Keine Kommentare', '1 Kommentar', '% Kommentare'); ?></a>
            </p>
            
            <div class="post_content">
                <div id="post_thumbnail"><a href="<?php the_permalink(); ?>" class="post_image_full">
                    <?php the_post_thumbnail('full'); ?>
                    </a>
                </div>
                <?php the_content('More'); ?>
            </div>
        </article>
    <?php endwhile; ?>
    <div id="previous_next"><span id="previous_span"><?php previous_posts_link('<< Neuere Artikel', 0) ?></span><span id="next_span"><?php next_posts_link( 'Ältere Artikel >>', 0 ); ?></span></div>
</div>
<!-- end #content --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>