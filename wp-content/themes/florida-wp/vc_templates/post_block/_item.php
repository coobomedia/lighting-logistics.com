<?php
$block = $block_data[0];
$settings = $block_data[1];
 if(function_exists('get_field') && get_field("external_link", $post->id )) {
        $link_title = '<a href="'.get_field("external_link", $post->id ).'">'.$post->title.'</a>';
        $link_image = '<a href="'.get_field("external_link", $post->id ).'">'.$post->thumbnail.'</a>';
    }
    else {
        $link_title = $this->getLinked($post, $post->title, $settings[0], 'link_title');
        $link_image = $this->getLinked($post, $post->thumbnail, $settings[0], 'link_image');
    }
  
?>
<?php if($block === 'title'): ?>
<h2 class="post-title">
    <?php echo !empty($settings[0]) && $settings[0]!='no_link' ? $link_title : $post->title; ?>
</h2>
<?php elseif($block === 'image' && !empty($post->thumbnail)): ?>
<div class="post-thumb">
    <?php echo !empty($settings[0]) && $settings[0]!='no_link' ? $link_image : $post->thumbnail ?>
</div>
<?php elseif($block === 'text'): ?>
<div class="entry-content">
    <?php echo !empty($settings[0]) && $settings[0]==='text' ?  $post->content : $post->excerpt; ?>
</div>
<?php elseif($block === 'link'): ?>
<a href="<?php echo $post->link ?>" class="vc_read_more" title="<?php echo esc_attr(sprintf(__( 'Permalink to %s', "js_composer" ), $post->title_attribute)); ?>"<?php echo $this->link_target ?>><?php _e('Read more...', "js_composer") ?></a>
<?php endif; ?>