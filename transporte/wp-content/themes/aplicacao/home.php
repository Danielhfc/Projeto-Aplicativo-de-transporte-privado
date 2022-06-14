<?php
//Template Name: Home
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
      require('criar.php');
    break;
    case 'ver':
      require('read.php');
      break;
    default:
      require('lista.php');
    break;
  }



 
?>
</div>

