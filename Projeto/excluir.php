<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id=$id";
if (mysqli_query($con, $sql)) {
    header('Location: index.php');
} else {
    echo "Erro: " . mysqli_error($con);
}
?>