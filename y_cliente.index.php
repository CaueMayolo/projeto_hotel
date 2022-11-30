<?php require_once __DIR__.'/x_navbar.php'; ?>

<?php
require_once __DIR__."/vendor/autoload.php";
$clientes = Cliente::findall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client manager</title>
</head>
<body>
    <div class="container"><br>
        <h1>Client manager</h1><br>
        <div><br>
            <a href='y_cliente.cad.php'><button class="btn btn-primary"><i class="fa-regular fa-circle-dot">  Register client</i></button></a>
        </div><br>
        <table class="table">
            <tr class=titulos>
                <th>Name</th>
                <th>Last name</th>
                <th>CPF</th>
                <th>Options</th>
            </tr>
            <?php
            foreach($clientes as $cliente){
                echo "<tr>";
                echo "<td>{$cliente->getNome()}</td>";
                echo "<td>{$cliente->getSobrenome()}</td>";
                echo "<td>{$cliente->getCpf()}</td>";
                echo "<td>
                        <div>
                            <a href='y_cliente.editar.php?id={$cliente->getIdCliente()}'><button class='btn btn-primary'>Edit  <i class='fa-solid fa-pen-to-square'></i></button></a>
                            <a href='y_cliente.excluir.php?id={$cliente ->getIdCliente()}'><button class='btn btn-primary'>Delete  <i class='fa-solid fa-trash'></i></button></a
                        </div>
                    </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    </div>
</body>
</html>