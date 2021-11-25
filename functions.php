<?php
/**
 * Load Custom Comments Layout file.
 */
require_once('inc/kirki.php');
if ( site_url() == "http://127.0.0.1/First/" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function rubi_setup() {
    load_theme_textdomain( 'rubi', get_template_directory() . '/languages' );
    add_theme_support( "automaic-feed-links" );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'rubimenu' => esc_html( 'Rubi Menu', 'rubi' ),
    ) );
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'caption',
    ) );
    add_theme_support( 'custom-selective-refresh-widgets' );

    add_theme_support( 'custom-background', apply_filters( 'rubi_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

}
add_action( 'after_setup_theme', 'rubi_setup' );
function rubi_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'rubi_add_editor_styles' );
function rubi_content_width() {
    $GLOBALS['content-width'] = apply_filters( 'rubi_content_width', 1170 );
}
add_action( 'after_setup_theme', 'rubi_content_width', 0 );

function rubi_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Rbui', 'rubi' ),
        'id'            => 'single_post_widgets',
        'description'   => esc_html__( 'Add widgets here.', 'rubi' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title ">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'rubi_widgets_init' );
//=========================== assets bootstraping ==========================================
function rubi_assets() {
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/plugins/bootstrap/css/bootstrap.min.css" ), null, "1.0" );  
    wp_enqueue_style( "animates-css", get_theme_file_uri( "/assets/plugins/animate-css/animates.css" ), null, "1.0" );  
    wp_enqueue_style( "all-css", get_theme_file_uri( "/assets/plugins/fontawesome/css/all.css" ), null, "1.0" );  
    wp_enqueue_style( "themify-css", get_theme_file_uri( "/assets/plugins/themify/css/themify-icons.css" ), null, "1.0" );  
    wp_enqueue_style( "magnific-css", get_theme_file_uri( "/assets/plugins/magnific-popup/dist/magnific-popup.css" ), null, "1.0" );  
    wp_enqueue_style( "animated-css", get_theme_file_uri( "/assets/plugins/animated-text/animated-text.css" ), null, "1.0" );  
    wp_enqueue_style( "slick-css", get_theme_file_uri( "/assets/plugins/slick-carousel/slick/slick.css" ), null, "1.0" );  
    wp_enqueue_style( "slick-theme-css", get_theme_file_uri( "/assets/plugins/slick-carousel/slick/slick-theme.css" ), null, "1.0" );  
    wp_enqueue_style( "main-css", get_theme_file_uri( "assets/css/style.css" ), null, "1.0" ); 
    wp_enqueue_style( "rubi-css", get_stylesheet_uri()); 
    
    wp_enqueue_script( "bootstarp-js", get_theme_file_uri( "/assets/plugins/bootstrap/js/bootstrap.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "slick-js", get_theme_file_uri( "/assets/plugins/slick-carousel/slick/slick.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "aper-js", get_theme_file_uri( "/assets/plugins/counto/apear.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "counto-js", get_theme_file_uri( "/assets/plugins/counto/counTo.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "animated-js", get_theme_file_uri( "/assets/plugins/animated-text/animated-text.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "waypoint-js", get_theme_file_uri( "/assets/plugins/counterup/waypoint.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "conuterup-js", get_theme_file_uri( "/assets/plugins/counterup/jquery.counterup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "popup-js", get_theme_file_uri( "/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "shuffle-js", get_theme_file_uri( "/assets/plugins/shuffle/shuffle.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "ajax-contact-js", get_theme_file_uri( "/assets/plugins/jquery/ajax-contact.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/script.js" ), array( "jquery" ), "1.0", true );
    
}
add_action( 'wp_enqueue_scripts', 'rubi_assets' );

//------------------------- carbon fields ---------------------------

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    
    Container::make( 'user_meta', 'Social Links' )
    ->add_fields( array(
        Field::make( 'text', 'crb_facebook', 'Facebook' ),
        Field::make( 'text', 'crb_twitter', 'Twiiter' ),
        Field::make( 'text', 'crb_linkedin', 'Linkedin' ),
        Field::make( 'text', 'crb_instagram', 'instagram' ),
        Field::make( 'text', 'crb_dribbble', 'dribbble' ),
    ) );
}

//------------------------- comment form redesign -------------------------------
function rubi_comment_form_fields($fields){
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    $cookie_filed = $fields['cookies'];
    unset( $fields['cookies']);
    return $fields;
}
add_action('comment_form_fields','rubi_comment_form_fields');

//------------------- add a class on wordpress nav link ---------------------------
?>

<?php

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
