<?php
/*
 * Template Name: Palestras - Template de Serviço
 * Template Post Type: servicos
 */
 
 get_header();  ?>

 <div class="py-5">
    <div class="container">
        <p class="h2 text-uppercase text-center">Como posso te ajudar</p>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Palestras</h1>
            </div>
        </div>
    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <?php echo wp_get_attachment_image( get_field('imagem_mentoria'), 'full', "", array( "class" => "img-fluid mb-3" ) );  ?>
            </div>
            <div class="col-md-6 align-self-center">
                <?php the_field('texto_mentoria'); ?>
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