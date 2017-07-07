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

if (get_theme_mod('bg_retangulo_bottom')){
$bg_retangulo_bottom = get_theme_mod('bg_retangulo_bottom');
}else{
$bg_retangulo_bottom = get_template_directory_uri() .'/assets/images/slide7_bg.jpg';
}

if (get_theme_mod('text_retangulo_bottom')){
$text_retangulo_bottom= get_theme_mod('text_retangulo_bottom');
}else{
$text_retangulo_bottom = 'Aceitamos encomendas para eventos';
}


?>

	
         <section id="encomendas" style="background-image: url('<?php echo $bg_retangulo_bottom ?>');">
         <div class="container">
            <div class="container">
               <div id="layer">
         	     <h1><?php echo $text_retangulo_bottom ?></h1>
         	   </div>
         	
            </div>
         </div>
         
         </section>

		
<?php

//get_footer();
