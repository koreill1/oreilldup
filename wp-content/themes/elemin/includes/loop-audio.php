<?php 
/** Themify Default Variables
 *  @var object */
global $themify;
?>

<?php themify_image("field_name=post_image, image, wp_thumb&w=100&h=100&before=<p class='audio-image'><a href='".get_permalink()."'>&after=</a></p>"); ?>

<!-- audio-player -->
<div class="audio-player">
	<?php // Load audio player
	echo $themify->get_audio_player(themify_get('audio_url'), $post->ID); ?>
</div>
<!-- /audio-player -->

<!-- post-content -->
<div class="post-content">
	<div class="entry-content" itemprop="articleBody">

	<?php if ( 'excerpt' == $themify->display_content && ! is_attachment() ) : ?>
	
		<?php the_excerpt(); ?>

			<?php if( themify_check('setting-excerpt_more') ) : ?>
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>" class="more-link"><?php echo themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify') ?></a></p>
			<?php endif; ?>
	
	<?php elseif ( 'none' == $themify->display_content && ! is_attachment() ) : ?>
	
	<?php else: ?>
	
		<?php the_content(themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify')); ?>
	
	<?php endif; //display content ?>

	</div><!-- /.entry-content -->
</div>
<!-- /post-content -->