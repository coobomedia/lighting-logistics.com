<?php

include_once str_replace("\\","/",get_template_directory()). '/inc/helpers/woptions.php';

class LightningContactForm extends WP_Widget{

	var $woptions;
	
	function __construct(){

		$params = array(
		'description'=> 'Lightning Logistics Contact Form',
		'name'=> 'Lightning-Contact Form'
		);
		
		
		
		$this->woptions = new webnus_options();
		//var_dump($this->woptions->webnus_contact_email());
		parent::__construct('WebnusContactForm', '', $params);

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
		<label for="<?php echo $this->get_field_id('Address') ?>">Address:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('address') ?>"
		name="<?php echo $this->get_field_name('address') ?>"
		value="<?php if( isset($address) )  echo esc_attr($address); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('email') ?>">Delivery Email Address:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('email') ?>"
		name="<?php echo $this->get_field_name('email') ?>"
		value="<?php if( !empty($email) )  echo esc_attr($email); 
		else 
		echo $this->woptions->webnus_contact_email();
		?>"
		/>
		</p>
		
		
		<?php 
	}
	
	
	public function widget($args, $instance){
		//36587311
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<div class="contact-inf">
		<?php echo $before_title.$title.$after_title; ?>
			<form class="frmContact" action="#">
				<input type="hidden" name="emailTo" value="<?php echo $email; ?>"/>
				<input type="text" name="txtName" id="txtName" value="" placeholder="<?php _e('Your Name','WEBNUS_TEXT_DOMAIN'); ?>..."/>
				<input type="text" name="txtEmail" id="txtEmail" value="" placeholder="<?php _e('Your Email Address','WEBNUS_TEXT_DOMAIN'); ?>..."/>
				<textarea name="txtText" id="txtText" placeholder="<?php _e('Your Message','WEBNUS_TEXT_DOMAIN'); ?>..."></textarea>
				<button type="button" class="btnSend"><?php _e('SEND MESSAGE','WEBNUS_TEXT_DOMAIN'); ?></button>
				<div id="spanMessage"></div>
			</form>
		</div>
		<script type="text/javascript">
			
		jQuery(document).ready(function(){
			jQuery("button.btnSend").click(function(){
			
			var form = jQuery(this).closest('form');
			
			jQuery.ajax({type:'POST', url: '<?php echo get_template_directory_uri(); ?>/inc/contactus/contact2.php', data:jQuery(form).serialize(), success: function(response) {
				 if(parseInt(response)>0)
				   {
					 if(jQuery(form).find("#spanMessage").length)
					 jQuery(form).find("#spanMessage").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Well done!','WEBNUS_TEXT_DOMAIN') ?></strong> <?php _e('Your message has been sent.','WEBNUS_TEXT_DOMAIN') ?></div>');
					 else
					 alert('<?php _e('Well done! Your message has been sent','WEBNUS_TEXT_DOMAIN'); ?>');
				   }
				   else{
					 if(jQuery(form).find("#spanMessage").length)
					 jQuery(form).find("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Error!','WEBNUS_TEXT_DOMAIN'); ?> </strong> <?php _e('Somthing Wrong','WEBNUS_TEXT_DOMAIN'); ?></div>');
					 else
					 alert('<?php _e('Somthing wrong!','WEBNUS_TEXT_DOMAIN'); ?>');
				   }   
					 
			}});
			});
			});

		</script>
		<?php echo $after_widget; ?>
		  
		<?php 
	} 
}

add_action('widgets_init', 'register_lightningcontactform');

function register_lightningcontactform(){
	
	register_widget('LightningContactForm');
	
}