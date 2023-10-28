<?php
/**
 * The template for displaying the header
 *
 * 
 * 
 */
?>

<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=694"> 
        <title><?php    if ( is_single() ) {
                            single_post_title('', true); ?> - <?php bloginfo('title'); 
                        } else {
                            bloginfo('title');
                        }?></title>
        <meta name="description" content="<?php if( is_single() ) {
                                                    single_post_title('', true); ?> - <?php bloginfo('description'); 
                                                } else {
                                                    bloginfo('description');
                                                }?>" />
        <meta name="author" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">       
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        
        <!-- outer wrapper -->
        <div id="outer_wrapper">
        
            <header>
                <div id="header_wrapper">
                    <div id="headerimg">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/title.jpg" alt="Titel Image"></a> 
                    </div>
                    <div id="heading">
                        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1> 
                    </div>
                </div>
                <nav id="header_nav">
                    <?php wp_nav_menu(); ?>
                </nav>
            </header>
            
            <!-- middle wrapper -->
            <div id="middle_wrapper">