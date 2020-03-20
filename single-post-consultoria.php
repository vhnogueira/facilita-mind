<?php
/*
 * Template Name: Consultoria - Template de Serviço
 * Template Post Type: servicos
 */
 
 get_header();  ?>

 <div class="py-5">
    <div class="container">
        <p class="h2 text-uppercase text-center">Como posso te ajudar</p>
        <div class="row">

        </div>
    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_o_que_e'); ?></p>
                <?php the_field('o_que_e'); ?>
            </div>
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_vantagens'); ?></p>
                <?php the_field('vantagens'); ?>
            </div>
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_destina'); ?></p>
                <?php the_field('destina'); ?>
            </div>
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_como_acontece'); ?></p>
                <?php the_field('como_acontece'); ?>
            </div>
            <div class="col-md-6 order-md-3">
                <?php echo wp_get_attachment_image( get_field('imagem_consultoria'), 'full', "", array( "class" => "img-fluid mb-3" ) );  ?>
            </div>
        </div>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-primary text-danger mt-4 btn-lg btn-block" href="<?php the_field('link_cta'); ?>"><?php the_field('texto_cta'); ?></a>
            </div>
        </div>
    </div>
</div>



 <?php get_footer();