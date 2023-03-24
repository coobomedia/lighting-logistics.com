<?php
function latestfromblog_shortcode($attributes, $content)
{
	extract(shortcode_atts(array('title'=>'Latest From Blog'), $attributes));
	
	?>
		<!-- Latest-from-Blog-start -->
    	<div class="latest-f-blog clearfix">
    		<div class="col-md-12">
    			<div class="sub-content">
					<h6 class="h-sub-content"><?php echo $title; ?></h6>
				</div>
    		</div>
      		<?php
      		/*
			 *Begin of One Col 
			 */
      		
      		$wpbp = new WP_Query(array( 'post_type' => 'post','paged'=>1, 'posts_per_page' =>5 ) ); 
			$i = 0;
			$div_must_echo_first_time = 0;  
			if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
      		if( 0 == $i ) {
      		?>
      		<div class="col-md-7">
       		 	<article class="blog-post clearfix ">
       		 		<figure class="pad-r20">
       		 			<?php
						  echo '<a href="'. get_permalink() .'">';
						  $image = get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ,'echo'=>false) );
						 
						  if( !empty($image) ) 
						  	echo $image;
						  else 
						  	echo '<img src="'.get_template_directory_uri() . '/images/featured.jpg" />';
						  echo '</a>';
       		 			?>
       		 		</figure>
         	 		<div class="col-md-2">
            			<div class="blog-date-sec">
              				<h3><?php echo get_the_time('d'); ?></h3>
              				<span><?php echo get_the_time('M'); ?></span>
              			</div>
          			</div>
	          	<div class="col-md-10">
				
	            	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	              	<p class="blog-author"><strong><?php _e('by','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_author(); ?> <strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?></p>
	            <p class="blog-detail"><?php the_excerpt(); ?></p>
	            </div>
        </article>
      </div>
      <?php
       
      }else{
	 
      /*
	   * End of One Col
	   * 
	   */
      
      
      if( 0 == $div_must_echo_first_time ) echo '<div class="col-md-5">';
      ?>
	  <!-- latest-f-blog-line-start -->
	  
      	<article class="blog-line clearfix">
          	<a href="<?php the_permalink(); ?>" class="img-hover"><?php 
          		
						  
						  $image = 	get_the_image( array( 'meta_key' => array( 'Thumbnail', 'Thumbnail' ), 'size' => 'lfb_thumb' ,'echo'=>false) ); 
						 
						  if( !empty($image) ) 
						  	echo $image;
						  else 
						  	echo '<img src="'.get_template_directory_uri() . '/images/featured_140x110.jpg" />';
						  
          		          		
          	
          		
          	?></a>
			<p class="blog-cat"><?php the_category(', '); ?></p>
            <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
            <p><?php echo get_the_time('d M Y'); ?> /
            	<strong>by</strong> <?php echo get_the_author(); ?>
            </p>
        </article>
       
      <?php
      
		if( 0 == $div_must_echo_first_time ) echo '</div>';
		}
$i++; 
		endwhile; endif;
      ?>
    </div>	
	
	<?php
	
	
}

add_shortcode('latestfromblog', 'latestfromblog_shortcode');
?>