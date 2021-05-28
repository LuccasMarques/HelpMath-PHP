<?php
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $emailPostado = $_POST['email'];

    #Conecta banco de dados 
    $con = mysqli_connect("localhost", "root", "", "helpmath");
    $sql = mysqli_query($con, "SELECT * FROM usuario_admin WHERE email = '$emailPostado'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Aviso: Ja existe um usuario cadastrado com este email'));

    else 
        echo json_encode(array('email' => 'Email válido.' )); 
}
?>