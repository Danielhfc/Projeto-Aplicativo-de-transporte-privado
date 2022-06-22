<?php
//Template Name: Clientes
?>

<?php get_header(); ?>

<div class="mostrar-cliente">
  <h2>
    <a href="?acao=criar">Novo Cliente</a>
  </h2>
  
<?php 
  $con = mysqli_connect("localhost", "root", "", "aplicacao_transporte");

  if($con === false) {
    die("Connection failed: " . mysqli_connect_error());
  }//else echo 'Conectado';

  switch($_GET['acao']){
    case 'criar':
      require('cliente/criar.php');
    break;
    case 'ver':
      require('cliente/read.php');
      break;
    case 'editar':
      require('cliente/editar.php');
      break;
    case 'excluir':
      require('cliente/excluir.php');
      break;
    default:
      require('cliente/lista.php');
    break;
  }



 
?>
</div>

