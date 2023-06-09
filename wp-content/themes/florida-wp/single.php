 <?php
/******************/
/**  Single Post
/******************/

get_header();
 ?>
 <section class="container page-content" >
    <hr class="vertical-space2">
    <?php 
	if( 'left' == $webnus_options->webnus_blog_singlepost_sidebar() ): 
		get_sidebar('bleft');
	endif;
	?>
	<section class="col-md-8 omega">
		<?php if( have_posts() ): while( have_posts() ): the_post();  ?>
      <article class="blog-single-post">
		<?php
			GLOBAL $webnus_options;
			
			
		$post_format = get_post_format(get_the_ID());
	
		$content = get_the_content();
			
			
	if(  $webnus_options->webnus_blog_sinlge_featuredimage_enable() ){
	
		global $featured_video;
		
		$meta_video = $featured_video->the_meta();
		
		if( 'video'  == $post_format || 'audio'  == $post_format)
		{
			
		$pattern =
		  '\\['                              // Opening bracket
		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
		. "(video|audio)"                     // 2: Shortcode name
		. '(?![\\w-])'                       // Not followed by word character or hyphen
		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash
		.     '(?:'
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash
		.     ')*?'
		. ')'
		. '(?:'
		.     '(\\/)'                        // 4: Self closing tag ...
		.     '\\]'                          // ... and closing bracket
		. '|'
		.     '\\]'                          // Closing bracket
		.     '(?:'
		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
		.             '[^\\[]*+'             // Not an opening bracket
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
		.                 '[^\\[]*+'         // Not an opening bracket
		.             ')*+'
		.         ')'
		.         '\\[\\/\\2\\]'             // Closing shortcode tag
		.     ')?'
		. ')'
		. '(\\]?)';  			
		
			
			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			
			
			if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2])))
			{
				$video = $matches[0];
				
				echo do_shortcode($video);
				
				$content = preg_replace('/'.$pattern.'/s', '', $content);
				
			}else				
			if( (!empty( $meta_video )) && (!empty($meta_video['the_post_video'])) )
			{
				echo do_shortcode($meta_video['the_post_video']);
			}
				
	
			
			
		}else
		if( 'gallery'  == $post_format)
		{
			
						
			$pattern =
		  '\\['                              // Opening bracket
		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
		. "(gallery)"                     // 2: Shortcode name
		. '(?![\\w-])'                       // Not followed by word character or hyphen
		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash
		.     '(?:'
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash
		.     ')*?'
		. ')'
		. '(?:'
		.     '(\\/)'                        // 4: Self closing tag ...
		.     '\\]'                          // ... and closing bracket
		. '|'
		.     '\\]'                          // Closing bracket
		.     '(?:'
		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
		.             '[^\\[]*+'             // Not an opening bracket
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
		.                 '[^\\[]*+'         // Not an opening bracket
		.             ')*+'
		.         ')'
		.         '\\[\\/\\2\\]'             // Closing shortcode tag
		.     ')?'
		. ')'
		. '(\\]?)';  			

			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			
			
			if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2])))
			{
				
				$atts = shortcode_parse_atts($matches[3]);
				
				$ids = $gallery_type = '';
				
				if(isset($atts['ids']))
				{
					$ids = $atts['ids'];
				}
				if(isset($atts['webnus_gallery_type']))
				{
					$gallery_type = $atts['webnus_gallery_type'];
				}

					echo do_shortcode('[vc_gallery img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'" onclick="link_image" custom_links_target="_self"]');
				
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
				
	
			
			
		}else
		if( (!empty( $meta_video )) && (!empty($meta_video['the_post_video'])) )
		{
			echo do_shortcode($meta_video['the_post_video']);
		}
		else
			get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ) ); 
	}
			
		?>

	  <?php 
		  ?>
        <div <?php post_class('post'); ?>>
          <?php if( $webnus_options->webnus_blog_metadata_enable() ){  ?>
          <div class="postmetadata">
            <h6 class="blog-author"><?php the_time('d M Y') ?> / <strong><?php _e('by','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_author(); ?> / <strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?> </h6>
          </div>
          <?php } ?>
          <h1><?php the_title() ?></h1>
		
			<?php 
			
			if( 'quote' == $post_format  ) echo '<blockquote>';
			echo apply_filters('the_content',$content); 
			if( 'quote' == $post_format  ) echo '</blockquote>';
			
			?>
		 
          <br class="clear">
			<div class="post-tags">
			   <i class="icomoon-tags"></i> : &nbsp; <?php the_tags(); ?>
			</div><!-- End Tags -->
			 
			 <div class="next-prev-posts">
			 <?php $args = array(
					'before'           => '',
					'after'            => '',
					'link_before'      => '',
					'link_after'       => '',
					'next_or_number'   => 'next',
					'nextpagelink'     => __('&nbsp;&nbsp; Next Page','WEBNUS_TEXT_DOMAIN'),
					'previouspagelink' => __('Previous Page&nbsp;&nbsp;','WEBNUS_TEXT_DOMAIN'),
					'pagelink'         => '%',
					'echo'             => 1
				); 
				
				 wp_link_pages($args);
			
				 
				?>
			  
			 </div><!-- End next-prev post -->
		
         <?php if( $webnus_options->webnus_blog_author_enable() ) { ?>
         <div class="about-author-sec">		  
	
		  <?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
		  <h5><?php the_author(); ?></h5>
		   <p><?php echo get_the_author_meta( 'description' ); ?></p>
		  

		  
		  </div>
		  <?php  } ?>
        </div>
		<?php 
		
		  ?>
		
      </article>
      <?php 
       endwhile;
		 endif;
      comments_template(); ?>
    </section>
    <!-- end-main-conten -->
    <?php 
	if( 'right' == $webnus_options->webnus_blog_singlepost_sidebar() ): 
		get_sidebar('bright');
	endif;
	?>
    <!-- end-sidebar-->
    <div class="white-space"></div>
  </section>
  <?php 
  get_footer();
  ?>