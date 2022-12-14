<?php
session_start();
if(!isset($_SESSION['id_funcionario'])){
    header("location:index.php");
}
?>