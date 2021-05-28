<?php

include "../config/config.php";
include "../model/Conta.class.php";


//obtem dados do form

$image = $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$image);

$varEmail = $_POST['email'];
$varPassword = $_POST['inputPassword'];
$varNome = $_POST['inputNome'];
$varIdade = date("Y-m-d", strtotime($_POST['idade']));

$varCidade = $_POST['cidade'];
//criando o objeto
$conta = new Conta($varEmail,$varPassword,$varNome,$varIdade,$varCidade,$image);

//montando query
$sql = "
INSERT INTO usuarios(
    email,
    password,
    nome,
    idade,
    cidade,
    image)
 VALUES ('"
 .$conta->getEmail()."',
'".$conta->getPassword()."',
 '".$conta->getNome()."',
 '".$conta->getIdade()."',
 '".$conta->getCidade()."',
 '".$conta->getImage()."');";

//validando e executando a query
if($conecta->query($sql) === TRUE){


    header("Location: ../view/mensagens.php?codigo=001&nome=$varNome");


}else{
    if($conecta->errno == 1062){
        header("Location: ../view/mensagens.php?codigo=002");
    }else{
        header("Location: ../view/mensagens.php?codigo=003&nome=$varNome");
        
    }
    }