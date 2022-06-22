<?php 
  if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $sql = "SELECT * FROM pagamentos WHERE id = ?";

    if($stmt = mysqli_prepare($con, $sql)){
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      $param_id = trim($_GET['id']);

      if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          echo "<p>";
          echo "<b>Número do cartão:</b> " . $row['cartao'] . "<br>";
          echo "<b>Cliente:</b> " . $row['cliente'] . "<br>";
          echo "<b>Motorista:</b> " . $row['motorista'] . "<br>";
          echo "<b>Viagem:</b> " . $row['viagem'] . "<br>";
          echo "<b>Valor:</b> R$" . $row['valor'] . "<br>";
          echo "</p>";
      } else echo 'error 1';
      
   }else echo 'error2';
  }
  
  mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>