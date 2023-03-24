<?php
get_header();
?>
<section class="container page-content" >
<hr class="vertical-space2">
<?php if($webnus_options->webnus_portfolio_likebox_enable() == 1 ) { ?>
<div class="portfolio-item-dets">
<div class="portfolio-item-like-box">
<i class="icomoon-heart-7"></i><br>
<input type="hidden" id="pageID" value="<?php the_ID(); ?>"/>
<span>0</span>
</div>

<div class="portfolio-item-detail-box">
Date: <?php the_time('d M Y'); ?>
<hr>
Cat: <?php $terms = get_the_terms(get_the_id(), 'filter' );
	$terms_slug_str = '';
	
	if ($terms && ! is_wp_error($terms)) :
		$term_slugs_arr = array();
		foreach ($terms as $term) {
			$term_slugs_arr[] = '<a href="'. get_term_link($term, 'filter') .'">' . $term->name . '</a>';
		}
		$terms_slug_str = join( ", ", $term_slugs_arr);
	endif;
	echo $terms_slug_str; ?>
</div>
</div>
<?php } ?>
<article class="col-md-12">
<?php 
if(have_posts()): while(have_posts()): the_post();

echo the_content();

endwhile;
endif;
if( '1' == $webnus_options->webnus_portfolio_recentworks_enable() )
	echo do_shortcode('[related_works count=7]');
?>
</article>

</section>
  <?php get_footer(); ?>