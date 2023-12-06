<a class= "btn btn-success" href="?pagina=inserir_funcionarios">Inserir funcionarios</a>
<br><br>

<table class="table table-hover table-striped" id="funcionario">
    <thead>
        <tr>
            <th>Nome funcionario</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_funcionarios)) {
                echo "<tr><td>" .$linha['nome_funcionario']. "</td>";
                echo "<td><a href=?pagina=inserir_funcionarios&editar=" .$linha['id_funcionario']." ><ion-icon name='create-outline'></ion-icon></a></td>";
                echo "<td><a href=deleta_funcionarios.php?id_funcionario=" .$linha['id_funcionario']. "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
            }
        ?>
    </tbody>
</table>