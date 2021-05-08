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
$id = 'columns-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'columns';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}
$column_id = get_field( 'id' ); 
$image_1 = get_field( 'image_1' ); 
$image_2 = get_field( 'image_2' );
$image_size = get_field( 'image_size' );
$image_size_mobile = get_field( 'image_size_mobile' ); 
$title_1 = get_field( 'title_1' ); 
$title_2 = get_field( 'title_2' ); 
$text_1 = get_field( 'text_1' ); 
$text_2 = get_field( 'text_2' ); 
$button_text_1 = get_field( 'button_text_1' ); 
$button_text_2 = get_field( 'button_text_2' );
$text_size = get_field( 'text_size' );
$text_size_mobile = get_field( 'text_size_mobile' );
$title_size = get_field( 'title_size' );
$line_height = get_field( 'text_line_height' );
$line_height_mobile = get_field( 'text_line_height_mobile' );
$image_top = get_field( 'image_margin_top' );
$image_bottom = get_field( 'image_margin_bottom' );
$image_top_mobile = get_field( 'image_margin_top_mobile' );
$image_bottom_mobile = get_field( 'image_margin_bottom_mobile' );
$title_top = get_field( 'title_margin_top' );
$title_top_mobile = get_field( 'title_margin_top_mobile' );
$title_bottom = get_field( 'title_margin_bottom' );
$title_bottom_mobile = get_field( 'title_margin_bottom_mobile' );
$text_top = get_field( 'text_margin_top' );
$text_top_mobile = get_field( 'text_margin_top_mobile' );
$text_bottom = get_field( 'text_margin_bottom' );
$text_bottom_mobile = get_field( 'text_margin_bottom_mobile' );
$but_bottom_mobile = get_field( 'button_margin_bottom_mobile' );
$column_space_mobile = get_field( 'space_between_columns_mobile' );
?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="twoColumnsGrid <?php echo $column_id;?>">
		<div>
			<?php if($image_1) : ?>
				<img src="<?php echo $image_1; ?>" alt="Picture 1" style="max-width: <?php echo $image_size; ?>px;">
			<?php endif ?>
			<p class="titleColumn" style="font-size: <?php echo $title_size; ?>px;"><?php echo $title_1; ?></p>
			<p class="textColumn" style="font-size: <?php echo $text_size ?>px; line-height: <?php echo $line_height ?>px"><?php echo $text_1; ?></p>
			<?php if($button_text_1) : ?>
				<button class="buttonColumn"><?php echo $button_text_1; ?></button>
			<?php endif ?>
		</div>
		<div class="twoColumnsGridItem_2">
			<?php if($image_2) : ?>
				<img class="image_2_column" src="<?php echo $image_2; ?>" alt="Picture 2" style="max-width: <?php echo $image_size; ?>px;">
			<?php endif ?>
			<p class="titleColumn" style="font-size: <?php echo $title_size; ?>px;"><?php echo $title_2; ?></p>
			<p class="textColumn  text_2_column" style="font-size: <?php echo $text_size ?>px; line-height: <?php echo $line_height ?>px"><?php echo $text_2; ?></p>
			<?php if($button_text_2) : ?>
				<button class="buttonColumn"><?php echo $button_text_2; ?></button>
			<?php endif ?>
		</div>

	</div>

</div>

<style>
	<?php echo '.'.$column_id;?> img, <?php echo '.'.$column_id;?> img{
		margin-top: <?php echo $image_top;?>px !important;
		margin-bottom: <?php echo $image_bottom;?>px !important;
	}
	<?php echo '.'.$column_id;?> .titleColumn{
		margin-top: <?php echo $title_top;?>px !important;
		margin-bottom: <?php echo $title_bottom;?>px !important;
	}
	<?php echo '.'.$column_id;?> .textColumn{
		margin-top: <?php echo $text_top;?>px !important;
		margin-bottom: <?php echo $text_bottom;?>px !important;
	}



	@media only screen and (max-width: 768px){
		<?php echo '.'.$column_id;?> img, <?php echo '.'.$column_id;?> img{
			margin-top: <?php echo $image_top_mobile;?>px !important;
			margin-bottom: <?php echo $image_bottom_mobile;?>px !important;
			max-width: <?php echo $image_size_mobile;?>px !important;
		}

		<?php echo '.'.$column_id;?> .titleColumn{
			margin-top: <?php echo $title_top_mobile;?>px !important;
			margin-bottom: <?php echo $title_bottom_mobile;?>px !important;
		}

		<?php echo '.'.$column_id;?> .textColumn{
			margin-top: <?php echo $text_top_mobile;?>px !important;
			margin-bottom: <?php echo $text_bottom_mobile;?>px !important;
			font-size: <?php echo $text_size_mobile;?>px !important;
			line-height: <?php echo $line_height_mobile;?>px !important;
		}

		<?php echo '.'.$column_id;?> .buttonColumn{
			margin-bottom: <?php echo $but_bottom_mobile;?>px !important;
		}

		<?php echo '.'.$column_id;?> .twoColumnsGridItem_2{
			margin-top: <?php echo $column_space_mobile;?>px !important;
		}
	}

</style>