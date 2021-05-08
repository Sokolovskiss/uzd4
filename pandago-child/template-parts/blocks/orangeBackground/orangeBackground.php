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
$id = 'orangeBackgroundWithImageAndText-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'orangeBackgroundWithImageAndText';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}
$orange_id = get_field( 'id' );
$image = get_field( 'image' );
$text = get_field( 'text' );
$size = get_field( 'image_size' );
$size_mobile = get_field( 'image_size_mobile' );
$img_loc = get_field( 'image_vertical_location' );
$img_loc_mobile = get_field( 'image_vertical_location_mobile' );
?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="orangeBackground <?php echo $orange_id;?>">
		<img class="rippedOrange_1" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped2.svg" alt="Ripped1">
		<img class="rippedOrange_2" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped1.svg" alt="Ripped2">
		<img class="imageOrangeBackground" src="<?php echo $image ?>" alt="Image">
		<p><?php echo $text ?></p>
	</div>
</div>

<style>
	<?php echo '.'.$orange_id;?> .imageOrangeBackground{
		max-width: <?php echo $size; ?>px;
	}

	<?php echo '.'.$orange_id;?> img:nth-of-type(3){
		top:<?php echo $img_loc; ?>%;
	}


	@media only screen and (max-width: 768px){
		<?php echo '.'.$orange_id;?> .imageOrangeBackground{
			max-width: <?php echo $size_mobile; ?>px;
		}

		<?php echo '.'.$orange_id;?> img:nth-of-type(3){
			top:<?php echo $img_loc_mobile; ?>%;
		}
	}
</style>
