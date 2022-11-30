
<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $u = new Funcionario($_POST['email'],$_POST['senha']);
    $u->save();
    header("location: index.php");
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
    <title>Register employee</title>
</head>
<body>
    <div>
        <h1>Pococupado's manager</h1>
    </div>
    <form class="form" action='formFuncionario.php' method='post'>
        <div class="card">
            <div class="card-top">
                <h2 class="titulo">Sign up</h2>
                <br>
                <p class="desc">Register employee</p>
            </div>
            <br>
            <div class="card-group">
                <label for='email'>E-mail:</label>
                <input type='email' name='email' id='email' required>
            </div>
            <div class="card-group">
                <label for='senha'>Password:</label>
                <input type='password' name='senha' id='senha' required>
            </div>
            <div class="div-botao-login">
                <button class="botao-login" type='submit' name='botao'>Register  <i class="fa-solid fa-plus"></i></button>
            </div>
            <a class="link-cadastro" href='index.php'>Return to login </a>
        </div>
    </form>
</body>
</html>
