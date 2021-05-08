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
$id = 'imageGallery-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'imageGallery';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

$bg = get_field( 'background' );
$play_but = get_field( 'play_button' );
$image_1 = get_field( 'image_1' ); $text_1 = get_field( 'text_1' ); $video_1 = get_field( 'video_1' );
$image_2 = get_field( 'image_2' ); $text_2 = get_field( 'text_2' ); $video_2 = get_field( 'video_2' );
$image_3 = get_field( 'image_3' ); $text_3 = get_field( 'text_3' ); $video_3 = get_field( 'video_3' );
$image_4 = get_field( 'image_4' ); $text_4 = get_field( 'text_4' ); $video_4 = get_field( 'video_4' );
$image_5 = get_field( 'image_5' ); $text_5 = get_field( 'text_5' ); $video_5 = get_field( 'video_5' );
$image_6 = get_field( 'image_6' ); $text_6 = get_field( 'text_6' ); $video_6 = get_field( 'video_6' );
$image_7 = get_field( 'image_7' ); $text_7 = get_field( 'text_7' ); $video_7 = get_field( 'video_7' );
$image_8 = get_field( 'image_8' ); $text_8 = get_field( 'text_8' ); $video_8 = get_field( 'video_8' );
$image_9 = get_field( 'image_9' ); $text_9 = get_field( 'text_9' ); $video_9 = get_field( 'video_9' );
$image_10 = get_field( 'image_10' ); $text_10 = get_field( 'text_10' ); $video_10 = get_field( 'video_10' );
$image_11 = get_field( 'image_11' ); $text_11 = get_field( 'text_11' ); $video_11 = get_field( 'video_11' );
$image_12 = get_field( 'image_12' ); $text_12 = get_field( 'text_12' ); $video_12 = get_field( 'video_12' );
$image_13 = get_field( 'image_13' ); $text_13 = get_field( 'text_13' ); $video_13 = get_field( 'video_13' );
$image_14 = get_field( 'image_14' ); $text_14 = get_field( 'text_14' ); $video_14 = get_field( 'video_14' );
$image_15 = get_field( 'image_15' ); $text_15 = get_field( 'text_15' ); $video_15 = get_field( 'video_15' );
$image_16 = get_field( 'image_16' ); $text_16 = get_field( 'text_16' ); $video_16 = get_field( 'video_16' );
$image_17 = get_field( 'image_17' ); $text_17 = get_field( 'text_17' ); $video_17 = get_field( 'video_17' );
$image_18 = get_field( 'image_18' ); $text_18 = get_field( 'text_18' ); $video_18 = get_field( 'video_18' );
?>

<div class="<?php echo esc_attr($classname); ?>">	
	<div class="galleryGrid">
		<div class="emptyGridElement"></div>
		<div><?php if($video_1) : ?><a href="#pic_1" class="fancybox"><?php endif?><?php if($image_1) :?><img class="gridImage" src="<?php echo $image_1; ?>" alt="<?php echo getAlt($image_1)?>"><?php elseif($text_1) : ?><p class="imgText"><?php echo $text_1; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">1</p></a></div>
		<div style='display: none'><div id="pic_1"><div class='galleryVidWrapper'><img id='galPlayBut1' src="<?php echo $play_but; ?>" onclick="playVid('vid_1', 'galPlayBut1')";><video id="vid_1" src="<?php echo $video_1;?>"></video></div></div></div>

		<div><?php if($video_2) : ?><a href="#pic_2" class="fancybox"><?php endif?><?php if($image_2) :?><img class="gridImage" src="<?php echo $image_2; ?>" alt="<?php echo getAlt($image_2)?>"><?php elseif($text_2) : ?><p class="imgText"><?php echo $text_2; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">2</p></a></div>
		<div style='display: none'><div id="pic_2"><div class='galleryVidWrapper'><img id='galPlayBut2' src="<?php echo $play_but; ?>" onclick="playVid('vid_2', 'galPlayBut2')";><video id="vid_2" src="<?php echo $video_2;?>"></video></div></div></div>

		<div><?php if($video_3) : ?><a href="#pic_3" class="fancybox"><?php endif?><?php if($image_3) :?><img class="gridImage" src="<?php echo $image_3; ?>" alt="<?php echo getAlt($image_3)?>"><?php elseif($text_3) : ?><p class="imgText"><?php echo $text_3; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">3</p></a></div>
		<div style='display: none'><div id="pic_3"><div class='galleryVidWrapper'><img id='galPlayBut3' src="<?php echo $play_but; ?>" onclick="playVid('vid_3', 'galPlayBut3')";><video id="vid_3" src="<?php echo $video_3;?>"></video></div></div></div>

		<div><?php if($video_4) : ?><a href="#pic_4" class="fancybox"><?php endif?><?php if($image_4) :?><img class="gridImage" src="<?php echo $image_4; ?>" alt="<?php echo getAlt($image_4)?>"><?php elseif($text_4) : ?><p class="imgText"><?php echo $text_4; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">4</p></a></div>
		<div style='display: none'><div id="pic_4"><div class='galleryVidWrapper'><img id='galPlayBut4' src="<?php echo $play_but; ?>" onclick="playVid('vid_4', 'galPlayBut4')";><video id="vid_4" src="<?php echo $video_4;?>"></video></div></div></div>

		<div><?php if($video_5) : ?><a href="#pic_5" class="fancybox"><?php endif?><?php if($image_5) :?><img class="gridImage" src="<?php echo $image_5; ?>" alt="<?php echo getAlt($image_5)?>"><?php elseif($text_5) : ?><p class="imgText"><?php echo $text_5; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">5</p></a></div>
		<div style='display: none'><div id="pic_5"><div class='galleryVidWrapper'><img id='galPlayBut5' src="<?php echo $play_but; ?>" onclick="playVid('vid_5', 'galPlayBut5')";><video id="vid_3" src="<?php echo $video_5;?>"></video></div></div></div>

		<div><?php if($video_6) : ?><a href="#pic_6" class="fancybox"><?php endif?><?php if($image_6) :?><img class="gridImage" src="<?php echo $image_6; ?>" alt="<?php echo getAlt($image_6)?>"><?php elseif($text_6) : ?><p class="imgText"><?php echo $text_6; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">6</p></a></div>
		<div style='display: none'><div id="pic_6"><div class='galleryVidWrapper'><img id='galPlayBut6' src="<?php echo $play_but; ?>" onclick="playVid('vid_6', 'galPlayBut6')";><video id="vid_4" src="<?php echo $video_6;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div><?php if($video_7) : ?><a href="#pic_7" class="fancybox"><?php endif?><?php if($image_7) :?><img class="gridImage" src="<?php echo $image_7; ?>" alt="<?php echo getAlt($image_7)?>"><?php elseif($text_7) : ?><p class="imgText"><?php echo $text_7; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">7</p></a></div>
		<div style='display: none'><div id="pic_7"><div class='galleryVidWrapper'><img id='galPlayBut7' src="<?php echo $play_but; ?>" onclick="playVid('vid_7', 'galPlayBut7')";><video id="vid_7" src="<?php echo $video_7;?>"></video></div></div></div>

		<div><?php if($video_8) : ?><a href="#pic_8" class="fancybox"><?php endif?><?php if($image_8) :?><img class="gridImage" src="<?php echo $image_8; ?>" alt="<?php echo getAlt($image_8)?>"><?php elseif($text_8) : ?><p class="imgText"><?php echo $text_8; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">8</p></a></div>
		<div style='display: none'><div id="pic_8"><div class='galleryVidWrapper'><img id='galPlayBut8' src="<?php echo $play_but; ?>" onclick="playVid('vid_8', 'galPlayBut8')";><video id="vid_8" src="<?php echo $video_8;?>"></video></div></div></div>

		<div><?php if($video_9) : ?><a href="#pic_9" class="fancybox"><?php endif?><?php if($image_9) :?><img class="gridImage" src="<?php echo $image_9; ?>" alt="<?php echo getAlt($image_9)?>"><?php elseif($text_9) : ?><p class="imgText"><?php echo $text_9; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">9</p></a></div>
		<div style='display: none'><div id="pic_9"><div class='galleryVidWrapper'><img id='galPlayBut9' src="<?php echo $play_but; ?>" onclick="playVid('vid_9', 'galPlayBut9')";><video id="vid_9" src="<?php echo $video_9;?>"></video></div></div></div>

		<div><?php if($video_10) : ?><a href="#pic_10" class="fancybox"><?php endif?><?php if($image_10) :?><img class="gridImage" src="<?php echo $image_10; ?>" alt="<?php echo getAlt($image_10)?>"><?php elseif($text_10) : ?><p class="imgText"><?php echo $text_10; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">10</p></a></div>
		<div style='display: none'><div id="pic_10"><div class='galleryVidWrapper'><img id='galPlayBut10' src="<?php echo $play_but; ?>" onclick="playVid('vid_10', 'galPlayBut10')";><video id="vid_10" src="<?php echo $video_10;?>"></video></div></div></div>

		<div><?php if($video_11) : ?><a href="#pic_11" class="fancybox"><?php endif?><?php if($image_11) :?><img class="gridImage" src="<?php echo $image_11; ?>" alt="<?php echo getAlt($image_11)?>"><?php elseif($text_11) : ?><p class="imgText"><?php echo $text_11; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">11</p></a></div>
		<div style='display: none'><div id="pic_11"><div class='galleryVidWrapper'><img id='galPlayBut11' src="<?php echo $play_but; ?>" onclick="playVid('vid_11', 'galPlayBut11')";><video id="vid_11" src="<?php echo $video_11;?>"></video></div></div></div>

		<div><?php if($video_12) : ?><a href="#pic_12" class="fancybox"><?php endif?><?php if($image_12) :?><img class="gridImage" src="<?php echo $image_12; ?>" alt="<?php echo getAlt($image_12)?>"><?php elseif($text_12) : ?><p class="imgText"><?php echo $text_12; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">12</p></a></div>
		<div style='display: none'><div id="pic_12"><div class='galleryVidWrapper'><img id='galPlayBut12' src="<?php echo $play_but; ?>" onclick="playVid('vid_12', 'galPlayBut12')";><video id="vid_12" src="<?php echo $video_12;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div><?php if($video_13) : ?><a href="#pic_13" class="fancybox"><?php endif?><?php if($image_13) :?><img class="gridImage" src="<?php echo $image_13; ?>" alt="<?php echo getAlt($image_13)?>"><?php elseif($text_13) : ?><p class="imgText"><?php echo $text_13; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">13</p></a></div>
		<div style='display: none'><div id="pic_13"><div class='galleryVidWrapper'><img id='galPlayBut13' src="<?php echo $play_but; ?>" onclick="playVid('vid_13', 'galPlayBut13')";><video id="vid_13" src="<?php echo $video_13;?>"></video></div></div></div>

		<div><?php if($video_14) : ?><a href="#pic_14" class="fancybox"><?php endif?><?php if($image_14) :?><img class="gridImage" src="<?php echo $image_14; ?>" alt="<?php echo getAlt($image_14)?>"><?php elseif($text_14) : ?><p class="imgText"><?php echo $text_14; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">14</p></a></div>
		<div style='display: none'><div id="pic_14"><div class='galleryVidWrapper'><img id='galPlayBut14' src="<?php echo $play_but; ?>" onclick="playVid('vid_14', 'galPlayBut14')";><video id="vid_14" src="<?php echo $video_14;?>"></video></div></div></div>

		<div><?php if($video_15) : ?><a href="#pic_15" class="fancybox"><?php endif?><?php if($image_15) :?><img class="gridImage" src="<?php echo $image_15; ?>" alt="<?php echo getAlt($image_15)?>"><?php elseif($text_15) : ?><p class="imgText"><?php echo $text_15; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">15</p></a></div>
		<div style='display: none'><div id="pic_15"><div class='galleryVidWrapper'><img id='galPlayBut15' src="<?php echo $play_but; ?>" onclick="playVid('vid_15', 'galPlayBut15')";><video id="vid_15" src="<?php echo $video_15;?>"></video></div></div></div>

		<div><?php if($video_16) : ?><a href="#pic_16" class="fancybox"><?php endif?><?php if($image_16) :?><img class="gridImage" src="<?php echo $image_16; ?>" alt="<?php echo getAlt($image_16)?>"><?php elseif($text_16) : ?><p class="imgText"><?php echo $text_16; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">16</p></a></div>
		<div style='display: none'><div id="pic_16"><div class='galleryVidWrapper'><img id='galPlayBut16' src="<?php echo $play_but; ?>" onclick="playVid('vid_16', 'galPlayBut16')";><video id="vid_16" src="<?php echo $video_16;?>"></video></div></div></div>

		<div><?php if($video_17) : ?><a href="#pic_17" class="fancybox"><?php endif?><?php if($image_17) :?><img class="gridImage" src="<?php echo $image_17; ?>" alt="<?php echo getAlt($image_17)?>"><?php elseif($text_17) : ?><p class="imgText"><?php echo $text_17; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">17</p></a></div>
		<div style='display: none'><div id="pic_17"><div class='galleryVidWrapper'><img id='galPlayBut17' src="<?php echo $play_but; ?>" onclick="playVid('vid_17', 'galPlayBut17')";><video id="vid_17" src="<?php echo $video_17;?>"></video></div></div></div>

		<div><?php if($video_18) : ?><a href="#pic_18" class="fancybox"><?php endif?><?php if($image_18) :?><img class="gridImage" src="<?php echo $image_18; ?>" alt="<?php echo getAlt($image_18)?>"><?php elseif($text_18) : ?><p class="imgText"><?php echo $text_18; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">18</p></a></div>
		<div style='display: none'><div id="pic_18"><div class='galleryVidWrapper'><img id='galPlayBut18' src="<?php echo $play_but; ?>" onclick="playVid('vid_18', 'galPlayBut18')";><video id="vid_18" src="<?php echo $video_18;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div><?php if($video_19) : ?><a href="#pic_19" class="fancybox"><?php endif?><?php if($image_19) :?><img class="gridImage" src="<?php echo $image_19; ?>" alt="<?php echo getAlt($image_19)?>"><?php elseif($text_19) : ?><p class="imgText"><?php echo $text_19; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">19</p></a></div>
		<div style='display: none'><div id="pic_19"><div class='galleryVidWrapper'><img id='galPlayBut19' src="<?php echo $play_but; ?>" onclick="playVid('vid_19', 'galPlayBut19')";><video id="vid_19" src="<?php echo $video_13;?>"></video></div></div></div>

		<div><?php if($video_20) : ?><a href="#pic_20" class="fancybox"><?php endif?><?php if($image_20) :?><img class="gridImage" src="<?php echo $image_20; ?>" alt="<?php echo getAlt($image_20)?>"><?php elseif($text_20) : ?><p class="imgText"><?php echo $text_20; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">20</p></a></div>
		<div style='display: none'><div id="pic_20"><div class='galleryVidWrapper'><img id='galPlayBut20' src="<?php echo $play_but; ?>" onclick="playVid('vid_20', 'galPlayBut20')";><video id="vid_20" src="<?php echo $video_14;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_21) : ?><a href="#pic_21" class="fancybox"><?php endif?><?php if($image_21) :?><img class="gridImage" src="<?php echo $image_21; ?>" alt="<?php echo getAlt($image_21)?>"><?php elseif($text_21) : ?><p class="imgText"><?php echo $text_21; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">21</p></a></div>
		<div style='display: none'><div id="pic_21"><div class='galleryVidWrapper'><img id='galPlayBut21' src="<?php echo $play_but; ?>" onclick="playVid('vid_21', 'galPlayBut21')";><video id="vid_21" src="<?php echo $video_15;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_22) : ?><a href="#pic_22" class="fancybox"><?php endif?><?php if($image_22) :?><img class="gridImage" src="<?php echo $image_22; ?>" alt="<?php echo getAlt($image_22)?>"><?php elseif($text_22) : ?><p class="imgText"><?php echo $text_22; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">22</p></a></div>
		<div style='display: none'><div id="pic_22"><div class='galleryVidWrapper'><img id='galPlayBut22' src="<?php echo $play_but; ?>" onclick="playVid('vid_22', 'galPlayBut22')";><video id="vid_22" src="<?php echo $video_16;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_23) : ?><a href="#pic_23" class="fancybox"><?php endif?><?php if($image_23) :?><img class="gridImage" src="<?php echo $image_23; ?>" alt="<?php echo getAlt($image_23)?>"><?php elseif($text_23) : ?><p class="imgText"><?php echo $text_23; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">23</p></a></div>
		<div style='display: none'><div id="pic_23"><div class='galleryVidWrapper'><img id='galPlayBut23' src="<?php echo $play_but; ?>" onclick="playVid('vid_23', 'galPlayBut23')";><video id="vid_23" src="<?php echo $video_17;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_24) : ?><a href="#pic_24" class="fancybox"><?php endif?><?php if($image_24) :?><img class="gridImage" src="<?php echo $image_24; ?>" alt="<?php echo getAlt($image_24)?>"><?php elseif($text_24) : ?><p class="imgText"><?php echo $text_24; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">24</p></a></div>
		<div style='display: none'><div id="pic_24"><div class='galleryVidWrapper'><img id='galPlayBut24' src="<?php echo $play_but; ?>" onclick="playVid('vid_24', 'galPlayBut24')";><video id="vid_24" src="<?php echo $video_18;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>


		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_25) : ?><a href="#pic_25" class="fancybox"><?php endif?><?php if($image_25) :?><img class="gridImage" src="<?php echo $image_25; ?>" alt="<?php echo getAlt($image_25)?>"><?php elseif($text_25) : ?><p class="imgText"><?php echo $text_25; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">25</p></a></div>
		<div style='display: none'><div id="pic_25"><div class='galleryVidWrapper'><img id='galPlayBut25' src="<?php echo $play_but; ?>" onclick="playVid('vid_25', 'galPlayBut25')";><video id="vid_25" src="<?php echo $video_25;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_26) : ?><a href="#pic_26" class="fancybox"><?php endif?><?php if($image_26) :?><img class="gridImage" src="<?php echo $image_26; ?>" alt="<?php echo getAlt($image_26)?>"><?php elseif($text_26) : ?><p class="imgText"><?php echo $text_26; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">26</p></a></div>
		<div style='display: none'><div id="pic_26"><div class='galleryVidWrapper'><img id='galPlayBut26' src="<?php echo $play_but; ?>" onclick="playVid('vid_26', 'galPlayBut26')";><video id="vid_26" src="<?php echo $video_26;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_27) : ?><a href="#pic_27" class="fancybox"><?php endif?><?php if($image_27) :?><img class="gridImage" src="<?php echo $image_27; ?>" alt="<?php echo getAlt($image_27)?>"><?php elseif($text_27) : ?><p class="imgText"><?php echo $text_27; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">27</p></a></div>
		<div style='display: none'><div id="pic_27"><div class='galleryVidWrapper'><img id='galPlayBut27' src="<?php echo $play_but; ?>" onclick="playVid('vid_27', 'galPlayBut27')";><video id="vid_27" src="<?php echo $video_27;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_28) : ?><a href="#pic_28" class="fancybox"><?php endif?><?php if($image_28) :?><img class="gridImage" src="<?php echo $image_28; ?>" alt="<?php echo getAlt($image_28)?>"><?php elseif($text_28) : ?><p class="imgText"><?php echo $text_28; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">28</p></a></div>
		<div style='display: none'><div id="pic_28"><div class='galleryVidWrapper'><img id='galPlayBut28' src="<?php echo $play_but; ?>" onclick="playVid('vid_28', 'galPlayBut28')";><video id="vid_28" src="<?php echo $video_28;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_29) : ?><a href="#pic_29" class="fancybox"><?php endif?><?php if($image_29) :?><img class="gridImage" src="<?php echo $image_29; ?>" alt="<?php echo getAlt($image_29)?>"><?php elseif($text_29) : ?><p class="imgText"><?php echo $text_29; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">29</p></a></div>
		<div style='display: none'><div id="pic_29"><div class='galleryVidWrapper'><img id='galPlayBut29' src="<?php echo $play_but; ?>" onclick="playVid('vid_29', 'galPlayBut29')";><video id="vid_29" src="<?php echo $video_29;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_30) : ?><a href="#pic_30" class="fancybox"><?php endif?><?php if($image_30) :?><img class="gridImage" src="<?php echo $image_30; ?>" alt="<?php echo getAlt($image_30)?>"><?php elseif($text_30) : ?><p class="imgText"><?php echo $text_30; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">30</p></a></div>
		<div style='display: none'><div id="pic_30"><div class='galleryVidWrapper'><img id='galPlayBut30' src="<?php echo $play_but; ?>" onclick="playVid('vid_30', 'galPlayBut30')";><video id="vid_30" src="<?php echo $video_30;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_31) : ?><a href="#pic_31" class="fancybox"><?php endif?><?php if($image_31) :?><img class="gridImage" src="<?php echo $image_31; ?>" alt="<?php echo getAlt($image_31)?>"><?php elseif($text_31) : ?><p class="imgText"><?php echo $text_31; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">31</p></a></div>
		<div style='display: none'><div id="pic_31"><div class='galleryVidWrapper'><img id='galPlayBut31' src="<?php echo $play_but; ?>" onclick="playVid('vid_31', 'galPlayBut31')";><video id="vid_31" src="<?php echo $video_31;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_32) : ?><a href="#pic_32" class="fancybox"><?php endif?><?php if($image_32) :?><img class="gridImage" src="<?php echo $image_32; ?>" alt="<?php echo getAlt($image_32)?>"><?php elseif($text_32) : ?><p class="imgText"><?php echo $text_32; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">32</p></a></div>
		<div style='display: none'><div id="pic_32"><div class='galleryVidWrapper'><img id='galPlayBut32' src="<?php echo $play_but; ?>" onclick="playVid('vid_32', 'galPlayBut32')";><video id="vid_32" src="<?php echo $video_32;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_33) : ?><a href="#pic_33" class="fancybox"><?php endif?><?php if($image_33) :?><img class="gridImage" src="<?php echo $image_33; ?>" alt="<?php echo getAlt($image_33)?>"><?php elseif($text_33) : ?><p class="imgText"><?php echo $text_33; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">33</p></a></div>
		<div style='display: none'><div id="pic_33"><div class='galleryVidWrapper'><img id='galPlayBut33' src="<?php echo $play_but; ?>" onclick="playVid('vid_33', 'galPlayBut33')";><video id="vid_33" src="<?php echo $video_33;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_34) : ?><a href="#pic_34" class="fancybox"><?php endif?><?php if($image_34) :?><img class="gridImage" src="<?php echo $image_34; ?>" alt="<?php echo getAlt($image_34)?>"><?php elseif($text_34) : ?><p class="imgText"><?php echo $text_34; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">34</p></a></div>
		<div style='display: none'><div id="pic_34"><div class='galleryVidWrapper'><img id='galPlayBut34' src="<?php echo $play_but; ?>" onclick="playVid('vid_34', 'galPlayBut34')";><video id="vid_34" src="<?php echo $video_34;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_35) : ?><a href="#pic_35" class="fancybox"><?php endif?><?php if($image_35) :?><img class="gridImage" src="<?php echo $image_35; ?>" alt="<?php echo getAlt($image_35)?>"><?php elseif($text_35) : ?><p class="imgText"><?php echo $text_35; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">35</p></a></div>
		<div style='display: none'><div id="pic_35"><div class='galleryVidWrapper'><img id='galPlayBut35' src="<?php echo $play_but; ?>" onclick="playVid('vid_35', 'galPlayBut35')";><video id="vid_35" src="<?php echo $video_35;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_36) : ?><a href="#pic_36" class="fancybox"><?php endif?><?php if($image_36) :?><img class="gridImage" src="<?php echo $image_36; ?>" alt="<?php echo getAlt($image_36)?>"><?php elseif($text_36) : ?><p class="imgText"><?php echo $text_36; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">36</p></a></div>
		<div style='display: none'><div id="pic_36"><div class='galleryVidWrapper'><img id='galPlayBut36' src="<?php echo $play_but; ?>" onclick="playVid('vid_36', 'galPlayBut36')";><video id="vid_36" src="<?php echo $video_36;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_37) : ?><a href="#pic_37" class="fancybox"><?php endif?><?php if($image_37) :?><img class="gridImage" src="<?php echo $image_37; ?>" alt="<?php echo getAlt($image_37)?>"><?php elseif($text_37) : ?><p class="imgText"><?php echo $text_37; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">37</p></a></div>
		<div style='display: none'><div id="pic_37"><div class='galleryVidWrapper'><img id='galPlayBut37' src="<?php echo $play_but; ?>" onclick="playVid('vid_37', 'galPlayBut37')";><video id="vid_37" src="<?php echo $video_37;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_38) : ?><a href="#pic_38" class="fancybox"><?php endif?><?php if($image_38) :?><img class="gridImage" src="<?php echo $image_38; ?>" alt="<?php echo getAlt($image_38)?>"><?php elseif($text_38) : ?><p class="imgText"><?php echo $text_38; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">38</p></a></div>
		<div style='display: none'><div id="pic_38"><div class='galleryVidWrapper'><img id='galPlayBut38' src="<?php echo $play_but; ?>" onclick="playVid('vid_38', 'galPlayBut38')";><video id="vid_38" src="<?php echo $video_38;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_39) : ?><a href="#pic_39" class="fancybox"><?php endif?><?php if($image_39) :?><img class="gridImage" src="<?php echo $image_39; ?>" alt="<?php echo getAlt($image_39)?>"><?php elseif($text_39) : ?><p class="imgText"><?php echo $text_39; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">39</p></a></div>
		<div style='display: none'><div id="pic_39"><div class='galleryVidWrapper'><img id='galPlayBut39' src="<?php echo $play_but; ?>" onclick="playVid('vid_39', 'galPlayBut39')";><video id="vid_39" src="<?php echo $video_39?>"></video></div></div></div>

		<div class="hidden"><?php if($video_40) : ?><a href="#pic_40" class="fancybox"><?php endif?><?php if($image_40) :?><img class="gridImage" src="<?php echo $image_40; ?>" alt="<?php echo getAlt($image_40)?>"><?php elseif($text_40) : ?><p class="imgText"><?php echo $text_40; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">40</p></a></div>
		<div style='display: none'><div id="pic_40"><div class='galleryVidWrapper'><img id='galPlayBut40' src="<?php echo $play_but; ?>" onclick="playVid('vid_40', 'galPlayBut40')";><video id="vid_40" src="<?php echo $video_40;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_41) : ?><a href="#pic_41" class="fancybox"><?php endif?><?php if($image_41) :?><img class="gridImage" src="<?php echo $image_41; ?>" alt="<?php echo getAlt($image_41)?>"><?php elseif($text_41) : ?><p class="imgText"><?php echo $text_41; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">41</p></a></div>
		<div style='display: none'><div id="pic_41"><div class='galleryVidWrapper'><img id='galPlayBut41' src="<?php echo $play_but; ?>" onclick="playVid('vid_41', 'galPlayBut41')";><video id="vid_41" src="<?php echo $video_41;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_42) : ?><a href="#pic_42" class="fancybox"><?php endif?><?php if($image_42) :?><img class="gridImage" src="<?php echo $image_42; ?>" alt="<?php echo getAlt($image_42)?>"><?php elseif($text_42) : ?><p class="imgText"><?php echo $text_42; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">42</p></a></div>
		<div style='display: none'><div id="pic_42"><div class='galleryVidWrapper'><img id='galPlayBut42' src="<?php echo $play_but; ?>" onclick="playVid('vid_42', 'galPlayBut42')";><video id="vid_42" src="<?php echo $video_42;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_43) : ?><a href="#pic_43" class="fancybox"><?php endif?><?php if($image_43) :?><img class="gridImage" src="<?php echo $image_43; ?>" alt="<?php echo getAlt($image_43)?>"><?php elseif($text_43) : ?><p class="imgText"><?php echo $text_43; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">43</p></a></div>
		<div style='display: none'><div id="pic_43"><div class='galleryVidWrapper'><img id='galPlayBut43' src="<?php echo $play_but; ?>" onclick="playVid('vid_43', 'galPlayBut43')";><video id="vid_43" src="<?php echo $video_37;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_44) : ?><a href="#pic_44" class="fancybox"><?php endif?><?php if($image_44) :?><img class="gridImage" src="<?php echo $image_44; ?>" alt="<?php echo getAlt($image_44)?>"><?php elseif($text_44) : ?><p class="imgText"><?php echo $text_44; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">44</p></a></div>
		<div style='display: none'><div id="pic_44"><div class='galleryVidWrapper'><img id='galPlayBut44' src="<?php echo $play_but; ?>" onclick="playVid('vid_44', 'galPlayBut44')";><video id="vid_44" src="<?php echo $video_38;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_45) : ?><a href="#pic_45" class="fancybox"><?php endif?><?php if($image_45) :?><img class="gridImage" src="<?php echo $image_45; ?>" alt="<?php echo getAlt($image_45)?>"><?php elseif($text_45) : ?><p class="imgText"><?php echo $text_45; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">45</p></a></div>
		<div style='display: none'><div id="pic_45"><div class='galleryVidWrapper'><img id='galPlayBut45' src="<?php echo $play_but; ?>" onclick="playVid('vid_45', 'galPlayBut45')";><video id="vid_45" src="<?php echo $video_39?>"></video></div></div></div>

		<div class="hidden"><?php if($video_46) : ?><a href="#pic_46" class="fancybox"><?php endif?><?php if($image_46) :?><img class="gridImage" src="<?php echo $image_46; ?>" alt="<?php echo getAlt($image_46)?>"><?php elseif($text_46) : ?><p class="imgText"><?php echo $text_46; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">46</p></a></div>
		<div style='display: none'><div id="pic_46"><div class='galleryVidWrapper'><img id='galPlayBut46' src="<?php echo $play_but; ?>" onclick="playVid('vid_46', 'galPlayBut46')";><video id="vid_46" src="<?php echo $video_40;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_47) : ?><a href="#pic_47" class="fancybox"><?php endif?><?php if($image_47) :?><img class="gridImage" src="<?php echo $image_47; ?>" alt="<?php echo getAlt($image_47)?>"><?php elseif($text_47) : ?><p class="imgText"><?php echo $text_47; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">47</p></a></div>
		<div style='display: none'><div id="pic_47"><div class='galleryVidWrapper'><img id='galPlayBut47' src="<?php echo $play_but; ?>" onclick="playVid('vid_47', 'galPlayBut47')";><video id="vid_47" src="<?php echo $video_41;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_48) : ?><a href="#pic_48" class="fancybox"><?php endif?><?php if($image_48) :?><img class="gridImage" src="<?php echo $image_48; ?>" alt="<?php echo getAlt($image_48)?>"><?php elseif($text_48) : ?><p class="imgText"><?php echo $text_48; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">48</p></a></div>
		<div style='display: none'><div id="pic_48"><div class='galleryVidWrapper'><img id='galPlayBut48' src="<?php echo $play_but; ?>" onclick="playVid('vid_48', 'galPlayBut48')";><video id="vid_48" src="<?php echo $video_42;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_49) : ?><a href="#pic_49" class="fancybox"><?php endif?><?php if($image_49) :?><img class="gridImage" src="<?php echo $image_49; ?>" alt="<?php echo getAlt($image_49)?>"><?php elseif($text_49) : ?><p class="imgText"><?php echo $text_49; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">49</p></a></div>
		<div style='display: none'><div id="pic_49"><div class='galleryVidWrapper'><img id='galPlayBut49' src="<?php echo $play_but; ?>" onclick="playVid('vid_49', 'galPlayBut49')";><video id="vid_43" src="<?php echo $video_49;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_50) : ?><a href="#pic_50" class="fancybox"><?php endif?><?php if($image_50) :?><img class="gridImage" src="<?php echo $image_50; ?>" alt="<?php echo getAlt($image_50)?>"><?php elseif($text_50) : ?><p class="imgText"><?php echo $text_50; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">50</p></a></div>
		<div style='display: none'><div id="pic_50"><div class='galleryVidWrapper'><img id='galPlayBut50' src="<?php echo $play_but; ?>" onclick="playVid('vid_50', 'galPlayBut50')";><video id="vid_44" src="<?php echo $video_50;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_51) : ?><a href="#pic_51" class="fancybox"><?php endif?><?php if($image_51) :?><img class="gridImage" src="<?php echo $image_51; ?>" alt="<?php echo getAlt($image_51)?>"><?php elseif($text_51) : ?><p class="imgText"><?php echo $text_51; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">51</p></a></div>
		<div style='display: none'><div id="pic_51"><div class='galleryVidWrapper'><img id='galPlayBut51' src="<?php echo $play_but; ?>" onclick="playVid('vid_51', 'galPlayBut51')";><video id="vid_45" src="<?php echo $video_51?>"></video></div></div></div>

		<div class="hidden"><?php if($video_52) : ?><a href="#pic_52" class="fancybox"><?php endif?><?php if($image_52) :?><img class="gridImage" src="<?php echo $image_52; ?>" alt="<?php echo getAlt($image_52)?>"><?php elseif($text_52) : ?><p class="imgText"><?php echo $text_52; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">52</p></a></div>
		<div style='display: none'><div id="pic_52"><div class='galleryVidWrapper'><img id='galPlayBut52' src="<?php echo $play_but; ?>" onclick="playVid('vid_52', 'galPlayBut52')";><video id="vid_46" src="<?php echo $video_52;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_53) : ?><a href="#pic_53" class="fancybox"><?php endif?><?php if($image_53) :?><img class="gridImage" src="<?php echo $image_53; ?>" alt="<?php echo getAlt($image_53)?>"><?php elseif($text_53) : ?><p class="imgText"><?php echo $text_53; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">53</p></a></div>
		<div style='display: none'><div id="pic_53"><div class='galleryVidWrapper'><img id='galPlayBut53' src="<?php echo $play_but; ?>" onclick="playVid('vid_53', 'galPlayBut53')";><video id="vid_47" src="<?php echo $video_53;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_54) : ?><a href="#pic_54" class="fancybox"><?php endif?><?php if($image_54) :?><img class="gridImage" src="<?php echo $image_54; ?>" alt="<?php echo getAlt($image_54)?>"><?php elseif($text_54) : ?><p class="imgText"><?php echo $text_54; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">54</p></a></div>
		<div style='display: none'><div id="pic_54"><div class='galleryVidWrapper'><img id='galPlayBut54' src="<?php echo $play_but; ?>" onclick="playVid('vid_54', 'galPlayBut54')";><video id="vid_48" src="<?php echo $video_54;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_55) : ?><a href="#pic_55" class="fancybox"><?php endif?><?php if($image_55) :?><img class="gridImage" src="<?php echo $image_55; ?>" alt="<?php echo getAlt($image_55)?>"><?php elseif($text_55) : ?><p class="imgText"><?php echo $text_55; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">55</p></a></div>
		<div style='display: none'><div id="pic_55"><div class='galleryVidWrapper'><img id='galPlayBut55' src="<?php echo $play_but; ?>" onclick="playVid('vid_55', 'galPlayBut55')";><video id="vid_55" src="<?php echo $video_55;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_56) : ?><a href="#pic_56" class="fancybox"><?php endif?><?php if($image_56) :?><img class="gridImage" src="<?php echo $image_56; ?>" alt="<?php echo getAlt($image_56)?>"><?php elseif($text_56) : ?><p class="imgText"><?php echo $text_56; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">56</p></a></div>
		<div style='display: none'><div id="pic_56"><div class='galleryVidWrapper'><img id='galPlayBut56' src="<?php echo $play_but; ?>" onclick="playVid('vid_56', 'galPlayBut56')";><video id="vid_56" src="<?php echo $video_56;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_57) : ?><a href="#pic_57" class="fancybox"><?php endif?><?php if($image_57) :?><img class="gridImage" src="<?php echo $image_57; ?>" alt="<?php echo getAlt($image_57)?>"><?php elseif($text_57) : ?><p class="imgText"><?php echo $text_57; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">57</p></a></div>
		<div style='display: none'><div id="pic_57"><div class='galleryVidWrapper'><img id='galPlayBut57' src="<?php echo $play_but; ?>" onclick="playVid('vid_57', 'galPlayBut57')";><video id="vid_57" src="<?php echo $video_57?>"></video></div></div></div>

		<div class="hidden"><?php if($video_58) : ?><a href="#pic_58" class="fancybox"><?php endif?><?php if($image_58) :?><img class="gridImage" src="<?php echo $image_58; ?>" alt="<?php echo getAlt($image_58)?>"><?php elseif($text_58) : ?><p class="imgText"><?php echo $text_58; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">58</p></a></div>
		<div style='display: none'><div id="pic_58"><div class='galleryVidWrapper'><img id='galPlayBut58' src="<?php echo $play_but; ?>" onclick="playVid('vid_58', 'galPlayBut58')";><video id="vid_58" src="<?php echo $video_58;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_59) : ?><a href="#pic_59" class="fancybox"><?php endif?><?php if($image_59) :?><img class="gridImage" src="<?php echo $image_59; ?>" alt="<?php echo getAlt($image_59)?>"><?php elseif($text_59) : ?><p class="imgText"><?php echo $text_59; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">59</p></a></div>
		<div style='display: none'><div id="pic_59"><div class='galleryVidWrapper'><img id='galPlayBut59' src="<?php echo $play_but; ?>" onclick="playVid('vid_59', 'galPlayBut59')";><video id="vid_59" src="<?php echo $video_59;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_60) : ?><a href="#pic_60" class="fancybox"><?php endif?><?php if($image_60) :?><img class="gridImage" src="<?php echo $image_60; ?>" alt="<?php echo getAlt($image_60)?>"><?php elseif($text_60) : ?><p class="imgText"><?php echo $text_60; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">60</p></a></div>
		<div style='display: none'><div id="pic_60"><div class='galleryVidWrapper'><img id='galPlayBut60' src="<?php echo $play_but; ?>" onclick="playVid('vid_60', 'galPlayBut60')";><video id="vid_60" src="<?php echo $video_60;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_61) : ?><a href="#pic_61" class="fancybox"><?php endif?><?php if($image_61) :?><img class="gridImage" src="<?php echo $image_61; ?>" alt="<?php echo getAlt($image_61)?>"><?php elseif($text_61) : ?><p class="imgText"><?php echo $text_61; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">61</p></a></div>
		<div style='display: none'><div id="pic_61"><div class='galleryVidWrapper'><img id='galPlayBut61' src="<?php echo $play_but; ?>" onclick="playVid('vid_61', 'galPlayBut61')";><video id="vid_61" src="<?php echo $video_61;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_62) : ?><a href="#pic_62" class="fancybox"><?php endif?><?php if($image_62) :?><img class="gridImage" src="<?php echo $image_62; ?>" alt="<?php echo getAlt($image_62)?>"><?php elseif($text_62) : ?><p class="imgText"><?php echo $text_62; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">62</p></a></div>
		<div style='display: none'><div id="pic_62"><div class='galleryVidWrapper'><img id='galPlayBut62' src="<?php echo $play_but; ?>" onclick="playVid('vid_62', 'galPlayBut62')";><video id="vid_62" src="<?php echo $video_62;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_63) : ?><a href="#pic_63" class="fancybox"><?php endif?><?php if($image_63) :?><img class="gridImage" src="<?php echo $image_63; ?>" alt="<?php echo getAlt($image_63)?>"><?php elseif($text_63) : ?><p class="imgText"><?php echo $text_63; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">63</p></a></div>
		<div style='display: none'><div id="pic_63"><div class='galleryVidWrapper'><img id='galPlayBut63' src="<?php echo $play_but; ?>" onclick="playVid('vid_63', 'galPlayBut63')";><video id="vid_63" src="<?php echo $video_63?>"></video></div></div></div>

		<div class="hidden"><?php if($video_64) : ?><a href="#pic_64" class="fancybox"><?php endif?><?php if($image_64) :?><img class="gridImage" src="<?php echo $image_64; ?>" alt="<?php echo getAlt($image_64)?>"><?php elseif($text_64) : ?><p class="imgText"><?php echo $text_64; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">64</p></a></div>
		<div style='display: none'><div id="pic_64"><div class='galleryVidWrapper'><img id='galPlayBut64' src="<?php echo $play_but; ?>" onclick="playVid('vid_64', 'galPlayBut64')";><video id="vid_64" src="<?php echo $video_64;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_65) : ?><a href="#pic_65" class="fancybox"><?php endif?><?php if($image_65) :?><img class="gridImage" src="<?php echo $image_65; ?>" alt="<?php echo getAlt($image_65)?>"><?php elseif($text_65) : ?><p class="imgText"><?php echo $text_65; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">65</p></a></div>
		<div style='display: none'><div id="pic_65"><div class='galleryVidWrapper'><img id='galPlayBut65' src="<?php echo $play_but; ?>" onclick="playVid('vid_65', 'galPlayBut65')";><video id="vid_65" src="<?php echo $video_65;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_66) : ?><a href="#pic_66" class="fancybox"><?php endif?><?php if($image_66) :?><img class="gridImage" src="<?php echo $image_66; ?>" alt="<?php echo getAlt($image_66)?>"><?php elseif($text_66) : ?><p class="imgText"><?php echo $text_66; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">66</p></a></div>
		<div style='display: none'><div id="pic_66"><div class='galleryVidWrapper'><img id='galPlayBut66' src="<?php echo $play_but; ?>" onclick="playVid('vid_66', 'galPlayBut66')";><video id="vid_66" src="<?php echo $video_66;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_67) : ?><a href="#pic_67" class="fancybox"><?php endif?><?php if($image_67) :?><img class="gridImage" src="<?php echo $image_67; ?>" alt="<?php echo getAlt($image_67)?>"><?php elseif($text_67) : ?><p class="imgText"><?php echo $text_67; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">67</p></a></div>
		<div style='display: none'><div id="pic_67"><div class='galleryVidWrapper'><img id='galPlayBut67' src="<?php echo $play_but; ?>" onclick="playVid('vid_67', 'galPlayBut67')";><video id="vid_67" src="<?php echo $video_67;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_68) : ?><a href="#pic_68" class="fancybox"><?php endif?><?php if($image_68) :?><img class="gridImage" src="<?php echo $image_68; ?>" alt="<?php echo getAlt($image_68)?>"><?php elseif($text_68) : ?><p class="imgText"><?php echo $text_68; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">68</p></a></div>
		<div style='display: none'><div id="pic_68"><div class='galleryVidWrapper'><img id='galPlayBut68' src="<?php echo $play_but; ?>" onclick="playVid('vid_68', 'galPlayBut68')";><video id="vid_68" src="<?php echo $video_68;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_69) : ?><a href="#pic_69" class="fancybox"><?php endif?><?php if($image_69) :?><img class="gridImage" src="<?php echo $image_69; ?>" alt="<?php echo getAlt($image_69)?>"><?php elseif($text_69) : ?><p class="imgText"><?php echo $text_69; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">69</p></a></div>
		<div style='display: none'><div id="pic_69"><div class='galleryVidWrapper'><img id='galPlayBut69' src="<?php echo $play_but; ?>" onclick="playVid('vid_69', 'galPlayBut69')";><video id="vid_69" src="<?php echo $video_69?>"></video></div></div></div>

		<div class="hidden"><?php if($video_70) : ?><a href="#pic_70" class="fancybox"><?php endif?><?php if($image_70) :?><img class="gridImage" src="<?php echo $image_70; ?>" alt="<?php echo getAlt($image_70)?>"><?php elseif($text_70) : ?><p class="imgText"><?php echo $text_70; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">70</p></a></div>
		<div style='display: none'><div id="pic_70"><div class='galleryVidWrapper'><img id='galPlayBut70' src="<?php echo $play_but; ?>" onclick="playVid('vid_70', 'galPlayBut70')";><video id="vid_70" src="<?php echo $video_70;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_71) : ?><a href="#pic_71" class="fancybox"><?php endif?><?php if($image_71) :?><img class="gridImage" src="<?php echo $image_71; ?>" alt="<?php echo getAlt($image_71)?>"><?php elseif($text_71) : ?><p class="imgText"><?php echo $text_71; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">71</p></a></div>
		<div style='display: none'><div id="pic_71"><div class='galleryVidWrapper'><img id='galPlayBut71' src="<?php echo $play_but; ?>" onclick="playVid('vid_71', 'galPlayBut71')";><video id="vid_71" src="<?php echo $video_71;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_72) : ?><a href="#pic_72" class="fancybox"><?php endif?><?php if($image_72) :?><img class="gridImage" src="<?php echo $image_72; ?>" alt="<?php echo getAlt($image_72)?>"><?php elseif($text_72) : ?><p class="imgText"><?php echo $text_72; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">72</p></a></div>
		<div style='display: none'><div id="pic_72"><div class='galleryVidWrapper'><img id='galPlayBut72' src="<?php echo $play_but; ?>" onclick="playVid('vid_72', 'galPlayBut72')";><video id="vid_72" src="<?php echo $video_72;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_73) : ?><a href="#pic_73" class="fancybox"><?php endif?><?php if($image_73) :?><img class="gridImage" src="<?php echo $image_73; ?>" alt="<?php echo getAlt($image_73)?>"><?php elseif($text_73) : ?><p class="imgText"><?php echo $text_73; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">73</p></a></div>
		<div style='display: none'><div id="pic_73"><div class='galleryVidWrapper'><img id='galPlayBut73' src="<?php echo $play_but; ?>" onclick="playVid('vid_73', 'galPlayBut73')";><video id="vid_73" src="<?php echo $video_73;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_74) : ?><a href="#pic_74" class="fancybox"><?php endif?><?php if($image_74) :?><img class="gridImage" src="<?php echo $image_74; ?>" alt="<?php echo getAlt($image_74)?>"><?php elseif($text_74) : ?><p class="imgText"><?php echo $text_74; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">74</p></a></div>
		<div style='display: none'><div id="pic_74"><div class='galleryVidWrapper'><img id='galPlayBut74' src="<?php echo $play_but; ?>" onclick="playVid('vid_74', 'galPlayBut74')";><video id="vid_74" src="<?php echo $video_74;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_75) : ?><a href="#pic_75" class="fancybox"><?php endif?><?php if($image_75) :?><img class="gridImage" src="<?php echo $image_75; ?>" alt="<?php echo getAlt($image_75)?>"><?php elseif($text_75) : ?><p class="imgText"><?php echo $text_75; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">75</p></a></div>
		<div style='display: none'><div id="pic_75"><div class='galleryVidWrapper'><img id='galPlayBut75' src="<?php echo $play_but; ?>" onclick="playVid('vid_75', 'galPlayBut75')";><video id="vid_75" src="<?php echo $video_75?>"></video></div></div></div>

		<div class="hidden"><?php if($video_76) : ?><a href="#pic_76" class="fancybox"><?php endif?><?php if($image_76) :?><img class="gridImage" src="<?php echo $image_76; ?>" alt="<?php echo getAlt($image_76)?>"><?php elseif($text_76) : ?><p class="imgText"><?php echo $text_76; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">76</p></a></div>
		<div style='display: none'><div id="pic_76"><div class='galleryVidWrapper'><img id='galPlayBut76' src="<?php echo $play_but; ?>" onclick="playVid('vid_76', 'galPlayBut76')";><video id="vid_76" src="<?php echo $video_76;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_77) : ?><a href="#pic_77" class="fancybox"><?php endif?><?php if($image_77) :?><img class="gridImage" src="<?php echo $image_77; ?>" alt="<?php echo getAlt($image_77)?>"><?php elseif($text_77) : ?><p class="imgText"><?php echo $text_77; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">77</p></a></div>
		<div style='display: none'><div id="pic_77"><div class='galleryVidWrapper'><img id='galPlayBut77' src="<?php echo $play_but; ?>" onclick="playVid('vid_77', 'galPlayBut77')";><video id="vid_77" src="<?php echo $video_77;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_78) : ?><a href="#pic_78" class="fancybox"><?php endif?><?php if($image_78) :?><img class="gridImage" src="<?php echo $image_78; ?>" alt="<?php echo getAlt($image_78)?>"><?php elseif($text_78) : ?><p class="imgText"><?php echo $text_78; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">78</p></a></div>
		<div style='display: none'><div id="pic_78"><div class='galleryVidWrapper'><img id='galPlayBut78' src="<?php echo $play_but; ?>" onclick="playVid('vid_78', 'galPlayBut78')";><video id="vid_78" src="<?php echo $video_78;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_79) : ?><a href="#pic_79" class="fancybox"><?php endif?><?php if($image_79) :?><img class="gridImage" src="<?php echo $image_79; ?>" alt="<?php echo getAlt($image_79)?>"><?php elseif($text_79) : ?><p class="imgText"><?php echo $text_79; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">79</p></a></div>
		<div style='display: none'><div id="pic_79"><div class='galleryVidWrapper'><img id='galPlayBut79' src="<?php echo $play_but; ?>" onclick="playVid('vid_79', 'galPlayBut79')";><video id="vid_79" src="<?php echo $video_79;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_80) : ?><a href="#pic_80" class="fancybox"><?php endif?><?php if($image_80) :?><img class="gridImage" src="<?php echo $image_80; ?>" alt="<?php echo getAlt($image_80)?>"><?php elseif($text_80) : ?><p class="imgText"><?php echo $text_80; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">80</p></a></div>
		<div style='display: none'><div id="pic_80"><div class='galleryVidWrapper'><img id='galPlayBut80' src="<?php echo $play_but; ?>" onclick="playVid('vid_80', 'galPlayBut80')";><video id="vid_80" src="<?php echo $video_80;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_81) : ?><a href="#pic_81" class="fancybox"><?php endif?><?php if($image_81) :?><img class="gridImage" src="<?php echo $image_81; ?>" alt="<?php echo getAlt($image_81)?>"><?php elseif($text_81) : ?><p class="imgText"><?php echo $text_81; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">81</p></a></div>
		<div style='display: none'><div id="pic_81"><div class='galleryVidWrapper'><img id='galPlayBut81' src="<?php echo $play_but; ?>" onclick="playVid('vid_81', 'galPlayBut81')";><video id="vid_81" src="<?php echo $video_81?>"></video></div></div></div>

		<div class="hidden"><?php if($video_82) : ?><a href="#pic_82" class="fancybox"><?php endif?><?php if($image_82) :?><img class="gridImage" src="<?php echo $image_82; ?>" alt="<?php echo getAlt($image_82)?>"><?php elseif($text_82) : ?><p class="imgText"><?php echo $text_82; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">82</p></a></div>
		<div style='display: none'><div id="pic_82"><div class='galleryVidWrapper'><img id='galPlayBut82' src="<?php echo $play_but; ?>" onclick="playVid('vid_82', 'galPlayBut82')";><video id="vid_82" src="<?php echo $video_82;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_83) : ?><a href="#pic_83" class="fancybox"><?php endif?><?php if($image_83) :?><img class="gridImage" src="<?php echo $image_83; ?>" alt="<?php echo getAlt($image_83)?>"><?php elseif($text_83) : ?><p class="imgText"><?php echo $text_83; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">83</p></a></div>
		<div style='display: none'><div id="pic_83"><div class='galleryVidWrapper'><img id='galPlayBut83' src="<?php echo $play_but; ?>" onclick="playVid('vid_83', 'galPlayBut83')";><video id="vid_83" src="<?php echo $video_83;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_84) : ?><a href="#pic_84" class="fancybox"><?php endif?><?php if($image_84) :?><img class="gridImage" src="<?php echo $image_84; ?>" alt="<?php echo getAlt($image_84)?>"><?php elseif($text_84) : ?><p class="imgText"><?php echo $text_84; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">84</p></a></div>
		<div style='display: none'><div id="pic_84"><div class='galleryVidWrapper'><img id='galPlayBut84' src="<?php echo $play_but; ?>" onclick="playVid('vid_84', 'galPlayBut84')";><video id="vid_84" src="<?php echo $video_84;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_85) : ?><a href="#pic_85" class="fancybox"><?php endif?><?php if($image_85) :?><img class="gridImage" src="<?php echo $image_85; ?>" alt="<?php echo getAlt($image_85)?>"><?php elseif($text_85) : ?><p class="imgText"><?php echo $text_85; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">85</p></a></div>
		<div style='display: none'><div id="pic_85"><div class='galleryVidWrapper'><img id='galPlayBut85' src="<?php echo $play_but; ?>" onclick="playVid('vid_85', 'galPlayBut85')";><video id="vid_85" src="<?php echo $video_85;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_86) : ?><a href="#pic_86" class="fancybox"><?php endif?><?php if($image_86) :?><img class="gridImage" src="<?php echo $image_86; ?>" alt="<?php echo getAlt($image_86)?>"><?php elseif($text_86) : ?><p class="imgText"><?php echo $text_86; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">86</p></a></div>
		<div style='display: none'><div id="pic_86"><div class='galleryVidWrapper'><img id='galPlayBut86' src="<?php echo $play_but; ?>" onclick="playVid('vid_86', 'galPlayBut86')";><video id="vid_86" src="<?php echo $video_86;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_87) : ?><a href="#pic_87" class="fancybox"><?php endif?><?php if($image_87) :?><img class="gridImage" src="<?php echo $image_87; ?>" alt="<?php echo getAlt($image_87)?>"><?php elseif($text_87) : ?><p class="imgText"><?php echo $text_87; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">87</p></a></div>
		<div style='display: none'><div id="pic_87"><div class='galleryVidWrapper'><img id='galPlayBut87' src="<?php echo $play_but; ?>" onclick="playVid('vid_87', 'galPlayBut87')";><video id="vid_87" src="<?php echo $video_87?>"></video></div></div></div>

		<div class="hidden"><?php if($video_88) : ?><a href="#pic_88" class="fancybox"><?php endif?><?php if($image_88) :?><img class="gridImage" src="<?php echo $image_88; ?>" alt="<?php echo getAlt($image_88)?>"><?php elseif($text_88) : ?><p class="imgText"><?php echo $text_88; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">88</p></a></div>
		<div style='display: none'><div id="pic_88"><div class='galleryVidWrapper'><img id='galPlayBut88' src="<?php echo $play_but; ?>" onclick="playVid('vid_88', 'galPlayBut88')";><video id="vid_88" src="<?php echo $video_88;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_89) : ?><a href="#pic_89" class="fancybox"><?php endif?><?php if($image_89) :?><img class="gridImage" src="<?php echo $image_89; ?>" alt="<?php echo getAlt($image_89)?>"><?php elseif($text_89) : ?><p class="imgText"><?php echo $text_89; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">89</p></a></div>
		<div style='display: none'><div id="pic_89"><div class='galleryVidWrapper'><img id='galPlayBut89' src="<?php echo $play_but; ?>" onclick="playVid('vid_89', 'galPlayBut89')";><video id="vid_89" src="<?php echo $video_89;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_90) : ?><a href="#pic_90" class="fancybox"><?php endif?><?php if($image_90) :?><img class="gridImage" src="<?php echo $image_90; ?>" alt="<?php echo getAlt($image_90)?>"><?php elseif($text_90) : ?><p class="imgText"><?php echo $text_90; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">90</p></a></div>
		<div style='display: none'><div id="pic_90"><div class='galleryVidWrapper'><img id='galPlayBut90' src="<?php echo $play_but; ?>" onclick="playVid('vid_90', 'galPlayBut90')";><video id="vid_90" src="<?php echo $video_90;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_91) : ?><a href="#pic_91" class="fancybox"><?php endif?><?php if($image_91) :?><img class="gridImage" src="<?php echo $image_91; ?>" alt="<?php echo getAlt($image_91)?>"><?php elseif($text_91) : ?><p class="imgText"><?php echo $text_91; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">91</p></a></div>
		<div style='display: none'><div id="pic_91"><div class='galleryVidWrapper'><img id='galPlayBut91' src="<?php echo $play_but; ?>" onclick="playVid('vid_91', 'galPlayBut91')";><video id="vid_91" src="<?php echo $video_91;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_92) : ?><a href="#pic_92" class="fancybox"><?php endif?><?php if($image_92) :?><img class="gridImage" src="<?php echo $image_92; ?>" alt="<?php echo getAlt($image_92)?>"><?php elseif($text_92) : ?><p class="imgText"><?php echo $text_92; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">92</p></a></div>
		<div style='display: none'><div id="pic_92"><div class='galleryVidWrapper'><img id='galPlayBut92' src="<?php echo $play_but; ?>" onclick="playVid('vid_92', 'galPlayBut92')";><video id="vid_92" src="<?php echo $video_92;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_93) : ?><a href="#pic_93" class="fancybox"><?php endif?><?php if($image_93) :?><img class="gridImage" src="<?php echo $image_93; ?>" alt="<?php echo getAlt($image_93)?>"><?php elseif($text_93) : ?><p class="imgText"><?php echo $text_93; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">93</p></a></div>
		<div style='display: none'><div id="pic_93"><div class='galleryVidWrapper'><img id='galPlayBut93' src="<?php echo $play_but; ?>" onclick="playVid('vid_93', 'galPlayBut93')";><video id="vid_93" src="<?php echo $video_93?>"></video></div></div></div>

		<div class="hidden"><?php if($video_94) : ?><a href="#pic_94" class="fancybox"><?php endif?><?php if($image_94) :?><img class="gridImage" src="<?php echo $image_94; ?>" alt="<?php echo getAlt($image_94)?>"><?php elseif($text_94) : ?><p class="imgText"><?php echo $text_94; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">94</p></a></div>
		<div style='display: none'><div id="pic_94"><div class='galleryVidWrapper'><img id='galPlayBut94' src="<?php echo $play_but; ?>" onclick="playVid('vid_94', 'galPlayBut94')";><video id="vid_94" src="<?php echo $video_94;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_95) : ?><a href="#pic_95" class="fancybox"><?php endif?><?php if($image_95) :?><img class="gridImage" src="<?php echo $image_95; ?>" alt="<?php echo getAlt($image_95)?>"><?php elseif($text_95) : ?><p class="imgText"><?php echo $text_95; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">95</p></a></div>
		<div style='display: none'><div id="pic_95"><div class='galleryVidWrapper'><img id='galPlayBut95' src="<?php echo $play_but; ?>" onclick="playVid('vid_95', 'galPlayBut95')";><video id="vid_95" src="<?php echo $video_95;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_96) : ?><a href="#pic_96" class="fancybox"><?php endif?><?php if($image_96) :?><img class="gridImage" src="<?php echo $image_96; ?>" alt="<?php echo getAlt($image_96)?>"><?php elseif($text_96) : ?><p class="imgText"><?php echo $text_96; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">96</p></a></div>
		<div style='display: none'><div id="pic_96"><div class='galleryVidWrapper'><img id='galPlayBut96' src="<?php echo $play_but; ?>" onclick="playVid('vid_96', 'galPlayBut96')";><video id="vid_96" src="<?php echo $video_96;?>"></video></div></div></div>
		<div class="emptyGridElement"></div>

		<div class="emptyGridElement"></div>
		<div class="hidden"><?php if($video_97) : ?><a href="#pic_97" class="fancybox"><?php endif?><?php if($image_97) :?><img class="gridImage" src="<?php echo $image_97; ?>" alt="<?php echo getAlt($image_97)?>"><?php elseif($text_97) : ?><p class="imgText"><?php echo $text_97; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">97</p></a></div>
		<div style='display: none'><div id="pic_97"><div class='galleryVidWrapper'><img id='galPlayBut97' src="<?php echo $play_but; ?>" onclick="playVid('vid_97', 'galPlayBut97')";><video id="vid_97" src="<?php echo $video_91;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_98) : ?><a href="#pic_98" class="fancybox"><?php endif?><?php if($image_98) :?><img class="gridImage" src="<?php echo $image_98; ?>" alt="<?php echo getAlt($image_98)?>"><?php elseif($text_98) : ?><p class="imgText"><?php echo $text_98; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">98</p></a></div>
		<div style='display: none'><div id="pic_98"><div class='galleryVidWrapper'><img id='galPlayBut98' src="<?php echo $play_but; ?>" onclick="playVid('vid_98', 'galPlayBut98')";><video id="vid_98" src="<?php echo $video_92;?>"></video></div></div></div>

		<div class="hidden"><?php if($video_99) : ?><a href="#pic_99" class="fancybox"><?php endif?><?php if($image_99) :?><img class="gridImage" src="<?php echo $image_99; ?>" alt="<?php echo getAlt($image_99)?>"><?php elseif($text_99) : ?><p class="imgText"><?php echo $text_99; ?></p><?php endif ?><img src="<?php echo $bg; ?>" alt="Background"><p class="gridNumber">99</p></a></div>
		<div style='display: none'><div id="pic_99"><div class='galleryVidWrapper'><img id='galPlayBut99' src="<?php echo $play_but; ?>" onclick="playVid('vid_99', 'galPlayBut99')";><video id="vid_99" src="<?php echo $video_93?>"></video></div></div></div>
		<div class="emptyGridElement"></div>
		<div class="emptyGridElement"></div>
		<div class="emptyGridElement"></div>
		<div class="emptyGridElement"></div>

		

	</div>
	<button id="showMoreButton" onclick="showMore();">Skatīt vairāk</button>
</div>