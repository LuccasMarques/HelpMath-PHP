<?php

include "../../config/config.php";
include "../../model/Conta.class.php";


//obtem dados do form

$varEmail = $_POST['email'];
$varPassword = $_POST['inputPassword'];
$varNome = $_POST['inputNome'];

//criando o objeto
$conta = new Conta($varEmail,$varPassword,$varNome);

//montando query
$sql = "
INSERT INTO usuario_admin(
    email,
    password,
    nome)
 VALUES ('"
 .$conta->getEmail()."',
'".$conta->getPassword()."',
 '".$conta->getNome()."')";

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