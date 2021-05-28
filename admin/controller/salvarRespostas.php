<?php

include "../../config/config.php";
include "../../model/Conta.class.php";

$sql = "SELECT * FROM perguntas ORDER BY id DESC LIMIT 1";

//executar a query sql
$resultado = $conecta->query($sql);


$listar = false;
// se contem dados na tabela (rows>0) então listar=verdadeiro
if($resultado->num_rows > 0){
    $listar = true;
}

$registro = $resultado->fetch_assoc();


//obtem dados do form

$varPergunta = $registro['id'];
$varResposta1 = $_GET['resposta1'];
$varResposta2 = $_GET['resposta2'];
$varResposta3 = $_GET['resposta3'];
$varResposta4 = $_GET['resposta4'];
$varCorreta1 = $_GET['correto1'];
$varCorreta2 = $_GET['correto2'];
$varCorreta3 = $_GET['correto3'];
$varCorreta4 = $_GET['correto4'];

//criando o objeto

//montando query
$sql2 = "
INSERT INTO respostas(
    resposta,
    id_pergunta,
    correta)
 VALUES ('$varResposta1',
'$varPergunta',
 '$varCorreta1'),
 ('$varResposta2',
 '$varPergunta',
  '$varCorreta2'),
  ('$varResposta3',
  '$varPergunta',
   '$varCorreta3'),
   ('$varResposta4',
   '$varPergunta',
    '$varCorreta4');";

//validando e executando a query
if($conecta->query($sql2) === TRUE){


    header("Location: ../view/mensagens.php?codigo=006");


}else{
    if($conecta->errno == 1062){
        header("Location: ../view/mensagens.php?codigo=002");
    }else{
        header("Location: ../view/mensagens.php?codigo=003&nome=$varNome");
        
    }
    }