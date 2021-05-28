<?php


//$url = isset($_GET['url']) ? $_GET['url'] : null;
$varNome = isset($_GET['nome']) ? $_GET['nome'] : '';
$error = isset($_GET['error']) ? $_GET['error'] : '';
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';

$mensagens = [];
$mensagens['001'] = "Olá $varNome, você acabou de criar sua conta!";
$mensagens['002'] = "E-mail já cadastrado!";
$mensagens['005'] = "E-mail ou Senha Incorretos!!!";
$destino = "../login.php";



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mensagens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- redirecionamento de tela -->
   
    <meta http-equiv="refresh" content="2; url=<?php echo $destino?>">

    <!-- CSS -->
    <link href="../lib/css/bootstrap.css" rel="stylesheet">

    <link href="../lib/css/rowcss.css" rel="stylesheet">
  </head>

  <body>
  <header>
<nav class="navbar navbar-default">
<div class="container-fluid bordapreta">
<div class="row fundovermelho">
  <div class="navbar-header col-md-4">
      <img src="../images/logoluccas.png" class="imagemlogo">
    </div>
</div>
<div class="row listrabranca">
</div>
</div>
</nav>
</header>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>INFO!</h1>
        </div>
        <p class="lead"><?php echo $mensagens[$codigo];?></p>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit"> Desenvolvido por Luccas Marques | Contato: 998519229 </p>
      </div>
    </div>


    <footer class="footer fundofooter fixed-bottom">
  <p>&copy; Copy Right 2017 - Produzido por Luccas Marques</p>
</footer>
  </body>
</html>
