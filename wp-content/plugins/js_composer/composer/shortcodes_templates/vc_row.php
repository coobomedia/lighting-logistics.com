<?php
$output = $el_class = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'row_type'=>0,
    'blox_image'=>'',
    'blox_height'=>'',
    'blox_padding_top'=>'',
    'blox_padding_bottom'=>'',
    'blox_bg_attachment'=>'',
    'blox_cover'=>'',
    'blox_repeat'=>'',
    'blox_dark'=>'',
    'blox_class'=>'',
    'blox_bgcolor'=>'',
    'parallax_speed'=>'',
	
	// Process Box
	'process_icon'=>'',
	'process_title'=>'',
	'process_subtitle'=>'',
	'process_count'=>'4',
	'video_url'=> '',
	'video_pattern'=>'',
	'video_type'=>''
   
), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass($el_class);

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_row '.get_row_css_class().$el_class, $this->settings['base']);

switch($row_type){
	
	
	case 1:
		$output .= '</div></section><section class="'.$css_class.' full-row">';
		$output .= wpb_js_remove_wpautop($content);
		$output .= '</section><section class="container"><div class="row-wrapper-x">'.$this->endBlockComment('row');
		break;
	case 2:
		
		$output = wpb_js_remove_wpautop("[blox bgcolor='$blox_bgcolor' img='{$blox_image}' dark='{$blox_dark}' height='{$blox_height}' padding_top='{$blox_padding_top}' padding_bottom='{$blox_padding_bottom}' bg_attachment='{$blox_bg_attachment}' bgcover='{$blox_cover}' repeat='{$blox_repeat}' class='{$blox_class}']" . $content . "[/blox]");
		break;
	case 3:
		$output = wpb_js_remove_wpautop("[parallax img='{$blox_image}' dark='{$blox_dark}' height='{$blox_height}' padding_top='{$blox_padding_top}' padding_bottom='{$blox_padding_bottom}' bg_attachment='{$blox_bg_attachment}' bgcover='{$blox_cover}' repeat='{$blox_repeat}' speed='{$parallax_speed}' class='{$blox_class}']".$content."[/parallax]");
		break;
	case 4:
		$output .= '</div></section><section class="our-process-wrap container"><div class="icon-top-title aligncenter"><hr class="vertical-space2">';
		$output .= "<i class=\"$process_icon\"></i>";
		$output .= '<hr class="vertical-space1">';
		$output .= "<h2>$process_title</h2>";
		$output .= "<h4 class=\"slight\">$process_subtitle</h4>";
		$output .= '<hr class="vertical-space4"></div><div class="our-process proc'.$process_count.'level">';
		$output .= wpb_js_remove_wpautop($content);
		$output .= '</div></section><section class="container"><div class="row-wrapper-x">'.$this->endBlockComment('row');
	break;
	
	case 5:
		
		$output = wpb_js_remove_wpautop("[videorow img='{$blox_image}' dark='{$blox_dark}' height='{$blox_height}' padding_top='{$blox_padding_top}' padding_bottom='{$blox_padding_bottom}' bg_attachment='{$blox_bg_attachment}' bgcover='{$blox_cover}' repeat='{$blox_repeat}' class='{$blox_class}' video_url='$video_url' video_pattern='$video_pattern' video_type='$video_type']" . $content . "[/videorow]");
		break;

	default:
		
		$output .= '<section class="'.$css_class.'">';
		$output .= wpb_js_remove_wpautop($content);
		$output .= '</section>'.$this->endBlockComment('row');
		
		break;
	
	
}

echo wpb_js_remove_wpautop($output);