<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="py-5 bg-primary min-vh-75" id="home-1">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-light lead">
                <?php the_field('text_banner') ?>
            </div>
        </div>
    </div>
</div>

<div class="py-5" id="home-2">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-light lead">
                <?php the_field('text_banner') ?>
            </div>
            <div class="col-md-5 text-light lead">
                <p class="h2">SOBRE MIM</p>
                <p class="h3">JULIANA AMARAL</p>
                <p><?php the_field('text_sobre') ?></p>
            </div>  
        </div>
    </div>
</div>

<div class="py-5 bg-light" id="home-3">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">Cadastre-se para receber todos os conteúdos</p>
        <?php echo do_shortcode('[contact-form-7 id="40" title="Newsletter"]'); ?>
    </div>
</div>


<div class="py-5 bg-danger" id="home-4">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">Como posso te ajudar</p>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
</div>

<div class="py-5" id="home-5">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">Contato</p>
        <p class="text-center">Vou adorar falar com você!</p>
        <?php echo do_shortcode('[contact-form-7 id="35" title="Contato"]'); ?>
    </div>
</div>

<div class="py-5 bg-light" id="home-6">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">O que falam de mim</p>
        <div class="row">
        <div class="col-md-4">
            <a href="<?php the_field('link_linkedin', 'option'); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
        </div>
        <div class="col-md-8">
            <a href="<?php the_field('link_linkedin', 'option'); ?>" target="_blank">
                <?php echo wp_get_attachment_image( '41', 'full', "", array( "class" => "img-fluid mx-auto d-block" ) );  ?>
            </a>
        </div>
        </div>
    </div>
</div>


<?php get_footer();