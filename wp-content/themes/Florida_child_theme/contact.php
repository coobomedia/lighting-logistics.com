<?php

/*

Template Name: Contact Page

*/
get_header();

GLOBAL $webnus_options;

$last_time = get_the_time(' F Y');


GLOBAL $webnus_page_options_meta;

$meta = isset($webnus_page_options_meta)?$webnus_page_options_meta->the_meta():null;
if(!empty($meta)){
$show_titlebar =  isset($meta['webnus_page_options'][0]['show_page_title_bar'])?$meta['webnus_page_options'][0]['show_page_title_bar']:null;
$titlebar_bg =  isset($meta['webnus_page_options'][0]['title_background_color'])?$meta['webnus_page_options'][0]['title_background_color']:null;
$titlebar_fg =  isset($meta['webnus_page_options'][0]['title_text_color'])?$meta['webnus_page_options'][0]['title_text_color']:null;
$sidebar_pos =  isset($meta['webnus_page_options'][0]['sidebar_position'])?$meta['webnus_page_options'][0]['sidebar_position']:'right';
}
if($show_titlebar && ( 'show' == $show_titlebar)):
?>
<section id="headline" style="<?php

/// To change the title bar background color
if(!empty($titlebar_bg)) echo ' background-color:'.$titlebar_bg.';'; 
 
/// To change the title bar text color 


 ?>">



    <div class="container">
      <h3 style="<?php /* TEXT COLOR OF TITLE */ if(!empty($titlebar_fg)) echo ' color:'.$titlebar_fg.';';  ?>"><?php the_title(); ?></h3>
    </div>
</section>

 <section class="full-width">
<div id="contact-map">
<?php 
echo $webnus_options->webnus_google_map();
?>

<!-- END-Google Map -->
</div><!-- END-contact Map -->
</section><!-- END-Google Map Section -->

<?php
endif;
?>
<section class="container" >
<!-- Start Page Content -->
<hr class="vertical-space">
<section class="container page-content" >

<hr class="vertical-space3">
<div class="col-md-5 contact-inf">
<h4><?php echo __('Contact Information:','WEBNUS_TEXT_DOMAIN') ?>:</h4>
<br />
<p><strong><?php _e('Address','WEBNUS_TEXT_DOMAIN') ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_address(); ?></p>
<br />
<p><strong><?php _e('Phone','WEBNUS_TEXT_DOMAIN') ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_phone(); ?><br />
</p>
<br />
<p><strong><?php _e('Email', 'WEBNUS_TEXT_DOMAIN'); ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_email(); ?><br />
</p>
<br />
<hr class="boldbx">
<?php 
		  if( have_posts() ): while( have_posts() ): the_post();
			the_content(); 
		  endwhile;
		  endif;
?>
</div>

<div class="col-md-6 col-md-offset-1">
<div class="contact-form">
<div class="clr"></div><br />
<form action="#" method="post" class="frmContact">
<h5><?php _e('Whats your Name?', 'WEBNUS_TEXT_DOMAIN'); ?></h5>
<input name="txtName" type="text" class="txbx" value="Name" /><br />
<h5><?php _e('Whats your Email?','WEBNUS_TEXT_DOMAIN') ?></h5>
<input type="hidden" name="emailTo" value="<?php echo $webnus_options->webnus_contact_email(); ?>" />
<input name="txtEmail" type="text" class="txbx" value="<?php _e('Email','WEBNUS_TEXT_DOMAIN'); ?>" /><br />
<h5>Email Subject?</h5>
<input name="txtSubject" type="text" class="txbx" value="<?php _e('Subject ?','WEBNUS_TEXT_DOMAIN'); ?>" /><br />
<div class="erabox">
<h5><?php _e('Message to us','WEBNUS_TEXT_DOMAIN') ?></h5>
<textarea name="txtText" class="txbx era" ></textarea><br />
<div class="g-recaptcha" data-sitekey="6LdxHh8UAAAAAJWTDKD3VGCzyYk3jjcJNH4Vi3Va"></div>
<button name="" type="button" class="sendbtn btnSend" ><?php _e('Send Message','WEBNUS_TEXT_DOMAIN') ?></button>

<div id="spanMessage">
</div>
</div>
</form>
</div><!-- end-contact-form  -->
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
					 alert('<?php _e('Well done! Your message has been sent','WEBNUS_TEXT_DOMAIN') ?>');
				   }
				   else{
					 if(jQuery(form).find("#spanMessage").length)
					 jQuery(form).find("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Error!','WEBNUS_TEXT_DOMAIN') ?> </strong> <?php _e('Somthing Wrong','WEBNUS_TEXT_DOMAIN') ?></div>');
					 else
					 alert('Somthing wrong!');
				   }   
					 
			}});
			});
			});

		</script>

</div>
<div class="white-space"></div>
</section><!-- container -->


<hr class="vertical-space3">
</section><!-- container -->
<?php get_footer(); ?>