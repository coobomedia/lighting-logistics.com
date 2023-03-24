<?php

  // Subtitle
 function webnus_subtitle ($atts, $content = null) {
 	extract(shortcode_atts(array(
 	'title'      => ''
						), $atts));

 	$out = '<h4 class="subtitle">';
 	$out .= do_shortcode($content);
 	$out .= '</h4>';
 	return $out;
 }
 add_shortcode('subtitle','webnus_subtitle');



function subtitle2_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => ''
						), $atts));

	$out =  '<div class="title">';
	$out .= '<h4>'. $content .'</h4>';
	$out .= '</div>';
	return $out;
}
add_shortcode('subtitle2','subtitle2_shortcode');




function subtitle3_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => ''
						), $atts));

	$out =  '<div class="sub-content">';
	$out .= '<h6 class="h-sub-content">'. $content .'</h6>';
	$out .= '</div>';
	return $out;
}
add_shortcode('subtitle3','subtitle3_shortcode');

function bigtitle_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => ''
						), $atts));

	
	$out = '<h1 class="mex-title">'. $content .'</h1>';
	
	return $out;
}

add_shortcode('big_title','bigtitle_shortcode');

function bigtitle2_shortcode ($atts, $content = null) {
	extract(shortcode_atts(array(
	'title'      => '',
	
						), $atts));

	
	$out = '<h2 class="mex-title">'. $content .'</h2>';
	
	return $out;
}
add_shortcode('big_title2','bigtitle2_shortcode');

function webnus_title($atts, $content)
{
	extract(shortcode_atts(array(
	'type'      => '4',

	), $atts));

	$out = '<h'.$type.'><strong>'.$content.'</strong></h'.$type.'>';
	return $out;
}

add_shortcode('title', 'webnus_title');
?>