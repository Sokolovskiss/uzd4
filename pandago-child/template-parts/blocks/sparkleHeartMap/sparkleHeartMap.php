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
$id = 'sparkleHeartMap-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sparkleHeartMap';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
} ?>
<div class="<?php echo esc_attr($classname); ?>">
	<div class="shMap">
		<div id="dropdownBoxGrid" class="dropdownBoxGrid">
			<div></div>
			<div class="dropdownBoxItem">
				<p>Uzņēmuma atrašanās vieta</p>
				<div><div class="testp">				
					<select class="selectpicker" id="location" title="Izvēlies" onchange="updateMap();">
						<option value="Riga">Rīga</option>
						<option value="Jelgava">Jelgava</option>
						<option value="Ogre">Ogre</option>
					</select>
				</div>
				</div>
			</div>
			<div class="dropdownBoxItem">
				<p>Uzņēmuma veids</p>
				<div>
					<select class="selectpicker" id="activity" title="Izvēlies" onchange="updateMarkers();">
						<option value="food">Ēdināšana</option>
						<option value="washing">Mazgāšana</option>
					</select>
				</div>
			</div>
			<div></div>
		</div>
		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>PURCH restaurant</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 25425254<br>Dzelzavas iela 51A</p></div></div>
			<div></div>
		</div>

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/KURTS1.jpg" alt="Purch"></div>
			<div><h6>Kurts coffee</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 23202079<br>Cēsu iela 20, Tērbatas iela 2i</p></div></div>
			<div></div>
		</div>

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>Placeholder</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 88888888<br>Lielā iela 21</p></div></div>
			<div></div>
		</div>  

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>Placeholder_2</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 88888888<br>Lielā iela 21</p></div></div>
			<div></div>
		</div>

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>Placeholder_3</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 88888888<br>Lielā iela 21</p></div></div>
			<div></div>
		</div>

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>Placeholder_4</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 88888888<br>Mazā iela 21</p></div></div>
			<div></div>
		</div>

		<div class="selectedItemsGrid">
			<div></div>
			<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/purch.jpg" alt="Logo"></div>
			<div><h6>Placeholder_5</h6></div>
			<div><div class="selectedItemsGridWrapper"><p>+371 88888888<br>Mazā iela 21</p></div></div>
			<div></div>
		</div>
		<div class="mapWrapper">
			<div id="map"></div>
			<div class="blueRippedEffect"></div>
		</div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpHcD1hOJ5vv-caWFNqcmhC5G_baWKXMw&callback=initMap&libraries=&v=weekly" async></script>
	</div>
</div>