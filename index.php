<?php get_header(); ?>

<?php get_template_part( 'template-parts/navbar', get_post_format() ); ?>

<main role="main" id="index">

	<?php if ( have_posts() ) : ?>

		<div class="fullwidth">
			<div class="container-fluid postwidth">

				<div class="row"><div class="col-xs-12">
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				</div></div>


				<div class="row">
					<div class="col-xs-8">

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="entrylist-article">
					  <?php
						 get_template_part( 'template-parts/content', get_post_format() );
						?>
						</div>
					<?php endwhile; ?>

					</div>

					<div class="col-xs-4">
					</div>

				</div>

				<div class="row"><div class="col-xs-12">
				<?php						
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				) );
				?>

				</div></div>


			</div>
		</div>

	<?php
	// If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

<?php get_template_part( 'template-parts/calltoactions', get_post_format() ); ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
