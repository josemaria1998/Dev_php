<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO anuidade (ano, valor) VALUES (:ano, :valor)
            ON DUPLICATE KEY UPDATE valor = :valor";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['ano' => $ano, 'valor' => $valor]);

    echo "Anuidade cadastrada/atualizada com sucesso!";
}
?>

<form method="POST">
    <label>Ano: <input type="number" name="ano" required></label><br>
    <label>Valor: <input type="number" step="0.01" name="valor" required></label><br>
    <button type="submit">Cadastrar/Atualizar</button>
</form>
