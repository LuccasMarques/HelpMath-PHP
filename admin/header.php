<?php 


session_start();
$idUsuario = $_SESSION['session_id'];
$nomeUsuario = $_SESSION['session_nome_admin'];
$expUsuario = $_SESSION['session_exp'];

if(!$_SESSION['session_nome_admin']){
  header ("Location: loginAdmin.php");
}
?>

<html>

<head>
<link href="../lib/css/rowcss.css" rel="stylesheet">

<link href="../lib/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<header>



  <nav class="navbar navbar-default">
<div class="container-fluid bordapreta">
<div class="row fundovermelho">
  <div class="navbar-header col-md-4 col-sm-4">
      <a href="indexAdmin.php"><img src="../images/logoluccas.png" class="imagemlogo"></a>
    </div>
  <div class="col-md-6 col-md-offset-1 col-sm-8">
      <ul class="nav navbar-nav">
      <li class="col-md-10"><a href="indexAdmin.php">Você é o administrador</a></li>
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