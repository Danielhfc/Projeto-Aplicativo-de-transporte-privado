<?php 
$sql = "SELECT * FROM cupons";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){

      echo '
      <tr>
        <td> '. $row["nome"] .' </td>
        <td> '. $row["valor"] .' </td>
        <td> '. $row["quantidade"] .' </td>
        <td>
          <a href="?acao=excluir&id='.$row['id'].'" class="delete" data-toggle="tooltip"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
        </td>
    </tr>
      ';
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>