<?php 

$nome = $email = $telefone = $cnh = $senha = $nascimento = $veiculo = $placa = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_nome = trim($_POST['nome']);
  $var_email = trim($_POST['email']);
  $var_telefone = trim($_POST['telefone']);
  $var_cnh = trim($_POST['cnh']);
  $var_senha = trim($_POST['senha']);
  $var_nascimento = trim($_POST['nascimento']);
  $var_veiculo = trim($_POST['veiculo']);
  $var_placa = trim($_POST['placa']);
  $sql = "INSERT INTO motoristas (nome, email, telefone, cnh, senha, nascimento, veiculo, placa) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "ssssssss", $param_nome, $param_email , $param_telefone , $param_cnh, $param_senha, $param_nascimento, $param_veiculo, $param_placa);

    $param_nome = $var_nome;
    $param_email = $var_email;
    $param_telefone = $var_telefone;
    $param_cnh = $var_cnh;
    $param_senha = $var_senha;
    $param_nascimento = $var_nascimento;
    $param_veiculo = $var_veiculo;
    $param_placa = $var_placa;

    if(mysqli_stmt_execute($stmt)){
      echo 'Cadastrado com sucesso';
    }else echo 'error';
  } else echo 'error';
  mysqli_stmt_close($stmt);
  
}
mysqli_close($con);

global $wp;
?>


<form action="" method="POST">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Cnh</label>
        <input type="text" name="cnh" class="form-control" value="<?php echo $cnh; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="senha" class="form-control" value="<?php echo $senha; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Nascimento</label>
        <input type="text" name="nascimento" class="form-control" value="<?php echo $nascimento; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Veiculo</label>
        <input type="text" name="veiculo" class="form-control" value="<?php echo $veiculo; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Placa do veículo</label>
        <input type="text" name="placa" class="form-control" value="<?php echo $placa; ?>" required>
    </div>
    <input type="submit" value="Cadastrar">
    <input type="hidden" name="cadastrar" value="1">
</form>