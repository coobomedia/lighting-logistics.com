<?php
GLOBAL $webnus_options;
/******/
/* Check topbar enabled
/******/
$topbar_enabled = $webnus_options->webnus_header_topbar_enable();
$topbar_leftcontent = $webnus_options->webnus_header_topbar_leftcontent();
$topbar_rightcontent = $webnus_options->webnus_header_topbar_rightcontent();


if($topbar_enabled){
?>
<section class="top-bar">
<div class="container"><?php 

		/***********************************/
		/***		TOPBAR Left Side
		/***********************************/


?><div class="<?php echo ( 3 == $topbar_leftcontent )? 'socailfollow' : 'top-links'; ?> lftflot"><?php
if( 1 == $topbar_leftcontent ){

	if(has_nav_menu('header-top-menu')){

		$menuParameters = array(
			'theme_location'=>'header-top-menu',
			'container'       => false,
			'echo'            => false,
			'items_wrap'      => '%3$s',
			'after'      => '|',
			'depth'           => 0,
		);
		echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
	}

}

if( 2 == $topbar_leftcontent ){?>
	<h6><i class="icomoon-envelop-2"></i> <?php echo $webnus_options->webnus_header_email(); ?></h6> <h6><i class="icomoon-phone-2"></i> <?php echo $webnus_options->webnus_header_phone();?></h6>
<?php }

if( 3 == $topbar_leftcontent ){
	if($webnus_options->webnus_top_social_icons_facebook())
		echo '<a href="'. $webnus_options->webnus_facebook_ID() .'" class="facebook"><i class="icomoon-facebook"></i></a>';

	if($webnus_options->webnus_top_social_icons_twitter())
		echo '<a href="https://twitter.com/@'. $webnus_options->webnus_twitter_ID() .'" class="twitter"><i class="icomoon-twitter"></i></a>';

	if($webnus_options->webnus_top_social_icons_dribbble())
		echo '<a href="'. $webnus_options->webnus_dribbble_ID().'" class="dribble"><i class="icomoon-dribbble"></i></a>';

	if($webnus_options->webnus_top_social_icons_pinterest())
		echo '<a href="'. $webnus_options->webnus_pinterest_ID() .'" class="pinterest"><i class="icomoon-pinterest"></i></a>';

	if($webnus_options->webnus_top_social_icons_vimeo())
		echo '<a href="'. $webnus_options->webnus_vimeo_ID() .'" class="vimeo"><i class="icomoon-vimeo"></i></a>';

	if($webnus_options->webnus_top_social_icons_youtube())
		echo '<a href="'. $webnus_options->webnus_youtube_ID() .'" class="youtube"><i class="icomoon-youtube"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_google())
		echo '<a href="'. $webnus_options->webnus_google_ID() .'" class="google"><i class="icomoon-google"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_linkedin())
		echo '<a href="'. $webnus_options->webnus_linkedin_ID() .'" class="linkedin"><i class="icomoon-linkedin"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_rss())
		echo '<a href="'. $webnus_options->webnus_rss_ID() .'" class="rss"><i class="icomoon-feed-3"></i></a>';
    if($webnus_options->webnus_top_social_icons_instagram())
		echo '<a href="'. $webnus_options->webnus_instagram_ID() .'" class="instagram"><i class="icomoon-instagram"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_flickr())
		echo '<a href="'. $webnus_options->webnus_flickr_ID() .'" class="other-social"><i class="icomoon-flickr"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_reddit())
		echo '<a href="'. $webnus_options->webnus_reddit_ID() .'" class="other-social"><i class="icomoon-reddit"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_delicious())
		echo '<a href="'. $webnus_options->webnus_delicious_ID() .'" class="other-social"><i class="icomoon-delicious"></i></a>';
	
		
	if($webnus_options->webnus_top_social_icons_lastfm())
		echo '<a href="'. $webnus_options->webnus_lastfm_ID() .'" class="other-social"><i class="icomoon-lastfm-2"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_tumblr())
		echo '<a href="'. $webnus_options->webnus_tumblr_ID() .'" class="other-social"><i class="icomoon-tumblr-2"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_skype())
		echo '<a href="'. $webnus_options->webnus_skype_ID() .'" class="other-social"><i class="icomoon-skype"></i></a>';
	
	
	if($webnus_options->webnus_top_social_icons_picassa())
		echo '<a href="'. $webnus_options->webnus_picassa_ID() .'" class="other-social"><i class="icomoon-picassa-2"></i></a>';
    
}
if( 5 == $topbar_leftcontent )
	do_action('icl_language_selector');
?></div><?php
if( 4 == $topbar_leftcontent ){
$left_tagline = $webnus_options->webnus_top_left_tagline();
if(!empty($left_tagline)) 
echo '<div class="top-links lftflot">'.$left_tagline.'</div>';
}
		/***********************************/
		/***		TOPBAR Right Side
		/***********************************/


?>
<?php 
if( 4 == $topbar_rightcontent ){
$right_tagline = $webnus_options->webnus_top_right_tagline();
if(!empty($right_tagline)) 
echo '<div class="top-links rgtflot">'.$right_tagline.'</div>';
}
 ?>
<div class="<?php echo ( 3 == $topbar_rightcontent )? 'socailfollow' : 'top-links'; ?> rgtflot"><?php
if( 1 == $topbar_rightcontent ){

	if(has_nav_menu('header-top-menu')){

		$menuParameters = array(
			'theme_location'=>'header-top-menu',
			'container'       => false,
			'echo'            => false,
			'items_wrap'      => '%3$s',
			'after'      => '|',
			'depth'           => 0,
		);
		echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
	}

}

if( 2 == $topbar_rightcontent ){?>
	<h6><i class="icomoon-envelop-2"></i> <?php echo $webnus_options->webnus_header_email(); ?></h6> <h6><i class="icomoon-phone-2"></i> <?php echo $webnus_options->webnus_header_phone();?></h6>
<?php }

if( 3 == $topbar_rightcontent ){
	if($webnus_options->webnus_top_social_icons_facebook())
		echo '<a href="'. $webnus_options->webnus_facebook_ID() .'" class="facebook"><i class="icomoon-facebook"></i></a>';

	if($webnus_options->webnus_top_social_icons_twitter())
		echo '<a href="https://twitter.com/@'. $webnus_options->webnus_twitter_ID() .'" class="twitter"><i class="icomoon-twitter"></i></a>';

	if($webnus_options->webnus_top_social_icons_dribbble())
		echo '<a href="'. $webnus_options->webnus_dribbble_ID().'" class="dribble"><i class="icomoon-dribbble"></i></a>';

	if($webnus_options->webnus_top_social_icons_pinterest())
		echo '<a href="'. $webnus_options->webnus_pinterest_ID() .'" class="pinterest"><i class="icomoon-pinterest"></i></a>';

	if($webnus_options->webnus_top_social_icons_vimeo())
		echo '<a href="'. $webnus_options->webnus_vimeo_ID() .'" class="vimeo"><i class="icomoon-vimeo"></i></a>';

	if($webnus_options->webnus_top_social_icons_youtube())
		echo '<a href="'. $webnus_options->webnus_youtube_ID() .'" class="youtube"><i class="icomoon-youtube"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_google())
		echo '<a href="'. $webnus_options->webnus_google_ID() .'" class="google"><i class="icomoon-google"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_linkedin())
		echo '<a href="'. $webnus_options->webnus_linkedin_ID() .'" class="linkedin"><i class="icomoon-linkedin"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_rss())
		echo '<a href="'. $webnus_options->webnus_rss_ID() .'" class="rss"><i class="icomoon-feed-3"></i></a>';

    if($webnus_options->webnus_top_social_icons_instagram())
		echo '<a href="'. $webnus_options->webnus_instagram_ID() .'" class="instagram"><i class="icomoon-instagram"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_flickr())
		echo '<a href="'. $webnus_options->webnus_flickr_ID() .'" class="other-social"><i class="icomoon-flickr"></i></a>';
		
	if($webnus_options->webnus_top_social_icons_reddit())
		echo '<a href="'. $webnus_options->webnus_reddit_ID() .'" class="other-social"><i class="icomoon-reddit"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_delicious())
		echo '<a href="'. $webnus_options->webnus_delicious_ID() .'" class="other-social"><i class="icomoon-delicious"></i></a>';
	
		
	if($webnus_options->webnus_top_social_icons_lastfm())
		echo '<a href="'. $webnus_options->webnus_lastfm_ID() .'" class="other-social"><i class="icomoon-lastfm-2"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_tumblr())
		echo '<a href="'. $webnus_options->webnus_tumblr_ID() .'" class="other-social"><i class="icomoon-tumblr-2"></i></a>';
	
	if($webnus_options->webnus_top_social_icons_skype())
		echo '<a href="'. $webnus_options->webnus_skype_ID() .'" class="other-social"><i class="icomoon-skype"></i></a>';
	
	
	if($webnus_options->webnus_top_social_icons_picassa())
		echo '<a href="'. $webnus_options->webnus_picassa_ID() .'" class="other-social"><i class="icomoon-picassa-2"></i></a>';
    
}
if( 5 == $topbar_rightcontent )
	do_action('icl_language_selector');
?></div>

</div>
</section>
<?php
} 
/******/
/* Topbar Enabled End
/******/
 ?>