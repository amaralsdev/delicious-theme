<?php
/**
* The template name: Contato
* formulário baseado em: http://www.pinceladasdaweb.com.br/blog/2010/10/15/como-colocar-um-formulario-de-contato-no-wordpress-sem-o-uso-de-plugin/#viewSource
*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delicious
 */
 
    function h($str) {
    	return htmlentities($str);
    }
     
    function noempty($str) {
    	if (preg_match('/[a-z]/', $str))
    		return true;
    	else
    		return false;
    }
     
    if (isset($_POST['enviar'])) {
    	if (!noempty($_POST['nome']) or !noempty($_POST['assunto']) or !is_email($_POST['email']) or !noempty($_POST['msg'])) {
    		$_SESSION['info'] = 'Preencha todos campos corretamente.';
    	}
    	
    	else {
    		$headers = 'From: ' . $_POST['email'] . "\r\n" .
    		    'Reply-To: ' . $_POST['email']  . "\r\n" .
    		    'X-Mailer: PHP/' . phpversion();
     
    		if(@mail(get_bloginfo('admin_email'), $_POST['assunto'], $_POST['msg'], $headers)) {
    			$_SESSION['info'] = 'E-mail enviado com sucesso.';
    			header('Location: http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
    			exit;
    		} else {
    			$_SESSION['info'] = 'Erro no servidor.';
    		}
    	}
    }
    
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                ?>
                    <form method="post" action="" class="contato">
    		<?php
    			if (isset($_SESSION['info'])) {
    				echo '<div class="info">' . $_SESSION['info'] . '';
    				unset($_SESSION['info']);
    			}
    		?>
    		<div>
    			<label for="nome">* Nome</label><br />
    			<input type="text" name="nome" value="<?php echo h(@$_POST['nome']) ?>" id="nome" />
    		</div>
    		<div>
    			<label for="email">* E-mail</label><br />
    			<input type="text" name="email" value="<?php echo h(@$_POST['email']) ?>" id="email" />
    		</div>
    		<div>
    			<label for="assunto">* Assunto</label><br />
    			<input type="text" name="assunto" value="<?php echo h(@$_POST['assunto']) ?>" id="assunto" />
    		</div>
    		<div>
    			<label for="msg">* Mensagem</label><br />
    			<textarea name="msg"><?php echo h(@$_POST['msg']) ?></textarea>
    		</div>
    		<div>
    			<input type="submit" name="enviar" value="Enviar" />
    		</div>
    </form>
    <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
