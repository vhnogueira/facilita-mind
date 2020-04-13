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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


<?php $banner_image = get_field('imagem_banner'); ?>

<div class="py-5 min-vh-75" id="home-1" <?php if ( $banner_image ) : ?>
    style="background: url('<?php echo $banner_image; ?>'); background-position: top right; background-size: cover;"
    <?php endif; ?>>
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
                <p class="h1 display-4 mb-0 font-weight-bold before-title d-inline-block">SOBRE MIM</p>
                <hr class="border-danger mt-0">
                <p class="h2 mb-4 lato text-danger font-weight-bold"><?php the_field('nome_sobre'); ?></p>
                <div class="mb-4">
                    <?php the_field('text_sobre') ?>
                    <a href="<?php the_field('link_linkedin_pessoal')?>" class="btn btn-primary" target="_blank"><i class="fa fa-linkedin mb-2"></i></a>
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
        <p class="h4 text-center lato mb-4">Inscreva-se para receber conteúdos exclusivos</p>
        <?php echo do_shortcode('[contact-form-7 id="40" title="Newsletter"]'); ?>
    </div>
</div>


<div class="py-5 bg-danger" id="home-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <p class="h1 text-uppercase text-center mb-4 font-weight-bold display-4 d-inline-block after-title-ajudar">Como posso te
                    ajudar</p>
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
                <div class="thumbnail position-relative mb-2">
                    <div class="caption">
                        <?php $icon = get_field('icone'); ?>
                        <?php echo wp_get_attachment_image( $icon, 'full', "", array( "class" => "img-fluid mx-auto icon-servicos" ) );  ?>
                        <h2 class="text-white lato h4 text-uppercase mb-0<?php if (empty(get_field('subtitulo')) { echo ' mb-4 pb-3'; } ?>"><?php the_title(); ?></h2>
                        <p class="text-center text-uppercase"><?php the_field('subtitulo'); ?> </p>
                        <div class="text-center">
                            <a href="<?php the_permalink(); ?>" class="btn btn-light my-2">SAIBA MAIS</a>
                        </div>
                    </div>
                    <?php $image = get_field('imagem'); ?>
                    <?php echo wp_get_attachment_image( $image, 'full', "", array( "class" => "img-fluid mx-auto thumb-servicos" ) );  ?>
                </div>
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
                    <p class="h1 display-4 text-uppercase text-center mb-4 font-weight-bold d-inline-block text-center after-title-contato position-relative">
                        Contato</p>
                </div>
                <p class="text-center">Vou adorar falar com você!</p>
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contato"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light" id="home-6">
    <div class="container-fluid">
        <p class="h1 text-uppercase text-center mb-4">O que falam de mim</p>
        <div class="row">
            <div class="col-md-12">
                <div id="customers-testimonials" class="owl-carousel">
                
                    <!--TESTIMONIAL 1 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="rounded-circle img-fluid" src="https://i.imgur.com/dU0PpiQ.jpg" alt="">
                            <p>A GSK contou com a Amo para um projeto audacioso, unindo a GSK Brasil, GSK matriz em Londres e a Amo, que
                                gerou um resultado surpreendente. Como todo projeto inovador, foi desafiador e a Juliana foi uma
                                parceira incrível. Sem dúvida uma profissional preparada e completa.
                            </p>
                        </div>
                        <div class="testimonial-name text-uppercase">Bruno Dreux<br>
                            <span class="small">Sócio Fundador da Agência Amo e Buriti Creative Capital e Presidente da ABP</span></div>
                    </div>
                    <!--END OF TESTIMONIAL 1 -->
                    <!--TESTIMONIAL 2 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="rounded-circle img-fluid" src="https://i.imgur.com/GPQZ54N.jpg" alt="">
                            <p>Trabalhar com a Juliana é uma experiência. Além de ser um exemplo para todos que trabalham com ela, a
                                Juliana é diferente. Ela tem um olhar para as novidades do mercado, e faz questão de dividir tudo com
                                seu time. Um estilo de gestão completamente fora do padrão nos dias atuais, a Juliana se preoc...
                                Visualizar mais
                            </p>
                        </div>
                        <div class="testimonial-name text-uppercase">Beatriz Perçú<br>
                            <span class="small">Expert Marketing em Skincare</span></div>
                    </div>
                    <!--END OF TESTIMONIAL 2 -->
                    <!--TESTIMONIAL 3 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="rounded-circle img-fluid" src="https://i.imgur.com/Xm9xcZG.jpg" alt="">
                            <p>Conheci Juliana estagiária e ela já demonstrava seu talento e competência. Anos depois tive a
                                oportunidade de reencontra-la e sua trajetória profissional e pessoal só fizeram aumentar a competência
                                e talento!!! Parabéns pela profissional que se tornou!
                            </p>
                        </div>
                        <div class="testimonial-name text-uppercase">Karina Colpaert<br>
                            <span class="small">Coach de Carreira & Vida | Facilitadora de Diálogos | Psicóloga</span></div>
                    </div>
                    <!--END OF TESTIMONIAL 3 -->
                    <!--TESTIMONIAL 4 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="rounded-circle img-fluid" src="https://i.imgur.com/TPlmAiR.jpg" alt="">
                            <p>Juliana é uma profissional inspiradora: criativa e inovadora. Como gestora, aplica-se dedicadamente ao
                                desenvolvimento de sua equipe.</p>
                
                            <p>Também tem como pontos fortes relacionamento interpessoal, conhecimentos aprofundados em marketing e em
                                marketing digital. Está sempre atualizada em relação às tendências e aos movimentos de mercado,
                                aplicando os mesmos em seu cotidiano. É um prazer trabalhar com Juliana!</p>
                        </div>
                        <div class="testimonial-name text-uppercase">Laís Frota Verri Pinheiro<br>
                            <span class="small">Product Marketing Manager at L'Oréal</span></div>
                    </div>
                    <!--END OF TESTIMONIAL 4 -->
                </div>
            </div>
            <!-- <div class="col-md-4 text-center">
                <a href="<?php the_field('link_linkedin', 'option'); ?>" class="btn btn-primary mb-3" target="_blank"><i
                        class="fa fa-linkedin fa-2x"></i></a>
            </div> -->
            <!-- <div class="col-md-8 text-center">
                <a href="<?php the_field('link_linkedin', 'option'); ?>" target="_blank">
                    <?php echo wp_get_attachment_image( '41', 'full', "", array( "class" => "img-fluid mx-auto" ) );  ?>
                </a>
            </div> -->
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function ($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots: true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
</script>

<?php get_footer();