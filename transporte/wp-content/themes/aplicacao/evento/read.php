<?php 
  if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $sql = "SELECT * FROM eventos WHERE id = ?";

    if($stmt = mysqli_prepare($con, $sql)){
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      $param_id = trim($_GET['id']);

      if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

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
                      <th>Nome</th>
                      <th>Endereco</th>
                      <th>Data Inicial</th>
                      <th>Data Final</th>
                      <th>descricao</th>
                    </tr>
                  </thead>
                  <tbody>
                <tr>
                  <td> '. $row["nome"] .' </td>
                  <td> '. $row["endereco"] .' </td>
                  <td> '. $row["data_inicio"] .' </td>
                  <td> '. $row["data_final"] .' </td>
                  <td> '. $row["descricao"] .' </td>
              </tr>
                </table>
              </div>
            </div>
          </div>
        </body>
          ';
      } else echo 'error 1';
      
   }else echo 'error2';
  }
  
  mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>