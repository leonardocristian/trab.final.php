<?php
    include "conexao.php";

    if(isset($_POST["deletar"])) {
        $sql = "delete from loja where codigo = ".$_GET['codigo'];
        mysqli_query($conn, $sql);
        ?>
            <a href="index.php">Loja removida com sucesso. Clique aqui para retornar a listagem.</a>
        <?php
        exit();
    }
?>

<a href="index.php">Voltar para a lista de Lojas</a>
<hr>
<?php
    $query = "select * from loja where codigo = ".$_GET['codigo'];
    $resultado = mysqli_query($conn, $query);

    $linha = mysqli_fetch_array($resultado);
?>

Dados da Loja.<br><br>

Codigo: <?=$linha['codigo']?>

<br>
Nome da loja:  <?=$linha['nome']?>

<br>
Documento: <?=$linha['documento']?>

<br>
Cidade: <?=$linha['cidade']?>

<br>
<hr>
<form method="post">
    Deseja realmente deletar esse cadastro? 
    <input type="submit" name="deletar" value="Sim">
</form>