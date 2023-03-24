<?php

/***************************************/
/*			Globalization $woptions
/***************************************/


GLOBAL $webnus_options;


?><!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php
	
	/***************************************/
	/*			Title Generation Process
	/***************************************/

	global $page, $paged;
	
	wp_title( '|', true, 'right' );
	
	bloginfo( 'name' );
	
	$site_description = get_bloginfo( 'description', 'display' );
	
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ,WEBNUS_TEXT_DOMAIN), max( $paged, $page ) );

		/***************************************/
	/*			End Title Generation Process
	/***************************************/
		
		
?></title>
	<meta name="description" content="<?php
	/***************************************/
	/*			Description Meta Tag Generator
	/***************************************/
		
		
		global $page_seo_meta;
		
		$seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;

		if( !empty( $seo_meta ) && !empty( $seo_meta['webnus_seo_options'][0]['seo_desc'] ) )
		{
				
			echo($seo_meta['webnus_seo_options'][0]['seo_desc']);
			
		}else{
		
		
			if ( is_single() ) {
			
				single_post_title('', true); 
				
			} else {
			
				bloginfo('name'); echo " - "; bloginfo('description');
				
			}
			
			
		}
		
/***************************************/
/*			End Description Meta Tag Generator
/***************************************/

?>">
<meta name="keywords" content="<?php

/***************************************/
/*			Keywords Meta Tag Generator
/***************************************/

	global $page_seo_meta;
	
	$seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;
	
	if( !empty($seo_meta) && !empty($seo_meta['webnus_seo_options'][0]['seo_keyword']) )
	{
	
		echo($seo_meta['webnus_seo_options'][0]['seo_keyword']);
		
	}

/***************************************/
/*			End Keywords Meta Tag Generator
/***************************************/


?>" />
<meta name="author" content="<?php echo get_bloginfo('name'); ?>">

	<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- JS
  ================================================== -->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.11889.js" type="text/javascript"></script>
	<![endif]-->
		<!-- HTML5 Shiv events (end)-->
	<!-- MEGA MENU -->
 	
	
	<!-- Favicons
  ================================================== -->
<?php if($webnus_options->webnus_fav_icon()): ?>
<link rel="shortcut icon" href="<?php echo $webnus_options->webnus_fav_icon(); ?>">
<?php else: ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<?php endif; ?>
<?php wp_head();  ?>
</head>
	
<body <?php body_class('default-header'); ?>>

	<!-- Primary Page Layout
	================================================== -->

<div id="<?php echo $webnus_options->webnus_get_layout(); ?>" class="colorskin-<?php echo $webnus_options->webnus_color_skin(); ?> darkhalf">
<?php
 
  /******************/
 /**  Load Topbar Template
 /******************/
 
get_template_part('parts/headerdark');

?>