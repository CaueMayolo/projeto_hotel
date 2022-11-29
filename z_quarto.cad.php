<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $livro = new Quarto($_POST['numero'],$_POST['tipo'],$_POST['status']);
    $livro->save();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Livro</title>
</head>
<body>
    <form action='z_quarto.cad.php' method='POST'>
        Numero: <br><input name='numero' type='text' required>
        <br><br>
        Tipo: <br><input name='tipo' type='text' required>
        <br><br>
        Status: <br><input name='status' type='int' required>
        <br><br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

