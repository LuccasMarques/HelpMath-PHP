<?php
include("header.php");
include "../../config/config.php";

$varIdMateria = $_GET['id_fase'];
$varCont = $_GET['cont'];



//escrever nossa query de consulta
$sql3 = "SELECT *  
FROM perguntas where id_fase = $varIdMateria";

//executar a query sql
$resultado3 = $conecta->query($sql3);


$cont = mysqli_num_rows($resultado3);




//escrever nossa query de consulta
$sql = "SELECT 
          id,
          perguntas.nome AS nomeQuestao, 
          perguntas.questao AS textoQuestao,
          perguntas.peso AS pesoQuestao,
          perguntas.pesoNegativo AS pesoQuestaoNegativo,
          perguntas.image AS imagem 
        FROM perguntas WHERE id_fase = $varIdMateria ORDER BY RAND() LIMIT 1;";

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
    <link href="../../lib/css/bootstrap.css" rel="stylesheet">
    <link href="../../lib/css/rowcss.css" rel="stylesheet">
    <!-- Custom styles for this template -->  
  </head>
  <body class="fundogeral" > 
        <div class="container fundoindex">
        <?php
  $varAcertou = "acertou";
  $varSorte = "boa";
  $varErrou = "errou";
  $varPassou = "passou";
  $varSemRes = "semRes";


  if( $_GET['pergunta']== $varAcertou){
    echo "<div class='alert alert-success' role='alert'>Parabéns, você acertou a questão anterior <img class='gif' src='../../images/acertou.gif'> </div>
    
    <audio src='../../audio/aplausos.mp3' autoplay></audio>";

  }elseif ($_GET['pergunta']== $varErrou) {
    echo "
    <div class='alert alert-danger' role='alert'>Poxa, você errou a questão anterior  <img width='100px' text-align='center' src='../../images/errou.gif'> </div> 
    <audio src='../../audio/erro.mp3' autoplay></audio>";    
  }elseif($_GET['pergunta']== $varPassou){
    echo "<div class='alert alert-info' role='alert'>Uma hora você terá que responder alguma questão </div>
    <audio src='../../audio/teste.mp3' autoplay></audio>";
  }elseif ($_GET['pergunta']==$varSorte) {

    echo "<div class='alert alert-success' role='alert'>Boa sorte nas questões <img width='150px' src='../../images/pronto.gif'></div>
    <audio src='../../audio/teste.mp3' autoplay></audio>";
    
  }elseif($_GET['pergunta']==$varSemRes){
    echo "
    <div class='alert alert-danger' role='alert'>Poxa, você tinha que ter escolhido uma resposta, a questão foi pulada por este motivo</div>
    <audio src='../../audio/teste.mp3' autoplay></audio> ";    
  }

?>
        <form method="POST" action="../../controller/correcao.php?id_fase=<?php echo $varIdMateria;?>&cont=<?php echo $varCont;?>">
        
        <?php
// listagem de dados da tabela
if($varCont<=5){
 while($registro = $resultado->fetch_assoc()){
//escrever nossa query de consulta
$sql2 = "SELECT 
resposta 
FROM respostas WHERE id_pergunta=".$registro['id'];

//executar a query sql
$resultado2 = $conecta->query($sql2);
?>
        <input class="hidden" name="tipoPergunta" value="1"></input>
        <input class="hidden" name="numeroPergunta" value="1"></input>
        <input class="hidden" name="idPergunta" value="<?php echo $registro['id'] ?> "></input>
        <input class="hidden" name="idPeso" value="<?php echo $registro['pesoQuestao'] ?> "></input>
        <input class="hidden" name="idPesoNegativo" value="<?php echo $registro['pesoQuestaoNegativo'] ?> "></input>
        <div class="tituloFeed col-md-5">
        <img src="../../images/<?php echo $registro['imagem']?>" width='250px'>
        </div>
        <div class="textoIntroducao col-md-4  ">&nbsp;&nbsp;&nbsp;<?php  echo $registro['textoQuestao']  ?></div>

        <div class="col-md-2">
        <?php

while($registro2 = $resultado2->fetch_assoc()){
  
        ?>

<input class="col-md-offset-3 col-md-6 btn-info btn entrar" type="button" value="<?php echo $registro2['resposta'] ?>" ></input> 


  
<?php
} 
}
}else{
  header ("Location: ../../index.php?completa=conclui");
}
?>
</div>
<input class="hidden" name="inputResposta" require="" id="area"></input>
<div class="col-md-12">
  <div class="col-md-11"></div>
<button id="button1id" type="submit" name="button1id" class="btn entrar col-md-1"> Responder </button>

</div>

   </form>

<div class="row">
<div class="col-md-12"></div>
</div>
<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8"></div>
<a href="fase.php?pergunta=passou&id_fase=<?php echo $varIdMateria;?>&cont=<?php echo $varCont +=1;?>">
<button class="btn entrar col-md-2"> Próxima Pergunta </button>  
</a>
</div> 
   
        </div>


     <!-- -->
      <!-- Site footer -->
      <footer class="footer fundofooter fixed-bottom">
        <p>&copy; Company 2017 - Produzido por Luccas Marques</p>
      </footer>
    <script src="../../../../dist/js/bootstrap.js"></script>
    <script src="../../lib/js/jquery.min.js"></script>
    <script>
    $('input').click(function(){
  var valor = $(this).val();
  $('#area').val(valor)
  });
    </script>
    <script src="/lib/js/rowjs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

