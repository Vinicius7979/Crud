<?php
include 'conexao.php';
$id = $_POST['id'];
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$categoria = $_POST['categoria'];

$sql_img = "";
if (!empty($_FILES['imagem']['name'])) {
    $imagem = $_FILES['imagem']['name'];
    $caminho = 'imagem/' . $imagem;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
    $sql_img = ", imagem='$imagem'";
}

$sql = "UPDATE produtos SET produto='$produto', descricao='$descricao', preco='$preco', estoque='$estoque', categoria='$categoria' $sql_img WHERE id=$id";
if (mysqli_query($con, $sql)) {
    header('Location: index.php');
} else {
    echo "Erro: " . mysqli_error($con);
}
?>