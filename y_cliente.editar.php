<?php
if(isset($_GET['id'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = Cliente::find($_GET['id']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = new Cliente($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['telefone']);
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
    <link rel="stylesheet" href="y_cliente.style.form.css">
    <title>Edit Client</title>
</head>
<body>
<article>
        <div class="telaLogin">
            <div class="titulo">
                <h1>Edit Client</h1>
            </div>
            <div class="divFormulario">
                <form class="formulario" action='y_cliente.editar.php' method='POST'>
                    <div>
                        <div class="campos">
                        <?php
                            echo    "<div>";
                            echo        "<label for='nome' >Name:</label><br>";
                            echo        "<input name='nome' id='nome' type='text' value='{$cliente->getNome()}' maxlength='200' required><br>";
                            echo    "</div>";
                            echo    "<div>";
                            echo        "<label for='sobrenome'>Last name:</label><br>";
                            echo        "<input type='text' name='sobrenome' id='sobrenome' value='{$cliente->getSobrenome()}' maxlength='200' required><br>";
                            echo    "</div>";
                            echo    "<div>";
                            echo        "<label for='cpf'>Cpf:</label><br>";
                            echo        "<input class='cpf' type='text' name='cpf' id='cpf' value='{$cliente->getCpf()}' pattern='[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}' placeholder='999.999.999-99' maxlength='14' readonly><br>";
                            echo    "</div>";
                            echo    "<div>";
                            echo        "<label for='telefone'>Phone:</label><br>";
                            echo        "<input type='tel' name='telefone' id='telefone' value='{$cliente->getTelefone()}' pattern='[0-9]{2} [0-9]{5}-[0-9]{4}' placeholder='11 99999-9999' maxlength='13' required";
                            echo    "</div>";
                            echo    "<input name='id' value='{$cliente->getIdCliente()}' type='hidden'>";
                        ?>
                        </div>
                        <div class='links'>  
                            <button class='botao-login' type='submit' name='botao'>Send  <i class="fa-solid fa-right-to-bracket"></i></button>
                            <a class="link-cadastro" href='y_cliente.index.php'>Client maneger</a>
                        </div>
                    </div>       
                </form>
            </div>
        </div>
    </article>
</body>
</html>