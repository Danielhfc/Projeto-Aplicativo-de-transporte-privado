<?php 
$sql = "SELECT * FROM clientes";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      
      echo "<tr>";
      echo "<td>" . $row['nome'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>";
      echo "<a href='?acao=ver&id=" . $row['id'] . "'> Ver</a>";
      echo "<a class='edit' title='Edit' data-toggle='tooltip' href='?acao=editar&id=" . $row['id'] . "'> <i class='material-icons'>&#xE254;</i></a>";
      echo "<a class='delete' title='Delete' data-toggle='tooltip' href='?acao=excluir&id=" . $row['id'] . "'> <i class='material-icons'>&#xE872;</i></a>" . "<br>";
      echo "</td>";
      echo "</tr>";
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>