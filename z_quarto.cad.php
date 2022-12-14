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
    <title>Adds Room</title>
</head>
<body>
    <article>
        <div class="divFormulario">
            <div class="titulo">
                <h1>Room Register</h1>
            </div>
            <div class="formulario" action='index.php' method='post'>
                <form action='z_quarto.cad.php' method='POST'>
                    <div class="campos">
                        <div>
                            <label for="numero">Room Number:</label><br>
                            <input name='numero' type='text' required>
                        </div>
                        <div>
                            <label for="tipo">Type:</label>
                            <select name="tipo" id="tipo">
                                <option value="suite">Suite</option>
                                <option value="normal">Common</option>
                            </select>
                        </div>
                        <div>
                            <label for="estado">Status:</label>
                            <select name="estado" id="estado">
                                <option value="vago">Empty</option>
                                <option value="ocupado">Occupied</option>
                            </select>
                        </div>
                        <div>
                            <label for="banheiros">Bathrooms:</label>
                            <select name="banheiros" id="banheiros">
                                <option value="1 - with bathtub">1 - with bathtub</option>
                                <option value="1 - without bathtub">1 - without bathtub</option>
                                <option value="2 - one with bathtub">2 - one with bathtub</option>
                            </select>
                        </div>
                        <div>
                            <label for="camas">Beds:</label>
                            <select name="camas" id="camas">
                                <option value="1 - single">1 - single</option>
                                <option value="1 - couple">1 - couple </option>
                                <option value="2 - couple and single">2 - couple and single</option>
                            </select>
                        </div>
                        <button name='botao'>Send</button>
                    </div>
                </form>
            </div>
        </div>
    </article>
</body>
</html>

