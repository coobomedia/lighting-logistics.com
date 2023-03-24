<?php

vc_map( array(
        'name' =>'Webnus LatestBlogs',
        'base' => 'latestfromblog',
        "icon" => "icon-wpb-wlatest-blog",
		"description" => "Recent posts",
        'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        'params' => array(
						array(
							'type' => 'textfield',
							'heading' => __( 'LatestBlog Title', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'title',
							'value' => 'Latest Blog',
							'description' => __( 'Enter the LatestBlog title', 'WEBNUS_TEXT_DOMAIN')
						),
						
						
           
        ),
		
        
    ) );


?>