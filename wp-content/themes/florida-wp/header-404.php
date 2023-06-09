<?php

GLOBAL $webnus_options;

?><!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php
		global $page, $paged;
		
		wp_title( '|', true, 'right' );
		
		bloginfo( 'name' );
		
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ,'WEBNUS_TEXT_DOMAIN'), max( $paged, $page ) );
			
			
	?></title>
	<meta name="description" content="404 Page" />
<meta name="keywords" content="" />
	<meta name="author" content="<?php echo get_bloginfo('name'); ?>">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- CSS
  ================================================== -->

	<!-- JS
  ================================================== -->
   <?php wp_enqueue_script("jquery"); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.11889.js" type="text/javascript"></script>
	<![endif]-->
	<!-- HTML5 Shiv events (end)-->
    
	<!-- Favicons
  ================================================== -->
	<?php if($webnus_options->webnus_fav_icon()): ?>
	<link rel="shortcut icon" href="<?php echo $webnus_options->webnus_fav_icon(); ?>">
	<?php else: ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<?php endif; ?>
	<?php 
	$iphone_icon = $webnus_options->webnus_apple_iphone_icon();
	$ipad_icon = $webnus_options->webnus_apple_ipad_icon();
	?>
	<?php if(!empty($iphone_icon)) { ?>
	<link rel="apple-touch-icon-precomposed" href="<?php echo $iphone_icon ?>"/>
	<?php } ?>
	<?php if(!empty($ipad_icon)) { ?>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $ipad_icon; ?>">
	<?php } ?>
	<?php wp_head(); ?>
	

	
    </head>
	
	
<body <?php body_class(); ?>>

	<!-- Primary Page Layout
	================================================== -->

<div id="<?php echo $webnus_options->webnus_get_layout(); ?>" >
<?php
 /******************/
 /**  Load Topbar Template
 /******************/
 //get_template_part('parts/topbar'); 
 /******************/
 /**  End Load Topbar Template
 /******************/
 get_template_part('parts/header1');
 ?>