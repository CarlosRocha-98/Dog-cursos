<?php if(!isset($_GET['editar'])){ ?>
<h1> Inserir novo funcionarios</h1> 
<form method="post"
action="processa_funcionario.php">
    <br>
    <label class="badge text-bg-secondary">Nome funcionarios:</label><br>
    <input class="form-control" type="text" name="nome_funcionario"
    placeholder="Insira o nome do funcionario">
    <br><br>
    <input type="submit" value="Inserir funcionario">
</form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_funcionarios)){ ?>
        <?php if ($linha['id_funcionario'] == $_GET['editar'] ) { ?>

            <h1>Editar funcionario</h1>
            <form method="post" action="edita_funcionario.php">
                <input class="form-control" type="hidden" name="id_funcionario" value="<?php echo $linha['id_funcionario']; ?>">
                <br>
                <label class="badge text-bg-secondary">Nome do funcionario:</label><br><br>
                <input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionario" value="<?php echo $linha['nome_funcionario']; ?>">
                <br><br>
                
                <input type="submit" value="Salvar">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>            
