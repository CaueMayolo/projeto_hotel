<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = new Cliente($_POST['nome'],$_POST['sobrenome'],$_POST['cpf']);
    $cliente->save();
    header("location: y_cliente.index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adds Client</title>
</head>
<body>
    <form action='y_cliente.cad.php' method='POST'>
        Name: <br><input name='nome' type='text' required>
        <br><br>
        Last name: <br><input name='sobrenome' type='text' required>
        <br><br>
        Cpf: <br><input name='cpf' type='int' required>
        <br><br>
        <button name='botao'>Send</button>
    </form>
</body>
</html>

