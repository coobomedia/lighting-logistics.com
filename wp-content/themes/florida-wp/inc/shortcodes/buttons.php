<?php
 function webnus_buttons( $atts, $content = null ) {
 	extract(shortcode_atts(array(
 	'url'      => '#',
 	'target'      => '_self',
 	'color'      => '',
 	'size'      => '',
	'border'=>'false',
	'icon'=>''
 	), $atts));
	
	if(substr($icon,0,7) == 'icomoon')
	{
		$icon = substr($icon,8, strlen($icon));
	}
	$border = ( 'true' == $border ) ? 'bordered-bot' : '';
	$icon_str = !empty($icon)? '<i class="icomoon-'.$icon.'"></i>' : '';
	
 	$out = '<a href="'. $url . '" class="button '. $color . '  '. $size . ' '. $border . ' " target="'. $target . '">'. $icon_str . do_shortcode($content) . '</a>';
 	return $out;
 }
 add_shortcode('button', 'webnus_buttons');
?>