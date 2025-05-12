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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow" style="width: 400px;">
        <div class="card-header bg-warning text-white text-center">
            <h3>Edição de Produtos</h3>
        </div>
        <div class="card-body">
            <form action="editar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <div class="mb-3">
                    <label for="produto" class="form-label">Nome do Produto:</label>
                    <input type="text" id="produto" name="produto" class="form-control" value="<?= $row['produto'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea id="descricao" name="descricao" class="form-control"><?= $row['descricao'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço:</label>
                    <input type="number" id="preco" name="preco" step="0.01" class="form-control" value="<?= $row['preco'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="estoque" class="form-label">Quantidade em estoque:</label>
                    <input type="number" id="estoque" name="estoque" class="form-control" value="<?= $row['estoque'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria:</label>
                    <select id="categoria" name="categoria" class="form-select" required>
                        <option value="">Selecione</option>
                        <option <?= ($row['categoria'] == 'Eletrônicos') ? 'selected' : '' ?>>Eletrônicos</option>
                        <option <?= ($row['categoria'] == 'Roupas') ? 'selected' : '' ?>>Roupas</option>
                        <option <?= ($row['categoria'] == 'Alimentos') ? 'selected' : '' ?>>Alimentos</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-warning">Salvar</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
