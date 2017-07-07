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


/*defina a imagem em destaque*/
if (get_theme_mod('imagem_destaque')){
$bg_home = get_theme_mod('imagem_destaque');
}else{
$bg_home = get_template_directory_uri() .'/assets/images/slide1_bg.jpg';
}

/*define o título*/


/*subtitulo*/


/*descricao*/

 ?>

	
         <section id="home" style="background-image: url('<?php echo $bg_home ?>');">
         <div class="container">
            <div id="layer">
         	<h1>Bem vindo ao nosso restaaurante</h1>
         	<h2>- Confira nosso cardápio -</h2>
         	<span class="separator"></span>
         	<p class="font-normal">TODOS OS NOSSOS PRATOS SÃO FEITOS COM MUITO AMOR E DEDICAÇÃO...</p>
         	</div>
         	
         </div>
         <a href="#about" id="to-about" class="scroll">
            <div class="to-section">
         		Sobre nós...
         	</div>
         </a>
         </section>

		
<?php

//get_footer();
