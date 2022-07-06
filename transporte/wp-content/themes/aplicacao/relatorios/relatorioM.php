<?php 

  if(isset($_GET['nome']) && !empty(trim($_GET['nome']))){
    $name = $_GET['nome'];
    $sql = mysqli_query($con, "SELECT * FROM viagens WHERE motorista = '$name'");

    while ($row = $sql->fetch_assoc()){
          echo'
          <body>
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                  <tr>
                  <th>Cliente</th>
                  <th>Motorista</th>
                  <th>Origem</th>
                  <th>Destino</th>
                  <th>Valor</th>
                  <th>Data</th>
                  <th>Comentário</th>
                </tr>
              </thead>
              <tbody>
            <tr>
              <td> '. $row["cliente"] .' </td>
              <td> '. $row["motorista"] .' </td>
              <td> '. $row["origem"] .' </td>
              <td> '. $row["destino"] .' </td>
              <td> '. $row["valor"] .' </td>
              <td> '. $row["data"] .' </td>
              <td> '. $row["comentario"] .' </td>
          </tr>
                </table>
              </div>
            </div>
          </div>
        </body>
          ';
    }
}

mysqli_close($con);
?>