
<a href="cadastroloja.php">Cadastrar Loja</a>
<hr>


<hr>

<table border="1">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Documento</b></td>
        <td><b>E-mail</b></td>
        <td><b>Telefone</b></td>
        <td><b>Logradouro</b></td>
        <td><b>Cidade</b></td>
        <td><b>Complemento</b></td>
        <td><b>UF</b></td>
    </tr>
    <?php
        while ($linha = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?=$linha["nome"]?></td>
                    <td><?=$linha["documento"]?></td>
                    <td><?=$linha["email"]?></td>
                    <td><?=$linha["telefone"]?></td>
                    <td><?=$linha["logradouro"]?></td>
                    <td><?=$linha["cidade"]?></td>
                    <td><?=$linha["complemento"]?></td>
                    <td><?=$linha["uf"]?></td>
                </tr>
            <?php
        }
    ?>
