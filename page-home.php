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
        <p class="h1 text-uppercase text-center">Cadastre-se para receber todos os conteúdos</p>
    </div>
</div>


<div class="py-5 bg-warning" id="home-4">
    <div class="container">
        <p class="h1 text-uppercase text-center">Como posso te ajudar</p>
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
        <p class="h1 text-uppercase text-center">Contato</p>
        <p class="text-center">Vou adorar falar com você!</p>
        <?php echo do_shortcode('[contact-form-7 id="35" title="Contato"]'); ?>
    </div>
</div>

<div class="py-5 bg-light" id="home-6">
    <div class="container">
        <p class="h1 text-uppercase text-center">O que falam de mim</p>
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-8">
        </div>
        </div>
    </div>
</div>


<?php get_footer();