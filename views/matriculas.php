<a class= "btn btn-success" href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<br><br>

<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Nome curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_matriculas)) {
                echo "<tr><td>" .$linha ['nome_aluno']. "</td>";
                echo "<td>" .$linha ['nome_curso']. "</td>";
                echo "<td><a href=deleta_matricula.php?id_aluno_curso=" .$linha['id_aluno_curso']. "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
            }
        ?>
    </tbody>    
</table>