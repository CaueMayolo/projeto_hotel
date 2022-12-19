<?php
if(isset($_GET['id'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = Quarto::find($_GET['id']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $quarto = new Quarto($_POST['numero'],$_POST['tipo'],$_POST['estado'],$_POST['banheiros'],$_POST['camas']);
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
    <link rel="stylesheet" href="z_quarto.style.form.css">
    <title>Edit room</title>
</head>
<body>
<article>
        <div class="telaLogin">
            <div class="titulo">
                <h1>Edit room</h1>
            </div>
            <div class="divFormulario">
                <form class="formulario" action='z_quarto.editar.php' method='POST'>
                    <div>
                        <div class="campos">
                            <?php
                                echo "<div>";
                                echo "<label for='numero'>Room number:</label><br>";
                                echo "<input class='numero' name='numero' type='number' min='100' max='999' value='{$quarto->getNumero()}' readonly>";
                                echo "<div>";
                                echo "</div>";
                                echo "<label for='tipo'>Type:</label><br>";
                                echo "<select name='tipo' id='tipo'>";
                                echo     "<option value='Suite'>Suite</option>";
                                echo     "<option value='Common'>Common</option>";
                                echo "</select><br>";
                                echo "<div>";
                                echo "</div>";
                                echo "<label for='estado'>Status:</label>";
                                echo "<select name='estado' id='estado' value='{$quarto->getEstado()}'>";
                                echo    "<option value='Empty'>Empty</option>";
                                echo    "<option value='Occupied'>Occupied</option>";
                                echo "</select>";
                                echo "<div>";
                                echo "</div>";
                                echo "<label for='banheiros'>Bathrooms:</label>";
                                echo "<select name='banheiros' id='banheiros'>";
                                echo    "<option value='1 - With bathtub'>1 - with bathtub</option>";
                                echo    "<option value='1 - Without bathtub'>1 - without bathtub</option>";
                                echo    "<option value='2 - One with bathtub'>2 - one with bathtub</option>";
                                echo "</select>";
                                echo "<div>";
                                echo "</div>";
                                echo "<label for='camas'>Beds:</label>";
                                echo "<select name='camas' id='camas'>";
                                echo     "<option value='1 - Single'>1 - Single</option>";
                                echo     "<option value='1 - Oouple'>1 - Couple </option>";
                                echo     "<option value='2 - Couple and single'>2 - Couple and single</option>";
                                echo "</select>";
                                echo "<div>";
                                echo "</div>";
                                echo "<input name='id' value='{$quarto->getIdQuarto()}' type='hidden'>";
                            ?>
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

