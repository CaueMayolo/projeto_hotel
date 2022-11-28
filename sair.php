<?php
require_once __DIR__.'/x_navbar.php';
session_start();
session_destroy();
header("location:index.php");
?>