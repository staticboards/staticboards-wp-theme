<?php


if ( ! function_exists( 'staticboards_entry_meta' ) ) :

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


?>