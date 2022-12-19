<?php
require_once __DIR__.'/x_navbar.php';
require_once __DIR__."/vendor/autoload.php";
$quartos = Quarto::findall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="z_quarto.style.css">
    <title>Room manager</title>
</head>
<body>
    <div class="container"><br>
        <h1>Room manager</h1><br>
        <div><br>
            <a href='z_quarto.cad.php'><button class="botaoRegistro"><i class="fa-regular fa-circle-dot"></i>  Register room</button></a>
        </div><br>
        <table class="table">
            <tr class=titulos>
                <th>Room Number</th>
                <th>Type</th>
                <th>Status</th>
                <th>Beds</th>
                <th>Bathrooms</th>
                <th>Options</th>
            </tr>
            <?php
            foreach($quartos as $quarto){
                echo "<tr>";
                echo "<td>{$quarto->getNumero()}</td>";
                echo "<td>{$quarto->getTipo()}</td>";
                echo "<td>{$quarto->getEstado()}</td>";
                echo "<td>{$quarto->getCamas()}</td>";
                echo "<td>{$quarto->getBanheiros()}</td>";
                echo "<td>
                        <div>
                            <a href='z_quarto.editar.php?id={$quarto->getIdQuarto()}'><button class='botaoAcao'>Edit  <i class='fa-solid fa-pen-to-square'></i></button></a>
                            <a href='z_quarto.excluir.php?id={$quarto->getIdQuarto()}'><button class='botaoAcao'>Delete  <i class='fa-solid fa-trash'></i></button></a
                        </div>
                    </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>