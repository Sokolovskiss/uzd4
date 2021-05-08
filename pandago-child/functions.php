<?php

define( 'TD', 'pandago-child' );

function my_styles() {
  wp_enqueue_style( 'child-style', URL_THEME . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

function register_theme_nav() {
  register_nav_menus(
    array(
      'header-nav'  => esc_html__( 'Header Navigation', TD ),
      'sidebar-nav' => __( 'Sidebar Navigation', TD ),
      'footer-nav'  => esc_html__( 'Footer Navigation', TD ),
      'overlay-nav'  => esc_html__( 'Overlay Navigation', TD )
    )
  );
}

add_action('wp_enqueue_scripts', 'sparkle_project_scripts_include');
add_action('wp_enqueue_scripts', 'css_override', 99);


function sparkle_project_scripts_include(){
  wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
  wp_enqueue_style('bootstraps_css',   '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_script('bootstraps_script', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('bootstrap_select_js', '//cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js', array('jquery'));
  wp_enqueue_style('bootstrap_select_css', '//cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css');

  wp_enqueue_style( 'awesone.css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('fonts_default', '//fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_enqueue_style('fonts_oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@500;700');
  wp_enqueue_script('scripts_theme', get_stylesheet_directory_uri() . '../assets/theme.js',   array(), '20151215', true);

  wp_enqueue_script('custom video player', get_stylesheet_directory_uri() . '/template-parts/blocks/customVideoPlayer/customVideoPlayer.js',   array());
  wp_enqueue_script('contact_form', get_stylesheet_directory_uri() . '/template-parts/blocks/contactForm/contactForm.js',   array());
  wp_enqueue_script('image_gallery', get_stylesheet_directory_uri() . '/template-parts/blocks/imageGallery/imageGallery.js',   array());
  wp_enqueue_script('google_map', get_stylesheet_directory_uri() . '/template-parts/blocks/sparkleHeartMap/sparkleHeartMap.js',   array('jquery'));

  if (is_singular() && comments_open() && get_option('thread_comments')) {
   wp_enqueue_script('comment-reply');
 }
}


function css_override(){
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}


if(function_exists( 'acf_register_block_type' ) ) {
  add_action( 'acf/init', 'register_acf_block_types' );
}

//block
function register_acf_block_types(){
  acf_register_block_type(
   array(
    'name'            => 'background_picture',
    'title'           => __( 'Background Picture' ),
    'description'     => __( 'Picture with text' ),
    'render_template' => '/template-parts/blocks/bgPicture/backgroundPicture.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'background', 'picture' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/bgPicture/backgroundPicture.css',
  ) );

  acf_register_block_type(
   array(
    'name'            => 'columns',
    'title'           => __( 'Two Columns' ),
    'description'     => __( 'Two columns with picture and buttons' ),
    'render_template' => '/template-parts/blocks/twoColumns/columns.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'column' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/twoColumns/columns.css',
  ) );  

  acf_register_block_type(
   array(
    'name'            => 'pictureCollection',
    'title'           => __( 'Picture Collection' ),
    'description'     => __( 'Four columns of pictures' ),
    'render_template' => '/template-parts/blocks/pictureColumns/pictureColumns.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'picture', 'column' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/pictureColumns/pictureColumns.css',
  ) ); 

  acf_register_block_type(
   array(
    'name'            => 'submitForm',
    'title'           => __( 'Contact Us Form' ),
    'description'     => __( 'Contact us form with submit button' ),
    'render_template' => '/template-parts/blocks/contactForm/contactForm.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'form' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/contactForm/contactForm.css',
  ) ); 

  acf_register_block_type(
   array(
    'name'            => 'imageAndTextSideBySide',
    'title'           => __( 'Image And Text Side By Side' ),
    'description'     => __( 'Image with text next to it' ),
    'render_template' => '/template-parts/blocks/imageAndText/imgAndText.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'image', 'text' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/imageAndText/imgAndText.css',
  ) ); 


  acf_register_block_type(
   array(
    'name'            => 'orangeBackgroundWithImageAndText',
    'title'           => __( 'Orange Background With Image And Text' ),
    'description'     => __( 'Orange background with image and text' ),
    'render_template' => '/template-parts/blocks/orangeBackground/orangeBackground.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'image', 'text' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/orangeBackground/orangeBackground.css',
  ) );

  acf_register_block_type(
   array(
    'name'            => 'customVideoPlayer',
    'title'           => __( 'Custom Video Player' ),
    'description'     => __( 'Video player with custom play button' ),
    'render_template' => '/template-parts/blocks/customVideoPlayer/customVideoPlayer.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'video' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/customVideoPlayer/customVideoPlayer.css',
  ) );

  acf_register_block_type(
   array(
    'name'            => 'supporters',
    'title'           => __( 'Supporters' ),
    'description'     => __( 'List of supporters' ),
    'render_template' => '/template-parts/blocks/supporters/supporters.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'video' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/supporters/supporters.css',
  ) );  

  acf_register_block_type(
   array(
    'name'            => 'threeImages',
    'title'           => __( 'Three Images' ),
    'description'     => __( 'Three images in grid' ),
    'render_template' => '/template-parts/blocks/threeImagesColumn/threeImagesColumn.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'image', 'picture' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/threeImagesColumn/threeImagesColumn.css',
  ) );

  acf_register_block_type(
   array(
    'name'            => 'imageGallery',
    'title'           => __( 'Image Gallery' ),
    'description'     => __( 'Image gallery' ),
    'render_template' => '/template-parts/blocks/imageGallery/imageGallery.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'image', 'picture' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/imageGallery/imageGallery.css',
  ) );  

  acf_register_block_type(
   array(
    'name'            => 'sparkleHeartMap',
    'title'           => __( 'Sparkle Heart Google Map' ),
    'description'     => __( 'Sparkle Heart Google map' ),
    'render_template' => '/template-parts/blocks/sparkleHeartMap/sparkleHeartMap.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'map' ),
    'enqueue_style'   => get_stylesheet_directory_uri() . '/template-parts/blocks/sparkleHeartMap/sparkleHeartMap.css',
  ) );

  acf_register_block_type(
   array(
    'name'            => 'sparkleHeartText',
    'title'           => __( 'Sparkle Heart Text' ),
    'description'     => __( 'Sparkle Heart text' ),
    'render_template' => '/template-parts/blocks/sparkleHeartText/sparkleHeartText.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'map' ),
  ) );

  acf_register_block_type(
   array(
    'name'            => 'sparkleHeartTitle',
    'title'           => __( 'Sparkle Heart Title' ),
    'description'     => __( 'Sparkle Heart Title' ),
    'render_template' => '/template-parts/blocks/sparkleHeartText/sparkleHeartTitle.php',
    'icon'            => 'editor-paste-text',
    'keywords'        => array( 'map' ),
  ) );


}


//absolute path for images

  //get alt 
  add_action('test', 'getAlt');
  function getAlt($imgUrl){
    $attachment_id = attachment_url_to_postid( $imgUrl );
    echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
  }



//custom logo
add_theme_support( 'custom-logo' );
function sparkle_custom_logo() {
  if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }
}

?>




