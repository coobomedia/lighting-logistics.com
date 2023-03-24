<?php 
function  webnus_videorow_shortcode($attributes, $content)
{


    extract(
            shortcode_atts(
                    array(  
                        "img" => '',
                        "height" => '',
                        'padding_top'  => 0,
                        'padding_bottom'  => 0,
						'bg_attachment' =>'false',
						'bgcover'=>'true',
						'repeat'=>'no-repeat',
						'dark'=>'false',
						'class'=>'',
						'video_url'=>'',
						'video_pattern'=>'true',
						'video_type'=>'video/webm',
                         )
            , $attributes));
			
    $bg_height = !empty($height)?$height:'380';
		
	
	
   
	
	if($bg_attachment == 'true') $fixed = 'fixed center top' . ( ( 'true'==$bgcover )?'/ cover':'' ); else $fixed= 'center';
	    
	
	$background_style = !empty($img)?" background: url({$img}) {$repeat} {$fixed}; ":'';
	
	$height_style = " min-height:{$bg_height}px ";
	
	$padding_style= " padding-top:{$padding_top}; padding-bottom:{$padding_bottom}; ";
    
	$is_dark = ( 'true' == $dark )? ' dark ' : '';
	
    $out = '</div></section><section class="video-sec '.$class .'" style="'.$padding_style.$background_style.$height_style.'"><div class="wpb_row vc_row-fluid full-row">';
    
    $out .= '<video loop="" autoplay="" class="video-item">';
	$out .= '<source type="'.$video_type.'" src="'.$video_url.'"></source>';     
	$out .= 'Your browser does not support the video tag. I suggest you upgrade your browser.</video>';
	if( 'true' == $video_pattern )
	$out .= '<div class="pattern-bg"></div>';
    $out .= '';
	if( 'true' == $dark )
		$out .= '<article class="dark-content"><div class="container">';
	else
		$out .= '<article class="light-content"><div class="container">';
	
    $out .= do_shortcode($content);
	$out .= '</div></article>'; 
    $out .= '</div></section><section class="container"><div class="row-wrapper-x">';
	
    return $out;
}
add_shortcode("videorow", 'webnus_videorow_shortcode');
?>