<?php

include 'db.php';

$id_cargo = $_POST['id_cargo'];
$salario = $_POST['salario'];
$cargo = $_POST['nome_cargo'];


$query = "UPDATE cargos SET salario='$salario', nome_cargo='$cargo' where id_cargo='$id_cargo'";


mysqli_query($conexao, $query);

header('location:index.php?pagina=cargos');

?>