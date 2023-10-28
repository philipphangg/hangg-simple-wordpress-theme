<?php
/**
 * wordpress functions
 *
 * 
 * 
 */

// adds thumbnail image to post
add_theme_support('post-thumbnails'); 

// adds menus
add_theme_support('menus'); 

// register right sidebar
register_sidebar(array(
    'name'          => __( 'Right Sidebar' ),
    'id'            => 'right_sidebar',
    'description'   => __( 'Add widgets here to appear in your right sidebar.'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div><!-- widget end -->',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
));

//customize comment form 
function my_fields($fields) {
$fields['author'] = '<fieldset class="comment-form-author"><legend>' . __( 'Name*' ) . '</legend>' . ( $req ? '<span class="required">*</span>' : '' ) .
		            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="35"' . $aria_req . ' /></fieldset><br/>';
					
$fields['email'] = '<fieldset class="comment-form-email"><legend>' . __( 'Email*' ) . '</legend>' . ( $req ? '<span class="required">*</span>' : '' ) .
		            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="35"' . $aria_req . ' /></fieldset><br/>';
					
$fields['url'] = '<fieldset class="comment-form-url"><legend>' . __( 'Webseite' ) . '</legend>' .
		            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="35" /></fieldset><br/>';

return $fields;
}
add_filter('comment_form_default_fields','my_fields');



// load google fonts
function hanggsimple_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $fontswitch = _x( 'on', 'Ubuntu font: on or off', 'hanggsimple' );
 
    if ( 'off' !== $fontswitch ) {
        $font_families = array();
 
        if ( 'off' !== $fontswitch ) {
            $font_families[] = 'Ubuntu:400,700,400italic,700italic';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

function hanggsimple_scripts_styles() {
    wp_enqueue_style( 'hanggsimple-fonts', hanggsimple_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'hanggsimple_scripts_styles' );


// <pre> enable pre-tag for displaying code
//function pre_esc_html($content) {
//  return preg_replace_callback(
//    '#()(.*?)(;)#imsu',
//  create_function(
//    '$i',
//    'return $i[1].esc_html($i[2]).$i[3];'
//  ),
//$content
//);
//}
// 
//add_filter(
//'the_content',
//'pre_esc_html'
//);


// define number of articles displayed at pages
function numberofarticles( $query ) {
if ( is_admin() || ! $query->is_main_query() ){
return;}

if ( is_home() ) {
// articles at index.php
$query->set( 'posts_per_page', 4 );
return;
}

if ( is_category() ) {
// articles at category page
$query->set( 'posts_per_page', 4 );
return;
}

if ( is_tag() ) {
// articles at tag page
$query->set( 'posts_per_page', 7 );
return;
}

if ( is_search() ) {
// articles at seaarch page
$query->set( 'posts_per_page', 7 );
return;
}

}

add_action( 'pre_get_posts', 'numberofarticles', 1 );
?>