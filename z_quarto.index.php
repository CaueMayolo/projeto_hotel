<?php require_once __DIR__.'/x_navbar.php'; ?>

<?php
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
    <link rel="stylesheet" href="z_quarto.style.scss">
    <title>Room manager</title>
</head>
<body>
    <div class="container">
        <h1>Room manager</h1><br>
        <div><br>
            <a href='z_quarto.cad.php'><button class="btn btn-primary"><i class="fa-regular fa-circle-dot">  Register room</i></button></a>
        </div><br>
        <table class="table">
            <tr class=titulos>
                <th>Número</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Opções</th>
            </tr>
            <?php
            foreach($quartos as $quarto){
                echo "<tr>";
                echo "<td>{$quarto->getNumero()}</td>";
                echo "<td>{$quarto->getTipo()}</td>";
                echo "<td>{$quarto->getEstado()}</td>";
                echo "<td>
                        <div>
                            <a href='z_quarto.editar.php?id={$quarto->getIdQuarto()}'><button class='btn btn-primary'>Edit  <i class='fa-solid fa-pen-to-square'></i></button></a>
                            <a href='z_quarto.excluir.php?id={$quarto->getIdQuarto()}'><button class='btn btn-primary'>Delete  <i class='fa-solid fa-trash'></i></button></a
                        </div>
                    </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>