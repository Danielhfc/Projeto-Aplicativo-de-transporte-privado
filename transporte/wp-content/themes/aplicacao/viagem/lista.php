<?php 
$sql = "SELECT * FROM viagens";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      
      echo "<tr>";
      echo "<td>" . $row['cliente'] . "</td>";
      echo "<td>" . $row['destino'] . "</td>";
      echo "<td>";
      echo "<a href='?acao=ver&id=" . $row['id'] . "'> Ver</a>";
      echo "</td>";
      echo "</tr>";
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>