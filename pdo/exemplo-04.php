<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// Alterando dados no banco
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $id = 3;

    $stmt->execute([$id]);

    $conn->commit(); // Confirma o delete
} catch(Exception $e) {
    $conn->rollBack(); // Desfaz o delete
    echo "Erro: " . $e->getMessage();
}

echo "Usuário alterado";