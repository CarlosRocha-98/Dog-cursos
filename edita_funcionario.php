<?php

include 'db.php';

$id_funcionario = $_POST['id_funcionario'];
$nome_funcionario = $_POST['nome_funcionario'];



$query = "UPDATE funcionarios SET nome_funcionario='$nome_funcionario' where id_funcionario = $id_funcionario";


mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionarios');

?>