<?php get_header(); ?>

<?php get_template_part( 'template-parts/navbar', get_post_format() ); ?>

<main role="main" id="page">

<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) {
		  //		comments_template();
			//}

			// End of the loop.
		endwhile;
?>

<?php get_template_part( 'template-parts/calltoactions', get_post_format() ); ?>

</main>

<?php get_footer(); ?>
