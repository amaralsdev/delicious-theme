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
$titulo_home = get_theme_mod('h1_destaque','Bem vindo ao nosso restaaurante');


/*subtitulo*/
$subtitulo_home = get_theme_mod('subtitulo_destaque','- Confira nosso cardápio -');


/*descricao*/
$texto_home = get_theme_mod('texto_destaque','TODOS OS NOSSOS PRATOS SÃO FEITOS COM MUITO AMOR E DEDICAÇÃO...');

 ?>

	
         <section id="home" style="background-image: url('<?php echo $bg_home ?>');">
         <div class="container">
            <div id="layer">
         	<h1><?php echo $titulo_home ?></h1>
         	<h2><?php echo $subtitulo_home ?></h2>
         	<span class="separator"></span>
         	<p class="font-normal"><?php echo wpautop($texto_home) ?></p>
         	</div>
         	
         </div>
         <a href="#about" id="to-about" class="scroll">
            <div class="to-section">
         		Sobre nós...
         	</div>
         </a>
         </section>

		
<?php
