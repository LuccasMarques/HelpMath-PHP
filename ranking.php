<?php
include("header.php");

include "config/config.php";
include "model/Conta.class.php";

//escrever nossa query de consulta
$sql = "SELECT * FROM usuarios ORDER BY exp DESC";

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
  <body class="fundogeral" >
    <div class="container">
     <!-- --><br>
<br>


     <!-- listagem de dados -->        
             <div class="col-md-10 col-md-offset-1">
             <div class="table-responsive">
                 <table class="table table-striped ">
                 <thead>
                 <tr class="bg-info">

                 <th class="entrar">Pontuação</th>
                     <th class="entrar"> Nome</th>
                     <th class="entrar">Email</th>
                     </tr>
                 </thead>
<?php
// listagem de dados da tabela
 while($registro = $resultado->fetch_assoc()){
?>
                 <tbody>
                     <tr>
                     <td ><?php echo $registro['exp']; ?></td>
                     <td ><?php echo $registro['nome']; ?></td>
                     <td ><?php echo $registro['email']; ?></td>
                     
                     
                     </tr>
                     
                    
                 </tbody> 
                 
    <?php
        }//fim while
    ?>
                 </table>
                 </div><!-- .table-responsive -->
</div>
     <!-- -->
      <!-- Site footer -->
      <footer class="footer fundofooter fixed-bottom">
        <p>&copy; Company 2017 - Produzido por Luccas Marques</p>
      </footer>
    </div> <!-- /container -->
    <script src="../../../../dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

