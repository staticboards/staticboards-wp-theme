<?php

function staticboards_selleritem_scfunc ($atts)
{
  $args = shortcode_atts( array(
      'id' => '',
	  'url' => '',
	  'img' => '',
	  'desc' => '',
  ), $atts );

  $output = '';

  $output .= "<div class=\"sellermain\">";
  $output .= "<div class=\"sellerimg\">";
  $output .= "<div>";

  $output .= "<a id=\"buy-". $args['id'] ."\" href=\"". $args['url']  ."\" >";
  $output .= "<img title=\"". $args['desc'] ."\" alt=\"". $args['desc'] ."\" src=\"".$args['img']."\" >";
  $output .= "</a>";

  $output .= "</div>";
  $output .= "</div>";

  $output .= "<div class=\"sellerdesc\">".$args['desc']."</div>";
  $output .= "<div class=\"sellerbtn\"><a id=\"buy-".$args['id']."\" href=\"".$args['url']."\" target=\"_blank\" ><i class=\"fa fa-shopping-cart fa-lg\">&nbsp;&nbsp;</i>Comprar</a></div>";

  $output .= "</div>";

  return $output;
}

add_shortcode( 'staticboards_selleritem', 'staticboards_selleritem_scfunc' );
?>
