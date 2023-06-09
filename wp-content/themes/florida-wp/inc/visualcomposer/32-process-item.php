<?php

vc_map( array(
        "name" =>"Webnus Proccess Item",
        "base" => "process",
        "description" => "Process item",
		"icon" => "icon-wpb-wprocess-item",
        "category" => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        "params" => array(
           
           
			 array(
				"type"=>'textfield',
				"heading"=>__('Process  Title', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "proc_title",
				"value"=>"",
				"description" => __( "Process Item 1 Title ", 'WEBNUS_TEXT_DOMAIN')
				
			),
			 
			 array(
				"type"=>'textfield',
				"heading"=>__('Process  Text', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "proc_text",
				"value"=>"",
				"description" => __( "Process Item 1 Text ", 'WEBNUS_TEXT_DOMAIN')
				
			),
			 array(
				"type"=>'icomoon',
				"heading"=>__('Process  Icon', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "proc_icon",
				"value"=>"",
				"description" => __( "Process Item 1 Icon ", 'WEBNUS_TEXT_DOMAIN')
				
			),
			
        ),
		
        
    ) );


?>