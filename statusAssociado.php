<?php
include 'conexao.php';

$associadoEmDia = $pdo->query("
    SELECT a.nome FROM associado a
    WHERE NOT EXISTS (
        SELECT 1 FROM pagamentos p WHERE p.associado_id = a.id AND p.pago = false
    )
")->fetchAll();

$associadoEmAtraso = $pdo->query("
    SELECT DISTINCT a.nome FROM associado a
    JOIN pagamento p ON p.associado_id = a.id
    WHERE p.pago = false
")->fetchAll();
?>

<h2>Associados em Dia</h2>
<ul>
    <?php foreach ($associadoEmDia as $associado): ?>
        <li><?= $associado['nome'] ?></li>
    <?php endforeach; ?>
</ul>

<h2>Associados em Atraso</h2>
<ul>
    <?php foreach ($associadosEmAtraso as $associado): ?>
        <li><?= $associado['nome'] ?></li>
    <?php endforeach; ?>
</ul>
