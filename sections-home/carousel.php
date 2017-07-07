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

/*modelos estudados: 
*https://github.com/wlada/vue-carousel-3d
*https://www.sitepoint.com/bootstrap-carousel-with-css3-animations/
*https://bootsnipp.com/snippets/VP798
*/

/*
default values
$slide1 = get_theme_mod('slide_1',get_template_directory_uri() .'/assets/images/slider/1.jpg');
$slide2 = get_theme_mod('slide_2',get_template_directory_uri() .'/assets/images/slider/2.jpg');
$slide3 = get_theme_mod('slide_3',get_template_directory_uri() .'/assets/images/slider/3.jpg');
*/


//1
if (get_theme_mod('imagem_galeria1')){
$img_slide1 = get_theme_mod('imagem_galeria1');
}

//2
if (get_theme_mod('imagem_galeria2')){
$img_slide2 = get_theme_mod('imagem_galeria2');
}


//3
if (get_theme_mod('imagem_galeria3')){
$img_slide3 = get_theme_mod('imagem_galeria3');
}

//4
if (get_theme_mod('imagem_galeria4')){
$img_slide4 = get_theme_mod('imagem_galeria4');
}

//5
if (get_theme_mod('imagem_galeria5')){
$img_slide5 = get_theme_mod('imagem_galeria5');
}


?>

	


<section id="galeria">
<div class="content-area">
       
      <!--div criada para receber a imagem de fundo da esquerda-->
      <div class="left-teste">
      </div>
      <!--div criada para receber a imagem de fundo da direita-->
      <div class="right-teste">
      </div>
 <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <?php if($img_slide1) : ?>
    <div class="item active">
       <img src="<?php echo $img_slide1 ?>"/>
     </div>
   <?php endif ; ?>
    

    <?php if($img_slide2) : ?>
   <div class="item">
       <img src="<?php echo $img_slide2 ?>"/>
   </div>
    <?php endif ; ?>

    <?php if($img_slide3) : ?>
   <div class="item">
       <img src="<?php echo $img_slide3 ?>"/>
   </div>
    <?php endif ; ?>

    <?php if($img_slide4) : ?>
   <div class="item">
       <img src="<?php echo $img_slide4 ?>"/>
   </div>
    <?php endif ; ?>

    <?php if($img_slide5) : ?>
   <div class="item">
       <img src="<?php echo $img_slide5 ?>"/>
   </div>
    <?php endif ; ?>
 
    </div>
  
  </div>

  <?php echo 
  '<style> .icon-next::before {
    background-image: url('.get_template_directory_uri() .'/assets/images/slider_nav.png'.');
    
}
.icon-prev::before {
   
    background-image: url('.get_template_directory_uri() .'/assets/images/slider_nav.png'.');
}</style>'
   ;?>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev" ></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
</div>


    <script type="text/javascript">
     

    $(document).ready(function(){

        $('.carousel').on('slid.bs.carousel', function () {

            //aqui pego a imagem do slider ativo dentro das classes .carousel-inner . active e busco a imagem
           var someimage=  $('.carousel-inner .active').first().find('img').attr('src');
           var proximo = $('.carousel-inner .active').next().find('img').attr('src') //captura a proxima imagem
           var anterior = $('.carousel-inner .active').prev().find('img').attr('src') //captura a pimagem anterior
           

          
          //joga a imagem atual na div abaixo do slider
           $('.right-teste').css('background-image','url(' + someimage + ')');
           $('.left-teste').css('background-image','url(' + someimage + ')');
          

        }); 

    });


    </script>


         
</section>

		
<?php
