<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="fullwidth">

			<div class="container-fluid pagewidth">
			<div class="row"><div class="col-xs-12">

				<header class="entry-header">
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
				<?php endif; ?>

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header>

			</div></div>
			</div>

</div>

<!--
	twentysixteen_excerpt();

	twentysixteen_post_thumbnail();
-->

<div class="fullwidth">

	<div class="container-fluid pagewidth">
		<div class="row"><div class="col-xs-12">

		<div class="entry-body">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>

		</div>

		</div></div>

	</div>

</div>

<!--
<footer class="entry-footer">
twentysixteen_entry_meta();
</footer>
-->

</article><!-- #post-## -->
