<?php
 include "../config/config.php";
 include("header.php");


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
    
    <title>HelpMath</title>
    <!-- Bootstrap core CSS -->
    <link href="../lib/css/bootstrap.css" rel="stylesheet">
    <link href="../lib/css/rowcss.css" rel="stylesheet">
    
  </head>
  <body>
  <header>
  </header>
    <div class="container">
    <form action="controller/salvarPergunta.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
<fieldset>

<legend>Cadastre a pergunta</legend>
<!-- Text input-->

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="texto">Texto pergunta</label>
  <div class="col-md-6">
    <input id="texto" name="texto" placeholder="Joãozinho ganhou blá blá blá" class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="texto">Peso positivo</label>
  <div class="col-md-6">
    <input id="pesop" name="pesop" placeholder="Ex.: 10" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="texto">Peso negativo</label>
  <div class="col-md-6">
    <input id="peson" name="peson" placeholder="Ex.: 5" class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">Foto pergunta</label>  
  <div class="col-md-6">
  <input id="image" name="image" class="form-control input-md" required="" type="file">
  </div>
  <div class="col-md-4"></div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="texto">Matéria</label>
  <div class="col-md-6">
  <select name="materia" id="materia">
  <?php
// listagem de dados da tabela
 while($registro = $resultado->fetch_assoc()){
?>
  <option value="<?php echo $registro['idfase']; ?>"><?php echo $registro['fase'] ?></option>

 <?php } ?>
  </select>
  </div>
</div>

<div class="form-group">
<label class="col-md-2 control-label" for="resposta1">Resposta valor</label>
<div class="col-md-2">
  <input id="resposta1" name="resposta1" placeholder="Ex.: 5" class="form-control input-md" required="" type="number"></input>
</div>
  <label class="col-md-2 control-label" for="correta1">Resposta</label>
  <div class="col-md-2">
  <select name="correta1" id="correta1">
 
  <option value="0">Incorreta</option>
  <option value="1">Correta</option>

 </select>
  </div>
</div>
<div class="form-group">
<label class="col-md-2 control-label" for="resposta2">Resposta valor</label>
<div class="col-md-2">
  <input id="resposta2" name="resposta2" placeholder="Ex.: 5" class="form-control input-md" required="" type="number">
</div>
  <label class="col-md-2 control-label" for="correta2">Resposta</label>
  <div class="col-md-2">
  <select name="correta2" id="correta2">
 
  <option value="0">Incorreta</option>
  <option value="1">Correta</option>

 </select>
  </div>
</div>
<div class="form-group">
<label class="col-md-2 control-label" for="resposta3">Resposta valor</label>
<div class="col-md-2">
  <input id="resposta3" name="resposta3" placeholder="Ex.: 5" class="form-control input-md" required="" type="number">
</div>
  <label class="col-md-2 control-label" for="correta3">Resposta</label>
  <div class="col-md-2">
  <select name="correta3" id="correta3">
 
  <option value="0">Incorreta</option>
  <option value="1">Correta</option>

 </select>
  </div>
</div>
<div class="form-group">
<label class="col-md-2 control-label" for="resposta4">Resposta valor</label>
<div class="col-md-2">
  <input id="resposta4" name="resposta4" placeholder="Ex.: 5" class="form-control input-md" required="" type="number">
</div>
  <label class="col-md-2 control-label" for="correta4">Resposta</label>
  <div class="col-md-2">
  <select name="correta4" id="correta4">
 
  <option value="0">Incorreta</option>
  <option value="1">Correta</option>

 </select>
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

  </body>
</html>