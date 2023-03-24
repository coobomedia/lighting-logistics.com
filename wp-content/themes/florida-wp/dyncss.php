<?php
header('Content-type: text/css');

define ( 'THEME_ABS_PATH', str_replace("\\", "/", dirname(__FILE__)));

if ( !defined('ABSPATH') ) {
/** Set up WordPress environment */
require_once('../../../wp-load.php');
}
//require( '../../../wp-load.php' );


include_once  THEME_ABS_PATH. '/inc/init.php';



$o  = new webnus_options();


/*
 *
*Top  Menu Hover Color
*/


/*
 * Google Font For P,H Tags
*/
$thm_options = get_option('webnus_options');


if(isset($thm_options['webnus_p_font']) && $thm_options['webnus_p_font']!='')
{
	echo "p { font-family: {$thm_options['webnus_p_font']}}\n";
}
if(isset($thm_options['webnus_heading_font']) && $thm_options['webnus_heading_font']!='')
{
	echo "h1, h2, h3, h4, h5, h6 { font-family: {$thm_options['webnus_heading_font']}}\n";
}

if(isset($thm_options['webnus_body_font']) && $thm_options['webnus_body_font']!='')
{
	echo "body { font-family: {$thm_options['webnus_body_font']}}\n";
}
/*
if(isset($thm_options['webnus_h2_font']) && $thm_options['webnus_h2_font']!='')
{
	echo "h2 { font-family: {$thm_options['webnus_h2_font']}}\n";
}
if(isset($thm_options['webnus_h3_font']) && $thm_options['webnus_h3_font']!='')
{
	echo "h3 { font-family: {$thm_options['webnus_h3_font']}}\n";
}
if(isset($thm_options['webnus_h4_font']) &&  $thm_options['webnus_h4_font']!='')
{
	echo "h4 { font-family: {$thm_options['webnus_h4_font']}}\n";
}
if(isset($thm_options['webnus_h5_font']) && $thm_options['webnus_h5_font']!='')
{
	echo "h5 { font-family: {$thm_options['webnus_h5_font']}}\n";
}
if(isset($thm_options['webnus_h6_font']) && $thm_options['webnus_h6_font']!='')
{
	echo "h6 { font-family: {$thm_options['webnus_h6_font']}}\n";
}
*/
if(isset($thm_options['webnus_topnav_font_size']) &&  !empty($thm_options['webnus_topnav_font_size']))
{
	echo "ul#nav * { font-size: {$thm_options['webnus_topnav_font_size']}px;}\n";
}
if(isset($thm_options['webnus_body_font_size']) &&  !empty($thm_options['webnus_body_font_size']))
{
	echo "p { font-size: {$thm_options['webnus_body_font_size']}px;}\n";
}
if(isset($thm_options['webnus_p_font_size']) &&  !empty($thm_options['webnus_p_font_size']))
{
	echo "p { font-size: {$thm_options['webnus_p_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h1_font_size']) &&  !empty($thm_options['webnus_h1_font_size']))
{
	echo "h1 { font-size: {$thm_options['webnus_h1_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h2_font_size']) &&  !empty($thm_options['webnus_h2_font_size']))
{
	echo "h2 { font-size: {$thm_options['webnus_h2_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h3_font_size']) &&  !empty($thm_options['webnus_h3_font_size']))
{
	echo "h3 { font-size: {$thm_options['webnus_h3_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h4_font_size']) &&   !empty($thm_options['webnus_h4_font_size']))
{
	echo "h4 { font-size: {$thm_options['webnus_h4_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h5_font_size']) &&  !empty($thm_options['webnus_h5_font_size']))
{
	echo "h5 { font-size: {$thm_options['webnus_h5_font_size']}px;}\n";
}
if(isset($thm_options['webnus_h6_font_size']) && !empty($thm_options['webnus_h6_font_size']))
{
	echo "h6 { font-size: {$thm_options['webnus_h6_font_size']}px;}\n";
}



/*
 * Color Skin Style Generator
 */

 /* == Menu Colors ------------------ */
if(isset($thm_options['webnus_menu_link_color']) && $thm_options['webnus_menu_link_color']!='')
{
	echo "#nav a { color:{$thm_options['webnus_menu_link_color']};}";
}
if(isset($thm_options['webnus_menu_link_background_color']) && $thm_options['webnus_menu_link_background_color']!='')
{
	echo "#nav a { background-color:{$thm_options['webnus_menu_link_background_color']};}";
}

if(isset($thm_options['webnus_menu_current_item_border_item_color']) && $thm_options['webnus_menu_current_item_border_item_color']!='')
{
	echo "#nav > li.current:after {background:{$thm_options['webnus_menu_current_item_border_item_color']};}";
}

if(isset($thm_options['webnus_menu_top_link_hover_color']) && $thm_options['webnus_menu_top_link_hover_color']!='')
{
	echo "#nav li:hover > a { color:{$thm_options['webnus_menu_top_link_hover_color']}; }";
}
if(isset($thm_options['webnus_menu_top_link_hover_background_color']) && $thm_options['webnus_menu_top_link_hover_background_color']!='')
{
	echo "#nav li:hover > a { background-color:{$thm_options['webnus_menu_top_link_hover_background_color']};}";
}
//submenu
if(isset($thm_options['webnus_submenu_link_hover_color']) && $thm_options['webnus_submenu_link_hover_color']!='')
{
	echo "#nav ul li a:hover, #nav li.current ul li a:hover, .nav-wrap2 #nav ul li a:hover, .nav-wrap2.darknavi #nav ul li a:hover, #nav ul li.current > a , #nav ul li:hover > a { color:{$thm_options['webnus_submenu_link_hover_color']};  }";
}
if(isset($thm_options['webnus_submenu_link_hover_background_color']) && $thm_options['webnus_submenu_link_hover_background_color']!='')
{
	echo "#nav ul li a:hover, #nav li.current ul li a:hover, .nav-wrap2 #nav ul li a:hover, .nav-wrap2.darknavi #nav ul li a:hover, #nav ul li.current > a , #nav ul li:hover > a { background-color:{$thm_options['webnus_submenu_link_hover_background_color']}; }";
}






/* == Icon Box Colors---------------------- */



/* iconbox 0 icon color  */
if(isset($thm_options['webnus_iconbox0_icon_color']) && $thm_options['webnus_iconbox0_icon_color']!='')
{
	echo ".icon-box i { color:{$thm_options['webnus_iconbox0_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox0_background_icon_color']) && $thm_options['webnus_iconbox0_background_icon_color']!='')
{
	echo ".icon-box i { background-color:{$thm_options['webnus_iconbox0_background_icon_color']};}";
}



/* iconbox 0 icon hover color  */

if(isset($thm_options['webnus_iconbox0_hover_color']) && $thm_options['webnus_iconbox0_hover_color']!='')
{
	echo ".icon-box:hover i { color:{$thm_options['webnus_iconbox0_hover_color']};}";
}
if(isset($thm_options['webnus_iconbox0_hover_background_color']) && $thm_options['webnus_iconbox0_hover_background_color']!='')
{
	echo ".icon-box:hover i { background-color:{$thm_options['webnus_iconbox0_hover_background_color']};}";
}




/* iconbox 1 icon color + icon background color */
if(isset($thm_options['webnus_iconbox1_icon_color']) && $thm_options['webnus_iconbox1_icon_color']!='')
{
	echo ".icon-box1 i { color:{$thm_options['webnus_iconbox1_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox1_background_icon_color']) && $thm_options['webnus_iconbox1_background_icon_color']!='')
{
	echo ".icon-box1 i { background-color:{$thm_options['webnus_iconbox1_background_icon_color']};}";
}
/* iconbox 1 icon color + icon background color */

if(isset($thm_options['webnus_iconbox1_hover_color']) && $thm_options['webnus_iconbox1_hover_color']!='')
{
	echo ".icon-box1:hover i { color:{$thm_options['webnus_iconbox1_hover_color']}; }";
}
if(isset($thm_options['webnus_iconbox1_hover_background_color']) && $thm_options['webnus_iconbox1_hover_background_color']!='')
{
	echo ".icon-box1:hover i { background-color:{$thm_options['webnus_iconbox1_hover_background_color']}; }";
}






/* iconbox 2 icon color  */
if(isset($thm_options['webnus_iconbox2_icon_color']) && $thm_options['webnus_iconbox2_icon_color']!='')
{
	echo ".icon-box2 i { color:{$thm_options['webnus_iconbox2_icon_color']};}";
}
/* iconbox 2 icon hover color  */
if(isset($thm_options['webnus_iconbox2_hover_color']) && $thm_options['webnus_iconbox2_hover_color']!='')
{
	echo ".icon-box2:hover i { color:{$thm_options['webnus_iconbox2_hover_color']};}";
}




/* iconbox 3 icon color  */
if(isset($thm_options['webnus_iconbox3_icon_color']) && $thm_options['webnus_iconbox3_icon_color']!='')
{
	echo ".icon-box3 i { color:{$thm_options['webnus_iconbox3_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox3_hover_color']) && $thm_options['webnus_iconbox3_hover_color']!='')
{
	echo ".icon-box3:hover i { color:{$thm_options['webnus_iconbox3_hover_color']};}";
}






/* iconbox 4 icon color + icon background color */
if(isset($thm_options['webnus_iconbox4_icon_color']) && $thm_options['webnus_iconbox4_icon_color']!='')
{
	echo ".icon-box4 i { color:{$thm_options['webnus_iconbox4_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox4_background_icon_color']) && $thm_options['webnus_iconbox4_background_icon_color']!='')
{
	echo ".icon-box4 i { background-color:{$thm_options['webnus_iconbox4_background_icon_color']};}";
}
/* iconbox 4 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox4_hover_color']) && $thm_options['webnus_iconbox4_hover_color']!='')
{
	echo ".icon-box4:hover i { color:{$thm_options['webnus_iconbox4_hover_color']};}";
}
if(isset($thm_options['webnus_iconbox4_hover_background_color']) && $thm_options['webnus_iconbox4_hover_background_color']!='')
{
	echo ".icon-box4:hover i { background-color:{$thm_options['webnus_iconbox4_hover_background_color']};}";
}






/* iconbox 5 icon color + icon background color */
if(isset($thm_options['webnus_iconbox5_icon_color']) && $thm_options['webnus_iconbox5_icon_color']!='')
{
	echo ".icon-box5 i { color:{$thm_options['webnus_iconbox5_icon_color']}; }";
}

if(isset($thm_options['webnus_iconbox5_background_icon_color']) && $thm_options['webnus_iconbox5_background_icon_color']!='')
{
	echo ".icon-box5 i { background-color:{$thm_options['webnus_iconbox5_background_icon_color']}; }";
}
/* iconbox 5 icon hover color + icon background hover color */

if(isset($thm_options['webnus_iconbox5_hover_color']) && $thm_options['webnus_iconbox5_hover_color']!='')
{
	echo ".icon-box5:hover i { color:{$thm_options['webnus_iconbox5_hover_color']};}";
}
if(isset($thm_options['webnus_iconbox5_hover_background_color']) && $thm_options['webnus_iconbox5_hover_background_color']!='')
{
	echo ".icon-box5:hover i { background-color:{$thm_options['webnus_iconbox5_hover_background_color']};}";
}





/* iconbox 6 icon color + icon background color */
if(isset($thm_options['webnus_iconbox6_icon_color']) && $thm_options['webnus_iconbox6_icon_color']!='')
{
	echo ".icon-box6 i { color:{$thm_options['webnus_iconbox6_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox6_background_icon_color']) && $thm_options['webnus_iconbox6_background_icon_color']!='')
{
	echo ".icon-box6 i { background-color:{$thm_options['webnus_iconbox6_background_icon_color']};}";
}
/* iconbox 6 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox6_hover_color']) && $thm_options['webnus_iconbox6_hover_color']!='')
{
	echo ".icon-box6:hover i { color:{$thm_options['webnus_iconbox6_hover_color']};}";
}
if(isset($thm_options['webnus_iconbox6_hover_background_color']) && $thm_options['webnus_iconbox6_hover_background_color']!='')
{
	echo ".icon-box6:hover i { background-color:{$thm_options['webnus_iconbox6_hover_background_color']};}";
}



/* iconbox 7 icon color + icon background color */
if(isset($thm_options['webnus_iconbox7_icon_color']) && $thm_options['webnus_iconbox7_icon_color']!='')
{
	echo ".icon-box7 i { color:{$thm_options['webnus_iconbox7_icon_color']};}";
}
if(isset($thm_options['webnus_iconbox7_background_icon_color']) && $thm_options['webnus_iconbox7_background_icon_color']!='')
{
	echo ".icon-box7 i { background-color:{$thm_options['webnus_iconbox7_background_icon_color']};}";
}
/* iconbox 6 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox7_hover_color']) && $thm_options['webnus_iconbox7_hover_color']!='')
{
	echo ".icon-box7:hover i { color:{$thm_options['webnus_iconbox7_hover_color']};}";
}
if(isset($thm_options['webnus_iconbox7_hover_background_color']) && $thm_options['webnus_iconbox7_hover_background_color']!='')
{
	echo ".icon-box7:hover i { background-color:{$thm_options['webnus_iconbox7_hover_background_color']};}";
}




/* == Portfolio Colors---------------------- */


/* portfolio filter links color + border color */
if(isset($thm_options['webnus_portfolio_filter_links_color']) && $thm_options['webnus_portfolio_filter_links_color']!='')
{
	echo "nav.primary .portfolioFilters a { color:{$thm_options['webnus_portfolio_filter_links_color']};}";
}
if(isset($thm_options['webnus_portfolio_filter_links_border_color']) && $thm_options['webnus_portfolio_filter_links_border_color']!='')
{
	echo "nav.primary .portfolioFilters a { border-color:{$thm_options['webnus_portfolio_filter_links_border_color']};}";
}
/* portfolio filter links hover color + border color */

if(isset($thm_options['webnus_portfolio_filter_links_hover_color']) && $thm_options['webnus_portfolio_filter_links_hover_color']!='')
{
	echo "nav.primary .portfolioFilters a:hover {  color:{$thm_options['webnus_portfolio_filter_links_hover_color']};}";
}
if(isset($thm_options['webnus_portfolio_filter_links_hover_border_color']) && $thm_options['webnus_portfolio_filter_links_hover_border_color']!='')
{
	echo "nav.primary .portfolioFilters a:hover {  border-color:{$thm_options['webnus_portfolio_filter_links_hover_border_color']};}";
}

/* portfolio filter links color selected + border color */
if(isset($thm_options['webnus_portfolio_filter_selected_links_color']) && $thm_options['webnus_portfolio_filter_selected_links_color']!='')
{
	echo "nav.primary .portfolioFilters a.selected, nav.primary ul li a:active {  color:{$thm_options['webnus_portfolio_filter_selected_links_color']}; }";
}

if(isset($thm_options['webnus_portfolio_filter_selected_links_border_color']) && $thm_options['webnus_portfolio_filter_selected_links_border_color']!='')
{
	echo "nav.primary .portfolioFilters a.selected, nav.primary ul li a:active {  border-color:{$thm_options['webnus_portfolio_filter_selected_links_border_color']}; }";
}



/* portfolio item zoom link color */

if(isset($thm_options['webnus_portfolio_item_zoom_link_color']) && $thm_options['webnus_portfolio_item_zoom_link_color']!='')
{
	echo ".zoomex2 a { color:{$thm_options['webnus_portfolio_item_zoom_link_color']};}";
}
/* portfolio item zoom link border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_border_color']!='')
{
	echo ".zoomex2 a i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_border_color']};}";
}


/* portfolio item zoom link hover color + border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_color']!='')
{
	echo ".zoomex2 a:hover i { color:{$thm_options['webnus_portfolio_item_zoom_link_hover_color']};  }";
}
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_border_color']!='')
{
	echo ".zoomex2 a:hover i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_hover_border_color']};  }";
}







/* == Learn more link Colors----------------------------- */


/* learn more link color */

if(isset($thm_options['webnus_learnmore_link_color']) && $thm_options['webnus_learnmore_link_color']!='')
{
	echo "a.magicmore { color:{$thm_options['webnus_learnmore_link_color']};}";
}
/* learn more hover link color */

if(isset($thm_options['webnus_learnmore_hover_link_color']) && $thm_options['webnus_learnmore_hover_link_color']!='')
{
	echo "a.magicmore:hover { color:{$thm_options['webnus_learnmore_hover_link_color']};}";
}






/* == Our Process Icon Colors------------------------------ */

/* our process icon color + border color += background color */
if(isset($thm_options['webnus_ourprocess_icon_color']) && $thm_options['webnus_ourprocess_icon_color']!='')
{
	echo ".our-process-item i { color:{$thm_options['webnus_ourprocess_icon_color']};} ";
}

if(isset($thm_options['webnus_ourprocess_border_color']) && $thm_options['webnus_ourprocess_border_color']!='')
{
	echo ".our-process-item i { border-color:{$thm_options['webnus_ourprocess_border_color']};} ";
}

if(isset($thm_options['webnus_ourprocess_background_color']) && $thm_options['webnus_ourprocess_background_color']!='')
{
	echo ".our-process-item i { background-color:{$thm_options['webnus_ourprocess_background_color']};} ";
}

/* our process icon hover color + border color += background color */

if(isset($thm_options['webnus_ourprocess_hover_icon_color']) && $thm_options['webnus_ourprocess_hover_icon_color']!='')
{
	echo ".our-process-item:hover i { color:{$thm_options['webnus_ourprocess_hover_icon_color']};  } ";
}
if(isset($thm_options['webnus_ourprocess_hover_border_color']) && $thm_options['webnus_ourprocess_hover_border_color']!='')
{
	echo ".our-process-item:hover i { border-color:{$thm_options['webnus_ourprocess_hover_border_color']};  } ";
}
if(isset($thm_options['webnus_ourprocess_hover_background_color']) && $thm_options['webnus_ourprocess_hover_background_color']!='')
{
	echo ".our-process-item:hover i { background-color:{$thm_options['webnus_ourprocess_hover_background_color']};  } ";
}






/* == Our Team Image Border Color---------------------------------- */

/* our team hover image border color */

if(isset($thm_options['webnus_ourteam_hover_image_border_color']) && $thm_options['webnus_ourteam_hover_image_border_color']!='')
{
	echo ".our-team:hover img { border-color:{$thm_options['webnus_ourteam_hover_image_border_color']};}";
}

/* == Our Clients Icon Hover Color----------------------------------- */

if(isset($thm_options['webnus_ourclients_hover_icon_color']) && $thm_options['webnus_ourclients_hover_icon_color']!='')
{
	echo ".our-clients-wrap .jcarousel-next:hover, .our-clients-wrap .jcarousel-next:active, .our-clients-wrap .jcarousel-prev:hover, .our-clients-wrap .jcarousel-prev:active {color:{$thm_options['webnus_ourclients_hover_icon_color']}; }";
}

if(isset($thm_options['webnus_ourclients_hover_icon_border_color']) && $thm_options['webnus_ourclients_hover_icon_border_color']!='')
{
	echo ".our-clients-wrap .jcarousel-next:hover, .our-clients-wrap .jcarousel-next:active, .our-clients-wrap .jcarousel-prev:hover, .our-clients-wrap .jcarousel-prev:active {border-color:{$thm_options['webnus_ourclients_hover_icon_border_color']}; }";
}






/* == Accordion Title Color---------------------------- */

/* caccordion title active and hover color */

if(isset($thm_options['webnus_accordion_active_color']) && $thm_options['webnus_accordion_active_color']!='')
{
	echo ".acc-trigger a:hover, .acc-trigger.active a, .acc-trigger.active a:hover { color:{$thm_options['webnus_accordion_active_color']}; }";
}





/* == Subtitle3 Border Bottom Color------------------------------------ */
/* subtitle3 border bottom color */

if(isset($thm_options['webnus_subtitle3_border_bottom_color']) && $thm_options['webnus_subtitle3_border_bottom_color']!='')
{
	echo "h6.h-sub-content { border-bottom-color:{$thm_options['webnus_subtitle3_border_bottom_color']};}";
}












/* == Blog Posts Link Color---------------------------- */
/* latest from blog link hover color */


if(isset($thm_options['webnus_latestfromblog_link_hover_color']) && $thm_options['webnus_latestfromblog_link_hover_color']!='')
{
	echo ".blog-line:hover h4 a { color:{$thm_options['webnus_latestfromblog_link_hover_color']}; }";
}
/* latest from blog category link color */
if(isset($thm_options['webnus_latestfromblog_category_link_color']) && $thm_options['webnus_latestfromblog_category_link_color']!='')
{
	echo ".blog-line p.blog-cat a { color:{$thm_options['webnus_latestfromblog_category_link_color']}; }";
}

/* blog post link hover color */
if(isset($thm_options['webnus_blogpost_link_hover_color']) && $thm_options['webnus_blogpost_link_hover_color']!='')
{
	echo ".blog-post a:hover { color:{$thm_options['webnus_blogpost_link_hover_color']}; }";
}









/* == Flex Slider Next & Previous Button Hover Background Color---------------------------------------------------------------- */

/* flex slider next & previous button hover background color */


if(isset($thm_options['webnus_flexslider_next_previous_button_hover_background_color']) && $thm_options['webnus_flexslider_next_previous_button_hover_background_color']!='')
{
	echo ".flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover { background-color:{$thm_options['webnus_flexslider_next_previous_button_hover_background_color']};}";
}

?>