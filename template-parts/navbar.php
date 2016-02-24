<div id="header">

<header id="header-desktop" class="hidden-print visible-sm-block visible-md-block visible-lg-block container-fluid pagewidth">

  <div class="row">

  <div id="sblogo" class="col-sm-2">
  <a href='/'></a>
  </div>

  <div class="col-sm-8">
   <?php wp_nav_menu( array(
    'theme_location' => 'topnavbar','menu' => 'Top Navbar',
    'menu_class' => '','menu_id' => '',
    'container' => 'nav' , 'container_class' => '' , 'container_id' => 'navigation' )) ;?>
  </div>

  <div class="col-sm-2">
  <?php get_search_form(); ?>
  </div>

  </div>

</header>

<div id="header-mobile" class="hidden-print visible-xs-block">

  <div role="navigation" id="header-mobile-nav" class="nav-collapse">

   <?php wp_nav_menu( array(
    'theme_location' => 'topnavbar','menu' => 'Top Navbar',
    'menu_class' => '','menu_id' => '',
    'container' => 'nav' , 'container_class' => '' , 'container_id' => 'navigation' )) ;?>

  </div>

  <div role="main" class="main">
    <a href="#" class="nav-toggle"></a>

    <div id="sblogo">
      <a href='/'></a>
    </div>

  </div>

</div>

</div>