<?php

include 'db.php';

$usuario = addslashes($_POST ['usuario']); //addslashes é proteger de usuario
$senha = md5($_POST ['senha']); // md5 é um de criptografia

echo $usuario . '<br> ' . $senha;

$query = "SELECT * FROM USUARIO WHERE usuario = '$usuario' and senha = '$senha' ";
$consulta_usuarios = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta_usuarios) == 1) {
    
session_start();     
$_SESSION['login'] = true;
$_SESSION['usuario'] = $usuario;

header('location:index.php');

} else { 
    header('location:index.php?erro');
};



?>
