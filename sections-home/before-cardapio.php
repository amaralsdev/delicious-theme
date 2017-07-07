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

 ../'
 */


if (get_theme_mod('bg_retangulo_top')){
$bg_retangulo_top = get_theme_mod('bg_retangulo_top');
}else{
$bg_retangulo_top = get_template_directory_uri() .'/assets/images/slide3_bg.jpg';
}

if (get_theme_mod('text_retangulo_top')){
$text_retangulo_top= get_theme_mod('text_retangulo_top');
}else{
$text_retangulo_top = 'Deliciosos pratos preparados para os melhores paladares';
}
?>

	
         <section id="before-cardapio" style="background-image: url('<?php echo $bg_retangulo_top ?>');">
         <div class="container">
            <div class="container">
               <div id="layer">
         	     <h1><?php echo $text_retangulo_top ?></h1>
         	   </div>
         	
            </div>
         </div>
         
         </section>

		
<?php

//get_footer();
