
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