<?php

/**
 * Query WooCommerce activation
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        return class_exists( 'woocommerce' ) ? true : false;
    }
}

function register_staticboards_styles(){

  if ( ! is_admin() ){

    if ( function_exists( 'wp_register_style' ) ) {

    wp_register_style( 'staticboards-css-bootstrap-screen', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-bootstrap-print', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'print' );

    wp_register_style( 'staticboards-css-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,800italic,800,700italic,700,600italic,600,400italic', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-droid-serif', get_template_directory_uri() . '/static/css/droid-serif.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-ptsans', get_template_directory_uri() . '/static/css/ptsans.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-lato', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' , array(), false, 'screen' );
    wp_register_style( 'staticboards-css-noto-sans', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700' , array(), false, 'screen' );

    wp_register_style( 'staticboards-css-font-awesome', get_template_directory_uri() . '/static/css/font-awesome-4.3.0.min.css', array(), false, 'screen' );

    wp_register_style( 'staticboards-css-min', get_template_directory_uri() . '/style.min.css', array(), false, 'screen' );
    }

    if ( function_exists( 'wp_register_script' ) ) {
    wp_register_script( 'staticboards-js-bootstrap', get_template_directory_uri() . '/static/js/bootstrap.min.js', array('jquery') ) ;
    wp_register_script( 'staticboards-js-responsive-nav', get_template_directory_uri() . '/static/js/responsive-nav.min.js', array('jquery') ) ;
    }

  }
}

add_action( 'init', 'register_staticboards_styles' );


function enqueue_staticboards_styles(){
  if ( ! is_admin() ){

    if ( function_exists( 'wp_enqueue_style' ) ) {
    wp_enqueue_style( 'staticboards-css-bootstrap-screen' );
    wp_enqueue_style( 'staticboards-css-bootstrap-print' );

    wp_enqueue_style( 'staticboards-css-opensans' );
    wp_enqueue_style( 'staticboards-css-droid-serif' );
    wp_enqueue_style( 'staticboards-css-ptsans' );
    wp_enqueue_style( 'staticboards-css-lato' );
    wp_enqueue_style( 'staticboards-css-noto-sans' );
    wp_enqueue_style( 'staticboards-css-font-awesome' );

    wp_enqueue_style( 'staticboards-css-min' );
    }

    if ( function_exists( 'wp_enqueue_style' ) ) {
        wp_enqueue_script( 'staticboards-js-bootstrap' );
        wp_enqueue_script( 'staticboards-js-responsive-nav' );
    }
  }
}

add_action( 'wp_enqueue_scripts', 'enqueue_staticboards_styles' );



function staticboards_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Post SideBar', 'staticboards' ),
        'id'            => 'sidebar-post',
        'description'   => __( 'Appears at the side of the content on posts.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Blog SideBar', 'staticboards' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Appears at the side of the post list.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Shop SideBar', 'staticboards' ),
        'id'            => 'sidebar-shop',
        'description'   => __( 'Appears at the side of the products.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Product Bottom', 'staticboards' ),
        'id'            => 'product-bottom',
        'description'   => __( 'Appears at the bottom of the products.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom CTA 1', 'staticboards' ),
        'id'            => 'sidebar-cta-light',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="row"><div class="col-sm-12">',
        'after_widget'  => '</div></div></section>',
        'before_title'  => '<header><div class="row"><div class="col-sm-12"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom CTA 2', 'staticboards' ),
        'id'            => 'sidebar-cta-dark',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 1', 'staticboards' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 2', 'staticboards' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 3', 'staticboards' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

add_action( 'widgets_init', 'staticboards_widgets_init' );


if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(array('topnavbar' => __('Top Navbar','staticboards') ));
}


function staticboards_theme_support() {

    $domain = 'staticboards';

    // wp-content/languages/theme-name/de_DE.mo
    load_theme_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain );
    // wp-content/themes/child-theme-name/languages/de_DE.mo
    load_theme_textdomain( $domain, get_stylesheet_directory() );
    // wp-content/themes/theme-name/languages/de_DE.mo
    load_theme_textdomain( $domain, get_template_directory() );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'nav-menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 9999 );    
}

if ( function_exists( 'staticboards_theme_support' ) ) {
    add_action( 'after_setup_theme', 'staticboards_theme_support' );
}

?>