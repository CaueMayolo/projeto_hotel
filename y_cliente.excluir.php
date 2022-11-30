<?php
require_once __DIR__."/vendor/autoload.php";
$cliente = Cliente::find($_GET['id']);
$cliente->delete();
header("location:y_cliente.index.php");