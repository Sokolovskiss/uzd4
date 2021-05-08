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
$id = 'imageAndTextSideBySide-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'imageAndTextSideBySide';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$text = get_field( 'text' ); 
$image = get_field( 'image' );
$gridLayout = get_field( 'grid_layout' );
$column_size = get_field( 'column_size' );
 ?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="imageAndTextGrid" style="grid-template-columns: <?php echo $column_size; ?>">
		<?php if($gridLayout == 0) : ?>
				<div class="leftColumnImgText"><img src="<?php echo $image; ?>" alt="Text image"></div>
				<div class="rightColumnImgText"><p><?php echo $text; ?></p></div>
			<?php else : ?>
					<div class="leftColumnImgText"><p class="visibleText"><?php echo $text; ?></p><img class="hiddenImage" src="<?php echo $image; ?>" alt="Text image"></div>
					<div class="rightColumnImgText"><p class="hiddenText"><?php echo $text; ?></p><img class="visibleImage" src="<?php echo $image; ?>" alt="Text image"></div>
				<?php endif ?>
	</div>
</div>