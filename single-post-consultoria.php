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

<hr class="border-danger">

<div class="container">
    <div class="row">
        <div class="col-6">
            <?php echo wp_get_attachment_image( get_field('imagem_capa'), 'full', "", array( "class" => "img-fluid mb-3" ) );  ?>
        </div>
        <div class="col-6">
            <h1 class="h2 lato text-uppercase">Consultoria de Marketing</h1>
            <h2 class="h3 lato text-uppercase font-weight-light">Pequenas Empresas</h1>
            <?php echo wp_get_attachment_image( get_field('icone_capa'), 'full', "", array( "class" => "img-fluid mb-3" ) );  ?>
        </div>
        
    </div>
</div>

<hr class="border-danger mt-0">

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 order-md-1">
                <p class="h3 mb-3"><?php the_field('titulo_o_que_e'); ?></p>
                <?php the_field('texto_o_que_e'); ?>
            </div>
            <div class="col-md-6 order-md-2">
                <p class="h3 mb-3"><?php the_field('titulo_vantagens'); ?></p>
                <?php the_field('texto_vantagens'); ?>
            </div>
            <div class="col-md-6 order-md-4">
                <p class="h3 mb-3"><?php the_field('titulo_destina'); ?></p>
                <?php the_field('texto_destina'); ?>
            </div>
            <div class="col-md-6 order-md-5">
                <p class="h3 mb-3"><?php the_field('titulo_como_acontece'); ?></p>
                <?php the_field('texto_como_acontece'); ?>
            </div>
            <div class="col-md-8 order-md-3 my-md-4">
                <?php echo wp_get_attachment_image( get_field('imagem_consultoria'), 'full', "", array( "class" => "img-fluid mb-md-4" ) );  ?>
            </div>
        </div>
    </div>
</div>



<div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-primary text-danger mt-4 btn-lg btn-block" href="<?php the_field('link_cta'); ?>"><?php the_field('texto_cta'); ?></a>
            </div>
        </div>
    </div>
</div>



 <?php get_footer();