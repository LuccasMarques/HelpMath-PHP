<?php 


include "config/config.php";
include ("header.php");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Help Math</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/rowcss.css" rel="stylesheet">
    <!-- Custom styles for this template -->  
  </head>
  <body class="fundogeral ">
    <div class="container">
    <div class="fundoindex">
    <section class="row  placeholders">
    <?php
    $varConclui = "conclui";
    
  if(isset($_GET['completa'])){
    $varCompleta = $_GET['completa'];
  if($varCompleta== $varConclui){
    echo "<div class='alert alert-success' role='alert'> Você concluiu esta sequência de questões, parabéns!!!</div>
    <audio src='audio/teste.mp3' autoplay></audio>";

  }
}else {echo "<div class=''></div>";
}
          ?>
    <p class="textousuario text-center">Bem-vindo <?php echo $nomeUsuario ?></p>
            <div class="col-md-4 col-sm-3 placeholder text-center">

            <img src="images/<?php echo $imageUsuario;?>" class="imagemusuario" alt="">

            </div>
            <div class="col-md-4 col-sm-3">
            <div class="">
            <label class="textindex titulotext">Nome Usuário:</label> <label class=" textindex"> <?php echo $nomeUsuario ?></label>
            </div>
            <div class="">
            <label class="textindex titulotext">Idade: </label> <label class="textindex"><?php echo $idadeUsuario ?></label>
            </div>
            <div class="">
            <label class="textindex titulotext">Cidade: </label> <label class="textindex"><?php echo $cidadeUsuario ?></label>
            </div>
            <div class="">
            <label class="textindex titulotext">Experiência: </label> <label class="textindex"><?php echo $expUsuario ?></label>
            </div>
            

            </div>
            

             </section>
             </div>
      <!-- Example row of columns -->
      <!-- Site footer -->
      <footer class="footer fundofooter fixed-bottom">
        <p>&copy; Copy Right 2017 - Produzido por Luccas Marques</p>
    </footer>  
    </div> <!-- /container -->
   
    <script src="../../../../dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

