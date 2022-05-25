<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = [];

while($row = $result->fetch_assoc()) {
    $data = $row;
    var_dump($row);
}

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
//
//$login = "user";
//$pass = "12345";
//
//$stmt->bind_param("ss", $login, $pass);

// $stmt->execute();