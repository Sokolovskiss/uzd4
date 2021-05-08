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
$id = 'submitForm-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'submitForm';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field( 'title' );

 ?>

<div class="<?php echo esc_attr($classname); ?>">	
	<p class="formTitle"><?php echo $title?></p>
	<form name="contact">
		<div class="topInputFieldsGrid">
			<div></div>
			<div><input type="text" placeholder="Vārds, Uzvārds*" maxlength="26" name="userName"></div>
			<div></div>
			<div class="emptyGridItem"></div>
			<div><input id="emailField" type="text" placeholder="E-pasts*" maxlength="35" name="email"></div>
			<div></div>
		</div>
		<div class="bottomInputFieldsGrid">

			<?php if(get_field( 'business') == 1) : ?>
			<div></div>
			<div><input type="text" placeholder="Uzņēmuma nosaukums*" maxlength="20" name="business"></div>
			<div></div>
			<?php endif ?>

			<div></div>
			<div><input type="text" placeholder="Telefons*" maxlength="8" name="phone"></div>
			<div></div>

			<div></div>
			<div><textarea placeholder="Jautājums, vai komentārs*" maxlength="450"></textarea></div>
			<div></div>

			<div></div>
			<div>
				<p id="titleInfoSubmitted">Paldies, ka sapņo!</p>
				<p id="textInfoSubmitted">Ja Tavs sapnis tiks izvēlēts, mēs ar Tevi sazināsimies.</p>
			</div>
			<div></div>

			<div></div>
			<div><p id="formRequiredText">*obligāti aizpildāmie lauki</p></div>
			<div></div>

			<div></div>
			<div id="formCheckboxGrid">
				<div>
					<label class="customCheckbox">
						<input type="checkbox" name="cb">
						<span class="checkmark"></span>
					</label>
				</div>
				<div>
					<p class="checkboxText">Piektrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz bīdim, kamēr tas būs nepieciešams.</p>
				</div>
			</div>
			<div></div>

			<div></div>
			<div><input id="formButton" type="button" value="Sūtīt" onclick="submitInfo();"></div>
			<div></div>
		</div>
	</form>
</div>