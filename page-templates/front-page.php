<?php
/**
 * Template Name: Front Page Template
 */?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/navbar', get_post_format() ); ?>

<main role="main" id="front-page">

<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'onlycontent' );

			// End of the loop.
		endwhile;
?>

<?php get_template_part( 'template-parts/calltoactions', get_post_format() ); ?>

</main>

<?php get_footer(); ?>
