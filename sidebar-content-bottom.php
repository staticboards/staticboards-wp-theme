<?php if ( is_active_sidebar( 'sidebar-cta-light' ) ) : ?>
<div class="bgtitlesection bg-highlevel hidden-print fullwidth">
<div class="container-fluid widget-area pagewidth">
<?php dynamic_sidebar( 'sidebar-cta-light' ); ?>
</div>
</div>
<?php endif; ?>

<section class="bgtitlesection bg-deskdark hidden-print fullwidth">

    <?php if ( is_active_sidebar( 'sidebar-cta-dark' ) ) : ?>
    <div class="widget-area">
    <?php dynamic_sidebar( 'sidebar-cta-dark' ); ?>
    </div>
    <?php endif; ?>


  <header>
      <div class="container-fluid pagewidth">
      <div class="row">
      <div class="col-xs-12 light-color">
      <h1>Apúntate a nuestra newsletter</h1>
    recibirás ocasionalmente un boletín con nuestros últimos proyectos y promociones especiales.
      </div>
      </div>
      </div>
  </header>

  <form action="//staticboards.us6.list-manage.com/subscribe/post?u=8b187d98672bc303b21a53e5a&amp;id=4ea99852db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form validate" target="_blank" novalidate>
    <div class="container-fluid pagewidth">

    <div id="mc_embed_signup" class="row">

      <div style="position: absolute; left: -5000px;"><input type="text" name="b_8b187d98672bc303b21a53e5a_4ea99852db" tabindex="-1" value=""></div>

      <div class="form-group col-sm-4">
      <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="dirección de correo" required>
      </div>

      <div id="mc_embed_signup_button" class="form-group col-sm-1">
      <input type="submit" value="avísame" name="subscribe" class="btn btn-default" id="mc-embedded-subscribe">
      </div>

    </div>


    </div>
  </form>
</section>

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
