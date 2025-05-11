<?php
include 'conexao.php';
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$categoria = $_POST['categoria'];
$imagem = $_FILES['imagem']['name'];
$caminho = 'imagem/' . $imagem;
move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
$sql = "INSERT INTO produtos (produto, descricao, preco, estoque, categoria, imagem) 
VALUES ('$produto', '$descricao', '$preco', '$estoque', '$categoria', '$imagem')";
if (mysqli_query($con, $sql)) {
    header('Location: index.php');
} else {
    echo "Erro: " . mysqli_error($con);
}
?>