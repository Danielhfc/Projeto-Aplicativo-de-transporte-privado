<?php
//Template Name: Pagamentos
?>

<?php get_header(); ?>


  
<?php 
  $con = mysqli_connect("localhost", "root", "", "aplicacao_transporte");

  if($con === false) {
    die("Connection failed: " . mysqli_connect_error());
  }//else echo 'Conectado';

  switch($_GET['acao']){
    case 'ver':
      require('pagamentos/read.php');
      break;
    default: 

    echo "<table class='table table-bordered'>";
    echo "<thead>";
          echo  "<tr>";
          echo      "<th>Viagem</th>";
          echo      "<th>Valor</th>";
          echo      "<th>Ações</th>";
        echo    "</tr>";
      echo  "</thead>";
     echo   "<tbody>";
          require('pagamentos/lista.php');       
      echo  "</tbody>";
    echo "</table>";

      
    break;
  }



 
?>


