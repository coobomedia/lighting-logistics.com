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
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Modernizer
  ================================================== -->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.11889.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js" type="text/javascript"></script>
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

	<!-- CSS + JS
  ================================================== -->

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php wp_head();  ?>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS3NG6V');</script>
<!-- End Google Tag Manager -->
	
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11003565244"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11003565244');
</script>
	
	
</head>
	
<body <?php body_class('default-header'); ?>>

	<!-- Primary Page Layout
	================================================== -->

<div id="<?php echo $webnus_options->webnus_get_layout(); ?>" class="colorskin-<?php echo $webnus_options->webnus_color_skin(); ?>">
<?php
 
  /******************/
 /**  Load Topbar Template
 /******************/

 
 $menu_type = $webnus_options->webnus_header_menu_type();
 
 switch($menu_type)
 {
	case 1:
		get_template_part('parts/topbar'); 
		get_template_part('parts/header1');
	break;
	case 2:
	case 3:
	case 4:
	case 5:
		get_template_part('parts/topbar'); 
		get_template_part('parts/header2');
	break;
	case 6:
		get_template_part('parts/topbar'); 
		get_template_part('parts/header3');
		break;
		
	
	default:
		get_template_part('parts/header1');
	break;
 }

/***************************************/
/*			If woocommerce available add page headline section.
/***************************************/

if(isset($post) && 'product' == get_post_type( $post->ID ))
{
if( ((function_exists('is_product') && is_product()) && $webnus_options->webnus_woo_product_title_enable()) ){
?>

<section id="headline">
    <div class="container">
      <h3><?php 
	  
	  if( function_exists('is_product') ){
	  
	  if( is_product() )
		echo $webnus_options->webnus_woo_product_title() ;
	  
	  
	  }
	  
	  ?></h3>
    </div>
</section><?php
	}

if((function_exists('is_product') && !is_product()) && $webnus_options->webnus_woo_shop_title_enable())
{?>
	
	<section id="headline">
    <div class="container">
      <h3><?php 
	  
	 
	 
		echo $webnus_options->webnus_woo_shop_title() ;
	  
	 
	  
	  ?></h3>
    </div>
</section>

<?php }
/***************************************/
/*			End woocommerce section
/***************************************/
?>
<section class="container" >
<!-- Start Page Content -->
<hr class="vertical-space">
<?php

}
?>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS3NG6V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->