<?php

/*

Template Name: Timeline Posts

*/
get_header();

GLOBAL $webnus_options;

$last_time = get_the_time(' F Y');


?>
  <section id="main-timeline">
    <div class="container">
      <div id="tline-content">
        
        <?php
			$i=1;
			//$wpbp = new WP_Query(array( 'post_type' => 'post',  'orderby'=>'date' ) ); 
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				   'orderby'=>'date',
				   'order'=>'desc',
				   
				   'paged' => $page,
			); 
			query_posts($args);
			 
			if (have_posts()) : while (have_posts()) : the_post();
			$post_format = get_post_format(get_the_ID());
			
			$content = get_the_content();
			
			
			if( !$post_format ) $post_format = 'standard';			
			if(($last_time != date(' F Y',strtotime($post->post_date)) ) || $i==1) //&& $i < $post_per_page
			{
				$last_time = date(' F Y',strtotime($post->post_date));
				echo '<div class="tline-topdate">'.  date(' F Y',strtotime($post->post_date)) .'</div>';
			}
		?>
		<article id="post-<?php the_ID(); ?>"  class="tline-box <?php if(($i%2)==0) echo ' rgtline'; ?>"> <span class="tline-row-<?php if(($i%2)==0) echo 'r'; else echo 'l'; ?>"></span> <?php
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
				$ids = $matches[3];
				$ids = substr($ids,6,strlen($ids)-7);
				
				echo do_shortcode('[vc_gallery img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'" onclick="link_image" custom_links_target="_self"]');
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
				
	
			
			
		}else
		
			get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ) ); 
	}
		
		?> <br>
          <div class="tline-ecxt">
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
			<h4><a href="<?php echo $link; ?>"><?php the_title() ?></a></h4>
		<?php
		
		}else{
	  ?>
	  <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
	  <?php } } } ?>
            <?php if(  $webnus_options->webnus_blog_author_enable() ):?>
			<h6 class="blog-author"><?php _e('at','WEBNUS_TEXT_DOMAIN'); ?> <?php the_category(', ') ?> - by <?php the_author(); ?></h6>
			<?php endif; ?>
          </div><p>
          <?php 
		  add_filter( 'excerpt_more', '__return_false' );

	  if( 0 == $webnus_options->webnus_blog_excerptfull_enable() && ('gallery'!=$post_format && 'audio'!=$post_format && 'video'!=$post_format && 'link'!=$post_format ) )
		{
			if( 'quote' == $post_format  ) echo '<blockquote>';
			the_excerpt();
			if( 'quote' == $post_format  ) echo '</blockquote>';
		} 


 ?>
		  </p>
          <div class="blog-date-sp">
            <h3><?php the_time('d') ?></h3>
            <span><?php the_time('M') ?><br>
            <?php the_time('Y') ?></span></div>
          <div class="blog-com-sp"> <?php comments_popup_link(__('No Comments &#187;','WEBNUS_TEXT_DOMAIN'), __('1 Comment &#187;','WEBNUS_TEXT_DOMAIN'), __('% Comments &#187;','WEBNUS_TEXT_DOMAIN')); ?></div>
        </article>
		<?php 
			$i++;
			endwhile;
			endif;
			
		?>
        <hr class="vertical-space1">
        <div class="tline-topdate enddte"><?php the_time(' F Y') ?></div>
      </div>
      <!-- end-pin-content -->
      <hr class="vertical-space2">
    </div>
    <section class="container aligncenter">
      <?php 
		if(function_exists('wp_pagenavi'))
		{
			wp_pagenavi();
			
		}
	  ?>
      <hr class="vertical-space2">
    </section>
    <!-- container -->
  </section>
  <?php wp_reset_query(); // Reset the Query Loop ?>
  <!-- end-main-content-pin -->
  <?php get_footer(); ?>