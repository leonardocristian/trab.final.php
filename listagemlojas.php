<a href="index.php">Tela Inicial</a>
<br>
<a href="cadastroloja.php">Cadastrar Lojas</a>
<hr>
<?php
    include "conexao.php";

    $query = "select * from loja";
    $result = mysqli_query($conn, $query);
       
?>

<hr>

<table border="1">
    <tr>
        <td><b>Codigo</b></td>
        <td><b>Nome</b></td>
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
                    <td>
                        <a href="atualizar_form_loja.php?codigo=<?=$linha["codigo"]?>">Editar</a> 
                        <br>   
                        <a href="remove_loja.php?codigo=<?=$linha["codigo"]?>">Excluir</a>
                  </td>
                </tr>
            <?php
        }
    ?>
