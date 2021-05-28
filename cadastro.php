<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema para Controle de Tarefas">
    <meta name="author" content="Rodrigo Warzak">
    <title>Tarefas Show</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/rowcss.css" rel="stylesheet">
    
  </head>
  <body>
  <header>
<nav class="navbar navbar-default">
<div class="container-fluid bordapreta">
<div class="row fundovermelho">
  <div class="navbar-header col-md-4">
      <a href="login.php"><img src="images/logoluccas.png" class="imagemlogo" ></a>
    </div>
</div>
<div class="row listrabranca">
</div>
</div>
</nav>
  </header>
    <div class="container">
    <form action="controller/salvarConta.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<!-- Form Name -->

<div class="row col-md-6">
    <h1>HelpMath</h1>
    <p class="col-sm-9 textologin">&nbsp; O HelpMath é uma ferramenta sobre de apoio a pessoas com dificuldades em matemática, com intuito de reforçar e ajudar todos com os componentes da matemática, desenvolvido na escola Solon Tavares, por: Luccas Marques.</p>
</div>
<div class="row col-md-6">

<legend>Crie sua Conta</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="inputNome">Nome Completo</label>  
  <div class="col-md-8">
  <input id="inputNome" name="inputNome" placeholder="Ex.: Luccas Peixoto Marques" class="form-control input-md" required="" type="text">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-8">
  <input id="email" name="email" placeholder="usuario@gmail.com.br" class="form-control input-md" required="" type="email">
  </div>
  <div class="col-md-4"></div>
  <div id="resposta" class="error_log"></div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="inputPassword">Password</label>
  <div class="col-md-8">
    <input id="inputPassword" name="inputPassword" placeholder="Digite sua senha" class="form-control input-md" required="" type="password">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="idade">Data de nascimento</label>
  <div class="col-md-8">
    <input id="idade" name="idade" placeholder="Digite sua idade" class="form-control input-md" required="" type="date">
    O site é recomendado para crianças de 5 a 10 anos.
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>
  <div class="col-md-8">
    <input id="cidade" name="cidade" placeholder="Digite sua cidade" class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Imagem:</label>
  <div class="col-md-8">
    <input id="image" name="image" class="form-control input-md" required="" type="file">
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
  <button id="button1id" name="button1id" class="btn entrar">Salvar</button>
    
    <a href="login.php">
    <button type="button" class="btn btn">
    Cancelar
    </button>
    </a>
  </div>
</div>
</fieldset>
</form>
</div>
</div> <!-- /container -->
<footer class="footer fundofooter fixed-bottom">
  <p>&copy; Copy Right 2017 - Produzido por Luccas Marques</p>
</footer>

<script src="lib/js/jquery1-11-1.min.js"></script>
<script language="javascript">
    var email = $("#email"); 
        email.blur(function() { 
            $.ajax({ 
                url: 'controller/verificaEmail.php', 
                type: 'POST', 
                data:{"email" : email.val()}, 
                success: function(data) { 
                console.log(data); 
                data = $.parseJSON(data); 
                $("#resposta").text(data.email);
                
            } 
        }); 
    }); 
</script>
  </body>
</html>