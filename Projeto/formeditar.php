<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>

<div class="container-formulario">
    <h3>Edição de Produtos</h3>

    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Nome do Produto:</label>
        <input type="text" name="produto" value="<?= $row['produto'] ?>" required>

        <label>Descrição:</label>
        <textarea name="descricao"><?= $row['descricao'] ?></textarea>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" value="<?= $row['preco'] ?>" required>

        <label>Quantidade em estoque:</label>
        <input type="number" name="estoque" value="<?= $row['estoque'] ?>" required>

        <label>Categoria:</label>
        <select name="categoria" required>
            <option value="">Selecione</option>
            <option <?= ($row['categoria'] == 'Eletrônicos') ? 'selected' : '' ?>>Eletrônicos</option>
            <option <?= ($row['categoria'] == 'Roupas') ? 'selected' : '' ?>>Roupas</option>
            <option <?= ($row['categoria'] == 'Alimentos') ? 'selected' : '' ?>>Alimentos</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
</div>

</body>
</html>
