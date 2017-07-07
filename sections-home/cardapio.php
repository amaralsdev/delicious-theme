<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delicious
 */

if (get_theme_mod('nome_cardapio')){
$nome_cardapio= get_theme_mod('nome_cardapio');
}else{
$nome_cardapio = 'Cardápio';
}

if (get_theme_mod('descricao_cardapio')){
$descricao_cardapio= get_theme_mod('descricao_cardapio');
}else{
$descricao_cardapio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,';
}
?>
         <section id="cardapio">
         <div class="container">
            <div id="layer">
         	<h1><?php echo $nome_cardapio ?></h1>
         	<p class="font-normal">
            <?php echo wpautop( $descricao_cardapio)?>
            </p>
         	</div>

            <div class="separator separator-cardapio"></div>
           <row class="center">
           
            <div class="conteudo center">
           
           <?php get_template_part('template-parts/content-cardapio','page'); ?>
             
            </div>
            </row>
         	
         </div>
         
         </section>

		
<?php

//get_footer();
