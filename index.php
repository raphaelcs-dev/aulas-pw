<?php
require "Usuario.class.php";
$usuario = new Usuario();
$con = $usuario -> conecta();

if( $con ){
    $user = $usuario -> inserirUsuario("Raphael","ph@gmail.com", 1234);

    if ($user){
        echo "Usuário inserido com sucesso!";
    }else{
        echo "Erro ao inserir usuario";
    }
    echo "<h1>Conectado ao banco de dados";
}else{
    echo "Banco indisponivel";
}