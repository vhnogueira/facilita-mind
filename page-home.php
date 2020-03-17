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
            <div class="col-md-8 text-light lead">
                <?php the_field('text_banner') ?>
            </div>
        </div>
    </div>
</div>

<div class="pt-5" id="home-2">
    <div class="container">
        <div class="row">
            <div class="col-4 align-self-end">
                <?php $image = get_field('image_sobre'); echo wp_get_attachment_image( $image, 'full', "", array( "class" => "img-fluid mx-auto d-block" ) );  ?>    
            </div>
            <div class="col-8 align-self-center">
                <p class="h2">SOBRE MIM</p>
                <p class="h3 mb-4 lato text-danger font-weight-bold">JULIANA AMARAL</p>
                <div class="mb-4">
                    <?php the_field('text_sobre') ?>
                </div>
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
        <div class="row align-items-center">
            
            <?php 
            // the query
            $the_query = new WP_Query( array(
                'post_type' => 'servicos',
                'posts_per_page' => -1,
            )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-4">
                    
                    <?php the_title(); ?>

                    <?php the_field('subtitulo'); ?>
                    <?php the_field('icone'); ?>
                    <?php the_field('texto_botao'); ?>
                    <?php the_field('imagem'); ?>

                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php endif; ?>

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
        <div class="col-md-8 text-center">
            <a href="<?php the_field('link_linkedin', 'option'); ?>" target="_blank">
                <?php echo wp_get_attachment_image( '41', 'full', "", array( "class" => "img-fluid mx-auto" ) );  ?>
            </a>
        </div>
        </div>
    </div>
</div>


<?php get_footer();