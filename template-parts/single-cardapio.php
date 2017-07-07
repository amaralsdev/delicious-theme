<?php 
/*
*exibe cardapios uicos
*/
$args = array( 'post_type' => 'cardapio');
 $the_query = new WP_Query( $args ); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ('cardapio' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!--<?php delicious_posted_on(); ?>-->
		</div><!-- .entry-meta -->

		<?php
		endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php while ( have_posts() ) : the_post(); ?>
      
        <div class="thumbnail-post col-sm-4">
	     <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'original' );?>">
	    </div>
        <div class="post-conteudo col-sm-8"><?php the_content(); ?></div>
    <?php endwhile; ?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
 