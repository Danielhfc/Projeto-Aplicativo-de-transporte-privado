<?php 

$nome = $endereco = $data_inicio = $data_final = $descricao = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_nome = trim($_POST['nome']);
  $var_endereco = trim($_POST['endereco']);
  $var_data_inicio = trim($_POST['data_inicio']);
  $var_data_final = trim($_POST['data_final']);
  $var_descricao = trim($_POST['descricao']);
  $sql = "INSERT INTO eventos (nome, endereco, data_inicio, data_final, descricao) VALUES (?, ?, ?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "sssss", $param_nome, $param_endereco, $param_data_inicio , $param_data_final, $param_descricao);

    $param_nome = $var_nome;
    $param_endereco = $var_endereco;
    $param_data_inicio = $var_data_inicio;
    $param_data_inicio = $var_data_inicio;
    $param_descricao = $var_descricao;

    if(mysqli_stmt_execute($stmt)){
      echo 'Cadastrado com sucesso';
    }else echo 'error';
  } else echo 'error';
  mysqli_stmt_close($stmt);
  
}
mysqli_close($con);

global $wp;
?>

<body>
<div class="signup-form">
  <form action="" method="POST">
  <h2>Registrar Cliente</h2>
      <div class="form-group">
          <label for="">Nome</label>
          <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" required>
      </div>
      <div class="form-group">
          <label for="">endereco</label>
          <input type="text" name="endereco" class="form-control" value="<?php echo $endereco; ?>" required>
      </div>
      <div class="form-group">
          <label for="">Data de início</label>
          <input type="text" name="data_inicio" class="form-control" value="<?php echo $data_inicio; ?>" required>
      </div>
      <div class="form-group">
          <label for="">Data de término</label>
          <input type="text" name="data_final" class="form-control" value="<?php echo $data_final; ?>" required>
      </div>
      <div class="form-group">
          <label for="">Descricao</label>
          <input type="text" name="descricao" class="form-control" value="<?php echo $descricao; ?>" required>
      </div>
      <div class="form-group">
            <button type="submit" value="Cadastrar" class="btn btn-success btn-lg btn-block">Cadastrar</button>
        </div>
      <input type="hidden" name="cadastrar" value="1">
  </form>
</div> 
</body>