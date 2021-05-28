<?php

include "../config/config.php";
include "../model/Conta.class.php";

//obter dados do form

$varEmail = $_POST['inputEmail'];
$varPassword = $_POST['inputPassword'];


//query do sql - montagem da instrução SQL

$sql = "SELECT * FROM usuarios WHERE email = '$varEmail'";

//validação da query
if($resultado = mysqli_query($conecta, $sql)){
    // obtem o numero de registros
    $cont = mysqli_num_rows($resultado);
    if($cont > 0){

        $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $varNome = $dados['nome'];

        //verificar a senha digitada com a senha gravada no banco
        if(password_verify($varPassword, $dados['password'])){

        


        //variaveis da sessao
        session_start();

        $_SESSION['session_id'] = $dados['id'];
        $_SESSION['session_nome'] = $dados['nome'];
        $_SESSION['session_exp'] = $dados['exp'];
        $_SESSION['session_idade'] = $dados['idade'];
        $_SESSION['session_cidade'] = $dados['cidade'];
        $_SESSION['session_image'] = $dados['image'];
        header("Location: ../index.php");
        //header("Location: ../view/mensagens.php?codigo=004&nome=$varNome");

        }else{
            header("Location: ../view/mensagens.php?codigo=005");
        }
    }else{
        header("Location: ../view/mensagens.php?codigo=005");
    }

}