<?php
    
    if (isset($_POST["gravar"])) {
       
        $pnome = $_POST["primeiro_nome"];
        $snome = $_POST["sobrenome"];
        $documento = $_POST["documento"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $logradouro = $_POST["logradouro"];
        $complemento = $_POST["complemento"];
        $cidade = $_POST["cidade"];
        $uf = $_POST["uf"];

    }
?>

<form method="post">
    
    Primeiro Nome:    <input type="text" name="primeiro_nome">
    <br>
    Sobrenome:   <input type="text" name="sobrenome">
    <br>
    Documento:   <input type="text" name="documento">
    <br>
    Telefone:   <input type="text" name="telefone">
    <br>
    E-mail:      <input type="text" name="email">
    <br>
    Logradouro:   <input type="text" name="logradouro">
    <br>
    Complemento:  <input type="text" name="complemento">
    <br>
    Cidade:   <input type="text" name="cidade">
    <br>
    Estado:   <input type="text" name="uf">
    <br>
    
    <input type="submit" name="gravar" value="Gravar">
</form>