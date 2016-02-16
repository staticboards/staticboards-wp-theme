<?php get_header(); ?>

<?php get_template_part( 'template-parts/navbar', get_post_format() ); ?>

<main role="main" id="single">

<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>

  	<div class="fullwidth">
					<div class="container-fluid postwidth">
					<div class="row"><div class="col-xs-12">
					<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
					</div></div>
					</div>
		</div>

		<div class="fullwidth">

		<div class="container-fluid postwidth">
		<div class="row">

		<div class="col-xs-8">
		<?php get_template_part( 'template-parts/content', 'single' ); ?>
		</div>
		
		<div class="col-xs-4">
		<?php if ( is_active_sidebar( 'sidebar-post' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-post' ); ?>
		<?php endif; ?>
		</div>

		</div>		

		</div>

		</div>


<?php
			// End of the loop.
		endwhile;
?>


</main>

<?php get_template_part( 'template-parts/calltoactions', get_post_format() ); ?>

<?php get_footer(); ?>
