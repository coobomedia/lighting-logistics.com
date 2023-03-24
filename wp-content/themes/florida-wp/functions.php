<?php

load_theme_textdomain('WEBNUS_TEXT_DOMAIN', get_template_directory().'/languages');


if(! class_exists('description_walker')) {
class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth=0, $args=array(),$current_object_id=0)
	{
		

		$this->curItem = $item;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filter the CSS class(es) applied to a menu item's <li>.
		 *
		 * @since 3.0.0
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of arguments. @see wp_nav_menu()
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filter the ID applied to a menu item's <li>.
		 *
		 * @since 3.0.1
		 *
		 * @param string The ID that is applied to the menu item's <li>.
		 * @param object $item The current menu item.
		 * @param array $args An array of arguments. @see wp_nav_menu()
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$is_mega_menu = '';
		
		if('page'  == $item->object)
		{
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			
			$is_mega = get_post_meta($item->object_id,'_is_mega_menu',true);
			
			if(!empty($is_mega) && $is_mega['is_mega_menu'] == 'yes')
						$is_mega_menu .= ' mega ';
		}
		
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filter the HTML attributes applied to a menu item's <a>.
		 *
		 * @since 3.6.0
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's <a>, empty strings are ignored.
		 *
		 *     @type string $title  The title attribute.
		 *     @type string $target The target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param object $item The current menu item.
		 * @param array  $args An array of arguments. @see wp_nav_menu()
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		$attributes = '';
		$item_output = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		if('page'  == $item->object)
		{
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			
			$is_mega = get_post_meta($item->object_id,'_is_mega_menu',true);
			
			if(!empty($is_mega) && $is_mega['is_mega_menu'] == 'yes')
						$item_output .= do_shortcode($post_obj->post_content);
			else
			{
				$item_output .= $args->before;
				$item_output .= '<a'.$attributes. ' data-description="' .$item->description .'">';
				/** This filter is documented in wp-includes/post-template.php */
				if(!empty($item->icon))
				$item_output .= '<i class="'.$item->icon.'"></i>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
			}
		}
		else{
		$item_output .= $args->before;
		$item_output .= '<a '. $attributes. ' data-description="' .$item->description .'">';
		/** This filter is documented in wp-includes/post-template.php */
		if(!empty($item->icon))
		$item_output .= '<i class="'.$item->icon.'"></i>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		}
		/**
		 * Filter a menu item's starting output.
		 *
		 * The menu item's starting output only includes $args->before, the opening <a>,
		 * the menu item's title, the closing </a>, and $args->after. Currently, there is
		 * no filter for modifying the opening and closing <li> for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of arguments. @see wp_nav_menu()
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			
			
	}
}
}

include_once('inc/init.php');
include_once get_template_directory(). '/inc/visualcomposer/init.php';


$webnus_options = new webnus_options();


/******************************/
/*
/*		Theme Customization
/*
/******************************/
add_theme_support( 'woocommerce' );
add_theme_support('post-thumbnails');

//add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_length', 'webnus_excerpt_length', 999);


if(! function_exists('webnus_excerpt_length')) {
	function webnus_excerpt_length($len) {
	    GLOBAL $webnus_options;
	    return $webnus_options->webnus_blog_excerpt_len();
	}	
}



if(! function_exists('webnus_excerpt_more')) {
	function webnus_excerpt_more($more) {
	    global $post, $webnus_options;
	    
	    return '... <br><br><a class="readmore" href="' . get_permalink($post->ID) . '">' . $webnus_options->webnus_blog_readmore_text() . '</a>';
	}
}

add_filter('excerpt_more', 'webnus_excerpt_more');


/******************************/
/*
/*		Register Menus
/*
/******************************/

if(! function_exists('webnus_register_menus')) {
	function webnus_register_menus() {
	    register_nav_menus(
	            array(
	                'header-menu' => __('Header Menu', 'WEBNUS_TEXTDOMAIN'),
	                'footer-menu' => __('Footer Navigation Menu', 'WEBNUS_TEXTDOMAIN'),
	                'header-top-menu' => __('Topbar Navigation', 'WEBNUS_TEXTDOMAIN'),
					'leftnav-menu' => __('Left Navigation Page Template Menu', 'WEBNUS_TEXTDOMAIN')
	            )
	    );
		
	}
}

add_action('init', 'webnus_register_menus');

/******************************/
/*
/*		Header Assets
/*
/******************************/


if(! function_exists('webnus_script_loader')) {
function webnus_script_loader(){
	
	GLOBAL $webnus_options;
	
	/***************************************/
	/*			JQuery
	/***************************************/

	
	wp_enqueue_script("jquery");
	
	/***************************************/
	/*			Main style.css
	/***************************************/
	
	
	
	wp_register_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style('main-style');
	
	/***************************************/
	/*			Google fonts
	/***************************************/
	
	
	
	wp_register_style( 'google_fonts_css', $webnus_options->webnus_get_google_fonts() );
	wp_enqueue_style('google_fonts_css');
	
	
	
	/***************************************/
	/*			Dynamic Css dyncss.php
	/***************************************/
	
	
	
	wp_register_style( 'dynamic_css', get_template_directory_uri() .'/dyncss.php' );
	wp_enqueue_style('dynamic_css');
	
	
	
	
	/***************************************/
	/*			Default Google Font
	/***************************************/
	
	
	
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'gfont-style', "$protocol://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Slab:300,400" );

	
	
	/***************************************/
	/*			Comment Reply JS
	/***************************************/

	
	
	if ( is_singular() && $webnus_options->webnus_allow_comments_on_page() )
		wp_enqueue_script( 'comment-reply' );
	
	/***************************************/
	/*			MegaMenu
	/***************************************/
	
	
	
}
}
add_action('wp_enqueue_scripts', 'webnus_script_loader');


/******************************/
/*
/*		Footer Assets
/*
/******************************/
if(! function_exists('webnus_footer_script_loader')) {
function webnus_footer_script_loader(){

	
	wp_enqueue_script(
            'jcarousel', get_template_directory_uri() . '>/js/jquery.jcarousel.min.js', null, null, true
    );
	
	
	
	
	
	wp_enqueue_script(
            'doubletab', get_template_directory_uri() . '>/js/doubletaptogo.js', null, null, true
    );
	
	wp_enqueue_script(
            'bootstrap-alert', get_template_directory_uri() . '>/js/bootstrap-alert.js', null, null, true
    );
	
	wp_enqueue_script(
            'bootstrap-dropdown', get_template_directory_uri() . '>/js/bootstrap-dropdown.js', null, null, true
    );

	wp_enqueue_script(
            'sticky', get_template_directory_uri() . '>/js/jquery.sticky.js', null, null, true
    );
	
	wp_enqueue_script(
            'flex-slider', get_template_directory_uri() . '>/js/jquery.flexslider-min.js', null, null, true
    );
	
	
	wp_enqueue_script(
            'easy-pie', get_template_directory_uri() . '>/js/jquery.easy-pie-chart.js', null, null, true
    );
	
	wp_enqueue_script(
            'bootstrap-tab', get_template_directory_uri() . '>/js/bootstrap-tab.js', null, null, true
    );
	wp_enqueue_script(
            'bootstrap-tooltip', get_template_directory_uri() . '>/js/bootstrap-tooltip.js', null, null, true
    );
	wp_enqueue_script(
            'isotop', get_template_directory_uri() . '>/isotope/isotope.js', null, null, true
    );
	wp_enqueue_script(
            'isotop-custom', get_template_directory_uri() . '>/isotope/isotope-custom.js', null, null, true
    );
	wp_enqueue_script(
            'pretty-photo', get_template_directory_uri() . '>/js/jquery.prettyPhoto.js', null, null, true
    );
	wp_enqueue_script(
            'masonry', get_template_directory_uri() . '>/js/jquery.masonry.min.js', null, null, true
    );
	
    wp_enqueue_script(
            'custom_script', get_template_directory_uri() . '/js/florida-custom.js', null, null, true
    );
	
}
}

add_action('wp_enqueue_scripts', 'webnus_footer_script_loader');





/******************************/
/*
/*		Add Tracking Code Hook
/*
/******************************/

/***************************************/
/*			Page Background 
/***************************************/
if( !function_exists('page_background_override')) {
function page_background_override(){

GLOBAL $page_options_meta;

$meta = $page_options_meta->the_meta();


if(!empty( $meta )){


	$bgcolor =  isset($meta['webnus_page_options'][0]['background_color'])?$meta['webnus_page_options'][0]['background_color']:null;
	$bgimage =  isset($meta['webnus_page_options'][0]['the_page_bg'])?$meta['webnus_page_options'][0]['the_page_bg']:null;
	$bgpercent =  isset($meta['webnus_page_options'][0]['bg_image_100'])?$meta['webnus_page_options'][0]['bg_image_100']:null;
	$bgrepeat =  isset($meta['webnus_page_options'][0]['bg_image_repeat'])?$meta['webnus_page_options'][0]['bg_image_repeat']:null;
			
			$out = "";
		
			$out .= '<style type="text/css" media="screen">';
			
			$out .='body{ ';
					
				if(!empty($bgcolor)){
					$out .= "background-image:url('');background-color:{$bgcolor};";
				}
				if(!empty($bgimage))
				{
					if($bgrepeat == 1)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat;";
					else if($bgrepeat==2)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-x;";
					else if($bgrepeat==3)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-y;";
					else if($bgrepeat==0)
					{
						if($bgpercent)
							$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; background-size:100% auto; ";
						else
							$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; ";
							
					}
				}
		
			
			if($bgpercent == 'yes' && !empty($bgimage)) 
			$out .= 'background-size:cover;-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover; background-attachment:fixed;
					background-position:center; ';
			$out .= ' } </style>';

			
	echo $out;

/***************************************/
/*			End Page Background 
/***************************************/
}

}
}


if(! function_exists('webnus_wphead_action')) {
function webnus_wphead_action(){
	
	GLOBAL $webnus_options;
	
	
	echo $webnus_options->webnus_background_image_style();
	echo $webnus_options->webnus_tracking_code();
	echo $webnus_options->webnus_space_before_head();
	echo $webnus_options->webnus_custom_css();
	if(!is_404() && isset($post))
		page_background_override(); // referred to up
}
}

add_action('wp_head', 'webnus_wphead_action');


/******************************/
/*
/*		Add Color Picker
/*
/******************************/

add_action( 'admin_enqueue_scripts', 'webnus_enqueue_color_picker' );
if(! function_exists('webnus_enqueue_color_picker')) {
function webnus_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_style( 'thickbox' );
	wp_enqueue_script( 'thickbox' );
    wp_enqueue_script( 'my-script-handle', get_template_directory_uri().'/inc/nc-options/color.js', array( 'wp-color-picker' ), false, true );
}
}


add_action('admin_enqueue_scripts', 'base64_include_js');

if(! function_exists('base64_include_js')) {
function base64_include_js(){

    wp_enqueue_script(
            'base64', get_template_directory_uri() . '/js/base64.js', null, null, true
    );
}
}

/******************************/
/*
/*		Custom Admin Logo
/*
/******************************/
if(! function_exists('custom_login_logo')) {
function custom_login_logo() {
    GLOBAL $webnus_options;
    $logo = $webnus_options->webnus_admin_login_logo();
    if(isset($logo) && !empty($logo))
    {
        echo '<style type="text/css">'.
             'h1 a { background-image:url('.$logo.') !important; }'.
         '</style>';
    }
}
}
add_action( 'login_head', 'custom_login_logo' );

/******************************/
/*
/*		Images Size
/*
/******************************/

$portfolio_image_width = $webnus_options->webnus_portfolio_image_width();
$portfolio_image_height = $webnus_options->webnus_portfolio_image_height();

add_image_size("portfolio_full", $portfolio_image_width, $portfolio_image_height, true);

// Home LATEST FROM BLOG Thumb
add_image_size("home_lfb", 420 ,186, true);
add_image_size("blog2_thumb", 420,420, true);
add_image_size("lfb_thumb", 140,110, true);

/*
 *ICONMOON SCRIPT AND CSS ADDED 
 */
add_action( 'admin_enqueue_scripts', 'iconmoon_enqueue' );
if(! function_exists('iconmoon_enqueue')) {
function iconmoon_enqueue( $hook_suffix ) {
    	
   wp_enqueue_style(
            'icomoon-style', get_template_directory_uri() . '/inc/icomoon/style.css', null, null
    );
  wp_enqueue_style(
            'icomoon-style-gen', get_template_directory_uri() . '/inc/icomoon/custom.css', null, null
   );
 
}
}


if (!isset($content_width))
    $content_width = 940;

if (false)
    wp_link_pages(); 
if(false){
    posts_nav_link();
    paginate_links();
    the_tags();
    get_post_format(0);
}

if (function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');	
    add_theme_support( 'post-formats', array( 'aside','gallery', 'link', 'quote','image','video','audio' ) );
}


/*
OneClick xml importer
*/


if(isset($_POST['webnus_oneclick_importer']))
{
add_action('shutdown', 'include_xml_at_page_loaded');

}

if(! function_exists('include_xml_at_page_loaded')) {
function include_xml_at_page_loaded(){
    
    include_once get_template_directory() . "/inc/plugins/wordpress-importer/wordpress-importer.php";

	
    $myimporter = new WP_Import();

    $myimporter->import(get_template_directory() . '/inc/dummy-data/dummy.xml');
}
}


/*
 * Add Topbar Menu link to Theme option
 * 
 */
if(! function_exists('add_webnus_admin_bar_link')) {
function add_webnus_admin_bar_link() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'webnus_themeoption_link',
	'title' => __( 'Webnus Theme Option','WEBNUS_TEXT_DOMAIN'),
	'href' => __(site_url().'/wp-admin/themes.php?page=webnus_theme_options'),
	) );
}
}
add_action('admin_bar_menu', 'add_webnus_admin_bar_link',25);






/*
Woocommerce js error hack
*/


add_action( 'wp_enqueue_scripts', 'custom_frontend_scripts' );
if(!function_exists('custom_frontend_scripts')) {
function custom_frontend_scripts() {

		if (class_exists('Woocommerce')) {
		global $post, $woocommerce;

		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		
		if(file_exists($woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery.cookie'.$suffix.'.js'))
		{
			rename($woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery.cookie'.$suffix.'.js', $woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery_cookie'.$suffix.'.js');
			
			
		}
		wp_deregister_script( 'jquery-cookie' ); 
		wp_register_script( 'jquery-cookie', $woocommerce->plugin_url() . '/assets/js/jquery-cookie/jquery_cookie'.$suffix.'.js', array( 'jquery' ), '1.3.1', true );
}
}
}



add_action('print_media_templates', 'webnus_print_media_templates'); 
if(! function_exists('webnus_print_media_templates')) {
function webnus_print_media_templates(){

  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-my-custom-gallery-setting">
    <label class="setting">
      <span><?php _e('Gallery Type'); ?></span>
      <select data-setting="webnus_gallery_type">
        <option value="normal"> Normal </option>
        <option value="slider"> Slider </option>
 
      </select>
    </label>
  </script>

  <script>

    jQuery(document).ready(function(){

      // add your shortcode attribute and its default value to the
      // gallery settings list; $.extend should work as well...
      _.extend(wp.media.gallery.defaults, {
        my_custom_attr: 'default_val'
      });

      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('my-custom-gallery-setting')(view);
        }
      });

    });

  </script>
  <?php

};
}



?>