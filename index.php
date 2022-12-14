<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $u = new Funcionario($_POST['email'],$_POST['senha']);
    if($u->authenticate()){
        header("location: restrita.php");
    }else{
        header("location: index.php");
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.login.css">
    <script src="https://kit.fontawesome.com/ff4091c7e3.js" crossorigin="anonymous"></script>
    <title>User Login</title>
</head>
<body>
    <article>
        <div class="telaLogin">
            <div class="titulo">
                <h1>Pococupado's manager</h1>
            </div>
            <div class="divFormulario">
                <form class="formulario" action='index.php' method='post'>
                    <div>
                        <div class="tituloCad">
                            <h2>Sign in</h2>
                        </div>
                        <div class="subTituloCad">
                            <h3>Enter manager</h3>
                        </div>
                        <div class="campos">
                            <div>
                                <label for='email'>E-mail:</label><br>
                                <input type='email' name='email' id='email' maxlength='200' required><br>
                            </div>
                            <div>
                                <label for='senha'>Password:</label><br>
                                <input type='password' name='senha' id='senha' maxlength='200' required><br>
                            </div>
                        </div>
                        <div class='links'>  
                            <button class='botao-login' type='submit' name='botao'>Log in  <i class="fa-solid fa-right-to-bracket"></i></button>
                            <a class="link-cadastro" href='formFuncionario.php'>Register user</a>
                        </div>
                    </div>       
                </form>
            </div>
        </div>
    </article>
</body>
</html>