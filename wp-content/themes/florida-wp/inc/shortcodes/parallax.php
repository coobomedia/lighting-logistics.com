<?php
function webnus_parallax($attributes, $content) {

	extract(shortcode_atts(array(
		"img" => '',
		"height" => '',
		'padding_top' => 0,
		'padding_bottom' => 0,
		'bg_attachment' => 'false',
		'bgcover' => 'true',
		'repeat' => 'no-repeat',
		'dark' => 'false',
		'speed'=>'6',
		'class' => ''),
	 $attributes));

	$bg_height = !empty($height) ? $height : '380';

	if ($bg_attachment == 'true')
		$fixed = 'fixed center top' . (('true' == $bgcover) ? '/ cover' : '');
	else
		$fixed = 'center';

	$background_style = !empty($img) ? " background: url({$img}) {$repeat} {$fixed}; " : '';

	$height_style = " min-height:{$bg_height}px ";

	$padding_style = " padding-top:{$padding_top}; padding-bottom:{$padding_bottom}; ";

	$is_dark = ('true' == $dark) ? ' dark ' : '';

	$out = '</div></section><section class="parallax-sec ' . $class . '" style="' . $padding_style . $background_style . $height_style . '" data-speed="'.$speed. '" data-type="background"><div class="wpb_row vc_row-fluid blox '.$is_dark.'"><div class="container">';
	$out .= do_shortcode($content);
	$out .= '</div></div></section><section class="container"><div class="row-wrapper-x">';

	return $out;
}

add_shortcode('parallax', 'webnus_parallax');
?>