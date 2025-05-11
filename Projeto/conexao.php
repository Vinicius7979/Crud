<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "ecommerce";
$con = mysqli_connect($host, $user, $senha, $banco);
if (!$con) { die("Falha na conexão: " . mysqli_connect_error()); }
?>