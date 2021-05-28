<?php 
//variaveis de conexão do banco
$servidor = "localhost";
$usuario = "root";
$password = "";

//nome da tabela do banco
$banco = "helpmath";

//criando a conexão
$conecta = new mysqli($servidor,$usuario,$password,$banco);

//check a conexão
if($conecta->connect_error){
    die("Conexão falhou! =(".$conecta->connect_error);
}



//echo "<marquee direction=right>Conexão realizada com sucesso! \o/</marquee>";