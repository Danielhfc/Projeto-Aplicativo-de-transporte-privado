<?php 
  if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $sql = "SELECT * FROM viagens WHERE id = ?";

    if($stmt = mysqli_prepare($con, $sql)){
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      $param_id = trim($_GET['id']);

      if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          echo "<p>";
          echo "<b>Cliente:</b> " . $row['cliente'] . "<br>";
          echo "<b>Motorista:</b> " . $row['motorista'] . "<br>";
          echo "<b>Origem:</b> " . $row['origem'] . "<br>";
          echo "<b>Destino:</b> " . $row['destino'] . "<br>";
          echo "<b>Valor:</b> R$" . $row['valor'] . "<br>";
          echo "<b>Data:</b> " . $row['data'] . "<br>";
          echo "<b>Comentario:</b> " . $row['destino'] . "<br>";
          echo "</p>";
      } else echo 'error 1';
      
   }else echo 'error2';
  }
  
  mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>