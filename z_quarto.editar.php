<?php
if(isset($_GET['id'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = Quarto::find($_GET['id']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = new Quarto($_POST['numero'],$_POST['tipo'],$_POST['estado']);
    $quarto->setIdQuarto($_POST['id']);
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
    <title>Edita Quarto</title>
</head>
<body>
    <form action='z_quarto.editar.php' method='POST'>
        <?php
            echo "Number: <input name='numero' value='{$quarto->getNumero()}' type='text' required>";
            echo "<br>";
            echo "Type: <input name='tipo' value='{$quarto->getTipo()}' type='text' required>";
            echo "<br>";
            echo "Status: <input name='estado' value='{$quarto->getEstado()}' type='text' required>";
            echo "<br>";
            echo "<input name='id' value='{$quarto->getIdQuarto()}' type='hidden'>";
        ?>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>
