<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'aula_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

#Consulta realizada de CURSOS/////////////////////////
$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS_CURSOS inner join CURSOS on ALUNOS_CURSOS.id_curso = cursos.id_curso inner join ALUNOS on 
ALUNOS_CURSOS.id_aluno = alunos.id_aluno";
$consulta_matriculas = mysqli_query($conexao, $query);

$query = "SELECT * FROM FUNCIONARIOS";
$consulta_funcionarios = mysqli_query($conexao, $query);

$query = "SELECT * FROM CARGOS";
$consulta_cargos = mysqli_query($conexao, $query);

$query = "SELECT * FROM FUNC_CARGOS inner join CARGOS on FUNC_CARGOS.id_cargo = cargos.id_cargo inner join FUNCIONARIOS on 
FUNC_CARGOS.id_funcionario = funcionarios.id_funcionario";
$consulta_func_cargos = mysqli_query($conexao, $query);
