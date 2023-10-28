<?php
/**
 * The template for displaying the 404 error pag (not found)
 *
 * 
 * 
 */
?>

<?php get_header(); ?>

<!-- content -->
<div id="content">
    <div id="post">
   

    <h2 class="post_titel">Die Seite <?php echo " ".$website.$_SERVER['REQUEST_URI']; ?> konnte nicht gefunden werden, oder der von Dir gesuchte Artikel wurde gelöscht</h2> 
    
    </div>
</div>
<!-- end #content --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>