<?php if(!isset($_GET['editar'])){ ?>
<h1> Inserir novo cargo</h1>
<form method="post" action="processa_cargo.php">
    <br>
    <label class="badge text-bg-secondary">Nome Cargo:</label><br>
    <input class="form-control" type="text" name="nome_cargo"
    placeholder="Insira o nome do cargo">
    <br><br>
    <label class="badge text-bg-secondary">Carga horária:</label><br>
    <input class="form-control" type="number" name="salario"
    placeholder="Insira a carga horária"><br><br>
    <input class="btn btn-success" type="submit" value="Inserir cargo">
</form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_cargos)){ ?>
        <?php if ($linha['id_cargo'] == $_GET['editar'] ) { ?>

            <h1>Editar cargo</h1>
            <form method="post" action="edita_cargo.php">
                <input class="form-control" type="hidden" name="id_cargo" value="<?php echo $linha['id_cargo']; ?>">
                <br>
                <label class="badge text-bg-secondary">Nome Cargo:</label><br>
                <input class="form-control" type="text" name="nome_cargo" placeholder="Insira o nome do cargo" value="<?php echo $linha['nome_cargo']; ?>">
                <br><br>
                <label class="badge text-bg-secondary"> Salario </label><br>
                <input class="form-control" type="number" name="salario" placeholder="Insira salario" value="<?php echo $linha['salario']; ?>"><br><br>
                <input type="submit" value="Editar cargo">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>            

    