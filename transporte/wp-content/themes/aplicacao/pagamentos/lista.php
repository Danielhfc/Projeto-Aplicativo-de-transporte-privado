<?php 
$sql = "SELECT * FROM pagamentos";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      
      echo "<tr>";
      echo "<td>" . $row['viagem'] . "</td>";
      echo "<td>" . $row['valor'] . "</td>";
      echo "<td>";
      echo "<a href='?acao=ver&id=" . $row['id'] . "'> Ver</a>";
      echo "</td>";
      echo "</tr>";
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>