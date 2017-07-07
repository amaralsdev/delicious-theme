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

  
if (get_theme_mod('titulo_contatos')){
$titulo = get_theme_mod('titulo_contatos');
}else{
  $titulo = 'Fale conosco';
}

$descricao = get_theme_mod('desc_contatos','Nulla facilisi. Donec at ligula finibus dolor scelerisque porttitor. In hac habitasse platea dictumst. Praesent posuere, sem gravida maximus bibendum, sapien erat venenatis massa, et finibus nibh eros eget quam. Aenean pellentesque ornare enim quis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In a semper mi, vitae condimentum ligula. Nam vehicula tellus vitae sollicitudin iaculis.');
$sobre = get_theme_mod('sobre_contatos','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,');
$fone = get_theme_mod('fone_contatos','(00) 1234-5678');
$horario = get_theme_mod('hr_contatos','SEG. - SÁB. 11h às 15h');
$email = get_theme_mod('email_contatos','setor@seudominio.com.br');
$site = get_theme_mod('email_contatos', get_bloginfo('url'));
$endereco = get_theme_mod('email_contatos', 'Endereço');

?>
         <section id="contato" class="f-normal">
         <div class="container">
            <div id="layer">
         	<h1><?php echo $titulo ?></h1>
         	 <p class="f-normal">
            <?php echo wpautop($descricao)?>
           </p>
         	</div>

            <div class="separator separator-contato"></div>
           <div class="row  text-left">
           <div class="col-md-3 blc-left">
           <p>
             <?php echo wpautop($sobre) ?>
           </p>
           <ul>

          <?php if ($fone) : ?>
           <li class="telefone">
           <?php echo $fone ?>
           </li>
          <?php endif ; ?>

           <?php if ($horario) : ?>
           <li class="horario">
           <?php echo $horario ?>
           </li>
           <?php endif ; ?>

           <?php if ($email) : ?>
           <li class="email">
           <?php echo $email ?>
           </li>
           <?php endif ; ?>

           <?php if ($site) : ?>
           <li class="site">
           <?php echo $site ?>
           </li>
           <?php endif ; ?>
           
           <?php if ($endereco) : ?> 
           <li class="local">
           <?php echo $endereco ?>
           </li>
           <?php endif ; ?>
           </ul>
           </div>


             <div class="col-md-9 blc-right">
         <form action="" method="post">
             <div class="list-itens">
              <?php get_template_part('sections-home/formulario','page'); ?>
             </div>

             
         </form>
             </div>
            
           </div>
         	
         </div>
         

         
         </section>

		
<?php

//get_footer();
