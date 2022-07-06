<?php 
$sql = "SELECT * FROM pagamentos";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      
      echo '
      <tr>
        <td> '. $row["viagem"] .' </td>
        <td> '. $row["valor"] .' </td>
        <td>
          <a href="?acao=ver&id='.$row['id'].'" class="ver" data-toggle="tooltip"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xE8B6;</i></a>
          </td>
    </tr>
      ';
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>