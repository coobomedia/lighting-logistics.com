<?php
$work_array = array();

global $wpdb;
if(empty($wpdb)) die('WPDB not found...!');
  $work_query = $wpdb->get_results( 
  	"SELECT ID, post_title 
  	FROM $wpdb->posts
  	WHERE post_type = 'portfolio' AND post_status='publish'
  	"
  );
  //var_dump($faq_query);
  
  if(!empty($work_query))
  {
  	$work_array['All'] = 0;
	 foreach ( $work_query as $work ) {
      $work_array[$work->post_title] = $work->ID;
    }
	
  }else{
  	
	$work_array['No FAQ Found'] = -1;
  }
vc_map( array(
        'name' =>'Webnus RecentWorks',
        'base' => 'recentworks',
         "icon" => "icon-wpb-wrecent-wroks",
        "description" => "Portfolio",
        'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        'params'=>array(
					array(
							'type' => 'icomoon',
							'heading' => __( 'Icon', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'icon',
							'value' => 'Select the Icon',
							'description' => __( 'RecentWorks Icon', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textfield',
							'heading' => __( 'Title', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'title',
							'value' => '',
							'description' => __( 'RecentWorks title', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'textfield',
							'heading' => __( 'Subtitle', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'subtitle',
							'value' => '',
							'description' => __( 'Recent Works Subtitle', 'WEBNUS_TEXT_DOMAIN')
					),
					array(
							'type' => 'checklist',
							'heading' => __( 'Works Selection', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'work_id',
							'value' => $work_array,
							'description' => __( 'Select and filter From Works list.', 'WEBNUS_TEXT_DOMAIN')
					),
					
					
		)
    ) );


?>