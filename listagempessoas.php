<a href="cadastropessoa.php">Cadastrar Pessoa</a>
<hr>


<hr>

<table border="1">
    <tr>
        <td><b>Codigo</b></td>
        <td><b>Primeiro Nome</b></td>
        <td><b>Segundo Nome</b></td>
        <td><b>Documento</b></td>
        <td><b>E-mail</b></td>
        <td><b>Telefone</b></td>
        <td><b>Logradouro</b></td>
        <td><b>Cidade</b></td>
        <td><b>Complemento</b></td>
        <td><b>UF</b></td>
        <td><b>Acoes</b></td>
    </tr>
    <?php
        while ($linha = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?=$linha["codigo"]?></td>
                    <td><?=$linha["primeiro_nome"]?></td>
                    <td><?=$linha["sobrenome"]?></td>
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
