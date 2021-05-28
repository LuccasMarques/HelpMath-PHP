<?php

include "../../config/config.php";
include "../../model/Conta.class.php";


//obtem dados do form

$image = $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"../../images/".$image);
$varNome = $_POST['inputNome'];
$varExpNecessaria = $_POST['expNecessaria'];

//criando o objeto

//montando query
$sql = "
INSERT INTO materias(
    fase,
    expNecessaria,
    imagem)
 VALUES ('$varNome',
'$varExpNecessaria',
'$image')";

//validando e executando a query
if($conecta->query($sql) === TRUE){


    header("Location: ../view/mensagens.php?codigo=008");


}else{
    if($conecta->errno == 1062){
        header("Location: ../view/mensagens.php?codigo=002");
    }else{
        header("Location: ../view/mensagens.php?codigo=003&nome=$varNome");
        
    }
    }