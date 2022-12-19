<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $cliente = new Cliente($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['telefone']);
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
    <title>Adds Client</title>
</head>
<body>
    <article>
        <div class="telaLogin">
            <div class="titulo">
                <h1>Cliente register</h1>
            </div>
            <div class="divFormulario">
                <form class="formulario" action='y_cliente.cad.php' method='POST'>
                    <div>
                        <div class="campos">
                            <div>
                                <label for='nome'>Name:</label><br>
                                <input name='nome' id='nome' type='text' maxlength="11" required><br>
                            </div>
                            <div>
                                <label for='sobrenome'>Sobrenome:</label><br>
                                <input type='text' name='sobrenome' id='sobrenome' required><br>
                            </div>
                            <div>
                                <label for='cpf'>Cpf:</label><br>
                                <input type='text' name='cpf' id='cpf' maxlength="14" required><br>
                                <script src="./y_mask_cpf.js"></script>
                            </div>
                            <div>
                                <label for='telefone'>Fone:</label><br>
                                <input type='text' name='telefone' id='telefone'   required><br>
                            </div>
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

