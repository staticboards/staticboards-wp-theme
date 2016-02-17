<?php

function register_staticboards_styles(){

  if ( ! is_admin() ){

    if ( function_exists( 'wp_register_style' ) ) {

    wp_register_style( 'staticboards-css-bootstrap-screen', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-bootstrap-print', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'print' );

    wp_register_style( 'staticboards-css-theme', get_template_directory_uri() . '/css/theme.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-widgets', get_template_directory_uri() . '/css/widgets.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-nav', get_template_directory_uri() . '/css/nav.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-responsive-nav', get_template_directory_uri() . '/css/responsive-nav.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-footer', get_template_directory_uri() . '/css/footer.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-cycle', get_template_directory_uri() . '/css/cycle.css', array(), false, 'screen' );

    wp_register_style( 'staticboards-css-content', get_template_directory_uri() . '/css/content.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-index', get_template_directory_uri() . '/css/index.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-page', get_template_directory_uri() . '/css/page.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-front-page', get_template_directory_uri() . '/css/front-page.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-single', get_template_directory_uri() . '/css/single.css', array(), false, 'screen' );


    wp_register_style( 'staticboards-css-producto', get_template_directory_uri() . '/css/producto.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-productos', get_template_directory_uri() . '/css/productos.css', array(), false, 'screen' );

    wp_register_style( 'staticboards-css-breadcrumb', get_template_directory_uri() . '/css/breadcrumb.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-mailchimp', get_template_directory_uri() . '/css/mailchimp.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-cart', get_template_directory_uri() . '/css/cart.css', array(), false, 'screen' );

    wp_register_style( 'staticboards-css-superfish', get_template_directory_uri() . '/static/css/superfish/superfish.css', array(), false, 'screen' );


    wp_register_style( 'staticboards-css-opensans', get_template_directory_uri() . '/static/css/opensans.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-droid-serif', get_template_directory_uri() . '/static/css/droid-serif.css', array(), false, 'screen' );
    //wp_register_style( 'staticboards-css-ptsans', get_template_directory_uri() . '/static/css/ptsans.css', array(), false, 'screen' );
    //wp_register_style( 'staticboards-css-lato', get_template_directory_uri() . '/static/css/lato.css', array(), false, 'screen' );
    //wp_register_style( 'staticboards-css-font-awesome', get_template_directory_uri() . '/static/css/font-awesome-4.3.0.min.css', array(), false, 'screen' );

    }

    if ( function_exists( 'wp_register_script' ) ) {
    wp_register_script( 'staticboards-js-jquery', get_template_directory_uri() . '/static/js/jquery-1.11.1.min.js', array() ) ;
    wp_register_script( 'staticboards-js-bootstrap', get_template_directory_uri() . '/static/js/bootstrap.min.js', array() ) ;
    wp_register_script( 'staticboards-js-responsive-nav', get_template_directory_uri() . '/static/js/responsive-nav.min.js', array() ) ;
    }

  }
}

add_action( 'init', 'register_staticboards_styles' );


function enqueue_staticboards_styles(){
  if ( ! is_admin() ){

    if ( function_exists( 'wp_enqueue_style' ) ) {
    wp_enqueue_style( 'staticboards-css-bootstrap-screen' );
    wp_enqueue_style( 'staticboards-css-bootstrap-print' );

    wp_enqueue_style( 'staticboards-css-theme' );
    wp_enqueue_style( 'staticboards-css-widgets' );
    wp_enqueue_style( 'staticboards-css-nav' );
    wp_enqueue_style( 'staticboards-css-responsive-nav' );
    wp_enqueue_style( 'staticboards-css-footer' );
    wp_enqueue_style( 'staticboards-css-cycle' );

    wp_enqueue_style( 'staticboards-css-content' );
    wp_enqueue_style( 'staticboards-css-index' );
    wp_enqueue_style( 'staticboards-css-page' );
    wp_enqueue_style( 'staticboards-css-front-page' );
    wp_enqueue_style( 'staticboards-css-single' );

    wp_enqueue_style( 'staticboards-css-producto' );
    wp_enqueue_style( 'staticboards-css-productos' );

    wp_enqueue_style( 'staticboards-css-breadcrumb' );
    wp_enqueue_style( 'staticboards-css-mailchimp' );
    wp_enqueue_style( 'staticboards-css-cart' );

    wp_enqueue_style( 'staticboards-css-superfish' );

    wp_enqueue_style( 'staticboards-css-opensans' );
    wp_enqueue_style( 'staticboards-css-droid-serif' );
    //wp_enqueue_style( 'staticboards-css-ptsans' );
    //wp_enqueue_style( 'staticboards-css-lato' );
    //wp_enqueue_style( 'staticboards-css-font-awesome' );
    }

    if ( function_exists( 'wp_enqueue_style' ) ) {
    wp_enqueue_script( 'staticboards-js-jquery' );
    wp_enqueue_script( 'staticboards-js-bootstrap' );
    wp_enqueue_script( 'staticboards-js-responsive-nav' );
    }

  }
}

add_action( 'wp_enqueue_scripts', 'enqueue_staticboards_styles' );

add_theme_support( 'nav-menus' );
add_theme_support( 'title-tag' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(array('topnavbar' => __('Top Navbar','staticboards') ));
}

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
        'name'          => __( 'Content Bottom CTA 1', 'staticboards' ),
        'id'            => 'sidebar-cta-light',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'staticboards' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="row"><div class="col-xs-12">',
        'after_widget'  => '</div></div></section>',
        'before_title'  => '<header><div class="row"><div class="col-xs-12"><h3 class="widget-title">',
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



if ( ! function_exists( 'staticboards_excerpt' ) ) :
    function staticboards_excerpt( $class = 'entry-summary' ) {
        $class = esc_attr( $class );

        if ( has_excerpt() || is_search() ) : ?>
            <div class="<?php echo $class; ?>">
                <?php the_excerpt(); ?>
            </div><!-- .<?php echo $class; ?> -->
        <?php endif;
    }
endif;
