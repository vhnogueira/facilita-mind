<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-primary text-light" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					<div class="text-center">
						<a href="<?php the_field('link_facebook', 'option')?>"><i class="fa fa-facebook text-primary"></i></a>
						<a href="<?php the_field('link_instagram', 'option')?>"><i class="fa fa-instagram text-primary"></i></a>
						<a href="<?php the_field('link_linkedin', 'option')?>"><i class="fa fa-linkedin text-primary"></i></a>
					</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
