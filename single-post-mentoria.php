<?php
/*
 * Template Name: Mentoria - Template de Serviço
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

<div class="pt-5 pb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-3">
                <p class="h3 mb-3"><?php the_field('titulo_o_que_esperar'); ?></p>
                <?php the_field('texto_o_que_esperar'); ?>

            </div>
            <div class="col-md-12 order-md-1">
                <p class="h3 mb-3"><?php the_field('titulo_citacao'); ?></p>
            </div>
            <div class="col-md-12 order-md-2 bg-danger py-3 mt-3 mb-5 text-center">
                <i class="fa text-dark fa-quote-left mr-1" style="font-size:1.8em;"></i>
                <p class="h4 mb-0 lato font-weight-light text-white d-inline"><?php the_field('citacao'); ?>  </p>
                <i class="fa text-dark fa-quote-right ml-1" style="font-size:1.8em;"></i>
            </div>
            <div class="col-md-6 order-md-4">
                <?php the_field('texto_a_mentoria'); ?>
            </div>
        </div>
    </div>
</div>



<div class="pb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_escolha_do_mentor'); ?></p>
                <?php echo wp_get_attachment_image( get_field('imagem_escolha_do_mentor'), 'full', "", array( "class" => "img-fluid mb-3" ) );  ?>
                <?php the_field('texto_escolha_do_mentor'); ?>

            </div>
            <div class="col-md-6">
                <p class="h3 mb-3"><?php the_field('titulo_beneficios'); ?></p>
                <?php the_field('texto_beneficios'); ?>
            </div>
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-primary text-danger mt-4 btn-lg btn-block" href="<?php the_field('link_cta'); ?>"><?php the_field('texto_cta'); ?></a>
            </div>
        </div>
    </div>
</div>



 <?php get_footer();