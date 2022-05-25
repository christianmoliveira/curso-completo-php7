<?php

// Função anônima ou closure
$greet = function($name)
{
    echo "Hello {$name}<br/>";
};

$greet("World");

// Herdando variáveis do escopo anterior
$message = "Hello";

$example = function() use ($message) // Herda $message
{
    var_dump($message);
};
$example();