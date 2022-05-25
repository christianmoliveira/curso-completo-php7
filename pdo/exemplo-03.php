<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// Deletando dados no banco
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 4;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Usuário deletado";