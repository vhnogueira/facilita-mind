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
						<a href="<?php the_field('link_facebook', 'option')?>" target="_blank"><i class="fa fa-facebook text-light mx-1"></i></a>
						<a href="<?php the_field('link_instagram', 'option')?>" target="_blank"><i class="fa fa-instagram text-light mx-1"></i></a>
						<a href="<?php the_field('link_linkedin', 'option')?>" target="_blank"><i class="fa fa-linkedin text-light mx-1"></i></a>
					</div>

					<?php wp_nav_menu(
					array(
						'theme_location'  => 'secondary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mx-auto text-light',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
