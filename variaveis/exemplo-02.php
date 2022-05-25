<?php

$anoNascimento = 1997; // int
$nomeCompleto = ""; // string

$nome = "John";
$sobrenome = "Newmann";

// Concatenação de variáveis
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto . "<br />";

// Destrói uma variável | Apaga da memória
unset($nome);

// Verifica se uma variável está definida
if (isset($nome))
    echo $nome . "<br />";