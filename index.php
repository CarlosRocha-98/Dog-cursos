<?php

session_start();

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo de Página
if (isset($_SESSION["login"])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'cursos';
    }
} else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'cursos':
        include 'views/cursos.php';
        break;
    case 'inserir_curso':
        include 'views/inserir_curso.php';
        break;
    case 'alunos':
        include 'views/alunos.php';
        break;
    case 'inserir_alunos':
        include 'views/inserir_alunos';
        break;
    case 'matriculas':
        include 'views/matriculas.php';
        break;
    case 'inserir_matricula':
        include 'views/inserir_matricula.php';
        break;
    case 'funcionarios':
        include 'views/funcionarios.php';
        break;
    case 'inserir_funcionarios':
        include 'views/inserir_funcionarios.php';
        break;
    case 'cargos':
        include 'views/cargos.php';
        break;
    case 'inserir_cargos':
        include 'views/inserir_cargos.php';
        break;
    case 'func_cargos':
        include 'views/func_cargos.php';
        break;
    case 'inserir_func_cargos':
        include 'views/inserir_func_cargos.php';
        break;
    case 'logout':
        include 'logout.php';
    default:
        include 'views/home.php';
        break;
};

#Rodapé
include 'footer.php';
