<?php

function  bloxdark_shortcode($attributes, $content)
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
						'bgcolor'=>''
                         )
            , $attributes));
			
    $bg_height = !empty($height)?$height:'380';
		
	
	
   
	
	if($bg_attachment == 'true') $fixed = 'fixed center top' . ( ( 'true'==$bgcover )?'/ cover':'' ); else $fixed= 'center';
	    
	
	$background_style = !empty($img)?" background: url({$img}) {$repeat} {$fixed}; ":'';
	
	$height_style = " min-height:{$bg_height}px; ";
	
	$padding_style= " padding-top:{$padding_top}; padding-bottom:{$padding_bottom}; ";
	
	if(!empty($bgcolor))
		$bgcolor = 'background-color:' . $bgcolor . ';';
    
	$is_dark = ( 'true' == $dark )? ' dark ' : '';
	
    $out = '</div></section><section class="blox dark '.$is_dark.$class .'" style="'.$padding_style.$background_style.$height_style.$bgcolor.'"><div class="wpb_row vc_row-fluid full-row"><div class="container">';
    $out .= do_shortcode($content); 
    $out .= '</div></div></section><section class="container"><div class="row-wrapper-x">';
	
    return $out;
}
add_shortcode("bloxdark", 'bloxdark_shortcode');




function  blox_shortcode($attributes, $content)
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
						'bgcolor'=>''
                         )
            , $attributes));
			
    $bg_height = !empty($height)?$height:'380';
		
	
	
   
	
	if($bg_attachment == 'true') $fixed = 'fixed center top' . ( ( 'true'==$bgcover )?'/ cover':'' ); else $fixed= 'center';
	    
	
	$background_style = !empty($img)?" background: url({$img}) {$repeat} {$fixed}; ":'';
	
	$height_style = " min-height:{$bg_height}px; ";
	
	$padding_style= " padding-top:{$padding_top}; padding-bottom:{$padding_bottom}; ";
	
	if(!empty($bgcolor))
		$bgcolor = 'background-color:' . $bgcolor . ';';
    
	$is_dark = ( 'true' == $dark )? ' dark ' : '';
	
    $out = '</div></section><section class="blox '.$is_dark.$class .'" style="'.$padding_style.$background_style.$height_style.$bgcolor.'"><div class="wpb_row vc_row-fluid full-row"><div class="container">';
    $out .= do_shortcode($content); 
    $out .= '</div></div></section><section class="container"><div class="row-wrapper-x">';
	
    return $out;
}
add_shortcode("blox", 'blox_shortcode');