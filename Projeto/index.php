<?php
include 'conexao.php';
$result = mysqli_query($con, "SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="container mt-4">
    <div class="header bg-dark text-white p-3 rounded mb-4 text-center shadow">Lista de Produtos</div>

    <div class="lista-produtos">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Produtos Cadastrados</h5>
            <a href="formcadastrar.php" class="btn btn-success btn-lg shadow">Adicionar Produto</a>
        </div>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary text-center fw-bold"><?= htmlspecialchars($row['produto']) ?></h5>
                            <p class="card-text text-muted text-center"><?= htmlspecialchars($row['descricao']) ?></p>
                            <p class="card-text">
                                <b>Preço:</b> R$ <?= number_format($row['preco'], 2, ',', '.') ?><br>
                                <b>Estoque:</b> <?= $row['estoque'] ?><br>
                                <b>Categoria:</b> <?= htmlspecialchars($row['categoria']) ?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="formeditar.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
