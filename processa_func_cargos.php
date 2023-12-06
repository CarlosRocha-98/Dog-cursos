<?php

include 'db.php';

$id_funcionario = $_POST['escolha_funcionario'];
$id_cargo = $_POST['escolha_cargos'];

$query = "INSERT INTO FUNC_CARGOS(id_funcionario, id_cargo) VALUES($id_funcionario, $id_cargo)" ;

mysqli_query($conexao, $query);

header('location:index.php?pagina=func_cargos');

?>