<?php

//phpinfo();

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// Inserindo dados no banco
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Christian";
$pass = "12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

echo "Usuário inserido";

//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//foreach($results as $row) {
//    foreach($row as $key => $value) {
//        echo "<strong>" . $key . ":</strong>" . $value . "<br />";
//    }
//    echo "======================================================";
//}

//var_dump($results);