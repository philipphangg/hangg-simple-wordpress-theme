<?php
/**
 * The template for displaying author data
 *
 * 
 * 
 */
?>
    
<?php get_header(); ?>

<!-- content -->
<div id="content">

    <!-- This sets the $curauth variable -->
    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <div class="post">

        <fieldset class="author_field">
            <legend>Nick</legend>    
            <p><?php echo $curauth->nickname ?></p>
        </fieldset>
        </br>
        <?php if (strlen($curauth->first_name) > 2 || strlen($curauth->last_name) > 2) : ?>
            <fieldset class="author_field">
            <legend>Name</legend>    
            <p><?php echo $curauth->first_name . " " . $curauth->last_name; ?></p>
            </fieldset>
        <?php endif; ?>  
        </br>
        <?php if (strlen($curauth->user_description) > 2) : ?>
            <fieldset class="author_field">
            <legend>About</legend>
            <p><?php echo $curauth->user_description; ?></p>
            </fieldset>
        <?php endif; ?>
        </br>
        <?php if (strlen($curauth->user_url) > 2) : ?>
            <fieldset class="author_field">
            <legend>Webseite</legend>
            <p><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
            </fieldset>
        <?php endif; ?>    
        </br>

        <fieldset class="author_field">
        <legend>Artikel</legend>
            <ul>
                <!-- The Loop -->

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="author_post_list">
                            &nbsp;&bull;&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                                <?php the_title(); ?></a>,
                            <?php the_time('d M Y'); ?> in <?php the_category('&'); ?>
                        </li>

                    <?php endwhile;
                else: ?>
                    <p><?php _e('Autor hat noch keine Artikel.'); ?></p>

                <?php endif; ?>

                <!-- End Loop -->

            </ul>
        </fieldset>
    </div>
</div>
<!-- end #content --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>