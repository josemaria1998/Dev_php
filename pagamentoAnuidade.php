<?php
include 'conexao.php';

if (isset($_POST['idAssociado']) && isset($_POST['idAnuidade'])) {
    $idAssociado = $_POST['idAssociado'];
    $idAnuidade = $_POST['idAnuidade'];

    $sql = "UPDATE pagamento SET pago = true WHERE idAssociado = :idAssociado AND idAnuidade = :idAnuidade";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idAssociado' => $idAssociado, 'idAnuidade' => $idAnuidade]);

    echo "Pagamento registrado com sucesso!";
}

$associado = $pdo->query("SELECT * FROM associado")->fetchAll();
?>

<form method="POST">
    <label>Associado:
        <select name="idAssociado">
            <?php foreach ($associado as $associado): ?>
                <option value="<?= $associado['id'] ?>"><?= $associado['nome'] ?></option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Anuidade:
        <select name="idAnuidade">
            <?php 
            $anuidade = $pdo->query("SELECT * FROM anuidades")->fetchAll();
            foreach ($anuidade as $anuidade): ?>
                <option value="<?= $anuidade['id'] ?>"><?= $anuidade['ano'] ?> - R$<?= $anuidade['valor'] ?></option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <button type="submit">Registrar Pagamento</button>
</form>
