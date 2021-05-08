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
$id = 'threeImages-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'threeImages';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$image_1 = get_field( 'image_1' );
$image_2 = get_field( 'image_2' );
$image_3 = get_field( 'image_3' );
$text_1 = get_field( 'text_1' );
$text_2 = get_field( 'text_2' );
$text_3 = get_field( 'text_3' );
$title_1 = get_field( 'title_1' );
$title_2 = get_field( 'title_2' );
$title_3 = get_field( 'title_3' );
$gradient = get_field( 'gradient' );
 ?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="threeImagesGrid">
		<div></div>
		<div>
			<img class="rectangle" src="<?php echo $gradient; ?>">
			<img src="<?php echo $image_1; ?>" alt="Image 1">
			<p><?php echo $title_1; ?><br>
			<span><?php echo $text_1; ?></span></p>
		</div>
		<div>
			<img class="rectangle" src="<?php echo $gradient; ?>">
			<img src="<?php echo $image_2; ?>" alt="Image 2">
			<p><?php echo $title_2; ?><br>
			<span><?php echo $text_2; ?></span></p>
		</div>
		<div>
			<img class="rectangle" src="<?php echo $gradient; ?>">
			<img src="<?php echo $image_3; ?>" alt="Image 3">
			<p><?php echo $title_3; ?><br>
			<span><?php echo $text_3; ?></span></p>
		</div>
		<div></div>
	</div>


</div>