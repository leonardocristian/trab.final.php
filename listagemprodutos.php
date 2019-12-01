<a href="cadastroproduto.php">Cadastrar Produtos</a>
<hr>

<hr>

<table border="1">
    <tr>
        <td><b>Codigo</b></td>
        <td><b>Descricao</b></td>
        <td><b>Caracteristica</b></td>
        <td><b>Barras</b></td>
        <td><b>Preco Venda</b></td>
        <td><b>Observacao</b></td>
        <td><b>Tempo</b></td>
        <td><b>Unidade de Venda</b></td>
    </tr>
    <?php
        while ($linha = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?=$linha["codigo"]?></td>
                    <td><?=$linha["descricao"]?></td>
                    <td><?=$linha["caracteristica"]?></td>
                    <td><?=$linha["barras"]?></td>
                    <td><?=$linha["precovenda"]?></td>
                    <td><?=$linha["obs"]?></td>
                    <td><?=$linha["tempo"]?></td>
                    <td><?=$linha["und_v"]?></td>
                </tr>
            <?php
        }
    ?>
