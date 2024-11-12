<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $dataFiliacao = $_POST['dataFiliacao'];

    $sql = "INSERT INTO associado (nome, email, cpf, dataFiliacao) VALUES (:nome, :email, :cpf, :dataFiliacao)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'email' => $email, 'cpf' => $cpf, 'dataFiliacao' => $dataFiliacao]);
    
    echo "Associado cadastrado com sucesso!";
    $idNovoAssociado = $pdo->lastInsertId();
    echo "Novo associado cadastrado com o ID: " . $idNovoAssociado;

}
?>

<form method="POST">
    <label>Nome: <input type="text" name="nome" required></label><br>

    <label>Email: <input type="email" name="email" required></label><br>

    <label>CPF: <input type="text" name="cpf" required></label><br>

    <label>Data de Filiação: <input type="date" name="dataFiliacao" required></label><br>

    <button type="submit">Cadastrar</button>
</form>
