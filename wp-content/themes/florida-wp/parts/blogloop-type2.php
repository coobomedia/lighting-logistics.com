   <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
        <div class="col-md-1 alpha">
          <div class="blog-date-sec"> <span><?php the_time('M') ?></span>
            <h3><?php the_time('d') ?></h3>
            <span><?php the_time('Y') ?></span> </div>
        </div>
        <?php 
        GLOBAL $webnus_options;
        $post_format = get_post_format(get_the_ID());
		$content = get_the_content();
		if( !$post_format ) $post_format = 'standard';
        
		if('aside' != $post_format && 'quote' != $post_format && 'link' != $post_format) {
         ?>
        <div class="col-md-5"> <?php
	
	
	
	
	

	if(  $webnus_options->webnus_blog_featuredimage_enable() ){
	
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
				$ids = (shortcode_parse_atts($matches[3]));
				
				if(is_array($ids) && isset($ids['ids']))
					$ids = $ids['ids'];
				
				echo do_shortcode('[vc_gallery img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'" onclick="link_image" custom_links_target="_self"]');
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
				
	
			
			
		}else
		
			get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ) ); 
	}
	?><br>
        </div>
        <?php 
        
        } // do not show in postformats : link,aside,quote
        
        ?>
        <?php 
        
        if('aside' != $post_format && 'quote' != $post_format && 'link' != $post_format) {
        
        ?>
        <div class="col-md-6 omega">
        	
        <?php 
        
		}else{
			        
        ?>
        <div class="col-md-11 omega">
        <?php } ?>
	  <?php
	  
	   if(  $webnus_options->webnus_blog_posttitle_enable() ) { 
	  
	   if( ('aside' != $post_format ) && ('quote' != $post_format)  ) { 	
	  	
		if( 'link' == $post_format )
		{ 
		
		
		 preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $content,$matches);
		 $content = preg_replace('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i','', $content,1);
		 $link ='';
		 
		 if(isset($matches) && is_array($matches))
		 	$link = $matches[0];
			
		?>
			<h3><a href="<?php echo $link; ?>"><?php the_title() ?></a></h3>
		<?php
		
		}else{
	  ?>
	  <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
	  <?php } } } ?>
           <?php if(  $webnus_options->webnus_blog_metadata_enable() ):?>
	  <div class="postmetadata">
		<i class="format-<?php echo get_post_format(get_the_ID()); ?>"></i>
		<h6 class="blog-author"><strong><?php _e('by','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_author(); ?> </h6>
		<h6 class="blog-cat"><strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?> </h6>
	  </div>
	  <?php endif; ?>
       <?php 
	  if( 0 == $webnus_options->webnus_blog_excerptfull_enable() )
		{
			if( 'quote' == $post_format  ) echo '<blockquote>';
			the_excerpt();
			if( 'quote' == $post_format  ) echo '</blockquote>';
		} 
	  else
	  	{
			if( 'quote' == $post_format  ) echo '<blockquote>';
			echo apply_filters('the_content',$content);
			if( 'quote' == $post_format  ) echo '</blockquote>';
		}
	  ?></div><br class="clear">
      </article>