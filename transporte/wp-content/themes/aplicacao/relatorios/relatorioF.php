<?php 

  if(isset($_GET['nome']) && !empty(trim($_GET['nome']))){
    $name = $_GET['nome'];
    $sql = mysqli_query($con, "SELECT * FROM pagamentos WHERE motorista = '$name'");

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
                  <th>Cartao</th>
                      <th>Cliente</th>
                      <th>Motorista</th>
                      <th>Viagem</th>
                      <th>Valor</th>
                </tr>
              </thead>
              <tbody>
            <tr>
            <td> '. $row["cartao"] .' </td>
            <td> '. $row["cliente"] .' </td>
            <td> '. $row["motorista"] .' </td>
            <td> '. $row["viagem"] .' </td>
            <td> '. $row["valor"] .' </td>
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