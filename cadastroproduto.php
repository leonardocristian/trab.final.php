<?php  

    if (isset($_POST["gravar"])) {
        
        $descricao = $_POST["descricao"];
        $caracteristica = $_POST["caracteristica"];
        $und_v = $_POST["und_v"];
        $barras = $_POST["barras"];
        $precovenda = $_POST["precovenda"];
        $obs = $_POST["obs"];
        $tempo = $_POST["tempo"];
    
    }
?>
<form method="post">
    Descricao:    <input type="text" name="descricao">
    <br>
    caracteristica:  <input type="text" name="caracteristica">
    <br>
    Unidade de Venda:  
        <input type="radio" name="und_v"
        <?php if (isset($und_v) && $und_v=="UND") echo "checked";?>
        value="UND">UND
        <input type="radio" name="und_v"
        <?php if (isset($und_v) && $und_v=="HORA") echo "checked";?>
        value="HORA">HORA
        <input type="radio" name="und_v"
        <?php if (isset($und_v) && $geund_vnder=="KIT") echo "checked";?>
        value="KIT">KIT
    <br>
    Barras:   <input type="text" name="barras">
    <br>
    Preco de Venda: <input type="text" name="precovenda">
    <br>
    Observaçao:  <input type="text" name="obs">    
    <br>
    Tempo Mínimo:  <input type="text" name="tempo">    
    <br>
    <input type="submit" name="gravar" value="Gravar">
</form>