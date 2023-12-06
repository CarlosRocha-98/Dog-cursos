<a class= "btn btn-success" href="?pagina=inserir_func_cargos">Inserir func_cargos</a>
<br><br>

<table class="table table-hover table-striped" id="func_cargos">
    <thead>
        <tr>
            <th>Nome de Funcionarios</th>
            <th>Nome de Cargos</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_func_cargos)) {
                echo "<tr><td>" .$linha ['nome_funcionario']. "</td>";
                echo "<td>" .$linha ['nome_cargo']. "</td>";
                echo "<td><a href=deleta_func_cargos.php?id_func_cargos=" .$linha['id_func_cargos']. "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
            }
        ?>
    </tbody>    
</table>