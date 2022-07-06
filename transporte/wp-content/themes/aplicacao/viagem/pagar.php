<?php 

$cliente = $motorista = $cartao = $codigo = $validade = $viagem = $valor = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_cliente = trim($_POST['cliente']);
  $var_motorista = trim($_POST['motorista']);
  $var_cartao = trim($_POST['cartao']);
  $var_codigo = trim($_POST['codigo']);
  $var_validade = trim($_POST['validade']);
  $var_viagem = trim($_POST['viagem']);
  $var_valor = trim($_POST['valor']);
  $sql = "INSERT INTO pagamentos (cliente, motorista, cartao, codigo, validade, viagem, valor) VALUES (?, ?, ?, ?, ?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "sssssss", $param_cliente, $param_motorista , $param_cartao , $param_codigo, $param_validade, $param_viagem, $param_valor);

    $param_cliente = $var_cliente;
    $param_motorista = $var_motorista;
    $param_cartao = $var_cartao;
    $param_codigo = $var_codigo;
    $param_validade = $var_validade;
    $param_viagem = $var_viagem;
    $param_valor = $var_valor;

    if(mysqli_stmt_execute($stmt)){
      echo 'Pago com sucesso';
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
    <div class="form-group">
        <label for="">Cliente</label>
        <input type="text" name="cliente" class="form-control" value="<?php echo $cliente; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Motorista</label>
        <input type="motorista" name="motorista" class="form-control" value="<?php echo $motorista; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Número do cartão</label>
        <input type="text" name="cartao" class="form-control" value="<?php echo $cartao; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Código de segurança</label>
        <input type="text" name="codigo" class="form-control" value="<?php echo $codigo; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Validade</label>
        <input type="text" name="validade" class="form-control" value="<?php echo $validade; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Viagem</label>
        <input type="text" name="viagem" class="form-control" value="<?php echo $viagem; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Valor</label>
        <input type="text" name="valor" class="form-control" value="<?php echo $valor; ?>" >
    </div>
    <div class="form-group">
            <button type="submit" value="Cadastrar" class="btn btn-success btn-lg btn-block">Pagar</button>
        </div>
      <input type="hidden" name="cadastrar" value="1">
  </form>
</div> 
</body>