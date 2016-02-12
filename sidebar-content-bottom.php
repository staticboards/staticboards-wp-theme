<?php

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
// If we get this far, we have widgets. Let's do this.
?>

<section id="widgets-bottom">

<div class="container-fluid pagewidth">

<div class="visible-sm-block visible-md-block visible-lg-block row">

  <div  class="col-sm-4" >

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
		<?php endif; ?>

  </div>

  <div class="col-sm-4">

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
		<?php endif; ?>

  </div>

  <div class="col-sm-4">

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>
		<?php endif; ?>

  </div>

</div>

</div>
</section>
