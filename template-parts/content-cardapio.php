<?php 
/*
*fonte: codex
*/
$args = array( 'post_type' => 'cardapio', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 

$novo_cardapio= add_query_arg(array('post_type'=>'cardapio'),admin_url('post-new.php'));

$user = wp_get_current_user();
$permissao = array('editor', 'administrator', 'author');



?>
<?php

if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) : $the_query->the_post();
      // Your loop code
?>
         <ul class="conteudo-cardapio" style="background-image:url('<?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' ); ?>')">
            <li>
               <h3><?php 
               $title = get_the_title(); 
               echo mb_strimwidth($title, 0, 15, '...');
               ?>   
               </h3>
               <p>
               <?php 
               //define total de palavras exibido..
               $content = get_the_content(); 
               echo mb_strimwidth($content, 0, 80, '...');
               ?>
               </p>
               <a href="<?php echo get_permalink($post->ID);?>" class="btn-more">Mais</a>
            </li>
         </ul>
<?php 
wp_reset_postdata();
   endwhile;
else :

  //Se não tover post mostra link para publicar novo post
if( array_intersect($permissao, $user->roles ) ) {
echo '<div class="cardapio-not-found"> '. wpautop( 'Desculpe, nenhum post publicado' ) . '<a href="'. $novo_cardapio .'">Crie um novo agora mesmo</a></div>';

}
endif;
 ?>