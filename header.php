<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogCursos</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <header> 
        <div class="container">
            <a href="?pagina=home">
                <img src="img/logo.png" title="LOGO" alt="logo"/>
            </a>
            <div id="menu">
                <?php if (! empty($_SESSION['login'])) { ?>
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <a href="?pagina=funcionarios">Funcionarios</a>
                <a href="?pagina=cargos">Cargos</a>
                <a href="?pagina=func_cargos">Func_cargos</a>
                <a href="?pagina=logout">Sair (<?php echo $_SESSION['usuario']?>)</a>
                <?php }?>
            </div>
        </div>    
    </header>

    <div id="conteudo" class="container">

<!-- </body>
</html> -->