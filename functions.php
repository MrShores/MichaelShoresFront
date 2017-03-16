<?php
/*------------------------------------------------------------------------------
    :: Images Support
------------------------------------------------------------------------------*/

add_theme_support( 'post-thumbnails' );
// add_image_size ( 'name', width, height, crop = false );

/*------------------------------------------------------------------------------
    :: Menu
------------------------------------------------------------------------------*/

function custom_register_menus() {
    register_nav_menus(
        array(
            'navigation-top' => __( 'Top Navigation Menu', 'michaelshores' ),
            'navigation-top-right' => __( 'Top Navigation Menu - Right', 'michaelshores' ),
        )
    );
}
add_action( 'init', 'custom_register_menus' );

/*------------------------------------------------------------------------------
    :: Context
------------------------------------------------------------------------------*/

add_filter('timber_context', 'add_to_context');
function add_to_context($data){

    // Add other data to context

    // Add a Timber menu and send it along to the context, if it exists
    $main_menu = new TimberMenu('navigation-top');
    if( $main_menu->id != null ){
        $data['main_menu'] = $main_menu;
    }

    // Add a Timber menu and send it along to the context, if it exists
    $main_menu_right = new TimberMenu('navigation-top-right');
    if( $main_menu_right->id != null ){
        $data['main_menu_right'] = $main_menu_right;
    }

    return $data;
}

/*------------------------------------------------------------------------------
    :: Styles and Scripts
------------------------------------------------------------------------------*/

/**
 * Enqueue scripts and styles
*/
function custom_scripts() {

    // Underscore
    // wp_enqueue_script( 'underscore', get_template_directory_uri() . '/js/underscore_1.8.3.js', array('jquery'), '1.8.3', true);

    // Velocity
    // wp_enqueue_script( 'velocity', get_template_directory_uri() . '/js/velocity/velocity.min.js', array('jquery'), '1.2.3', true);
    // wp_enqueue_script( 'velocity_ui', get_template_directory_uri() . '/js/velocity/velocity.ui.js', array('jquery'), '5.0.4', true);

    // Custom theme
    wp_enqueue_style( 'michaelshores', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script( 'michaelshores_main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/*------------------------------------------------------------------------------
    :: Misc.
------------------------------------------------------------------------------*/

/* Page Slug Body Class
 *
*/
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        // $classes[] = $post->post_type . '-' . $post->post_name;
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/******************************************************************************
* @Author: Boutros AbiChedid 
* @Date:   June 20, 2011
* @Websites: http://bacsoftwareconsulting.com/ ; http://blueoliveonline.com/
* @Description: Preserves HTML formating to the automatically generated Excerpt.
* Also Code modifies the default excerpt_length and excerpt_more filters.
* @Tested: Up to WordPress version 3.1.3
*******************************************************************************/ 
function custom_wp_trim_excerpt($text) {
global $post;

$raw_excerpt = $text;
if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');

    //Delete all shortcode tags from the content. 
    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    
    /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
    $allowed_tags = '';
    $text = strip_tags($text, $allowed_tags);
    
    /*** MODIFY THIS. change the excerpt word count to any integer you like.***/
    $excerpt_word_count = 35; 
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
    
    /*** MODIFY THIS. change the excerpt endind to something else.***/
    $excerpt_end = '&hellip;</p><p><a href="'. get_permalink() .'" title="read more link" class="btn-more-link">View &raquo;</a>'; 
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
    
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
// remove_filter('get_the_excerpt', 'wp_trim_excerpt');
// add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');


?>