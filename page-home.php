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


<?php $banner_image = get_field('imagem_banner'); ?>

<div class="py-5 min-vh-75" id="home-1"<?php if ( $banner_image ) : ?> style="background: url('<?php echo $banner_image; ?>'); background-position: top right; background-size: cover;"<?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-light lead text-white">
                <?php the_field('texto_banner') ?>
            </div>
        </div>
    </div>
</div>

<div class="pt-5" id="home-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-xl-6 offset-xl-1 align-self-center pb-4 order-md-1">
                <div class="d-inline position-absolute" style="width: 80px;">
                    <img src="https://agencia915.com.br/clientes/facilita/wp-content/uploads/2020/03/before-title.png" class="before-title">
                </div>
                <p class="h1 display-4 mb-0 font-weight-bold">SOBRE MIM</p>
                <hr class="border-danger mt-0">
                <p class="h2 mb-4 lato text-danger font-weight-bold">JULIANA AMARAL</p>
                <div class="mb-4">
                    <?php the_field('text_sobre') ?>
                </div>
            </div>  
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-4 align-self-end pl-0">
                <?php $image = get_field('image_sobre'); echo wp_get_attachment_image( $image, 'full', "", array( "class" => "img-fluid mx-auto d-block w-100" ) );  ?>    
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light" id="home-3">
    <div class="container">
        <p class="h4 text-center lato mb-4">Cadastre-se para receber todos os conteúdos</p>
        <?php echo do_shortcode('[contact-form-7 id="40" title="Newsletter"]'); ?>
    </div>
</div>


<div class="py-5 bg-danger" id="home-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <p class="h1 text-uppercase text-center mb-4 font-weight-bold display-4 d-inline-block">Como posso te ajudar</p>
                <div class="d-inline" style="
                    position: absolute;
                    width: 80px;
                    right: -30px;
                ">
                <img src="https://agencia915.com.br/clientes/facilita/wp-content/uploads/2020/03/after-title-2.png" class="after-title">
                </div>
            </div>
            
            <?php 
            // the query
            $the_query = new WP_Query( array(
                'post_type' => 'servicos',
                'posts_per_page' => -1,
            )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="thumbnail mb-2">
                        <div class="caption">
                            <?php $icon = get_field('icone'); ?>
                            <?php echo wp_get_attachment_image( $icon, 'full', "", array( "class" => "img-fluid mx-auto icon-servicos" ) );  ?>
                            <?php the_title( '<h2 class="text-white lato h4 text-uppercase mb-0">', '</h2>' ); ?>
                            <p class="text-center text-uppercase"><?php the_field('subtitulo'); ?></p>
                        </div>
                        <?php $image = get_field('imagem'); ?>
                        <?php echo wp_get_attachment_image( $image, 'full', "", array( "class" => "img-fluid mx-auto thumb-servicos" ) );  ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-white mt-3 text-center h5">SAIBA MAIS</a>

                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<div class="py-5" id="home-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <p class="h1 display-4 text-uppercase text-center mb-4 font-weight-bold d-inline-block text-center">Contato</p>
                    <div class="d-inline" style="
                                position: absolute;
                                width: 80px;
                                right: -30px;
                            ">
                            <img src="https://agencia915.com.br/clientes/facilita/wp-content/uploads/2020/03/after-title.png" class="after-title">
                    </div>
                </div>
                <p class="text-center">Vou adorar falar com você!</p>
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contato"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light" id="home-6">
    <div class="container">
        <p class="h1 text-uppercase text-center mb-4">O que falam de mim</p>
        <div class="row">
        <div class="col-md-4 text-center">
            <a href="<?php the_field('link_linkedin', 'option'); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-linkedin fa-2x mb-3"></i></a>
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