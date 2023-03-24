<?php

/******************************************/
/**		  WOPTION HELPER CLASS           **/
/**   Get Options From Theme Option		 **/
/**							             **/
/******************************************/

if (!class_exists('webnus_options')) {

	class webnus_options {

		//Get Admin Login Page Logo

		function webnus_admin_login_logo() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_admin_login_logo']) ? $thm_options['webnus_admin_login_logo'] : null;

		}

		//Get Faveicon
		function webnus_fav_icon() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_favicon']) ? $thm_options['webnus_favicon'] : null;

		}

		function webnus_apple_iphone_icon() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_apple_iphone_icon']) ? $thm_options['webnus_apple_iphone_icon'] : null;

		}

		function webnus_apple_ipad_icon() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_apple_ipad_icon']) ? $thm_options['webnus_apple_ipad_icon'] : null;

		}

		function webnus_tracking_code() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_tracking_code']) ? $thm_options['webnus_tracking_code'] : null;
		}

		function webnus_logo() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_logo']) ? $thm_options['webnus_logo'] : null;
		}
		function webnus_halfdark_logo() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_halfdark_logo']) ? $thm_options['webnus_halfdark_logo'] : null;
		}

		function webnus_logo_width() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_logo_width']) ? $thm_options['webnus_logo_width'] : null;
		}

		function webnus_slogan() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_slogan']) ? $thm_options['webnus_slogan'] : null;
		}

		function webnus_google_map() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_google_map']) ? $thm_options['webnus_google_map'] : null;
		}

		function webnus_header_topbar_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_topbar_enable']) ? $thm_options['webnus_header_topbar_enable'] : null;
		}

		function webnus_header_topbar_leftcontent() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_topbar_leftcontent']) ? $thm_options['webnus_header_topbar_leftcontent'] : null;
		}

		function webnus_header_topbar_rightcontent() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_topbar_rightcontent']) ? $thm_options['webnus_header_topbar_rightcontent'] : null;
		}

		function webnus_header_phone() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_phone']) ? $thm_options['webnus_header_phone'] : null;
		}

		function webnus_header_email() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_email']) ? $thm_options['webnus_header_email'] : null;
		}

		function webnus_top_social_icons_facebook() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_facebook']) ? $thm_options['webnus_top_social_icons_facebook'] : null;
		}

		function webnus_top_social_icons_twitter() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_twitter']) ? $thm_options['webnus_top_social_icons_twitter'] : null;
		}

		function webnus_top_social_icons_dribbble() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_dribbble']) ? $thm_options['webnus_top_social_icons_dribbble'] : null;
		}

		function webnus_top_social_icons_pinterest() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_pinterest']) ? $thm_options['webnus_top_social_icons_pinterest'] : null;
		}

		function webnus_top_social_icons_vimeo() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_vimeo']) ? $thm_options['webnus_top_social_icons_vimeo'] : null;
		}

		function webnus_top_social_icons_youtube() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_youtube']) ? $thm_options['webnus_top_social_icons_youtube'] : null;
		}

		function webnus_top_social_icons_google() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_google']) ? $thm_options['webnus_top_social_icons_google'] : null;
		}

		function webnus_top_social_icons_linkedin() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_linkedin']) ? $thm_options['webnus_top_social_icons_linkedin'] : null;
		}

		function webnus_top_social_icons_rss() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_rss']) ? $thm_options['webnus_top_social_icons_rss'] : null;
		}

		function webnus_top_social_icons_instagram() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_instagram']) ? $thm_options['webnus_top_social_icons_instagram'] : null;
		}

		function webnus_top_social_icons_flickr() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_flickr']) ? $thm_options['webnus_top_social_icons_flickr'] : null;
		}

		function webnus_top_social_icons_reddit() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_reddit']) ? $thm_options['webnus_top_social_icons_reddit'] : null;
		}

		function webnus_top_social_icons_delicious() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_delicious']) ? $thm_options['webnus_top_social_icons_delicious'] : null;
		}

		function webnus_top_social_icons_lastfm() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_lastfm']) ? $thm_options['webnus_top_social_icons_lastfm'] : null;
		}

		function webnus_top_social_icons_tumblr() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_tumblr']) ? $thm_options['webnus_top_social_icons_tumblr'] : null;
		}

		function webnus_top_social_icons_skype() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_skype']) ? $thm_options['webnus_top_social_icons_skype'] : null;
		}

		function webnus_top_social_icons_picassa() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_social_icons_picassa']) ? $thm_options['webnus_top_social_icons_picassa'] : null;
		}

		function webnus_top_left_tagline() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_left_tagline']) ? $thm_options['webnus_top_left_tagline'] : null;
		}

		function webnus_top_right_tagline() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_top_right_tagline']) ? $thm_options['webnus_top_right_tagline'] : null;
		}

		function webnus_header_menu_type() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_menu_type']) ? $thm_options['webnus_header_menu_type'] : null;
		}

		function webnus_header1_sticky() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_sticky']) ? $thm_options['webnus_header_sticky'] : null;
		}
		function webnus_header_search_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_search_enable']) ? $thm_options['webnus_header_search_enable'] : null;
		}

		function webnus_header_logo_rightside() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_header_logo_rightside']) ? $thm_options['webnus_header_logo_rightside'] : null;
		}

		function webnus_space_before_head() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_space_before_head']) ? $thm_options['webnus_space_before_head'] : null;
		}

		function webnus_space_before_body() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_space_before_body']) ? $thm_options['webnus_space_before_body'] : null;
		}

		function webnus_footer_logo() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_logo']) ? $thm_options['webnus_footer_logo'] : null;
		}

		/***********************************/
		/***		Page Layouts
		 /***********************************/

		function webnus_get_layout() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_background_layout']) ? $thm_options['webnus_background_layout'] : 'wrap';

		}

		function webnus_background_image_style() {

			$thm_options = get_option('webnus_options');
			$repeat = $thm_options['webnus_background_repeat'];
			$color = $thm_options['webnus_background_color'];
			$percent = isset($thm_options['webnus_background_100']) ? $thm_options['webnus_background_100'] : null;
			$out = "";

			$out .= '<style type="text/css" media="screen">';
			$out .= 'body{ ';

			if (!empty($color)) {
				$out .= "background-color:{$thm_options['webnus_background_color'] };";
			}
			if (!empty($thm_options['webnus_background'])) {
				if ($repeat == 1)
					$out .= " background-image:url('{$thm_options['webnus_background']}'); background-repeat:repeat;";
				else if ($repeat == 2)
					$out .= " background-image:url('{$thm_options['webnus_background']}'); background-repeat:repeat-x;";
				else if ($repeat == 3)
					$out .= " background-image:url('{$thm_options['webnus_background']}'); background-repeat:repeat-y;";
				else if ($repeat == 0) {
					if ($percent)
						$out .= " background-image:url('{$thm_options['webnus_background']}'); background-repeat:no-repeat; background-size:100% auto; ";
					else
						$out .= " background-image:url('{$thm_options['webnus_background']}'); background-repeat:no-repeat; ";

				}
			} else {

				if (isset($thm_options['webnus_background_pattern']) && $thm_options['webnus_background_pattern'] == 'none') {
					$out .= " background-image:url('');";
				}
				if (!empty($thm_options['webnus_background_pattern']) && ($thm_options['webnus_background_pattern'] != 'none')) {
					$out .= " background-image:url('{$thm_options['webnus_background_pattern']}'); background-repeat:repeat; ";
				}

			}

			if (!empty($percent))
				$out .= 'background-size:cover;-webkit-background-size: cover;
										  -moz-background-size: cover;
										  -o-background-size: cover; background-attachment:fixed;
										  background-position:center; ';
			$out .= ' } </style>';

			return $out;

		}

		function webnus_color_skin() {

			//this is for custom color skin
			//custom color skin color number is 11
			if ($this -> webnus_custom_color_skin_enable())
				return '11';
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_color_skin']) ? $thm_options['webnus_color_skin'] : null;
		}

		function webnus_custom_color_skin_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_custom_color_skin_enable']) ? $thm_options['webnus_custom_color_skin_enable'] : null;
		}

		function webnus_custom_css() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_custom_css']) ? $thm_options['webnus_custom_css'] : null;
		}

		/***********************************/
		/***		SOCIAL NETWORK
		 /***********************************/

		function webnus_twitter_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_twitter_ID']) ? $thm_options['webnus_twitter_ID'] : null;
		}

		function webnus_facebook_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_facebook_ID']) ? $thm_options['webnus_facebook_ID'] : null;
		}

		function webnus_youtube_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_youtube_ID']) ? $thm_options['webnus_youtube_ID'] : null;
		}

		function webnus_linkedin_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_linkedin_ID']) ? $thm_options['webnus_linkedin_ID'] : null;
		}

		function webnus_dribbble_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_dribbble_ID']) ? $thm_options['webnus_dribbble_ID'] : null;
		}

		function webnus_pinterest_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_pinterest_ID']) ? $thm_options['webnus_pinterest_ID'] : null;
		}

		function webnus_vimeo_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_vimeo_ID']) ? $thm_options['webnus_vimeo_ID'] : null;
		}

		function webnus_google_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_google_ID']) ? $thm_options['webnus_google_ID'] : null;
		}

		function webnus_rss_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_rss_ID']) ? $thm_options['webnus_rss_ID'] : null;
		}

		function webnus_instagram_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_instagram_ID']) ? $thm_options['webnus_instagram_ID'] : null;
		}

		function webnus_flickr_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_flickr_ID']) ? $thm_options['webnus_flickr_ID'] : null;
		}

		function webnus_reddit_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_reddit_ID']) ? $thm_options['webnus_reddit_ID'] : null;
		}

		function webnus_tumblr_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_tumblr_ID']) ? $thm_options['webnus_tumblr_ID'] : null;
		}

		function webnus_delicious_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_delicious_ID']) ? $thm_options['webnus_delicious_ID'] : null;
		}

		function webnus_lastfm_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_lastfm_ID']) ? $thm_options['webnus_lastfm_ID'] : null;
		}

		function webnus_skype_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_skype_ID']) ? $thm_options['webnus_skype_ID'] : null;
		}

		function webnus_picassa_ID() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_picassa_ID']) ? $thm_options['webnus_picassa_ID'] : null;
		}

		/***********************************/
		/***		BLOG Options
		 /***********************************/

		function webnus_blog_template() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_template']) ? $thm_options['webnus_blog_template'] : null;
		}

		function webnus_blog_page_title() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_page_title']) ? $thm_options['webnus_blog_page_title'] : null;
		}

		function webnus_blog_featuredimage_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_featuredimage_enable']) ? $thm_options['webnus_blog_featuredimage_enable'] : null;
		}

		function webnus_blog_posttitle_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_posttitle_enable']) ? $thm_options['webnus_blog_posttitle_enable'] : null;
		}

		function webnus_blog_metadata_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_metadata_enable']) ? $thm_options['webnus_blog_metadata_enable'] : null;
		}

		function webnus_blog_author_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_author_enable']) ? $thm_options['webnus_blog_author_enable'] : null;
		}

		function webnus_blog_excerptfull_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_excerptfull_enable']) ? $thm_options['webnus_blog_excerptfull_enable'] : null;
		}

		function webnus_blog_excerpt_len() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_excerpt_len']) ? $thm_options['webnus_blog_excerpt_len'] : null;
		}

		function webnus_blog_readmore_text() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_readmore_text']) ? $thm_options['webnus_blog_readmore_text'] : null;
		}

		function webnus_blog_sinlge_featuredimage_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_sinlge_featuredimage_enable']) ? $thm_options['webnus_blog_sinlge_featuredimage_enable'] : null;
		}

		function webnus_allow_comments_on_page() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_allow_comments_on_page']) ? $thm_options['webnus_allow_comments_on_page'] : null;
		}

		function webnus_blog_sidebar() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_sidebar']) ? $thm_options['webnus_blog_sidebar'] : null;
		}

		function webnus_blog_singlepost_sidebar() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_singlepost_sidebar']) ? $thm_options['webnus_blog_singlepost_sidebar'] : null;
		}

		function webnus_blog_type() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_blog_type']) ? $thm_options['webnus_blog_type'] : null;
		}

		function webnus_portfolio_slug() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_slug']) ? $thm_options['webnus_portfolio_slug'] : null;
		}

		function webnus_portfolio_columns() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_columns']) ? $thm_options['webnus_portfolio_columns'] : null;
		}

		/***********************************/
		/***		Portfolio Options
		 /***********************************/

		function webnus_portfolio_count() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_count']) ? $thm_options['webnus_portfolio_count'] : 0;
		}

		function webnus_portfolio_isotope_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_isotope_enable']) ? $thm_options['webnus_portfolio_isotope_enable'] : null;
		}

		function webnus_portfolio_image_width() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_image_width']) ? $thm_options['webnus_portfolio_image_width'] : null;
		}

		function webnus_portfolio_image_height() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_image_height']) ? $thm_options['webnus_portfolio_image_height'] : null;
		}

		function webnus_portfolio_recentworks_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_recentworks_enable']) ? $thm_options['webnus_portfolio_recentworks_enable'] : null;
		}

		function webnus_portfolio_likebox_enable() {
			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_portfolio_likebox_enable']) ? $thm_options['webnus_portfolio_likebox_enable'] : null;
		}

		/***********************************/
		/***		Contact Info
		 /***********************************/

		function webnus_contact_address() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_contact_address']) ? $thm_options['webnus_contact_address'] : null;

		}

		function webnus_contact_phone() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_contact_phone']) ? $thm_options['webnus_contact_phone'] : null;

		}

		function webnus_contact_email() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_contact_email']) ? $thm_options['webnus_contact_email'] : null;

		}

		/***********************************/
		/***		Footer
		 /***********************************/

		function webnus_footer_color() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_color']) ? $thm_options['webnus_footer_color'] : null;

		}

		function webnus_footer_type() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_type']) ? $thm_options['webnus_footer_type'] : null;

		}

		function webnus_footer_bottom_right() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_bottom_right']) ? $thm_options['webnus_footer_bottom_right'] : null;

		}

		function webnus_footer_bottom_left() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_bottom_left']) ? $thm_options['webnus_footer_bottom_left'] : null;

		}

		function webnus_footer_bottom_enable() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_bottom_enable']) ? $thm_options['webnus_footer_bottom_enable'] : null;

		}

		function webnus_footer_copyright() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_footer_copyright']) ? $thm_options['webnus_footer_copyright'] : null;

		}

		/*
		 404 PAGE
		 */

		function webnus_404_text() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_404_text']) ? $thm_options['webnus_404_text'] : null;

		}

		/*
		 Woocommerce
		 */

		function webnus_woo_shop_title() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_woo_shop_title']) ? $thm_options['webnus_woo_shop_title'] : null;

		}

		function webnus_woo_shop_title_enable() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_woo_shop_title_enable']) ? $thm_options['webnus_woo_shop_title_enable'] : null;

		}

		function webnus_woo_product_title() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_woo_product_title']) ? $thm_options['webnus_woo_product_title'] : null;

		}

		function webnus_woo_product_title_enable() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_woo_product_title_enable']) ? $thm_options['webnus_woo_product_title_enable'] : null;

		}

		function webnus_woo_sidebar_enable() {

			$thm_options = get_option('webnus_options');

			return isset($thm_options['webnus_woo_sidebar_enable']) ? $thm_options['webnus_woo_sidebar_enable'] : null;

		}

		function webnus_get_google_fonts() {

			$thm_options = get_option('webnus_options');

			$fonts_array = array();

			if (isset($thm_options['webnus_body_font']) && $thm_options['webnus_body_font'] != '') {
				if (!in_array($thm_options['webnus_body_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_body_font'];
			}
			if (isset($thm_options['webnus_menu_font']) && $thm_options['webnus_menu_font'] != '') {
				if (!in_array($thm_options['webnus_menu_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_menu_font'];
			}
			if (isset($thm_options['webnus_p_font']) && $thm_options['webnus_p_font'] != '') {
				if (!in_array($thm_options['webnus_p_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_p_font'];
			}
			if (isset($thm_options['webnus_heading_font']) && $thm_options['webnus_heading_font'] != '') {
				if (!in_array($thm_options['webnus_heading_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_heading_font'];
			}
			if (isset($thm_options['webnus_h2_font']) && $thm_options['webnus_h2_font'] != '') {
				if (!in_array($thm_options['webnus_h2_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_h2_font'];
			}
			if (isset($thm_options['webnus_h3_font']) && $thm_options['webnus_h3_font'] != '') {
				if (!in_array($thm_options['webnus_h3_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_h3_font'];
			}
			if (isset($thm_options['webnus_h4_font']) && $thm_options['webnus_h4_font'] != '') {
				if (!in_array($thm_options['webnus_h4_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_h4_font'];
			}
			if (isset($thm_options['webnus_h5_font']) && $thm_options['webnus_h5_font'] != '') {
				if (!in_array($thm_options['webnus_h5_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_h5_font'];
			}
			if (isset($thm_options['webnus_h6_font']) && $thm_options['webnus_h6_font'] != '') {
				if (!in_array($thm_options['webnus_h6_font'], $fonts_array))
					$fonts_array[] = $thm_options['webnus_h6_font'];
			}

			$fonts = "";
			if (count($fonts_array) > 0) {
				$fonts_str = implode('|', $fonts_array);

				$fonts = "http://fonts.googleapis.com/css?family=$fonts_str";
			}
			return $fonts;
		}

	}

}
