
<?php
    $query = "select * from produto where codigo = ".$_GET['codigo'];
    $resultado = mysqli_query($conn, $query);

    $linha = mysqli_fetch_array($resultado);
?>

Dados da Produto.<br><br>

Codigo: <?=$linha['codigo']?>

<br>
Descricao: <?=$linha['descricao']?>

<br>
Preço de Venda: <?=$linha['precovenda']?>

<br>
<hr>
<form method="post">
    Deseja realmente deletar esse cadastro? 
    <input type="submit" name="deletar" value="Sim">
</form>