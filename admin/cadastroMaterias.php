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
    <link href="../lib/css/bootstrap.css" rel="stylesheet">
    <link href="../lib/css/rowcss.css" rel="stylesheet">
    
  </head>
  <body>
  <header>
<nav class="navbar navbar-default">
<div class="container-fluid bordapreta">
<div class="row fundovermelho">
  <div class="navbar-header col-md-4">
      <a href="indexAdmin.php"><img src="../images/logoluccas.png" class="imagemlogo" ></a>
    </div>
</div>
<div class="row listrabranca">
</div>
</div>
</nav>
  </header>
    <div class="container">
    <form action="controller/salvarMateria.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<!-- Form Name -->

<legend>Cadastre uma matéria</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="inputNome">Nome Matéria</label>  
  <div class="col-md-8">
  <input id="inputNome" name="inputNome" placeholder="Ex.: Soma, Subtração, etc." class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="inputNome">Experiência Necessária</label>  
  <div class="col-md-8">
  <input id="expNecessaria" name="expNecessaria" placeholder="Ex.: 50" class="form-control input-md" required="" type="number">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="inputNome">Imagem</label>  
  <div class="col-md-8">
  <input id="image" name="image" placeholder="Ex.: Luccas Peixoto Marques" class="form-control input-md" required="" type="file">
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
  <button id="button1id" name="button1id" class="btn entrar">Salvar</button>
    
    <a href="indexAdmin.php">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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