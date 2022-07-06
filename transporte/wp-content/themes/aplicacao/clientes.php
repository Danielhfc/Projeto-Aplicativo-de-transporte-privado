<?php
//Template Name: Clientes
?>

<?php get_header(); ?>


  
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
    
     echo '
     <body>
      <div class="container-xl">
	      <div class="table-responsive">
		      <div class="table-wrapper">
		      	<div class="table-title">
				      <div class="row">
					      <div class="col-sm-6">
						      <h2>Gerenciar <b>Clientes</b></h2>
				      	</div>
				      	<div class="col-sm-6">
						      <a href="?acao=criar" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Adicionar Cliente</span></a>						
					      </div>
              </div>
		      	</div>
			      <table class="table table-striped table-hover">
				      <thead>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </thead>
				      <tbody>';
                require("cliente/lista.php");
            echo '</table>
          </div>
        </div>
      </div>
    </body>
     ';

      
    break;
  }



 
?>


