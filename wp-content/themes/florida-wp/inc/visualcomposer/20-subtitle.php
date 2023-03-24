<?php

vc_map( array(
        'name' =>'Webnus Subtitle',
        'base' => 'subtitle',
		"description" => "Subtitle 1",
        "icon" => "icon-wpb-wsubtitle",
        'params'=>array(
					
					array(
							'type' => 'textarea_html',
							'heading' => __( 'Subtitle Content', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'content',
							'value' => 'Subtitle text',
							'description' => __( 'Enter the Subtitle content', 'WEBNUS_TEXT_DOMAIN')
					),
		),
		'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        
    ) );


?>