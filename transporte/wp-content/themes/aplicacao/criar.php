<?php 

$nome = $email = $telefone = $cpf = $senha = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $var_nome = trim($_POST['nome']);
  $var_email = trim($_POST['email']);
  $var_telefone = trim($_POST['telefone']);
  $var_cpf = trim($_POST['cpf']);
  $var_senha = trim($_POST['senha']);
  $sql = "INSERT INTO clientes (nome, email, telefone, cpf, senha) VALUES (?, ?, ?, ?, ?)";
  
  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "sssss", $param_nome, $param_email , $param_telefone , $param_cpf, $param_senha);

    $param_nome = $var_nome;
    $param_email = $var_email;
    $param_telefone = $var_telefone;
    $param_cpf = $var_cpf;
    $param_senha = $var_senha;

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
        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label for="">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>">
    </div>
    <div class="form-group">
        <label for="">CPF</label>
        <input type="text" name="cpf" class="form-control" value="<?php echo $cpf; ?>">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="senha" class="form-control" value="<?php echo $senha; ?>">
    </div>
    <input type="submit" value="Cadastrar">
    <input type="hidden" name="cadastrar" value="1">
</form>