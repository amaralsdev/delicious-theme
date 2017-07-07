<?php
/**
* Formulário baseado em: http://www.pinceladasdaweb.com.br/blog/2010/10/15/como-colocar-um-formulario-de-contato-no-wordpress-sem-o-uso-de-plugin/#viewSource
*
* Mascara de campo: http://digitalbush.com/projects/masked-input-plugin/
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
      if (!noempty($_POST['nome']) or !is_email($_POST['email']) or !noempty($_POST['msg'])) {
        $_SESSION['info'] = 'Preencha todos campos corretamente.';

         
      }
      
      else {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
         $email = $_POST["email"];
         $messagem = $_POST['msg'];

        $headers = 'From: ' . $_POST['email'] . "\r\n" .
            'Reply-To: ' . $_POST['email']  . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
     
     $email_subject = "Novo contato de: \n $nome";

     $email_body = "Você recebeu uma nova mensagem de $nome.\n".
                "Telefone: $telefone.\n".
                "Mensagem:\n $messagem";

        if(@mail(get_bloginfo('admin_email'), $_POST['nome'], $email_body, $headers)) {
          

          $_SESSION['info'] = 'E-mail enviado com sucesso.';
          header('Location: http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
          exit;
        } else {
          $_SESSION['info'] = 'Erro no servidor.';

        }
      }
      ?>
<script type="text/javascript">
var myvar = <?php echo json_encode(get_bloginfo('url') .'#contato'); ?>;
//alert(myvar);
window.location = '#contato';

</script>      
    <?php
    }
    
?>

<style type="text/css">
  .list-itens input, textarea {
    padding: 5px;
  }

  #contato .info {
    padding: 20px;
    border-left: 2px solid #f00;
    background: rgba(255, 255, 255, 0.63);
    transition: 0.5s all ease-in-out;
    -webkit-transition: 0.5s all ease-in-out;
    -moz-transition: 0.5s all ease-in-out;
}

</style>
  <form method="post" action="">
       
        <input type="text" class="left" id="nome" name="nome" placeholder="Seu nome" value="<?php echo h(@$_POST['nome']) ?>" id="nome" />

        <input type="text" class="center" id="tel" name="telefone" placeholder="Informe seu telefone" value="<?php echo h(@$_POST['telefone']) ?>" id="telefone" />
        
        <input type="text" class="right" id="email" name="email" placeholder="E-mail" value="<?php echo h(@$_POST['email']) ?>" id="email" />
        
        
          <textarea class="col-sm" rows="5" placeholder="Mensagem" name="msg"><?php echo h(@$_POST['msg']) ?></textarea>
      
          <input type="submit" name="enviar" value="Enviar" />
           <?php
          if (isset($_SESSION['info'])) {
            echo '<div class="info">' . $_SESSION['info'] . '';
            unset($_SESSION['info']);
          }
        ?>
        </div>
    </form>
    



<?php

