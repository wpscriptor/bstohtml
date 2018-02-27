
<?php

function b2w_scripts(){

    wp_enqueue_style( 'b2wp-bootstrap-css', get_template_directory_uri(). '/css/bootstrap.min.css' );


    // Custom fonts for this template
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri(). '/css/font-awesome.min.css' );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' , false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' , false );

    wp_enqueue_style( 'magnific-css', get_template_directory_uri(). '/vendor/magnific-popup/magnific-popup.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );

    //js scripts
    wp_enqueue_script( 'b2wp-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '20151215', true );
    wp_enqueue_script( 'b2wp-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '20151215', true );

    wp_enqueue_script( 'b2wp-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), '20151215', true );
    wp_enqueue_script( 'b2wp-magnific', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), '20151215', true );

    wp_enqueue_script( 'b2wp-jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '20151215', true );
    wp_enqueue_script( 'b2wp-contact', get_template_directory_uri() . '/js/contact_me.js', array(), '20151215', true );

    wp_enqueue_script( 'b2wp-freelancer', get_template_directory_uri() . '/js/freelancer.js', array(), '20151215', true );


}
add_action( 'wp_enqueue_scripts', 'b2w_scripts' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'bstohtml' ),
) );

/**
* Load  bootstrap walker file.
*/

 require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
