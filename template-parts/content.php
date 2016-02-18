<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php staticboards_post_thumbnail (); ?>

	<header class="entrylist-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<section>
	<div class="entrylist-content">
		<?php staticboards_excerpt(); ?>
	</div><!-- .entry-content -->
	</section>

	<footer>
	<div class="entrylist-footer">
	<?php staticboards_entry_meta(); ?>
	</div>
	</footer>

</article><!-- #post-## -->
