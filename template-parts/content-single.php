<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="fullwidth">

			<div class="container-fluid postwidth">
			<div class="row"><div class="col-xs-12">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>
			</div></div>
			</div>

</div>

<!-- twentysixteen_post_thumbnail(); -->

<div class="fullwidth">

	<div class="container-fluid postwidth">
		<div class="row"><div class="col-xs-12">

			<div class="entry-body">
				<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

				//if ( '' !== get_the_author_meta( 'description' ) ) {
				//	get_template_part( 'template-parts/biography' );
				//}

				?>
			</div><!-- .entry-content -->

		</div></div>

	</div>

</div>

<!-- twentysixteen_entry_meta(); -->

</article><!-- #post-## -->
