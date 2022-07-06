<?php 

$cliente = $motorista = $origem = $destino = $valor = $data = $comentario = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_cliente = trim($_POST['cliente']);
  $var_motorista = trim($_POST['motorista']);
  $var_origem = trim($_POST['origem']);
  $var_destino = trim($_POST['destino']);
  $var_valor = trim($_POST['valor']);
  $var_data = trim($_POST['data']);
  $var_comentario = trim($_POST['comentario']);
  $sql = "INSERT INTO viagens (cliente, motorista, origem, destino, valor, data, comentario) VALUES (?, ?, ?, ?, ?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "sssssss", $param_cliente, $param_motorista , $param_origem , $param_destino, $param_valor, $param_data, $param_comentario);

    $param_cliente = $var_cliente;
    $param_motorista = $var_motorista;
    $param_origem = $var_origem;
    $param_destino = $var_destino;
    $param_valor = $var_valor;
    $param_data = $var_data;
    $param_comentario = $var_comentario;

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
<h2>Registrar Viagem</h2>
    <div class="form-group">
        <label for="">Cliente</label>
        <input type="text" name="cliente" class="form-control" value="<?php echo $cliente; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Motorista</label>
        <input type="motorista" name="motorista" class="form-control" value="<?php echo $motorista; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Origem</label>
        <input type="text" name="origem" class="form-control" value="<?php echo $origem; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Destino</label>
        <input type="text" name="destino" class="form-control" value="<?php echo $destino; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Valor</label>
        <input type="text" name="valor" class="form-control" value="<?php echo $valor; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Data</label>
        <input type="text" name="data" class="form-control" value="<?php echo $data; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Comentario</label>
        <input type="text" name="comentario" class="form-control" value="<?php echo $comentario; ?>" >
    </div>
    <div class="form-group">
            <button type="submit" value="Cadastrar" class="btn btn-success btn-lg btn-block">Cadastrar</button>
        </div>
      <input type="hidden" name="cadastrar" value="1">
  </form>
</div> 
</body>