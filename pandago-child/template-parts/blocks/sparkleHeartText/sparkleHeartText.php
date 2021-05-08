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
$id = 'sparkleHeartText-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sparkleHeartText';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}
$text_ID = get_field( 'id' );
$text = get_field( 'text' );
$font_size = get_field( 'font_size' );
$font_size_mobile = get_field( 'font_size_mobile' );
$line_height = get_field( 'line_height' );
$line_height_mobile = get_field( 'line_height_mobile' );
$margin_top = get_field( 'margin_top' );
$margin_bottom = get_field( 'margin_bottom' );
$margin_top_mobile = get_field( 'margin_top_mobile' );
$margin_bottom_mobile = get_field( 'margin_bottom_mobile' );
$font_weight = get_field( 'font_weight' );
$font_style = get_field( 'font_style' );
?>

<div class="<?php echo esc_attr($classname); ?>">	
	<p class="<?php echo $text_ID;?>"><?php echo $text;?></p>

</div>

<style>
	<?php echo '.'.$text_ID;?>{
		font-size: <?php echo $font_size;?>px;
		line-height: <?php echo $line_height;?>px;
		margin-top: <?php echo $margin_top;?>px;
		margin-bottom: <?php echo $margin_bottom;?>px;
		font-weight: <?php echo $font_weight;?>px;
		<?php if($font_style == 1 ) : ?>
			font-family: 'Oswald', sans-serif;
		<?php endif ?>
	}

	@media only screen and (max-width: 768px){
		<?php echo '.'.$text_ID;?>{
			font-size: <?php echo $font_size_mobile;?>px;
			line-height: <?php echo $line_height_mobile;?>px;
			margin-top: <?php echo $margin_top_mobile;?>px;
			margin-bottom: <?php echo $margin_bottom_mobile;?>px;
		}
	}

</style>