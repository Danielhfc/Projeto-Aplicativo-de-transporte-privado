<?php 
$sql = "SELECT * FROM clientes";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo "<p>";
      echo "<b>Nome:</b> " . $row['nome'] . "<a href='?acao=ver&id=" . $row['id'] . "'> Ver</a>" . "<br>";
      echo "<b>Email:</b> " . $row['email'] . "<br>";
      echo "</p>";
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>