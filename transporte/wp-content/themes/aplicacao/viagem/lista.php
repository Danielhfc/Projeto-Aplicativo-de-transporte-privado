<?php 
$sql = "SELECT * FROM viagens";

if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      
      echo '
      <tr>
        <td> '. $row["cliente"] .' </td>
        <td> '. $row["destino"] .' </td>
        <td>
          <a href="?acao=ver&id='.$row['id'].'" class="ver" data-toggle="tooltip"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xE8B6;</i></a>
          <a href="?acao=editar&id= '.$row['id'].'" class="edit" data-toggle="tooltip"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        </td>
    </tr>
      ';
    }
    
  }else echo 'error';
  
}
mysqli_close($con);
?>