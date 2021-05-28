<?php 


session_start();
$idUsuario = $_SESSION['session_id'];
$nomeUsuario = $_SESSION['session_nome'];
$expUsuario = $_SESSION['session_exp'];
$idadeUsuario = $_SESSION['session_idade'];
$cidadeUsuario = $_SESSION['session_cidade'];
$imageUsuario = $_SESSION['session_image'];


if(!$_SESSION['session_nome']){
  header ("Location: login.php");
}
?>

<html>

<head>
<link href="lib/css/rowcss.css" rel="stylesheet">

<link href="lib/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<header>



  <nav class="navbar navbar-default">
<div class="container-fluid bordapreta">
<div class="row fundovermelho">
  <div class="navbar-header col-md-4 col-sm-4">
      <a href="index.php"><img src="images/logoluccas.png" class="imagemlogo"></a>
    </div>
  <div class="col-md-6 col-md-offset-1 col-sm-8">
      <ul class="nav navbar-nav">
      <li class="col-md-7 textdrive" ><a href="index.php"> Nome:
        <?php echo $nomeUsuario ?> - Pontuação: <?php echo $expUsuario ?></a></li>
       
        <li class="col-md-2"><a href="materias.php">Matérias</a></li>
        <li class="col-md-2"><a href="ranking.php">Ranking</a></li>
        <li class="col-md-1"><a href="controller/logout.php"> Logout </a></li>
          </ul>
      </div>
</div>
<div class="row listrabranca">
</div>
</div>
</header>


</body>

</html>