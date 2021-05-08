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
$id = 'background_picture-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'background_picture';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$image = get_field( 'background_image' ); 
$gradient = get_field( 'gradient_image' ); 
$text  = get_field( 'background_image_text' ); ?>
<div class="<?php echo esc_attr($classname); ?>">	
	<div class="backgroundWithText" style="background-image: url(<?php echo $image; ?>)">
			<img class="ripped_1" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped2.svg" alt="Ripped1">
			<img class="ripped_2" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped1.svg" alt="Ripped2">
			<img class="gradientOverlay" src="<?php echo $gradient; ?>" alt="Gradient">

			<?php if($text) : ?>
	    	<p><?php echo $text ?></p>
	    	<?php endif ?>
	    	<img class="ripped_2" src="../wp-content/themes/pandago-child/resources/img/ripped1.svg" alt="Ripped2">
	</div>
</div>