<?php
/**
 * Template Name: Página de Contato - Facilita Mind
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="py-5" id="home-5">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">Contato</p>
        <p class="text-center mb-4">Vou adorar falar com você!</p>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contato"]'); ?>
            </div>
            <div class="col-md-6 order-md-1">
                <p class="h2">Informações de contato</p>
                <p>
                    Endereço, telefone, email
                </p>
                <a href="<?php the_field('link_facebook', 'option')?>" target="_blank"><i class="fa fa-facebook text-primary mx-1"></i></a>
                <a href="<?php the_field('link_instagram', 'option')?>" target="_blank"><i class="fa fa-instagram text-primary mx-1"></i></a>
                <a href="<?php the_field('link_linkedin', 'option')?>" target="_blank"><i class="fa fa-linkedin text-primary mx-1"></i></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();