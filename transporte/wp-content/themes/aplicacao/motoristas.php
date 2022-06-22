<?php
//Template Name: Motoristas
?>

<?php get_header(); ?>


  
<?php 
  $con = mysqli_connect("localhost", "root", "", "aplicacao_transporte");

  if($con === false) {
    die("Connection failed: " . mysqli_connect_error());
  }//else echo 'Conectado';

  switch($_GET['acao']){
    case 'criar':
      require('motorista/criar.php');
    break;
    case 'ver':
      require('motorista/read.php');
      break;
    case 'editar':
      require('motorista/editar.php');
      break;
    case 'excluir':
      require('motorista/excluir.php');
      break;
    default:
    echo "<div class='col-sm-4'>";
    echo "<a href='?acao=criar'><button  type='button' class='btn btn-info add-new'><i class='fa fa-plus'></i> Adicionar motorista</button></a> </div>";
  

    echo "<table class='table table-bordered'>";
    echo "<thead>";
          echo  "<tr>";
          echo      "<th>Nome</th>";
          echo      "<th>Email</th>";
          echo      "<th>Ações</th>";
        echo    "</tr>";
      echo  "</thead>";
     echo   "<tbody>";
          require('motorista/lista.php');       
      echo  "</tbody>";
    echo "</table>";

      
    break;
  }



 
?>


