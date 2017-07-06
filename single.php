<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Delicious
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( 'post' === get_post_type()) {
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
			
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		}
		//verifica o tipo de post
		if ('cardapio' === get_post_type() ) {
			$args = array( 'post_type' => 'cardapio');
            $the_query = new WP_Query( $args ); 
            ?>
            <?php
            
			get_template_part('template-parts/single-cardapio','page');


            }else {
             echo wpautop( 'Desculpe, nenhum post publicado' );
            }
            wp_reset_postdata();
		?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
//get_sidebar();
get_footer();
