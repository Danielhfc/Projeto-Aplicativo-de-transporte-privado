<?php 

if(isset($_POST['id'] ) && !empty($_POST['id'])){
  $id = $_POST['id'];

  $sql = "DELETE FROM motoristas WHERE id=?";

  if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);

    $param_id = trim($_POST['id']);

    if(mysqli_stmt_execute($stmt)){
      echo 'Excluido';
    }else echo 'error';
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);
}else if(empty(trim($_GET['id']))){
    echo 'Cliente não identificado';
  
}

global $wp;
?>

<body>
  
<div class="signup-form">
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

    <p>Tem certeza que quer apagar esse cliente?</p>
    <input type="submit" value="SIM">
    <a href="<?php echo home_url($wp->request) ?>?acao=home">NÃO</a>
    
</form>
</div> 
</body>