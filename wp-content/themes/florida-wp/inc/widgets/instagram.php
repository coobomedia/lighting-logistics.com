<?php
include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class WebnusInstagramWidget extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> 'Webnus Instagram Widget',
		'name'=> 'Webnus-Instagram'
		);

		parent::__construct('WebnusInstagramWidget', '', $params);

	}

	public function form($instance){


		extract($instance);
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title') ?>">Title:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('title') ?>"
		name="<?php echo $this->get_field_name('title') ?>"
		value="<?php if( isset($title) )  echo esc_attr($title); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('username') ?>">Instagram Username:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('username') ?>"
		name="<?php echo $this->get_field_name('username') ?>"
		
		value="<?php if( isset($username) )  echo esc_attr($username); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('count') ?>">Feed Count(Max 20):</label>
		<input type="text"
		
		class="widefat"
		id="<?php echo $this->get_field_id('count') ?>"
		name="<?php echo $this->get_field_name('count') ?>"
		
		value="<?php if( isset($count) )  echo esc_attr($count); ?>" />
		</p>
		<?php 
	}
	
	
	public function widget($args, $instance){
		//36587311
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<?php echo $before_title.$title.$after_title; ?>
			<div class="instagram-feed">
			<?php 
			$token = '870604238.e3e0612.80c4ef0b171e463cbf291e140cf15ee8';
			$base_url =  "https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $token . "&count=1&callback=?";
			
			$raw_content = wp_remote_get($base_url);
			if(!is_wp_error($raw_content))
			{
				$raw_content = $raw_content['body'];
				$json_insta = json_decode($raw_content);
				
				$id = $json_insta->data[0]->id;
				
				if(!empty($id))
				{
					
					$url = "https://api.instagram.com/v1/users/" . $id  ."/media/recent/?access_token=" . $token . "&count=" . $count . "&callback=?";
					
					$raw_content = wp_remote_get($url);
					
					$output = '';
					
					if(!is_wp_error($raw_content))
					{
						$output .= '<ul>';	
						$raw_content = $raw_content['body'];
						$json_insta = json_decode($raw_content);
						foreach($json_insta->data as $data)
						{
								
							$output .= '<li><a href="'.$data->link.'" target="__blank""><img src="'.$data->images->thumbnail->url.'"/></a></li>';
							
							
						}
						$output .= '</ul>';
						
						echo $output;
					}
				
				} // end if empty id
			}
			else echo __('An error occoured...','WEBNUS_TEXT_DOMAIN');
			?>
			<div class="clear"></div>
			</div>	 
		  <?php echo $after_widget; ?><!-- Disclaimer -->
		<?php 
	} 
}

add_action('widgets_init','register_webnus_instagram_widget'); 
function register_webnus_instagram_widget(){
	
	register_widget('WebnusInstagramWidget');
	
}

