<?php

////////// Tipos básicos
// Strings
$item = "Tesoura";
$site = 'www.google.com';

// Int
$ano = 1997;

// Float
$salario = 5500.99;

// Boolean
$ativo = true;

/////////// Tipos compostos
// Arrays
$frutas = ["abacaxi", "laranja", "manga"];
//$frutas = array("abacaxi", "laranja", "manga"); // versão alternativa

// DateTime
$nascimento = new DateTime();
//var_dump($nascimento);

// File
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);
