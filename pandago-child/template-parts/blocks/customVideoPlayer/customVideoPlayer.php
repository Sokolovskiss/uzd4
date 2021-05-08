<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'customVideoPlayer-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'customVideoPlayer';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$but_image = get_field( 'button_image' );
$thumbnail = get_field( 'thumbnail' );
$video = get_field( 'video' );
$rippedTop = get_field( 'ripped_top' ); ?>

<div class="<?php echo esc_attr($classname); ?>">
	<div class="videoWrapper">
		<?php if($rippedTop) : ?>
		<img class="rippedVideoTop" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped2.svg" alt="Ripped1">
		<?php endif ?>
		<video id="vidPlayer" poster="<?php echo $thumbnail; ?>">	
			<source src="<?php echo $video; ?>">
		</video>
		<img id="playBut" src="<?php echo $but_image; ?>" alt="Play button" onclick="playVideo();">
	</div>
</div>