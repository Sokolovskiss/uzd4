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
$id = 'pictureCollection-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'pictureCollection';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

$image_1 = get_field( 'image_1' );
$image_2 = get_field( 'image_2' );
$image_3 = get_field( 'image_3' );
$image_4 = get_field( 'image_4' );
$image_5 = get_field( 'image_5' );
$image_6 = get_field( 'image_6' );
$image_7 = get_field( 'image_7' ); 
$image_8 = get_field( 'image_8' );
$grid_layout = get_field( 'grid_layout' );
$grid_layout_mobile_1 = get_field( 'grid_layout_mobile_1' );
$grid_layout_mobile_2 = get_field( 'grid_layout_mobile_2' );
?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="pictureCollectionGrid" style="grid-template-columns: <?php echo $grid_layout ?>">
		<img class="ripped_1" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped2.svg" alt="Ripped1">
		<img class="ripped_2" src="/wordpress/wp-content/themes/pandago-child/resources/img/ripped1.svg" alt="Ripped2">			
		<div>
			<!--1st grid item-->
			<div class="gridItem" style="background-image: url(<?php echo $image_1; ?>); <?php if($image_2) : ?>height:50%;<?php endif ?>"></div>
			<?php if($image_2) : ?>
				<div class="gridItem2" style="background-image: url(<?php echo $image_2; ?>)"></div>
			<?php endif ?>
		</div>
		<div>
			<!--2nd grid item-->
			<div class="gridItem" style="background-image: url(<?php echo $image_3; ?>); <?php if($image_4) : ?>height:50%;<?php endif ?>"></div>
			<?php if($image_4) : ?>
				<div class="gridItem2" style="background-image: url(<?php echo $image_4; ?>)"></div>
			<?php endif ?>
		</div>
		<div>
			<!--3rd grid item-->
			<div class="gridItem" style="background-image: url(<?php echo $image_5; ?>); <?php if($image_6) : ?>height:50%;<?php endif ?>"></div>
			<?php if($image_6) : ?>
				<div class="gridItem2" style="background-image: url(<?php echo $image_6; ?>)"></div>
			<?php endif ?>
		</div>
		<div>
			<!--4th grid item-->
			<div class="gridItem" style="background-image: url(<?php echo $image_7; ?>); <?php if($image_8) : ?>height:50%;<?php endif ?>"></div>
			<?php if($image_8) : ?>
				<div class="gridItem2" style="background-image: url(<?php echo $image_8; ?>)"></div>
			<?php endif ?>
		</div>
	</div>

</div>

<style>
	@media only screen and (max-width: 768px){
		.pictureCollectionGrid div:nth-of-type(1){
			grid-column: 1 / span <?php echo $grid_layout_mobile_2; ?>;
		}

		.pictureCollectionGrid div:nth-of-type(2){
			<?php switch($grid_layout_mobile_2){
				case 1 :?> grid-column: 2 / span 4; <?php
				break;
				case 2 : ?> grid-column: 3 / span 2; <?php
				break;
				case 3: ?> grid-column: 4 / span 1; <?php
				break;
			}
			?>
		}

		.pictureCollectionGrid div:nth-of-type(3){
			grid-column: 1 / span <?php echo $grid_layout_mobile_1; ?>;
		}

		.pictureCollectionGrid div:nth-of-type(4){
			<?php switch($grid_layout_mobile_1){
				case 1 :?> grid-column: 2 / span 4; <?php
				break;
				case 2 : ?> grid-column: 3 / span 2; <?php
				break;
				case 3: ?> grid-column: 4 / span 1; <?php
				break;
			}
			?>
		}
</style>