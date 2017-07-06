<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Delicious
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://netpix.com.br/', 'delicious' ) ); ?>"><?php
				printf( esc_html__( '%s', 'delicious' ), 'NETPIX &copy Agência Web 2017' );
			?></a>
			<span class="sep"> | </span>
			<?php
				
				printf( esc_html__( '%1$s', 'delicious' ), 'Todos os direitos reservados', '<a href="https://automattic.com/">Nathan Amaral</a>' );
			?>
		<a href="#" class="subir">Subir
         <img src="<?php echo get_template_directory_uri() .'/assets/images/back_top_bg.png'?>">
		</a>
		</div><!-- .site-info -->

		
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
/*jQuery(document).ready(function($) {
   

  
  
   
});*/

//script que encontrei a um tempo e utilizo nos meus projetos para rolagem
jQuery(document).ready(function($a) {


	//scroll definido para subir ao topo
	//se o topo for maior que 100
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//eventop click do botao para subir ao topo
	$('.subir').click(function(){
		$('html, body').animate({scrollTop : 0},500);//velocidade
		return false;
	});


	//scroll definido para ancoragem (secoes)
   $a.easing.easeInOutExpo = function (x, t, b, c, d) { // definição do efeito que será posteriormente usado no animate
      if (t==0) return b;
      if (t==d) return b+c;
      if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
      return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
   }

   $a('a[href*="#"]:not([href="#"])').click(function(event){
      event.preventDefault();
      $a('html,body').animate({
         scrollTop:$a(this.hash).offset().top
      }, {
         duration: 1000,
         easing: 'easeInOutExpo' // basta usar o mesmo nome que você definiu acima ;)
      });
   });
   
   
   
   
   //customizer
   
});




</script>
</body>
</html>
