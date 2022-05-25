<?php

// __autoload está defasado. Este é o método recomendado para novas versões
function my_autoload ($pClassName) {
    if (file_exists($pClassName . ".php") === true)
    {
        require_once(__DIR__ . DIRECTORY_SEPARATOR . $pClassName . ".php");
    }
}
spl_autoload_register('my_autoload');

// Carregando arquivo Automovel dentro da pasta abstratas
spl_autoload_register(function ($nomeClasse) {
    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true)
    {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);