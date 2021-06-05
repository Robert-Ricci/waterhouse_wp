<?php
/**
 * Template Name: Gallery
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();



	get_template_part( 'global-templates/hero' );

?>

<div >

	<div class="container">

		<div class="row">
			<div class="col-md">
			<div class="gallery-images">
				<img src="<?php the_field('gallery_images_1') ?>" />
				<img src="<?php the_field('gallery_images_3') ?>" />
				<img src="<?php the_field('gallery_images_5') ?>" />
			</div>
			</div>
			<div class="col-md">
			<div class="gallery-images">
				<img src="<?php the_field('gallery_images_2') ?>" />
				<img src="<?php the_field('gallery_images_4') ?>" />
				</div>
			</div>
			
		</div>
			

		</div><!-- .row end -->

	</div><!-- #content -->



<?php
get_footer();
