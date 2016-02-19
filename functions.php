<?php

if ( ! function_exists( 'twentysixteen_entry_meta' ) ) :

function staticboards_entry_meta() {

    printf ( '<a href="%1s">%2s</a>' , esc_url( get_permalink() ) , __( 'Read more...', 'staticboards' ) );

    //printf( '<span class=""><a href="%s" rel="bookmark">', , '</a></h2>' );


    if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link( '' ,
                __( '1 response', 'staticboards' ) ,
                __( '% responses', 'staticboards' ) 
                );
        echo '</span>';
    }

    if ( 'post' === get_post_type() ) {
        staticboards_entry_taxonomies();
    }
}
endif;

if ( ! function_exists( 'staticboards_entry_taxonomies' ) ) :

function staticboards_entry_taxonomies() {
    $categories_list = get_the_category_list( _x( ' / ', 'Used between list items, there is a space after.', 'staticboards' ) );
    if ( $categories_list ) {
        printf( '<span class="cat-links">%1$s</span>',$categories_list);
    }
}
endif;

if ( ! function_exists( 'staticboards_post_thumbnail' ) ) :
function staticboards_post_thumbnail() {

    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        return;
    }

    if ( is_singular() ) : ?>

        <div class="post-thumbnail">
        <?php the_post_thumbnail( 'post-thumbnail' , array('class' => 'img-fullwidth' ) ); ?>
        </div><!-- .post-thumbnail -->

    <?php else : ?>

        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
            <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fullwidth' , 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
        </a>

    <?php endif; // End is_singular()
}
endif;

function register_staticboards_styles(){

  if ( ! is_admin() ){

    if ( function_exists( 'wp_register_style' ) ) {

    wp_register_style( 'staticboards-css-bootstrap-screen', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-bootstrap-print', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), false, 'print' );


    wp_register_style( 'staticboards-css-opensans', get_template_directory_uri() . '/static/css/opensans.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-droid-serif', get_template_directory_uri() . '/static/css/droid-serif.css', array(), false, 'screen' );
    //wp_register_style( 'staticboards-css-ptsans', get_template_directory_uri() . '/static/css/ptsans.css', array(), false, 'screen' );
    //wp_register_style( 'staticboards-css-lato', get_template_directory_uri() . '/static/css/lato.css', array(), false, 'screen' );
    wp_register_style( 'staticboards-css-font-awesome', get_template_directory_uri() . '/static/css/font-awesome-4.3.0.min.css', array(), false, 'screen' );

    wp_register_style( 'staticboards-css-min', get_template_directory_uri() . '/style.min.css', array(), false, 'screen' );
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

    wp_enqueue_style( 'staticboards-css-opensans' );
    wp_enqueue_style( 'staticboards-css-droid-serif' );
    //wp_enqueue_style( 'staticboards-css-ptsans' );
    //wp_enqueue_style( 'staticboards-css-lato' );
    wp_enqueue_style( 'staticboards-css-font-awesome' );

    wp_enqueue_style( 'staticboards-css-min' );
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
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );

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
