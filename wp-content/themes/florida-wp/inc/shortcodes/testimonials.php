<?php
function webnus_testimonial ($atts, $content = null) {
 	extract(shortcode_atts(array(
 	
	'img'=>'',
	'name'=>'',
	'subtitle' => '',
	), $atts));
	
	
	$out = '';
	
	if(is_numeric($img)){
		
		$img = wp_get_attachment_url( $img );
		
	}
	$out .= '<div class="testimonial">';
	$out .= '<div class="testimonial-content">';
	$out .= '<p>'. do_shortcode($content) .'</p>';
	$out .= '<div class="testimonial-arrow"></div>';
	$out .= '</div>';
	$out .= '<div class="b-author">';
	$out .= '<p>'.$name.'<br><span>'.$subtitle.'</span></p>';
	$out .= '<img src="'.$img.'" alt="Testimonial '.$name.'" />';
	$out .= '</div>';
	$out .= '</div>';

return $out;
}
 add_shortcode('testimonial','webnus_testimonial');
?>