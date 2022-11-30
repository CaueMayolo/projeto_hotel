<?php
require_once __DIR__."/vendor/autoload.php";
$quarto = Quarto::find($_GET['id']);
$quarto->delete();
header("location:z_quarto.index.php");