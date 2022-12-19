<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = new Quarto($_POST['numero'],$_POST['tipo'],$_POST['estado'],$_POST['banheiros'],$_POST['camas']);
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
    <link rel="stylesheet" href="z_quarto.style.form.css">
    <title>Adds Room</title>
</head>
<body>
    <article>
        <div class="telaLogin">
            <div class="titulo">
                <h1>Room Register</h1>
            </div>
            <div class="divFormulario">
                <form class="formulario" action='z_quarto.cad.php' method='POST'>
                    <div>
                        <div class="campos">
                        <div>
                            <label for="numero">Room Number:</label><br>
                            <input name='numero' type='number' min="100" max="999" required><br>
                        </div>
                        <div>
                            <label for="tipo">Type:</label><br>
                            <select name="tipo" id="tipo">
                                <option value="Suite">Suite</option>
                                <option value="Common">Common</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="estado">Status:</label><br>
                            <select name="estado" id="estado">
                                <option value="Empty">Empty</option>
                                <option value="Occupied">Occupied</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="banheiros">Bathrooms:</label><br>
                            <select name="banheiros" id="banheiros">
                                <option value="1 - With bathtub">1 - With bathtub</option>
                                <option value="1 - Without bathtub">1 - Without bathtub</option>
                                <option value="2 - One with bathtub">2 - One with bathtub</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="camas">Beds:</label><br>
                            <select name="camas" id="camas">
                                <option value="1 - Single">1 - Single</option>
                                <option value="1 - Couple">1 - Couple </option>
                                <option value="2 - Couple and single">2 - Couple and single</option>
                            </select><br>
                        </div>
                        </div>
                        <div class='links'>  
                            <button class='botao-login' type='submit' name='botao'>Send  <i class="fa-solid fa-right-to-bracket"></i></button>
                            <a class="link-cadastro" href='z_quarto.index.php'>Room maneger</a>
                        </div>
                    </div>       
                </form>
            </div>
        </div>
    </article>
</body>
</html>


