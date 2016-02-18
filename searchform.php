<form role="search" method="get"  class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
<div class="search-field-wrap">
<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'staticboards' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'staticboards' ); ?>" />
</div>

</form>
