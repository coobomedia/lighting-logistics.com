<?php

vc_map( array(
        'name' =>'Webnus OurTeam',
        'base' => 'ourteam',
		"description" => "Team member",
        "icon" => "icon-wpb-wourteam",
        'params'=>array(
					
					
					array(
							'type' => 'attach_image',
							'heading' => __( 'Team Image', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'img',
							'value'=>'',
							'description' => __( 'Team member image', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textfield',
							'heading' => __( 'Team Memeber Name', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'name',
							'value'=>'Name',
							'description' => __( 'Team member name', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textfield',
							'heading' => __( 'Team Memeber Title', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'title',
							'value'=>'Title',
							'description' => __( 'Team member title', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textfield',
							'heading' => __( 'Team Memeber description text', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'text',
							'value'=>'Text goes here',
							'description' => __( 'Team member description text', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textarea_html',
							'heading' => __( 'Ourteam Content', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'content',
							'value' => '[icon name="twitter" link="#" link_class="twitter"][icon name="facebook" link="#" link_class="facebook"][icon name="dribbble" link="#" link_class="dribble"][icon name="linkedin" link="#" link_class="linkedin"]',
							'description' => __( 'Enter the Ourteam content, [icon] Available', 'WEBNUS_TEXT_DOMAIN')
					),
		),
		'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        
    ) );


?>