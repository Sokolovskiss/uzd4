<?php get_template_part( 'template-parts/head' ); ?>
<!DOCTYPE html>
<head>
  <meta charset="?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head();?>
</head>
<body <?php if(has_block('acf/sparkleheartmap')) : ?>onload="initMap({lat: 56.9462907188704, lng: 24.10395643454371});"<?php endif?>>
  <header class="site-header">
    <div class="sticky">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-2 col-sm-3 col-4 blackLogo">
         <?php sparkle_custom_logo(); ?>
       </div>
       <div class="col-md-10 col-sm-9 col-8 navDiv">
         <nav class="nav-header">     	
          <?php pandago_nav( 'header' ); ?> 	      	      	    		
        </nav>
        <img id="menuIcon" src="/wordpress/wp-content/themes/pandago-child/resources/img/menu.png" alt="Menu" onclick="showOverlay();"> 
      </div>
    </div>
  </div>
  <div id="overlayMenu">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-4 blackLogo">
          <?php sparkle_custom_logo(); ?>
        </div>
        <div class="col-md-10 col-sm-9 col-8">
          <img class="menuIconX" src="/wordpress/wp-content/themes/pandago-child/resources/img/x.svg" alt="Menu" onclick="showOverlay();"> 
        </div>
      </div>
      <div class="overlayMenuGrid">
        <div></div>
        <div class="activeLang">LV</div>
        <div>EN</div>
        <div>RU</div>
        <div></div>
      </div>
      <nav class="nav-overlay">
        <?php wp_nav_menu( array( 'theme_location' => 'overlay-nav', 'menu_id' => 'overlay-menu' ) );?>
      </nav>
    </div>
  </div>
</div>
</header>

