<?php
/*
 * Template Name: Mentoria - Template de Serviço
 * Template Post Type: servicos
 */
 
 get_header();  ?>

 <div class="py-5">
    <div class="container">
        <p class="h2 text-uppercase">Como posso te ajudar</p>
        <div class="row">

        </div>
    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <?php the_field('titulo_o_que_esperar'); ?>
                <?php the_field('texto_o_que_esperar'); ?>

            </div>
            <div class="col-md-12 order-md-1">
                <?php the_field('titulo_citacao'); ?>
                <?php the_field('citacao'); ?>
            </div>
            <div class="col-md-6 order-md-3">
                <?php the_field('texto_a_mentoria'); ?>
            </div>
        </div>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php the_field('titulo_escolha_do_mentor'); ?>
                <?php the_field('imagem_escolha_do_mentor'); ?>
                <?php the_field('texto_escolha_do_mentor'); ?>

            </div>
            <div class="col-md-6">
                <?php the_field('titulo_beneficios'); ?>
                <?php the_field('texto_beneficios'); ?>
            </div>
            <div class="col-md-12">
                <a class="btn btn-primary text-danger mt-4" href="<?php the_field('link_cta'); ?>"><?php the_field('texto_cta'); ?></a>
            </div>
        </div>
    </div>
</div>



 <?php get_footer();