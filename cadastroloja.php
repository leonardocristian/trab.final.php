
<?php
        $nome = $_POST["nome"];
        $documento = $_POST["documento"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $logradouro = $_POST["logradouro"];
        $complemento = $_POST["complemento"];
        $cidade = $_POST["cidade"];
        $uf = $_POST["uf"];

        
        $query = "insert into pessoa (nome,documento,telefone,email,logradouro,complemento,cidade,uf)
        values ('{$nome}','{$documento}','{$telefone}','{$email}','{$logradouro}','{$complemento}','{$cidade}','{$uf}')";
       
?>

<form method="post">
    
    Nome da loja:    <input type="text" name="nome">
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