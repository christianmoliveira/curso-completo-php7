<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// Alterando dados no banco
$stmt = $conn->prepare("UPDATE tb_usuarios SET (deslogin = :LOGIN, dessenha = :PASSWORD) WHERE idusuario = :ID");

$login = "Christian";
$pass = "qwerty";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Usuário alterado";