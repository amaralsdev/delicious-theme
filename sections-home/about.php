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


if (get_theme_mod('nome_sobre')){
$nome_secao = get_theme_mod('nome_sobre');
}else{
$nome_secao = 'Sobre nós';
}

if (get_theme_mod('legenda_sobre')){
$legenda_sobre = get_theme_mod('legenda_sobre');
}else{
$legenda_sobre = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,';
}


if (get_theme_mod('titulo_sobre')){
$titulo_sobre = get_theme_mod('titulo_sobre');
}else{
$titulo_sobre = 'Quem somos nós';
}

if (get_theme_mod('imagem_sobre')){
$imagem_sobre = get_theme_mod('imagem_sobre');
}else{
$imagem_sobre = get_template_directory_uri() .'/assets/images/about_img1.jpg';
}

if (get_theme_mod('texto_sobre')){
$texto_sobre= get_theme_mod('texto_sobre');
}else{
$texto_sobre = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
}


 ?>

	
         <section id="about">
         <div class="container">
            <div id="layer">
         	<h1><?php echo $nome_secao ?></h1>
         	<p class="font-normal">
            <?php echo wpautop($legenda_sobre)?>
            </p>
         	</div>

            <div class="separator separator-about"></div>
           <row class="left">
            <h3><?php echo $titulo_sobre ?></h3>
            <div class="image left">

                <img src="<?php echo $imagem_sobre ?>">
            
            </div>
            <div class="conteudo rigth">
            <?php echo wpautop($texto_sobre)?>
            </div>
            </row>
         	
         </div>
         
         </section>

		
<?php

//get_footer();
