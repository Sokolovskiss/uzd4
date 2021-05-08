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
$id = 'supporters-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'supporters';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field( 'title' );
$image_1 = get_field( 'supporter_1' );
$image_2 = get_field( 'supporter_2' );
$image_3 = get_field( 'supporter_3' );
$image_4 = get_field( 'supporter_4' );
$size_1 = get_field( 'image_size_1' );
$size_2 = get_field( 'image_size_2' );
$size_3 = get_field( 'image_size_3' );
$size_4 = get_field( 'image_size_4' );
 ?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="supporters">
		<img class="supportersRippedTop" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped2.svg">
		<p class="titleSupporters"><?php echo $title ?></p>
		<div class="supportersGrid">
			<div class="supportersEmptyGrid"></div>
			<div>
				<img src="<?php echo $image_1; ?>" style="max-width: <?php echo $size_1; ?>px" alt="Supporter 1">
			</div>
			<div>
				<img src="<?php echo $image_2; ?>" style="max-width: <?php echo $size_2; ?>px"alt="Supporter 2">
			</div>
			<div>
				<img src="<?php echo $image_3; ?>" style="max-width: <?php echo $size_3; ?>px"alt="Supporter 3">
			</div>
			<div>
				<img src="<?php echo $image_4; ?>" style="max-width: <?php echo $size_4; ?>px"alt="Supporter 4">
			</div>
			<div class="supportersEmptyGrid"></div>
		</div>
	</div>
</div>