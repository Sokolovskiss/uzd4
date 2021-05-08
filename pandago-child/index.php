<?php get_header(); ?>
<?php
if ( have_posts() ) : ?>
	<?php if(! empty( $post->post_title )) : ?><p class="pageTitle"><?php the_title(); ?></p>
<?php endif;
?>
<?php the_content();
endif;
?>				
<?php get_footer(); ?>