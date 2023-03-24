<?php
include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class WebnusTwitterFeed extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> 'Twitter Feed',
		'name'=> 'Webnus-Twitter Feed'
		);

		parent::__construct('WebnusTwitterFeed', '', $params);

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
		<label for="<?php echo $this->get_field_id('twitterid') ?>">Twitter ID:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('twitterid') ?>"
		name="<?php echo $this->get_field_name('twitterid') ?>"
		value="<?php if( isset($twitterid) )  echo esc_attr($twitterid); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('count') ?>">Feed Count:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('count') ?>"
		name="<?php echo $this->get_field_name('count') ?>"
		value="<?php if( isset($count) )  echo esc_attr($count); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('access_token') ?>">Access Token:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('access_token') ?>"
		name="<?php echo $this->get_field_name('access_token') ?>"
		value="<?php if( isset($access_token) )  echo esc_attr($access_token); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('access_token_secret') ?>">Access Token Secret:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('access_token_secret') ?>"
		name="<?php echo $this->get_field_name('access_token_secret') ?>"
		value="<?php if( isset($access_token_secret) )  echo esc_attr($access_token_secret); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('consumer_key') ?>">Consumer Key:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('consumer_key') ?>"
		name="<?php echo $this->get_field_name('consumer_key') ?>"
		value="<?php if( isset($consumer_key) )  echo esc_attr($consumer_key); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('consumer_secret') ?>">Consumer Secret:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('consumer_secret') ?>"
		name="<?php echo $this->get_field_name('consumer_secret') ?>"
		value="<?php if( isset($consumer_secret) )  echo esc_attr($consumer_secret); ?>"
		/>
		</p>
		<?php 
	}
	
	
	public function widget($args, $instance){
		
		extract($args);
		extract($instance);
		?>
	
			<?php echo $before_widget; ?>
			<?php echo $before_title.$title.$after_title; ?>
			
			
			
			<br />
			<div class="lts-tweets"><i class="icomoon-twitter"></i>
			  <div >
			  <h3><a href="https://twitter.com/<?php echo $twitterid; ?>">@<?php echo $twitterid; ?></a></h3>
			  <h5 id="twitter"><?php
			  	require_once get_template_directory() . '/inc/twitter/twitter.php';
			  	$Config = array(
						'access_token'=>$access_token,
						'access_token_secret'=>$access_token_secret,
						'consumer_key'=>$consumer_key,
						'consumer_secret'=>$consumer_secret,
						'screen_name'=>$twitterid,
						'count'=>$count,
					
				);
				
			  	 $tweets = returnTweet($Config);
 				 if(is_array($tweets))
				 foreach($tweets as $tweet){
					echo $tweet['text'];
				 }
 
			  	?></h5>
			  	<script type="text/javascript">
			  		
			  						
					function tz_format_twitter(twitters) {
					  var statusHTML = [];
					     
					    var status = twitters.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
					      return '<a href="'+url+'">'+url+'</a>';
					    }).replace(/\B#([_a-z0-9]+)/ig, function(reply) {
					      return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
					    });
					    statusHTML.push('<span>'+status+'</span>');
					  
					  return statusHTML.join('');
					}
			  		
			  		
			  		jQuery(document).ready(function(){
			  			
			  			var Tweets = jQuery('#twitter').html();
			  			
			  			jQuery('#twitter').html(tz_format_twitter(Tweets));
			  			
			  		});
			  		
			  	</script>
			  </div>
			</div>
			<?php 
				$o = new webnus_options();
				
			?>
			
				
			<?php echo $after_widget; ?><!-- end-follow2 -->

		<?php 
	} 
}

add_action('widgets_init', 'register_webnustwitterfeed'); 
function register_webnustwitterfeed(){
	
	register_widget('WebnusTwitterFeed');
	
}