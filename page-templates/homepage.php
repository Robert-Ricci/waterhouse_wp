<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">
				<h1><?php the_field('home_title') ?></h1>
			</div>
		</div>
			<div class="row">
				<img src="<?php the_field('home_image') ?>" />
			</div>	

			<div class="row">
				<p><?php the_field('home_copy') ?></p>
			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->



<?php
get_footer();
