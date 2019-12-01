
<?php
    $query = "select * from pessoa where codigo = ".$_GET['codigo'];
    $resultado = mysqli_query($conn, $query);

    $linha = mysqli_fetch_array($resultado);
?>

Dados da Pessoa.<br><br>

Codigo: <?=$linha['codigo']?>

<br>
Primeiro nome: <?=$linha['primeiro_nome']?>

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