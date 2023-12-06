<h1 style="text-align: center;">Bem-vindos a Dog Cursos</h1>

<form action="login.php" method="post">

    <label class="badge text-bg-secondary" for="id_usuario"> Usuario </label>
    <input class="form-control"   type="text" name="usuario" id="id_usuario"><br>

    <label class="badge text-bg-secondary" for="id_senha"> Senha </label>
    <input class="form-control"  type="password" name="senha" id="id_senha"><br>

    <input class="btn btn-success" type="submit" value="Entrar">

</form>

<?php if (isset($_GET['erro'])) { ?>
    Usuário ou Senha inválidos 
    <?php }
?>    