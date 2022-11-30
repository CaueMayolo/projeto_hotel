<?php
if(isset($_GET['id'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = Cliente::find($_GET['id']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = new Cliente($_POST['nome'],$_POST['sobrenome'],$_POST['cpf']);
    $cliente->setIdCliente($_POST['id']);
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
    <title>Edit Client</title>
</head>
<body>
    <form action='y_cliente.editar.php' method='POST'>
        <?php
            echo "Name: <input name='nome' value='{$cliente->getNome()}' type='text' required>";
            echo "<br>";
            echo "Last name: <input name='sobrenome' value='{$cliente->getSobrenome()}' type='text' required>";
            echo "<br>";
            echo "CPF: <input name='cpf' value='{$cliente->getCpf()}' type='text' required>";
            echo "<br>";
            echo "<input name='id' value='{$cliente->getIdCliente()}' type='hidden'>";
        ?>
        <br>
        <button name='botao'>send</button>
    </form>
</body>
</html>