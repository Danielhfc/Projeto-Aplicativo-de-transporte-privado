<?php
//Template Name: Relatorios
?>

    
<?php get_header(); ?>


<body>
  
<?php 
  $con = mysqli_connect("localhost", "root", "", "aplicacao_transporte");

  if($con === false) {
    die("Connection failed: " . mysqli_connect_error());
  }//else echo 'Conectado';

  switch($_GET['acao']){
    case 'motorista':
      require('relatorios/relatorioM.php');
    break;
    case 'faturamento':
      require('relatorios/relatorioF.php');
      break;
    default:
        require('relatorios/default.php');
      break;
  }
 
?>



</body>
