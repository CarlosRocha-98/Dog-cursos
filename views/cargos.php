<a class= "btn btn-success" href="?pagina=inserir_cargos">Inserir cargos</a>
<br><br>

<table class="table table-hover table-striped" id="cargo">
    <thead>
        <tr>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_cargos)) {
                echo "<tr><td>" .$linha['nome_cargo']. "</td>";
                echo "<td>" .$linha['salario']. "</td>";
                echo "<td><a href=?pagina=inserir_cargos&editar=" .$linha['id_cargo']." ><ion-icon name='create-outline'></ion-icon></a></td>";
                echo "<td><a href=deleta_cargos.php?id_cargo=" .$linha['id_cargo']. "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
            }
        ?>
    </tbody>
</table>