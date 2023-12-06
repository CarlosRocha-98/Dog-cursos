<h1>Inserir Func_Cargos</h1>

<form method="post" action="processa_func_cargos.php">
    <br>
    <p class="badge text-bg-secondary">Selecione o funcionarios</p><br>
    <select name="escolha_funcionario">
        <option>Selecione um funcionario</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_funcionarios)) {
                echo '<option value="'.$linha['id_funcionario'].'">'.$linha['nome_funcionario'].'</option>';
            }
        ?>    
    </select>

    <br><br>
    <p class="badge text-bg-secondary">Selecione o cargo</p><br>
    <select name="escolha_cargos"> 
        <option>Selecione um cargo</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cargos,)) {
                echo '<option value="'.$linha['id_cargo'].'">'.$linha['nome_cargo'].'</option>';
            }
        ?>      
    </select>

    <br><br>

    <input type="submit" value="Inserir">

</form>