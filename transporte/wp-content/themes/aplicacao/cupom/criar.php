<?php 

$nome = $valor = $quantidade = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_nome = trim($_POST['nome']);
  $var_valor = trim($_POST['valor']);
  $var_quantidade = trim($_POST['quantidade']);
  $sql = "INSERT INTO cupons (nome, valor, quantidade) VALUES (?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "sss", $param_nome, $param_valor , $param_quantidade);

    $param_nome = $var_nome;
    $param_valor = $var_valor;
    $param_quantidade = $var_quantidade;

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
          <label for="">Valor</label>
          <input type="text" name="valor" class="form-control" value="<?php echo $valor; ?>" required>
      </div>
      <div class="form-group">
          <label for="">Quantidade</label>
          <input type="text" name="quantidade" class="form-control" value="<?php echo $quantidade; ?>" required>
      </div>
      <div class="form-group">
            <button type="submit" value="Cadastrar" class="btn btn-success btn-lg btn-block">Cadastrar</button>
        </div>
      <input type="hidden" name="cadastrar" value="1">
  </form>
</div> 
</body>