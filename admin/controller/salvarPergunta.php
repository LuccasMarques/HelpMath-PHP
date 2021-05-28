<?php

include "../../config/config.php";
include "../../model/Conta.class.php";


//obtem dados do form


$image = $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"../../images/".$image);

$varPesop = $_POST['pesop'];
$varTexto = $_POST['texto'];
$varPeson = $_POST['peson'];
$varMateria = $_POST['materia'];
$varResposta1 = $_POST['resposta1'];
$varCorreta1 = $_POST['correta1'];
$varResposta2 = $_POST['resposta2'];
$varCorreta2 = $_POST['correta2'];
$varResposta3 = $_POST['resposta3'];
$varCorreta3 = $_POST['correta3'];
$varResposta4 = $_POST['resposta4'];
$varCorreta4 = $_POST['correta4'];



//criando o objeto

//montando query
$sql = "
INSERT INTO perguntas(
    peso,
    questao,
    pesoNegativo,
    id_fase,
    image)
 VALUES ('$varPesop',
 '$varTexto',
 '$varPeson',
 '$varMateria',
 '$image')";

//validando e executando a query
if($conecta->query($sql) === TRUE){
        
            header("Location: salvarRespostas.php?resposta1=$varResposta1&resposta2=$varResposta2&resposta3=$varResposta3&resposta4=$varResposta4&correto1=$varCorreta1&correto2=$varCorreta2&correto3=$varCorreta3&correto4=$varCorreta4");
        
        
        }else{
            if($conecta->errno == 1062){
                header("Location: ../view/mensagens.php?codigo=002");
            }else{
                header("Location: ../view/mensagens.php?codigo=003&nome=$varNome");
                
            }
            }