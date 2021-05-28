<?php
include("header.php");
include "config/config.php";

//escrever nossa query de consulta
$sql = "SELECT * FROM materias ORDER BY idfase ASC";

//executar a query sql
$resultado = $conecta->query($sql);


$listar = false;
// se contem dados na tabela (rows>0) então listar=verdadeiro
if($resultado->num_rows > 0){
    $listar = true;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Tarefas Show  (beta)</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/rowcss.css" rel="stylesheet">
    <!-- Custom styles for this template -->  
  </head>
  <body class="fundogeral">
    <div class="container">

      <div class="fundoindex ">
        <p class="fraseOla">Matemática</p>
                      <?php
// listagem de dados da tabela
 while($registro = $resultado->fetch_assoc()){
?>
<div class="row">
<div class="">
<a href="jogos/soma/fase.php?pergunta=boa&id=7&id_fase=3">
<section class="thumbnail fundoindex col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
<div class="centro">

 <img src="images/soma.png" class="img-circle imagemateria">  
 </div> 
 <div class="caption centro">
 Nome: <?php echo $registro['fase'] ?>

 </div>
 </a>


</section>
<?php
 }
?>

</div>
</div>

      <!-- Example row of columns -->
      <!-- Site footer -->
      <footer class="footer fundofooter fixed-bottom">
        <p>&copy; Copy Right 2017 - Produzido por Luccas Marques</p>
      </footer>
    
    <script src="../../../../dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

