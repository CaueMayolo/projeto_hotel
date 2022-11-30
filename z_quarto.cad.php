<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = new Quarto($_POST['numero'],$_POST['tipo'],$_POST['estado']);
    $quarto->save();
    header("location: z_quarto.index.php");
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
        Number: <br><input name='numero' type='text' required>
        <br><br>
        Type: <br><input name='tipo' type='text' required>
        <br><br>
        Status: <br><input name='estado' type='int' required>
        <br><br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

