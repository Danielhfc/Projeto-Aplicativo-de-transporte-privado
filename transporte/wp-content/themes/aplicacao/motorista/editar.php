<?php 

$nome = $email = $telefone = $senha = $veiculo = $placa = '';

if(isset($_POST['id'] ) && !empty($_POST['id'])){
  $id = $_POST['id'];

  $var_nome = trim($_POST['nome']);
  $var_email = trim($_POST['email']);
  $var_telefone = trim($_POST['telefone']);
  $var_senha = trim($_POST['email']);
  $var_veiculo = trim($_POST['veiculo']);
  $var_placa = trim($_POST['placa']);

  $sql = "UPDATE motoristas SET nome=?,email=?,telefone=?,senha=?,veiculo=?,placa=? WHERE id=?";

  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "ssssssi", $param_nome, $param_email , $param_telefone , $param_senha, $param_veiculo, $param_placa, $param_id);

    $param_nome = $var_nome;
    $param_email = $var_email;
    $param_telefone = $var_telefone;
    $param_senha = $var_senha;
    $param_veiculo = $var_veiculo;
    $param_placa = $var_placa;
    $param_id = $id;

    if(mysqli_stmt_execute($stmt)){
      echo 'Editado com sucesso';
    }else echo 'error';
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);
} else if(isset($_GET['id']) && !empty(trim($_GET['id']))){
  
  $id = trim($_GET['id']);

  $sql = "SELECT * FROM motoristas WHERE id = ?";

    if($stmt = mysqli_prepare($con, $sql)){
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      $param_id = trim($_GET['id']);

      if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          $nome = $row['nome'];
          $email = $row['email'];
          $telefone = $row['telefone'];
          $senha = $row['senha'];
          $veiculo = $row['veiculo'];
          $placa = $row['placa'];
      } else echo 'error 1';
      
   }else echo 'error2';
  }
  
  mysqli_stmt_close($stmt);
}

global $wp;
?>

<body>
<div class="signup-form">
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
        <label for="">Senha</label>
        <input type="text" name="senha" class="form-control" value="<?php echo $senha; ?>">
    </div>
    <div class="form-group">
        <label for="">Veiculo</label>
        <input type="text" name="veiculo" class="form-control" value="<?php echo $veiculo; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Placa do veículo</label>
        <input type="text" name="placa" class="form-control" value="<?php echo $placa; ?>" required>
    </div>
    <div class="form-group">
            <button type="submit" value="Cadastrar" class="btn btn-success btn-lg btn-block">Editar</button>
        </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
</form></div> 
</body>