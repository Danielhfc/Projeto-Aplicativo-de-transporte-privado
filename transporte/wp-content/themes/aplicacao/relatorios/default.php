<select name="Motorista" id="select-motorista">
  <option selected="selected">Motorista</option>
<?php 
$sql = mysqli_query($con, "SELECT nome FROM motoristas");

while ($row = $sql->fetch_assoc()){
$motorista = $row['nome'];
echo "<option value='$motorista'>$motorista</option>";
}
?>
</select>

<a id="link" href="transporte/relatorio?acao=id">Emitir relatório de viagens</a>

<script>
    $(document).ready(function(){
        $("#select-motorista").change(function(){

            var selectedid  = $("#select-motorista option:selected").val();
            $("#link").attr("href","transporte/relatorio?acao=motorista&nome="+selectedid);  
        });
    });
</script>

<select name="Motorista" id="select-faturamento">
  <option selected="selected">Motorista</option>
<?php 
$sql = mysqli_query($con, "SELECT nome FROM motoristas");

while ($row = $sql->fetch_assoc()){
$motorista = $row['nome'];
echo "<option value='$motorista'>$motorista</option>";
}
?>
</select>

<a id="link2" href="transporte/relatorio?acao=id">Emitir relatório de faturamento</a>

<script>
    $(document).ready(function(){
        $("#select-faturamento").change(function(){

            var selectedid  = $("#select-faturamento option:selected").val();
            $("#link2").attr("href","transporte/relatorio?acao=faturamento&nome="+selectedid);  
        });
    });
</script>
